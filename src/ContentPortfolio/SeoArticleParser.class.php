<?php

namespace ContentPortfolio;

class SeoArticleParser extends Parser{
    public $Url;
    public function bool_isThisUrlMyTypeOfContent(){}
    public function parseUrl(){
        $Url = $this->Url;
        $cUrlProcessor = new cUrlProcessor;
        $cUrlProcessor->url = $Url;
        $title = $cUrlProcessor->title;
        $siteName = $cUrlProcessor->siteName;
        $CptProcssor = new CptProcessor;
        $content = "This is an SEO article written by Asia Mayfield from <a href = 'https://generalchicken.net' target = '_blank'>generalchicken.net</a>.";
    
        $args = array(
            'post_title'    => $title,
            'post_status'   => 'draft',
            'post_type'     => 'external-content',
            'post_content'  => $content,
        );
        $ID = wp_insert_post( $args );
 
        add_post_meta($ID, "remoteUrl", $url);
        add_post_meta($ID, "siteName", $siteName);
        $gotoUrl = get_site_url() . "/wp-admin/post.php?post=" . $ID . "&action=edit&classic-editor&external-content=publish";
        wp_redirect($gotoUrl);
        exit;
    }
}
