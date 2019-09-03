<?php

namespace ExternalContentPortfolio;

class Rescanner{
    
    public function rescanContent(){
        $ID = $this->getIDofLocalPostThatNeedsProcessing();
        if($ID == FALSE){
            return FALSE;
        }


        /*
         *
         * should have base URL
         * should have remote post ID
         *
         * fetch wp api posts
         * includes full text
         * includes excertp
         * includes featured image
         * fetch featured image
         */


        $remotePostID = "14985";

        if($ID == FALSE){return;}
        $remoteUrl = get_post_meta($ID, "remoteUrl", true);

        $slug = basename ( $remoteUrl);

        $fetchString = $remoteUrl . "/wp-json/wp/v2/posts?slug=" . $slug;
        var_dump($fetchString);die();
    }

    public function getIDofLocalPostThatNeedsProcessing(){
        $args = array(
            'posts_per_page'    => 1,
            'post_type'         => 'external-content',
            'tag'               => "external-content-processing"
        );
        $ID = FALSE;
        $the_query = new \WP_Query( $args );        
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $ID = get_the_ID();
        }
        return $ID;
    }

}
