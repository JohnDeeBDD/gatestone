<?php

namespace ContentPortfolio;

abstract class AbstractParser{
  public $Url;
  public $ID;
  public function createNewCpt($Url){}
  public function processCPT($ID){}
}

//This will be the parser of last resort. This is the parser for content of unknown sorce type.
class Parser extends AbstractParser{
  public $Url;
  public function parseUrl($Url){}
  public function parseTitle($Url){
    $cUrlProcessor = new cUrlProcessor;
    $cUrlProcessor->url = $Url;
    return ($cUrlProcessor->title);
  }
  public function createNewCpt($Url){
    $title = $this->parseTitle($Url);
    $content = "This is a new CPT. PROCESSING.";
    $args = array(
    'post_title'    => $title,
    'post_status'   => 'draft',
    'post_type'     => 'external-content',
    'post_content'  => $content,
    );
    $ID =  (wp_insert_post( $args ));
    update_post_meta( $ID, "remoteUrl", $Url );
    return $ID;
  }
}