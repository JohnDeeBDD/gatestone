<?php
/*
 Plugin Name: External Content Portfolio
 Plugin URI: https://generalchicken.net
 Description: 
 Version: 4.4
 Author: John Dee
 Author URI: https://generalchicken.net
 GitHub Plugin URI: https://github.com/JohnDeeBDD/external-content-portfolio
 */

namespace ContentPortfolio;

require_once (plugin_dir_path(__FILE__). 'src/ContentPortfolio/autoloader.php');

$Plugin = new ContentPortfolioPlugin;

$Plugin->registerCptExternalContent();
$Plugin->modifyExternalContentCptEditor();
$Plugin->listenForNewExternalContentCptSubmission();

//it should get the title from the URL

//it should get the featured image of the post and store it as a featured image of the new post
//Note: Currently I' using the technique of haing jQuery open a new tab and pull open a pack from the plugin LH External Media Upload
//I want the plugin to fetch the "featured image" from the external content that is coming from other WordPress sites. The problem is 
//that there isn't a uniersal way to markup featured images. A future enhancement would be a parser that looks for featured images and 
//pulls them down into the local instalation's media library. For now, I'll popping up the other tab and having the user manually copy and
//paste the image URL, which then gets assigned to the new external content CPT. Finally, this is so the external content CPT and the actual
//external content have the same image.
