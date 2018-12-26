<?php

namespace ContentPortfolio;

class CptSubmissionListener{
    
    public function listenForFormSubmission(){
        if (isset($_POST['add-this-url'])){
            $this->processFormSubission($_POST['add-this-url']);
        }
        if (isset($_GET['external-content'])){
            //$this->openNewTabs();
            add_action('admin_footer', array($this, "openNewTabs"));
        }
    }
    
    public function openNewTabs(){
        $ID = $_GET['post'];
        $remoteUrl = get_post_meta($ID,"remoteUrl", true );
        
        $output = <<<output
<script>
jQuery(document).ready(function(){
        window.open('/wp-admin/upload.php?page=lh-add-media-from-url.php','_blank');
        window.open('$remoteUrl','_blank');
});
</script>
output;
        
        echo($output);
    }
    
    public function processFormSubission($url){
        $cUrlProcessor = new cUrlProcessor;
        $cUrlProcessor->url = $url;
        //$cUrlProcessor->lookForTitleInRemoteGetFetch();
        $title = $cUrlProcessor->title;
        $siteName = $cUrlProcessor->siteName;
        $content = "This is an SEO article written by Asia Mayfield from <a href = 'https://generalchicken.net' target = '_blank'>generalchicken.net</a>&nbsp;. <br />Original content on <a href = '$Url' target = '_blank'>$siteName</a>.";
        
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