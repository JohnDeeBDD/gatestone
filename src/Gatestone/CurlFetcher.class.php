<?php 

namespace Gatestone;

class CurlFetcher{

public $response = "";
public $responseArray = array();

public function fetchRemoteCurl($Url){
    $response = wp_remote_get( $Url );
    $this->response = $response;
    $response = $response['body'];
    return $response;
}




}