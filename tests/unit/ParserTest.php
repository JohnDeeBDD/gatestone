<?php

class ParserTest extends \Codeception\TestCase\WPTestCase{
   
    /**
     * @test
     * it should be instantiatable
     */
    public function itShouldBeInstantiatable(){
        $Parser = new ExternalContentPortfolio\Parser;
    }

}   