<?php

namespace Gatestone;

class SinglePostProcessor{

    public function cUrlFromID($post_id){
        global $post;
        $post = get_post($post_id);
        $slug = $post->post_name;
        $slug = "$post_id/$slug";
        //die("HEllo!!! $slug");
        $CurlFetcher = new CurlFetcher();
        $response = $CurlFetcher->fetchRemoteCurl("https://www.gatestoneinstitute.org/$slug");
        $content = $this->parseContent($response);
        $my_post = array(
            'ID'           => $post_id,
            'post_content' => $content
        );
        wp_update_post( $my_post );



        $response = htmlspecialchars($response);
        update_post_meta( $post_id, "cUrlResponse", $response);

    }

    public function getAuthorUrl($response){
        //example cUrl: https://www.gatestoneinstitute.org/14785/boko-haram-bloody-terror
        //expeected response: "https://www.gatestoneinstitute.org/author/Uzay+Bulut"
        //todo
        //it should find the first full https: BEFORE <span itemprop="author">

        $authorUrl = "TO DO!";
        return $authorUrl;
    }

public function parseContent($postCUrlResponse){

    $pos = strpos($postCUrlResponse, '<div id="print_content_3"');
    $topCutOff =substr($postCUrlResponse,$pos);
    $bottomCutOff = strstr($topCutOff, '<div class="subscribe-title">', true);
    return $bottomCutOff;
}

public function parseDateAndTime($postCUrlResponse = null){
    
}

public function parseSidebarAd($postCUrlResponse = null){}

}

