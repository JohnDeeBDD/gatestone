<?php

class ParserRouterTest extends \Codeception\TestCase\WPTestCase{
   
    /**
     * @test
     * it should be instantiatable
     */
    public function it_should_be_instantiatable(){
        $Url = "https://generalchicken.net";
        $ParserRouter = new ExternalContentPortfolio\ParserRouter($Url);
    }
}   