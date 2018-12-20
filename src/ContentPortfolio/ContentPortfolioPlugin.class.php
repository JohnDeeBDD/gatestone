<?php

namespace ContentPortfolio;

class ContentPortfolioPlugin{
    
    public function addShortcodeContentPortfolioAdder(){
        add_shortcode('content-portfolio-adder', array(new ShortcodeContentPortfolioAdder, "returnForm"));
    }
    
    public function registerCptExternalContent(){
        include_once('CPTexternalContent.php');
    }

    public function modifyExternalContentCptEditor(){
        add_action( 'admin_enqueue_scripts', array(new CptEditorListModifier, 'enqueueScripts' ));
    }
    
    public function listenForNewExternalContentCptSubmission(){
        add_action('init', array(new ShortcodeContentPortfolioAdder, 'listenForFormSubmission'));
    }
    

}