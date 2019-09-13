<?php

class RemoteAuthorTest extends \Codeception\TestCase\WPTestCase
{

    /**
     * @test
     * it should be instantiatable
     */
    public function isShouldReturnTheRemotePostID(){
        $RemoteAuthor = new Gatestone\RemoteAuthor;
    }

    /**
     * @test
     * it should clean the author name properly
     */
    public function isShouldCleanItProperly(){
        $RemoteAuthor = new Gatestone\RemoteAuthor;
        $name = "bat man";
        $response = $RemoteAuthor->cleanAuthorName($name);
        $this->assertEquals("batman", $response, "The expoected response is 'batman' the actual response is: '$response''");

        $name = "ç Ätm ÄÑ";
        $response = $RemoteAuthor->cleanAuthorName($name);
        $this->assertEquals("catman", $response, "The expoected response is 'catman' the actual response is: '$response''");

        $name = "Bat Ye'or";
        $response = $RemoteAuthor->cleanAuthorName($name);
        $this->assertEquals("batyeor", $response, "The expoected response is 'batyeor' the actual response is: '$response''");

        $name = "Alan M. Dershowitz";
        $response = $RemoteAuthor->cleanAuthorName($name);
        $this->assertEquals("alanmdershowitz", $response, "The expoected response is 'alanmdershowitz' the actual response is: '$response''");

        $name = "Anne-Elisabeth Moutet";
        $response = $RemoteAuthor->cleanAuthorName($name);
        $this->assertEquals("anneelisabethmoutet", $response, "The expoected response is 'anneelisabethmoutet' the actual response is: '$response''");


    }


    /**
     * @test
     * it should remove funky letters and spaces
     */
    public function isShouldRemoveFunkyLetters(){
        $RemoteAuthor = new Gatestone\RemoteAuthor;
        $name = "ç Ätm ÄÑ";
        $response = $RemoteAuthor->hyphenize($name);
        $expectedResponse = "c-atm-an";
        $this->assertEquals($expectedResponse, $response, "The response is: $response");
    }


    /**
     * @test
     * it should create an author if one doesn't exist
     */
    public function itShouldCreateAnAuthorIfOneDoesntExist(){
        $user_name = "Some Guy";

        $RemoteAuthor = new Gatestone\RemoteAuthor;
        $returnedID = $RemoteAuthor->returnAuthorID($user_name);

        $WpReturnedID = username_exists("someguy");

        $this->assertEquals($returnedID, $WpReturnedID);
    }

    /**
     * @test
     * it should return the ID of an existing author
     */
    public function itShouldReturnTheIdOfAnExistingAuthor(){
        $user_name = "Billy Bob";
        $random_password = "123xyz";
        $user_email = $user_name . "@parler.com";

        $user_id = wp_create_user( "billybob", $random_password, $user_email );

        $RemoteAuthor = new Gatestone\RemoteAuthor;
        $returnedID = $RemoteAuthor->returnAuthorID($user_name);

        $this->assertEquals($user_id, $returnedID, "The IDs don't match for some reason");
    }



}