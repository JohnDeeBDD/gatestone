<?php

namespace ExternalContentPortfolio;

class CptEditorListModifier{
    
    public function enqueueScripts($hook){
        if (!(isset($_GET['post_type']))){
            return;
        }
        if ('edit.php' != $hook ){
            return;
        }
        if ($_GET['post_type'] != "external-content"){
            return;
        }
        
        add_action('admin_footer', array($this, 'outputToFooter'));
    }
    
    public function outputToFooter(){
    $output = <<<output
<script>
jQuery(document).ready(function(){
    //alert('jQuery on edit page');
    jQuery( ".wp-heading-inline" ).after( '<form method = "post"><input type = "text" id = "add-this-url" name = "add-this-url" placeholder = "enter remote content URL"/><input type = "submit" value = "Add New" id = "add-new-button" /> <a href = "/wp-admin/edit.php?post_type=external-content&external-content-rescan=TRUE">Re-scan Content</a></form>' );
    jQuery(".page-title-action").hide();
});
</script>
output;

        echo $output;
    }

}