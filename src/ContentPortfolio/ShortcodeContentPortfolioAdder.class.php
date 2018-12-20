<?php

namespace ContentPortfolio;

class ShortcodeContentPortfolioAdder{
    
    public function returnForm(){
        
        $output = <<<output
<form method = "post">
Enter URL:<br />
<input type = "text" name = "add-this-url" /><br />
<input type = "submit" />
</form>
output;
        
        return $output;
        
    }
    
    public function listenForFormSubmission(){
        if (isset($_POST['add-this-url'])){
            $Url = $_POST['add-this-url'];
            $Converter = new UrlToTitleConverter;
            $Converter->url = $Url;
            //$Converter->lookForTitleInRemoteGetFetch();
            $title = $Converter->title;
            $siteName = $Converter->siteName;
            $content = "This is an SEO article written by Asia Mayfield from <a href = 'https://generalchicken.ner' target = '_blank'>generalchicken.net</a>&nbsp;. <br />Original content on <a href = '$Url' target = '_blank'>$siteName</a>.";
           
            $args = array(
                'post_title'    => $title,
                'post_status'   => 'publish',
                'post_type'     => 'external-content',
                'post_content'  => $content,
            );
            $ID = wp_insert_post( $args );
            add_post_meta($ID, "remoteUrl", $Url);
            add_post_meta($ID, "siteName", $siteName);
            $gotoUrl = get_site_url() . "/wp-admin/post.php?post=" . $ID . "&action=edit&classic-editor";
            wp_redirect($gotoUrl);
            exit;
        }
    }
           
    public function stripSiteNameFromTitle($title){
            
    }
        
        
        
        
        
 
}