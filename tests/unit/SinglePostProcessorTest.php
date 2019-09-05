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
        
        
        $SinglePostProcessor = new Gatestone\SinglePostProcessor;

        $stubResponse = file_get_contents('/var/www/html/wp-content/plugins/gatestone/tests/unit/stub.europe-hijab.html');
        
        $parsedContent = $SinglePostProcessor->parseContent($stubResponse);
        $stubContent = file_get_contents('/var/www/html/wp-content/plugins/gatestone/tests/unit/stub.content-only-europe-hijab.html');
        $this->assertEquals($parsedContent, $stubContent);
    }
    
}