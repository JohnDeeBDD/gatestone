<?php

namespace ContentPortfolio;

abstract class AbstractParser{

  public $Url;
  
  public function bool_isThisUrlMyTypeOfContent(){}
  
  public function parseUrl(){}

}

//This will be the parser of last resort. This is the parser for content of unknown sorce type.
class Parser extends AbstractParser{
  public $Url;
  
  public function bool_isThisUrlMyTypeOfContent(){}
  
  public function parseUrl(){}
}