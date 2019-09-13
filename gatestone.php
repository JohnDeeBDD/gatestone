<?php
/*
 Plugin Name: Gatestone Institute
 Plugin URI: https://home.parler.com
 Description: 
 Version: 1.0
 Author: John Dee
 Author URI: https://home.parler.com
 */

namespace Gatestone;


//die('content-porfolio.php');

require_once (plugin_dir_path(__FILE__). 'src/Gatestone/autoloader.php');

add_shortcode('scraper', array(new ShortcodeForm, "renderForm"));

include_once("/var/www/html/wp-content/plugins/gatestone/src/Gatestone/CPT_mediaCitations.php");


function activatePlugin() {
    $post_id = wp_insert_post(
        array(
            'post_author'       =>   1,
            'post_title'        =>   "Parser",
            'post_content'      =>  "[scraper]",
            'post_status'       =>   'publish',
            'post_type'         =>   'page'
        )
    );
}


register_activation_hook( __FILE__, 'Gatestone\activatePlugin' );


function addDummyContent(){
    $post_id = wp_insert_post(
        array(
            'post_author'       =>   1,
            'post_title'        =>   "Parser",
            'post_content'      =>  "[scraper]",
            'post_status'       =>   'publish',
            'post_type'         =>   'page'
        )
    );
}