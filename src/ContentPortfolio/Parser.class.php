<?php

namespace ContentPortfolio;

abstract class AbstractParser{

  public $Url;
  
  public abstract function bool_isThisUrlMyTypeOfContent(){}
  
  public abstract funcion parseContent(){}
  
  public function setUrl($Url){
    $this->Url = $Url;
  }

}

//This will be the parser of last resort. This is the parser for content of unknown sorce type.
class Parser extends AbstractParser{}
