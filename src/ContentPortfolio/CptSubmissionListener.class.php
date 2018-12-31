<?php

namespace ContentPortfolio;

class CptSubmissionListener{
    
    public function listenForFormSubmission(){
        if (isset($_POST['add-this-url'])){
            $this->processFormSubission($_POST['add-this-url']);
        }
        if (isset($_GET['external-content'])){
            add_action('admin_footer', array($this, "openNewTabs"));
        }
        if(isset($_GET['external-content-rescan'])){
            $Rescanner = new Rescanner;
            $Rescanner->rescanContent();
        }
    }
    
    public function openNewTabs(){
        $ID = $_GET['post'];
        $remoteUrl = get_post_meta($ID,"remoteUrl", true );
        
        $output = <<<output
<script>
jQuery(document).ready(function(){
        window.open('/wp-admin/upload.php?page=emu','_blank');
        //window.open('$remoteUrl','_blank');
});
</script>
output;
        
        echo($output);
    }
    
    public function processFormSubission($url){
        $cUrlProcessor = new cUrlProcessor;
        $cUrlProcessor->url = $url;
        $title = $cUrlProcessor->title;
        $siteName = $cUrlProcessor->siteName;
        $CptProcssor = new CptProcessor;
        $content = $CptProcssor->baseContent;
        
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