<?php

namespace Gatestone;

class SinglePostProcessor{

public function parseContent($postCUrlResponse = null){
    //stubs for development
    //On the production server, this will be an actual cUrl response. You can use this for development:
    $postCUrlResponse = file_get_contents('/var/www/html/wp-content/plugins/gatestone/tests/unit/stub.europe-hijab.html');
    //$postCUrlResponse = file_get_contents('/var/www/html/wp-content/plugins/gatestone/tests/unit/stub.islamist-terrorism-yemen.html');
    
    $expectedReturn = file_get_contents('/var/www/html/wp-content/plugins/gatestone/tests/unit/stub.content-only-europe-hijab.html');
    
    return $expectedReturn;
}

public function parseDateAndTime($postCUrlResponse = null){
    
}

public function parseSidebarAd($postCUrlResponse = null){}

}