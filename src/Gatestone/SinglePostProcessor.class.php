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
        $slug = $post->post_name;
        $slug = "$post_id/$slug";
        $CurlFetcher = new CurlFetcher();
        $Url = $CurlFetcher->getGateStoneUrlFromCurrentSite();
        $response = $CurlFetcher->fetchRemoteCurl("$Url/$slug");
        $authorID = $this->processForAuthor($response);

        if($authorID == FALSE){
            die("there is a problem singlepostprocessor ");
        }

        $content = $this->parseForContent($response);

        $my_post = array(
            'ID'           => $post_id,
            'post_content' => $content,
            'post_author'   => $authorID
        );
        wp_update_post( $my_post );

        $response = htmlspecialchars($response);
        update_post_meta( $post_id, "cUrlResponse", $response);
        update_post_meta( $post_id, "authorString", $authorID);

    }

    public function processForAuthor($response){
        file_put_contents("/var/www/html/wp-content/plugins/gatestone/temp.html", $response);
        $tags = get_meta_tags ("/var/www/html/wp-content/plugins/gatestone/temp.html");
        //var_dump($tags);die();
        if(isset($tags['author'])){
            $authorString = $tags['author'];
            $RemoteAuthor = new RemoteAuthor;
           // $siteURL = site_Url();
            $authorID = $RemoteAuthor->returnAuthorID($authorString);
            return $authorID;
        }else {
            return FALSE;
        }
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
        $bottomCutOff = strstr($topCutOff, '<div class="subscribe-title">', true);
        return $bottomCutOff; // YOU DO NOT NEED THIS LINE. JUST RETURN LINE BEFORE THIS ONE!

    }

    //these "cUrl responses" are text responses from an HTTP get of the site. They may come from either a live
    //curl, or from the responses stored in the database for each post. We are keeping the original HTML for each post
    //stored as post meta data in the post. This is so we can go back and look at it later if there is a mistake, or re-scan
    //the site if nessicary.
    //example: https://www.gatestoneinstitute.org/3561/europe-hijab
    //iu also stored as stub-1.html in the tests/unit directory
    public function parseDateAndTime($postCUrlResponse = null){}

    /**
     * @param $postCUrlResponse
     * @return array
     */
    public function parseTopics($postCUrlResponse = null){
    }

    /**
     * @param $postCUrlResponse
     * @return array['title'] ['content']
     */
    public function parseSidebarAd($postCUrlResponse = null){}
    public function parserForComments($postCUrlResponse = null){}
}
