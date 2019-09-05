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
     * it shoudl return the remote publish date
     */
    public function itShouldReturnTheRemotePublishDate(){
        $CurlParser = new Gatestone\CurlParser;
        $row = $this->row;
        $remoteDate = $CurlParser->retunRemoteDate($row);
        $this->assertEquals($remoteDate, "2019/09/04");
    }
    
    /**
     * @test
     * it should parse the response into an array of links
     */
    public function itShouldParseTheResponseIntoAnArrayOfLinks(){
        $response = file_get_contents('/var/www/html/wp-content/plugins/gatestone/tests/unit/NigeriaResponse.html');
        $CurlParser = new Gatestone\CurlParser;
        $responseArray = $CurlParser->returnArrayOfLinks($response);
        
        $arrayOfLinks = array(
"<tr><td data-order=\"3\"><a href=\"https://www.gatestoneinstitute.org/14785/boko-haram-bloody-terror\">Boko Haram: Bloody Terror, No End in Sight</a></td><td data-order=\"11\">Uzay Bulut</td><td>2019/09/04</td></tr>",
"<tr><td data-order=\"12\"><a href=\"https://www.gatestoneinstitute.org/14067/nigeria-jihad-christians\">Nigeria: Jihad against Christians</a></td><td data-order=\"11\">Uzay Bulut</td><td>2019/04/21</td></tr>",
"<tr><td data-order=\"11\"><a href=\"https://www.gatestoneinstitute.org/13447/obama-christian-genocide-nigeria\">New Revelation: Previous US Administration Facilitated Christian Genocide in Nigeria</a></td><td data-order=\"10\">Raymond Ibrahim</td><td>2018/12/23</td></tr>",
"<tr><td data-order=\"9\"><a href=\"https://www.gatestoneinstitute.org/12645/christians-genocide-nigeria\">International Community Ignores Genocide of Christians in Nigeria</a></td><td data-order=\"10\">Raymond Ibrahim</td><td>2018/07/08</td></tr>",
"<tr><td data-order=\"8\"><a href=\"https://www.gatestoneinstitute.org/12222/nigeria-genocide\">Genocide in Nigeria</a></td><td data-order=\"10\">Raymond Ibrahim</td><td>2018/04/26</td></tr>",
"<tr><td data-order=\"17\"><a href=\"https://www.gatestoneinstitute.org/12042/nigeria-christians\">Nigeria's Christians Today, Europe's Christians Tomorrow</a></td><td data-order=\"5\">Giulio Meotti</td><td>2018/03/18</td></tr>",
"<tr><td data-order=\"18\"><a href=\"https://www.gatestoneinstitute.org/10861/northern-nigeria-democracy\">Northern Nigeria's Democracy Under Threat</a></td><td data-order=\"8\">Nuhu Othman</td><td>2017/08/28</td></tr>",
"<tr><td data-order=\"14\"><a href=\"https://www.gatestoneinstitute.org/8620/muslim-targeting-christians\">Nigeria's Muslim Government Targeting Christians; A Pass to Boko Haram</a></td><td data-order=\"3\">Con Coughlin</td><td>2016/08/06</td></tr>",
"<tr><td data-order=\"2\"><a href=\"https://www.gatestoneinstitute.org/8349/biafra-nigeria\">Biafra: Where is the International Community?</a></td><td data-order=\"6\">Judith Bergman</td><td>2016/07/03</td></tr>",
"<tr><td data-order=\"20\"><a href=\"https://www.gatestoneinstitute.org/7700/easter-christians-slaughtered\">U.S. at Easter: When Christians Are Slaughtered, Look the Other Way</a></td><td data-order=\"10\">Raymond Ibrahim</td><td>2016/03/27</td></tr>",
"<tr><td data-order=\"6\"><a href=\"https://www.gatestoneinstitute.org/7112/nigeria-christians\">Christians in Nigeria: Having Nothing but Everything</a></td><td data-order=\"1\">Alan Craig</td><td>2015/12/25</td></tr>",
"<tr><td data-order=\"16\"><a href=\"https://www.gatestoneinstitute.org/5168/nigeria-elections-boko-haram\">Nigeria: Presidential Elections Amid Specter of Boko Haram</a></td><td data-order=\"7\">Lawrence A. Franklin</td><td>2015/02/01</td></tr>",
"<tr><td data-order=\"19\"><a href=\"https://www.gatestoneinstitute.org/4353/ny-times-al-qaeda\">The New York Times Defends Al-Qaeda</a></td><td data-order=\"10\">Raymond Ibrahim</td><td>2014/06/11</td></tr>",
"<tr><td data-order=\"7\"><a href=\"https://www.gatestoneinstitute.org/4332/boko-haram-abduction\">From Brunei to Boko Haram: Merely Deflection</a></td><td data-order=\"9\">Raheel Raza</td><td>2014/05/29</td></tr>",
"<tr><td data-order=\"5\"><a href=\"https://www.gatestoneinstitute.org/4232/boko-haram-nigeria\">Boko Haram: How a Militant Islamist Group Emerged in Nigeria</a></td><td data-order=\"4\">Femi Owolade</td><td>2014/03/27</td></tr>",
"<tr><td data-order=\"15\"><a href=\"https://www.gatestoneinstitute.org/4206/nigeria-middle-belt\">Nigeria's New \"Middle Belt\"</a></td><td data-order=\"1\">Alan Craig</td><td>2014/03/07</td></tr>",
"<tr><td data-order=\"21\"><a href=\"https://www.gatestoneinstitute.org/3290/nigerian-jihad-christians\">U.S. Distorts Nigerian Jihad on Christians</a></td><td data-order=\"10\">Raymond Ibrahim</td><td>2012/08/20</td></tr>",
"<tr><td data-order=\"4\"><a href=\"https://www.gatestoneinstitute.org/2743/boko-haram-infiltrating-nigerian-intelligence\">Boko Haram Rapidly Infiltrating Nigerian Intelligence</a></td><td data-order=\"2\">Anna Mahjar-Barducci</td><td>2012/01/11</td></tr>",
"<tr><td data-order=\"13\"><a href=\"https://www.gatestoneinstitute.org/2707/nigeria-church-attacks\">Nigeria's Christmas Present - Blowing Up Christians</a></td><td data-order=\"10\">Raymond Ibrahim</td><td>2011/12/28</td></tr>",
"<tr><td data-order=\"10\"><a href=\"https://www.gatestoneinstitute.org/2100/islamists-slaughter-christians-in-nigeria\">Islamists Slaughter Christians in Nigeria, Obama Looks the Other Way</a></td><td data-order=\"2\">Anna Mahjar-Barducci</td><td>2011/05/06</td></tr>",
"<tr><td data-order=\"1\"><a href=\"https://www.gatestoneinstitute.org/979/al-qaeda-in-nigeria\">Al-Qaeda in Nigeria?</a></td><td data-order=\"2\">Anna Mahjar-Barducci</td><td>2010/01/06</td></tr>"
);
    $this->assertEquals($arrayOfLinks, $responseArray, "the arrays do not match");
    
    }
    
    /**
     * @test
     * it should parse the response into an array of topics
     */
    public function itShouldParseTheResponseIntoAnArrayOfTopics(){
        $response = file_get_contents('/var/www/html/wp-content/plugins/gatestone/tests/unit/NigeriaResponse.html');
        $CurlParser = new Gatestone\CurlParser;
        $responseArray = $CurlParser->returnArrayOfTopics($response);
        $arrayOfTopics = array (
            array ("Url" => "https://www.gatestoneinstitute.org/topics/23/bangladesh", "topic" => "Bangladesh"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/10/china", "topic" => "China"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/20/egypt", "topic" => "Egypt"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/37/europes-migrant-crisis", "topic" => "Europe's Migrant Crisis"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/11/france", "topic" => "France"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/12/germany", "topic" => "Germany"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/27/india", "topic" => "India"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/16/iran", "topic" => "Iran"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/38/iranian-nuclear-program", "topic" => "Iranian Nuclear Program"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/28/iraq", "topic" => "Iraq"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/22/israel", "topic" => "Israel"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/29/italy", "topic" => "Italy"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/35/kurdistan", "topic" => "Kurdistan"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/31/lebanon", "topic" => "Lebanon"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/41/national-defense", "topic" => "National Defense"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/18/nigeria", "topic" => "Nigeria"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/24/north-korea", "topic" => "North Korea"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/26/pakistan", "topic" => "Pakistan"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/34/palestinian-authority", "topic" => "Palestinian Authority"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/40/persecution-of-minorities", "topic" => "Persecution of Minorities"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/32/persian-gulf", "topic" => "Persian Gulf"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/17/russia", "topic" => "Russia"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/25/saudi-arabia", "topic" => "Saudi Arabia"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/21/spain", "topic" => "Spain"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/36/sweden", "topic" => "Sweden"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/30/syria", "topic" => "Syria"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/39/threats-to-free-speech", "topic" => "Threats to Free Speech"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/19/tunisia", "topic" => "Tunisia"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/15/turkey", "topic" => "Turkey"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/13/united-kingdom", "topic" => "United Kingdom"),
            array ("Url" => "https://www.gatestoneinstitute.org/topics/14/venezuela", "topic" => "Venezuela")
        );
        
    ob_start();
    var_dump($responseArray);
    $resultDump = ob_get_clean();
    $this->assertSame($arrayOfTopics, $responseArray, $resultDump);
        
    }
    
    
}