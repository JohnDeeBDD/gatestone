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
     * it should return the author URL
     */
    public function itShouldReturnTheAuthorUrl(){
        $maxStubs = 1;
        while($maxStubs < 3) {
            $SinglePostProcessor = new Gatestone\SinglePostProcessor;
            $ContentStubs = new ContentStubs;

            $stubResponse = $ContentStubs->getStubResponse($maxStubs);
            $authorUrl = $SinglePostProcessor->getAuthorUrl($stubResponse);

            if($maxStubs == 1){$expectedAuthorUrl = "https://www.gatestoneinstitute.org/author/Soeren+Kern";}
            if($maxStubs == 2){$expectedAuthorUrl = "https://da.gatestoneinstitute.org/author/Soeren+Kern";}

            $this->assertEquals($expectedAuthorUrl, $authorUrl);
            $maxStubs = $maxStubs + 1;
        }
    }

    /**
     * @test
     * it should return the date
     */
    public function itShouldReturnTheDate(){
        $SinglePostProcessor = new Gatestone\SinglePostProcessor;
        $ContentStubs = new ContentStubs;

        $stubResponse = $ContentStubs->getStubResponse(1);

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

            $parsedContent = $SinglePostProcessor->parseForContent($stubResponse, $maxStubs);
            $fn = "/var/www/html/wp-content/plugins/gatestone/tests/unit/stub-output-$maxStubs.html";

            //compare the content to the output
            file_put_contents ( $fn, $parsedContent);

            $stubContent = $ContentStubs->getStubContent($maxStubs);
            $this->assertEquals($stubContent, $parsedContent, "The stub and the parsed content don't match on $maxStubs");
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