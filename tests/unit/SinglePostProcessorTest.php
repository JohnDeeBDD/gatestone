<?php

class SinglePostProcessorTest extends \Codeception\TestCase\WPTestCase{
    
    /**
     * @test
     * it should be instantiatable
     */
    public function isShouldBeInstantialble(){
        $SinglePostProcessor = new Gatestone\SinglePostProcessor;
    }
    
    /**
     * @test
     * it should return the content
     */
    public function isShouldReturnTheContent(){
        
        $maxStubs = 1;
        while($maxStubs < 3) {
            $SinglePostProcessor = new Gatestone\SinglePostProcessor;
            $ContentStubs = new ContentStubs;

            $stubResponse = $ContentStubs->getStubResponse($maxStubs);

            $parsedContent = $SinglePostProcessor->parseContent($stubResponse, $maxStubs);
            $fn = "/var/www/html/wp-content/plugins/gatestone/tests/unit/stub-output-$maxStubs.html";

            //compare the content to the output
            file_put_contents ( $fn, $parsedContent);

            $stubContent = $ContentStubs->getStubContent($maxStubs);
            $this->assertEquals($stubContent, $parsedContent, "The stub and the parsed content don't match.");
            $maxStubs = $maxStubs + 1;
        }
    }
    
}

class ContentStubs{

    public function getStubResponse($x){
        $fn = "/var/www/html/wp-content/plugins/gatestone/tests/unit/stub-$x.html";
        $contents = file_get_contents($fn);
        return $contents;
    }

    public function getStubContent($x){
        $fn = "/var/www/html/wp-content/plugins/gatestone/tests/unit/stub-content-$x.html";
        $contents = file_get_contents($fn);
        return $contents;
    }

}