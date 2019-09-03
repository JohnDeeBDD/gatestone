<?php

namespace ExternalContentPortfolio;

class cUrlProcessor{


    //private $url = "No URL";
    public $title = "No xx title";
    public $siteName = "Unknown";
    public $cUrlResponse = "";
    public $siteType = "";

    public function fetch($Url){
        $response = $this->fetchRemoteContent($Url);
        $this->lookForTitleInRemoteGetFetch($response);
        $type = $this->lookForSiteTypeInRemoteGetFetch($response);
        if ($type == "WordPress"){

        }
    }

    function getPostID($cUrlBody){
        $start = "<link rel='shortlink' href='";
        $end = "/>";
        $string = $this->getStringBetween2Strings($cUrlBody, $start, $end);
        return ($this->getStringBetween2Strings($string, "/?p=", "'"));
    }

    function getStringBetween2Strings($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    public function lookForSiteTypeInRemoteGetFetch($fetchedCUrl){
        $this->siteType = "Unknown";
        $body = $fetchedCUrl['body'];
        if(strpos($body, '<meta name="generator" content="WordPress') !== FALSE){
            $this->siteType = "WordPress";
        }
        return ($this->siteType);
    }

    public function fetchRemoteContent($Url){
        $this->cUrlResponse = wp_remote_get($Url);
        return ($this->cUrlResponse);
    }

    public function lookForTitleInRemoteGetFetch($response){
        //die("lookForTitleInRemoteGetFetch being called");
        $title = "Title metatag not xx present.";
        $this->title = $title;
        if ( is_array( $response ) ) {
            $body = $response['body'];
            $title = substr($body, strpos($body, '<title>')+7);
            $title = substr($title, 0, strpos($title, '</title>'));
            $this->parseTitleIntoTitleAndSitename($title);
        }
        return ($this->title);
    }

    public function __set($property, $value){
        if($property == "url"){
            $this->url;
            //$this->lookForTitleInRemoteGetFetch($value);
        }        
    }
    
    public function parseTitleIntoTitleAndSitename($haystack){
        
        $needle = " &#8211; ";
        $pos = strrpos($haystack, $needle);

        if ($pos === false) {
            $this->title = $haystack;
            $this->siteName = "Unknown";
        }else{
            $this->title = substr($haystack, 0, $pos);
            $this->siteName = substr($haystack, (-(strlen($haystack) - $pos - 9)));
        }
    }
}