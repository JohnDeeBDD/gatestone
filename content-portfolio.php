<?php
/*
 Plugin Name: Content Portfolio
 Plugin URI: https://generalchicken.net
 Description: 
 Version: 0.1
 Author: John Dee
 Author URI: https://generalchicken.net
 */

namespace ContentPortfolio;

require_once (plugin_dir_path(__FILE__). 'src/ContentPortfolio/autoloader.php');

$Plugin = new ContentPortfolioPlugin;

$Plugin->registerCptExternalContent();
$Plugin->modifyExternalContentCptEditor();
$Plugin->listenForNewExternalContentCptSubmission();

//it should have a CPT "content"

//it should get the title from the URL
//it should get the featured image of the post and store it as a featured image of the new post

