<?php

class CurlParserTest extends \Codeception\TestCase\WPTestCase{
    
    public $row = '<tr><td data-order="2945"><a href="https://www.gatestoneinstitute.org/14817/italy-matteo-salvini">Italy: Salvini Down but Not Out</a></td><td data-order="445">Soeren Kern</td><td>2019/09/04</td></tr>';
    
    /**
     * @test
     * it should be instantiatable
     */
    public function isShouldReturnTheRemotePostID(){
        $CurlParser = new Gatestone\CurlParser;   
    }
    
    /**
     * @test
     * it should return the remote post ID
     */ 
    public function itShouldReturnTheRemotePostID(){
        $CurlParser = new Gatestone\CurlParser;
        $row = $this->row;
        $remotePostID = $CurlParser->retunRemotePostID($row);
        $this->assertEquals($remotePostID, "14817");
    }
    
    /**
     * @test
     * it should return the remote slug
     */ 
    public function isShouldReturnTheRemoteSlug(){
        $CurlParser = new Gatestone\CurlParser;
        $row = $this->row;
        $remotePostID = $CurlParser->retunRemoteSlug($row);
        $this->assertEquals($remotePostID, "italy-matteo-salvini");
    }
    
    /**
     * @test
     * it should return the remote title
     */
    public function isShouldReturnTheRemoteTitle(){
        $CurlParser = new Gatestone\CurlParser;
        $row = $this->row;
        $remoteTitle = $CurlParser->retunRemoteTitle($row);
        $this->assertEquals($remoteTitle, "Italy: Salvini Down but Not Out");
    }
    
    /**
     * @test
     * it should return the remote author
     */
    public function isShouldReturnTheRemoteAuthor(){
        $CurlParser = new Gatestone\CurlParser;
        $row = $this->row;
        $remoteAuthor = $CurlParser->retunRemoteAuthor($row);
        $this->assertEquals($remoteAuthor, "Soeren Kern");
    }
    
    /**
     * @test
     * it shoudl retrun the remote publish date
     */
    public function itShouldReturnTheRemotePublishDate(){
        $CurlParser = new Gatestone\CurlParser;
        $row = $this->row;
        $remoteDate = $CurlParser->retunRemoteDate($row);
        $this->assertEquals($remoteDate, "2019/09/04");
    }
    
}