<?php

namespace ContentPortfolio;

class Rescanner{
    
    public function rescanContent(){
        $args = array(
            'posts_per_page'   => -1,
            'post_type'        => 'external-content',
        );
        $the_query = new \WP_Query( $args );        
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $ID = get_the_ID();
            $CptProcessor = new CptProcessor;
            $CptProcessor->updateContentofCpt($ID);
            //var_dump($ID);
            //die($ID);
        }
    }
    
}
