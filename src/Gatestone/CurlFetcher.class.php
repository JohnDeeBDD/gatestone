<?php 

namespace Gatestone;

class CurlFetcher{

public $response = "";
public $responseArray = array();

public function fetchRemoteCurl($Url){
    $response = wp_remote_get( $Url );
    $this->response = $response;
    $response = $response['body'];
    
    file_put_contents("/var/www/html/wp-content/plugins/gatestone/someresponse.html", $response);
}



}