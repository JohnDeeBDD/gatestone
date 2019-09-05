<?php

namespace Gatestone;

class ShortcodeForm{

public function renderForm(){
    $output = <<<output
<form method = "post">
Parse for Rows: <input type = "text" name = "fetch-url-for-rows" /><br />
<input type = "submit" />
</form>
output;
    $response = $this->processForm();
   // $response = var_dump($response);
    $output = $output . $response;
    return $output;
}

public function processForm(){

    if(isset($_POST['fetch-url-for-rows'])){
        $CurlFetcher = new CurlFetcher;
        $CurlFetcher->fetchRemoteCurl($_POST['fetch-url-for-rows']);
        $response = $CurlFetcher->response;
       // $arrayOfRows = $CurlFetcher->parseResponseIntoArrayOfRows($response);
        //return $arrayOfRows;
    }
}


}