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
     * it should return the author URL
     */
    public function itShouldReturnTheAuthorUrl(){
        $maxStubs = 1;
        while($maxStubs < 3) {
            $SinglePostProcessor = new Gatestone\SinglePostProcessor;
            $ContentStubs = new ContentStubs;

            $stubResponse = $ContentStubs->getStubResponse($maxStubs);
            $authorUrl = $SinglePostProcessor->getAuthorUrl($stubResponse);

            if($maxStubs == 1){$expectedAuthorUrl = "https://www.gatestoneinstitute.org/author/Soeren+Kern";}
            if($maxStubs == 2){$expectedAuthorUrl = "https://da.gatestoneinstitute.org/author/Soeren+Kern";}

            $this->assertEquals($expectedAuthorUrl, $authorUrl);
            $maxStubs = $maxStubs + 1;
        }
    }

    /**
     * @test
     * it should return the date
     */
    public function itShouldReturnTheDate(){
        $SinglePostProcessor = new Gatestone\SinglePostProcessor;
        $ContentStubs = new ContentStubs;

        $stubResponse = $ContentStubs->getStubResponse(1);

        $dateTime = $SinglePostProcessor->parseDateAndTime($stubResponse);
        $expectedDataTime= "2013-02-01T05:00:00";

        $this->assertEquals($expectedDataTime, $dateTime, "The dates don't line up. Expecting $expectedDataTime");
    }

    /**
     * @test
     * it should return the content
     */
    public function isShouldReturnTheContent(){
        
        $maxStubs = 1;
        while($maxStubs < 3) {
            $SinglePostProcessor = new Gatestone\SinglePostProcessor;
            $ContentStubs = new ContentStubs;

            $stubResponse = $ContentStubs->getStubResponse($maxStubs);

            $parsedContent = $SinglePostProcessor->parseForContent($stubResponse, $maxStubs);
            $fn = "/var/www/html/wp-content/plugins/gatestone/tests/unit/stub-output-$maxStubs.html";

            //compare the content to the output
            file_put_contents ( $fn, $parsedContent);

            $stubContent = $ContentStubs->getStubContent($maxStubs);
            $this->assertEquals($stubContent, $parsedContent, "The stub and the parsed content don't match on $maxStubs");
            $maxStubs = $maxStubs + 1;
        }
    }
    /**
     * @test
     * it should return the topics
     */
    public function isShouldReturnTheTopics(){
        $maxStubs = 1;
        while($maxStubs < 5) {
            $SinglePostProcessor = new Gatestone\SinglePostProcessor;
            $ContentStubs = new ContentStubs;

            $stubResponse = $ContentStubs->getStubResponse($maxStubs);

            $topic = $SinglePostProcessor->parseTopics($stubResponse);

            ob_start();
            var_dump($topic);
            $result = ob_get_clean();

            if($maxStubs == 1){
                $expectedTopic = false;
                $this->assertSame( $expectedTopic, $topic,"The topics don't line up on stub-$maxStubs. Got $result");
            }
            if($maxStubs == 2){
                $expectedTopic = array ("Tyskland", "Iran", "Israel");
                //$expectedTopic = array ("aaa", "ccc", "xxx");
                $this->assertSame( $expectedTopic, $topic, "The topics don't line up on stub-$maxStubs. Got $result");
            }
            if($maxStubs == 3){
                $expectedTopic = array("السلطة الفلسطينية", "Persecution of Christians");
                $this->assertSame( $expectedTopic, $topic, "The topics don't line up on stub-$maxStubs. Got $result");
            }
            if($maxStubs == 4){
                $expectedTopic = array("Nigeria");
                $this->assertSame( $expectedTopic, $topic, "The topics don't line up on stub-$maxStubs. Got $result");
            }
            $maxStubs = $maxStubs + 1;
        }
    }
    
}

class ContentStubs{
    /*
     * canonicals
     * https://www.gatestoneinstitute.org/3561/europe-hijab
     * https://da.gatestoneinstitute.org/14823/tyskland-pro-iran-anti-israel
     * https://ar.gatestoneinstitute.org/7897/الفلسطينيون-محو-التاريخ-المسيحي
     * https://www.gatestoneinstitute.org/12222/nigeria-genocide
     */
    public function getStubResponse($x){
        $fn = "/var/www/html/wp-content/plugins/gatestone/tests/unit/stub-$x.html";
        $contents = file_get_contents($fn);
        return $contents;
    }

    public function getStubContent($x){
        $fn = "/var/www/html/wp-content/plugins/gatestone/tests/unit/stub-content-$x.html";
        $contents = file_get_contents($fn);
        return $contents;
    }


}