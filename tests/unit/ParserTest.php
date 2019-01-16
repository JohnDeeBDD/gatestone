<?php

class ParserTest extends \Codeception\TestCase\WPTestCase{
   
    /**
     * @test
     * it should be instantiatable
     */
    public function itShouldBeInstantiatable(){
        $Parser = new ContentPortfolio\Parser;
    }
    
    /**
     * @test
     * it should be instantiatable
     */
    public function parserShouldCreateCpt(){
        $Parser = new ContentPortfolio\Parser;
        //this post should be live
        $Url = "https://generalchicken.net/better-error-messages/";
        $ID = $Parser->createNewCpt($Url);
        $this->assertGreaterThan(0, $ID);
        
        $returnedMetaDataUrl = get_post_meta( $ID, "remoteUrl", TRUE);
        $this->assertEquals($returnedMetaDataUrl, $Url);

    }
}   