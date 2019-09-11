<?php

class AuthorCurlParserTest extends \Codeception\TestCase\WPTestCase{

    public $row = '<tr><td data-order="1"><a href="https://www.gatestoneinstitute.org/381/choices-for-the-middle-east">Choices for the Middle East</a></td><td>2009/03/10</td></tr>';

    /**
     * @test
     * it should be instantiatable
     */
    public function isShouldReturnTheRemotePostID(){
        $CurlParser = new Gatestone\AuthorCurlParser;
    }

    /**
     * @test
     * it should return the remote post ID
     */
    public function itShouldReturnTheRemotePostID(){
        $CurlParser = new Gatestone\AuthorCurlParser;
        $row = $this->row;
        $remotePostID = $CurlParser->retunRemotePostID($row);
        $this->assertEquals("381", $remotePostID);
    }

    /**
     * @test
     * it should return the remote slug
     */
    public function isShouldReturnTheRemoteSlug(){
        $CurlParser = new Gatestone\AuthorCurlParser;
        $row = $this->row;
        $remotePostID = $CurlParser->retunRemoteSlug($row);
        $this->assertEquals( "choices-for-the-middle-east", $remotePostID);
    }

    /**
     * @test
     * it should return the remote title
     */
    public function isShouldReturnTheRemoteTitle(){
        $CurlParser = new Gatestone\AuthorCurlParser;
        $row = $this->row;
        $remoteTitle = $CurlParser->retunRemoteTitle($row);
        $this->assertEquals("Choices for the Middle East", $remoteTitle);
    }

    /**
     * @test
     * it shoudl return the remote publish date
     */
    public function itShouldReturnTheRemotePublishDate(){
        $CurlParser = new Gatestone\AuthorCurlParser;
        $row = $this->row;
        $remoteDate = $CurlParser->retunRemoteDate($row);
        $this->assertEquals("2009/03/10", $remoteDate);
    }

    /**
     * @test
     * it should parse the response into an array of links
     */
    public function itShouldParseTheResponseIntoAnArrayOfLinks(){
        $response = file_get_contents('/var/www/html/wp-content/plugins/gatestone/tests/unit/BernadLewisAuthorResponse.html');
        $AuthorCurlParser = new Gatestone\AuthorCurlParser;
        $responseArray = $AuthorCurlParser->returnArrayOfLinks($response);

        $arrayOfLinks = array(

            "<tr><td data-order=\"1\"><a href=\"https://www.gatestoneinstitute.org/381/choices-for-the-middle-east\">Choices for the Middle East</a></td><td>2009/03/10</td></tr>",
            "<tr><td data-order=\"3\"><a href=\"https://www.gatestoneinstitute.org/323/the-periodization-of-history---excerpts\">The Periodization of History - Excerpts</a></td><td>2009/02/16</td></tr>",
            "<tr><td data-order=\"2\"><a href=\"https://www.gatestoneinstitute.org/202/the-arabs-and-gaza\">The Arabs and Gaza</a></td><td>2009/01/08</td></tr>"
        );
        $this->assertEquals($arrayOfLinks, $responseArray, "the arrays do not match");

    }
}