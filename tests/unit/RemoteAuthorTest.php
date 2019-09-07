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

}