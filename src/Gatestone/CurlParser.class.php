<?php
namespace Gatestone;

class CurlParser{

  public function parseRow($row,$section){
    preg_match('|<tr><td(?:[^>]+)><a href="http(?:s?):\\/\\/([^\\/]*)\\/([^"]*)\\/([^"]*)"(?:.*)>(.*)<\\/a><\\/td><td(?:[^>]*)>(.*)<\\/td><td>(.*)<\\/td><\\/tr>|',$row,$matches);
    $sections=array('domain'=>1,'postID'=>2,'slug'=>3,'title'=>4,'author'=>5,'date'=>6);
    
    if ($matches){
      return $matches[$sections[$section]];
    }
    return false;
  }
  
  public function retunRemotePostID($row){
    return $this->parseRow($row,'postID');
  }
  
  public function retunRemoteSlug($row){
    return $this->parseRow($row,'slug');
  }
  
  public function retunRemoteTitle($row){
    return $this->parseRow($row,'title');
  }
  
  public function retunRemoteAuthor($row){
    return $this->parseRow($row,'author');
  }
  
  public function retunRemoteDate($row){
    return $this->parseRow($row,'date');
  }
  
  public function returnArrayOfLinks($response){
    /*
    *  example cUrls:
    *  https://www.gatestoneinstitute.org/topics/18/nigeria
    *  https://ar.gatestoneinstitute.org/archives/
    *  https://www.gatestoneinstitute.org/archives/
    *  https://github.com/JohnDeeBDD/gatestone/blob/master/tests/unit/NigeriaResponse.html
    *  you can do this but modify the path:
    *  $response = file_get_contents('/var/www/html/wp-content/plugins/gatestone/tests/unit/NigeriaResponse.html');
    *  tests: https://github.com/JohnDeeBDD/gatestone/blob/master/tests/unit/CurlParserTest.php
    */
    
    return $arrayOfLinks;
  }
  
    public function returnArrayOfTopics($response){
    /*
    *  example cUrls:
    *  https://www.gatestoneinstitute.org/topics/18/nigeria
    *  https://ar.gatestoneinstitute.org/archives/
    *  https://www.gatestoneinstitute.org/archives/
    *  https://github.com/JohnDeeBDD/gatestone/blob/master/tests/unit/NigeriaResponse.html
    *  you can do this but modify the path:
    *  $response = file_get_contents('/var/www/html/wp-content/plugins/gatestone/tests/unit/NigeriaResponse.html');
    *  tests: https://github.com/JohnDeeBDD/gatestone/blob/master/tests/unit/CurlParserTest.php
    */
    
    return $arrayOfTopics;
  }

}