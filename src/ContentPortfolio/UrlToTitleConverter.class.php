<?php

namespace ContentPortfolio;

class UrlToTitleConverter{
    
    private $url = "No URL";
    public $title = "No xx title";
    public $siteName = "No site name";
    
    public function lookForTitleInRemoteGetFetch($url){
        //die("lookForTitleInRemoteGetFetch being called");
        $response = wp_remote_get($url);
        $title = "Title metatag not present.";
        $this->title = $title;
        if ( is_array( $response ) ) {
            $body = $response['body'];
            $title = substr($body, strpos($body, '<title>')+7);
            $title = substr($title, 0, strpos($title, '</title>'));
            $this->parseTitleIntoTitleAndSitename($title);
        }
        
    }
    
    public function __set($property, $value){
        if($property == "url"){
            $this->url;
            $this->lookForTitleInRemoteGetFetch($value);
        }        
    }
    
    public function parseTitleIntoTitleAndSitename($haystack){
        
        $needle = " &#8211; ";
        $pos = strrpos($haystack, $needle);

        if ($pos === false) {
            $this->title = $haystack;
            $this->siteName = "Unknown site.";
        }else{
            $this->title = substr($haystack, 0, $pos);
            $this->siteName = substr($haystack, (-(strlen($haystack) - $pos - 9)));
        }
    }
}