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

public function getGateStoneUrlFromCurrentSite(){
    $currentUrl = site_url();
    if($currentUrl == "http://ar.yeezyideationcenter.com"){return "https://ar.gatestoneinstitute.org";}
    if($currentUrl == "http://cs.yeezyideationcenter.com"){return "https://cs.gatestoneinstitute.org";}
    if($currentUrl == "http://da.yeezyideationcenter.com"){return "https://da.gatestoneinstitute.org";}
    if($currentUrl == "http://de.yeezyideationcenter.com"){return "https://de.gatestoneinstitute.org";}
    if($currentUrl == "http://el.yeezyideationcenter.com"){return "https://el.gatestoneinstitute.org";}
    if($currentUrl == "http://es.yeezyideationcenter.com"){return "https://es.gatestoneinstitute.org";}
    if($currentUrl == "http://fr.yeezyideationcenter.com"){return "https://fr.gatestoneinstitute.org";}
    if($currentUrl == "http://he.yeezyideationcenter.com"){return "https://he.gatestoneinstitute.org";}
    if($currentUrl == "http://it.yeezyideationcenter.com"){return "https://it.gatestoneinstitute.org";}
    if($currentUrl == "http://nl.yeezyideationcenter.com"){return "https://nl.gatestoneinstitute.org";}
    if($currentUrl == "http://pl.yeezyideationcenter.com"){return "https://pl.gatestoneinstitute.org";}
    if($currentUrl == "http://pt.yeezyideationcenter.com"){return "https://pt.gatestoneinstitute.org";}
    if($currentUrl == "http://ru.yeezyideationcenter.com"){return "https://ru.gatestoneinstitute.org";}
    if($currentUrl == "http://sk.yeezyideationcenter.com"){return "https://sk.gatestoneinstitute.org";}
    if($currentUrl == "http://sv.yeezyideationcenter.com"){return "https://sv.gatestoneinstitute.org";}
    if($currentUrl == "http://yeezyideationcenter.com"){return "https://gatestoneinstitute.org";}
}



}