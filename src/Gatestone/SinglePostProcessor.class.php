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
        $response = $CurlFetcher->fetchRemoteCurl("https://www.gatestoneinstitute.org/$slug");

        $authorID = $this->processForAuthor($response);
        if($authorID == FALSE){
            die("there is a problem singlepostprocessor 21");
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
        if(isset($tags['author'])){
            $authorString = $tags['author'];
            $RemoteAuthor = new RemoteAuthor;
            $authorID = $RemoteAuthor->returnAuthorID($authorString);
            return $authorID;
        }else {
            return FASLE;
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
        $pos = strpos($postCUrlResponse, '<div id="print_content_3"');
        $topCutOff =substr($postCUrlResponse,$pos);
        $bottomCutOff = strstr($topCutOff, '<div class="subscribe-title">', true);
        return $bottomCutOff; // YOU DO NOT NEED THIS LINE. JUST RETURN LINE BEFORE THIS ONE!

    }
    public function parseDateAndTime($postCUrlResponse = null){

    }
    public function parseSidebarAd($postCUrlResponse = null){}
}
