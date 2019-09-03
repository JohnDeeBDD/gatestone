<?php

class CptSubmissionListenerTest extends \Codeception\TestCase\WPTestCase{

    /**
     * @test
     * it should be instantiatable
     */
    public function itShouldBeInstantiatable(){
        $CptSubmissionListerner = new ExternalContentPortfolio\CptSubmissionListener;
    }

    /**
     * @test
     * it should create a CPT
     */
    public function listenerShouldCreateCpt(){
        $CptSubmissionListenerTest = new ExternalContentPortfolio\CptSubmissionListener;

        //this post should be live:
        $Url = "https://generalchicken.net/better-error-messages/";

        $ID = $CptSubmissionListenerTest->createNewCpt($Url);
        $this->assertGreaterThan(0, $ID);

        $returnedMetaDataUrl = get_post_meta( $ID, "remoteUrl", TRUE);
        $this->assertEquals($returnedMetaDataUrl, $Url);
    }

    /**
     * @test
     * it should tag the CPTs as "External-Content Processing"
     */
    public function listenerShouldTagCPT(){
        $CptSubmissionListenerTest = new ExternalContentPortfolio\CptSubmissionListener;

        //this post should be live:
        $Url = "https://example.com/";

        $ID = $CptSubmissionListenerTest->createNewCpt($Url);
        $tags = wp_get_post_tags($ID);

        $tagExists = false;
        foreach($tags as $tag){
            $name = $tag->name;
            if($name == "external-content processing"){
                $tagExists = TRUE;
            }
        }

        $this->assertEquals($tagExists, TRUE, "The tag wasn't found.");
    }

}