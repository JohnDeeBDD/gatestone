<?php

namespace Gatestone;

class SinglePostProcessor{

    /**
     * @param $post_id
     */
    public function cUrlFromID($post_id){
        //wp_create_user( "jim", "jimasdfa", "jim@jim.com" );
        global $post;
        $post = get_post($post_id);
        //die($post_id);
        $slug = $post->post_name;
        $slug = "$post_id/$slug";
        $CurlFetcher = new CurlFetcher();
        $Url = $CurlFetcher->getGateStoneUrlFromCurrentSite();
        $response = $CurlFetcher->fetchRemoteCurl("$Url/$slug");
        $authorID = $this->processForAuthor($response);

        if($authorID == FALSE){
            $authorID = 91;
        }

        $content = $this->parseForContent($response);

        $my_post = array(
            'ID'           => $post_id,
            'post_content' => $content,
            'post_author'   => $authorID
        );
        wp_update_post( $my_post );

        $response = htmlspecialchars($response);
        update_post_meta( $post_id, 'cUrlResponse', $response);
        update_post_meta( $post_id, 'authorString', $authorID);

    }

    public function processForAuthor($response){
        file_put_contents('/var/www/html/wp-content/plugins/gatestone/temp.html', $response);
        $tags = get_meta_tags ('/var/www/html/wp-content/plugins/gatestone/temp.html');
        //var_dump($tags);die();
        if(isset($tags['author'])){
            $authorString = $tags['author'];
            $RemoteAuthor = new RemoteAuthor;
            // $siteURL = site_Url();
            $authorID = $RemoteAuthor->returnAuthorID($authorString);
            return $authorID;
        }

        return false;
    }
    /**
     * @param string $keyword
     * @param array $arr
     * @return bool|int|string
     */
    private function array_search_partial(string $keyword,array $arr) {
        foreach($arr as $index => $string) {
            if ( strpos($string, $keyword) !== false ) {
                return $index;
            }
        }
        return false;
    }

    /**
     * @param $response
     * @return string
     */
    public function getAuthorUrl($response):string{

        $DomainContentInArray = explode("\n", $response);

        $LineWithAuthorLink = $this->array_search_partial('<span itemprop="author">', $DomainContentInArray);

        $LineWithAuthorLinkInArray = explode('"', $DomainContentInArray[ $LineWithAuthorLink ]);

        $HttpsValueKey  = $this->array_search_partial('https', $LineWithAuthorLinkInArray);

        return $LineWithAuthorLinkInArray[ $HttpsValueKey ];
    }

    /**
     * @param $postCUrlResponse
     * @return string
     */
    public function parseForContent($postCUrlResponse){
        $pos = strpos($postCUrlResponse, '<!-- PLAINTEXT STRIP END -->');
        $topCutOff =substr($postCUrlResponse,$pos);
        return strstr($topCutOff, '<div class="subscribe-title">', true); // YOU DO NOT NEED THIS LINE. JUST RETURN LINE BEFORE THIS ONE!

    }

    //these "cUrl responses" are text responses from an HTTP get of the site. They may come from either a live
    //curl, or from the responses stored in the database for each post. We are keeping the original HTML for each post
    //stored as post meta data in the post. This is so we can go back and look at it later if there is a mistake, or re-scan
    //the site if nessicary.
    //example: https://www.gatestoneinstitute.org/3561/europe-hijab
    //iu also stored as stub-1.html in the tests/unit directory
    public function parseDateAndTime($postCUrlResponse = null){
        preg_match('|<time class="nocontent" datetime="([0-9\-]{10}T[0-9:]{8})" itemprop="datePublished"|', $postCUrlResponse,$matches);
        if ($matches){
            return $matches[1];
        }
        return false;
    }

    /**
     * @param $postCUrlResponse
     */
    public function parseTopics($postCUrlResponse = null){
        preg_match('|<span[^>]*><b>Related Topics:<\\/b>(.*)<\\/span>|',$postCUrlResponse,$matches);
        if (!$matches){
            return false;
        }
        preg_match_all('|<a href="([^"]*)">(.*)<\\/a>|',$matches[1],$rawLinks);
        if (!$rawLinks){
            return false;
        }
        $data=array();
        $x=count($rawLinks[0]);
        for($i=0;$i<$x;$i++){
            $data[]=array('url'=>$rawLinks[1][$i],'title'=>$rawLinks[2][$i]);
        }
        return $data;
    }


    /**
     * @param $postCUrlResponse
     */
    public function parseSidebarAd($postCUrlResponse = null){
        $dp1=explode('<td id="sidebar"',$postCUrlResponse);
        if (count($dp1)!=2){
            echo 'not found sidebar';
            return false;
        }

        preg_match('|(<div style="[^"]*">[\\n\\r]*<a href="[^"]*"[^>]*>[\\n\\r]*<div[^>]*><b style="color.*B60505;">([^<\\/b>]*)<\\/b><\\/div>[\\n\\r]*)<div[^>]*>([\\n\\r]*.*)*|', $dp1[1],$matches);

        if ($matches){
            $data=array('title'=>$matches[2],'content'=>'','image'=>'');

            $dp2=explode($matches[1],$matches[0]);
            if (count($dp2)==2){
                preg_match('|<div style="[^"]*">(.*[\\n\\r]*)<\\/div>|', $dp2[1],$matches);
                if ($matches){
                    $data['content']=$matches[1];
                    preg_match('|<img src="([^"]*)"|',substr($dp2[1],strlen($matches[0])),$matches);
                    if ($matches){
                        $data['image']=$matches[1];
                    }
                    return $data;
                }

                return false;
            }
            return $data;
        }
        return false;
    }

    public function parserForComments($postCUrlResponse = null){
        preg_match_all('|<div id="comment_([0-9]*)" class="comment_item">[\\n\\r]*<div[^>]*><b[^>]*>(.*)<\\/b>[^<]*<span[^>]*>(.*)<\\/span><\\/div>[\\n\\r]*<div[^>]*>(.*)<\\/div>|',$postCUrlResponse,$matches);
        if (!$matches){
            return false;
        }
        $data=array();
        $x=count($matches[0]);
        for($i=0;$i<$x;$i++){
            $data[]=array('id'=>$matches[1][$i],'name'=>$matches[2][$i],'date'=>$matches[3][$i],'body'=>$matches[4][$i]);
        }
        return $data;
    }
}
