<?php

namespace ContentPortfolio;

class CptProcessor{
    
    public function updateContentofCpt($ID){
        $content = $this->baseContent;
        $siteName = get_post_meta( $ID, 'siteName', true);
        if(!($siteName == "Unknown")){
            $Url = get_post_meta( $ID, 'remoteUrl', true);
            $content = "This is an SEO article written by Asia Mayfield from <a href = 'https://generalchicken.net' target = '_blank'>generalchicken.net</a>&nbsp;. Please note, these are comercial SEO articles - the sites have the right to change the author tag on their sites.<br />Original content on <a href = '$Url' target = '_blank'>$siteName</a>.";
            $my_post = array(
                'ID'           => $ID,
                'post_content' => $content,
            );
            wp_update_post( $my_post );
        }
    }
}