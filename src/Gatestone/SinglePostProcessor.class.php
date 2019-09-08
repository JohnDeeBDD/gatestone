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


public function parseContent($postCUrlResponse){

    $pos = strpos($postCUrlResponse, '<div id="print_content_3"');
    $topCutOff =substr($postCUrlResponse,$pos);
    $bottomCutOff = strstr($topCutOff, '<p style="text-align:center; border-top:1px dotted gray; padding-top:15px; font-size:90%;"><i>&copy; 2019 Gatestone Institute.', true);
    return $bottomCutOff;
}

public function parseDateAndTime($postCUrlResponse = null){
    
}

public function parseSidebarAd($postCUrlResponse = null){}

}

