<?php

namespace ContentPortfolio;

class SeoArticleParser extends Parser{
    public $Url;

    public function processCPT($ID){
        $Url = get_post_meta($ID, "remoteUrl", TRUE);
        $cUrlProcessor = new cUrlProcessor;
        $cUrlProcessor->url = $Url;
        $title = $cUrlProcessor->title;
        $siteName = $cUrlProcessor->siteName;
        $CptProcssor = new CptProcessor;
        $content = "This is an SEO article written by Asia Mayfield from <a href = 'https://generalchicken.net' target = '_blank'>generalchicken.net</a>.";
    
        $args = array(
            'ID'       => $ID,
            'post_title'    => $title,
            'post_status'   => 'draft',
            'post_type'     => 'external-content',
            'post_content'  => $content,
        );
        $ID = wp_update_post( $args );
 
        update_post_meta($ID, "remoteUrl", $Url);
        update_post_meta($ID, "siteName", $siteName);
        $gotoUrl = get_site_url() . "/wp-admin/post.php?post=" . $ID . "&action=edit&classic-editor&external-content=publish";
        //die($gotoUrl);
        
        wp_redirect($gotoUrl);
        exit;
    }
}