<?php

namespace ExternalContentPortfolio;

abstract class AbstractParser{
  public $Url;
  public $ID;
  public function processCPT($ID){}
}

//This will be the parser of last resort. This is the parser for content of unknown sorce type.
class Parser extends AbstractParser{
  public $Url;
  public function parseUrl($Url){}
  public function parseTitle($Url){
    $cUrlProcessor = new cUrlProcessor;
    $cUrlProcessor->url = $Url;
    return ($cUrlProcessor->fetchTitle());
  }

}