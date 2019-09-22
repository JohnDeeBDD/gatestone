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

    /**
     * @test
     * it should return the comments from a post with no comments
     */
    public function isShouldParseTheCommentsFromAPostWithNoComments(){
        $SinglePostProcessor = new Gatestone\SinglePostProcessor;
        //Canonical URL:
        $stubResponse = file_get_contents("/var/www/html/wp-content/plugins/gatestone/tests/unit/stubWithNoComments.html");
        $commentsArray = $SinglePostProcessor->parserForComments($stubResponse);
        $expectedCommentsArray = array();
        $this->assertSame($expectedCommentsArray, $commentsArray);
    }

    /**
     * @test
     * it should return the comments from a post with a single comment
     */
    public function isShouldParseTheCommentsFromAPostWithASingleComment(){
        $SinglePostProcessor = new Gatestone\SinglePostProcessor;

        //Canonical URL: https://www.gatestoneinstitute.org/23/new-threats-to-free-speech
        $stubResponse = file_get_contents("/var/www/html/wp-content/plugins/gatestone/tests/unit/stubWith1Comment.html");
        $commentsArray = $SinglePostProcessor->parserForComments($stubResponse);
        $expectedCommentsArray = array(
            array(
                'ID'        => 77,
                'userName'  => "Roy Milligan",
                'dateTime'  => "Mar 26, 2009 at 23:34",
                'content'   => "This man is very smart and understands the danger we will all be in if we continue to let the Muslims into our countries, they have said themselves that they want to take control of the world, and they do not want to obey the rules of the countries they go to, but want to change the rules to their customs. If our politicians don't stop this now, it will be too late when they come to realize the folly of their decisions, as the Muslims will take full control and fredom of speech will be a thing of the past, there are already too many court cases against people who have tried to warn about the dangers of Muslim domination.",
                'replyTo'   => FALSE
            )
        );
        $this->assertSame($expectedCommentsArray, $commentsArray);
    }

    /**
     * @test
     * it should return the comments from a post with a multiple comment
     */
    public function isShouldParseTheCommentsFromAPostWithMultipleComments(){
        //Canonical URL: https://www.gatestoneinstitute.org/270/the-burqa
        $SinglePostProcessor = new Gatestone\SinglePostProcessor;
        $stubResponse = file_get_contents("/var/www/html/wp-content/plugins/gatestone/tests/unit/stubWith5Comments.html");
        $commentsArray = $SinglePostProcessor->parserForComments($stubResponse);
        $expectedCommentsArray = array(
            array(
                'ID'        => 1880,
                'userName'  => "Dr. Angie Mesih - Iskander",
                'dateTime'  => "Nov 5, 2010 at 03:50",
                'content'   => "<p>I agree with a good portion of your commentary -- I feel that societal norms still demean women of all faiths. I tried to wear a head-scarf but couldn't get over the feeling of separation from normalcy. I follow the Koran and try to study it as much as possible to cultivate a greater understanding of the laws of Allah, and thus be able to question interpretations of verses and hand-me-down rules. While I believe that it takes courage to live as a person of faith in today's world, it takes greater courage to search for the truth behind the veil.</p>",
                'replyTo'   => FALSE
            ),
            array(
                'ID'        => 710,
                'userName'  => "Imtiaz",
                'dateTime'  => "Mar 3, 2010 at 21:35",
                'content'   => "<p>Wonderful article.. :)</p>",
                'replyTo'   => FALSE
            ),
            array(
                'ID'        => 515,
                'userName'  => "Larry Roberts",
                'dateTime'  => "Nov 18, 2009 at 10:09",
                'content'   => "<p>It is high time we recognized these wholly immoral texts for what they are: ancient mythology that is not relevant to civlized people.</p>",
                'replyTo'   => FALSE
            ),
            array(
                'ID'        => 100,
                'userName'  => "Yusuf Yacub",
                'dateTime'  => "Apr 2, 2009 at 13:45",
                'content'   => "For the record the arabic Quran says nothing in Surah Ansab( not hijjab) verse 33:59 about a women not being recognized. That is a translators opinion based on Hadith presented in ibin kathirs tafsir of Quran. Jazakallah for you time may Allah forgive our sins and give us Jannah, and protect us from jahannam and the athab of the grave...Ameen 

",
                'replyTo'   => FALSE
            ),
            array(
                'ID' => 97,
                'userName' => "Yusuf Yacub",
                'dateTime' => "Apr 2, 2009 at 11:16",
                'content' => "You admit Allah said to cover but yet you advise the opposite. This is the definition of disbelief. May Allah guild you back to the fold of Islam and forgive you for this sin... Fear the fire not a veil men and women are both commanded to dress modestly. The first great scholors of Islam were women \"Aisha (RA) the four most narrator of Hadith; veiled and intelligent. Khawlah (ra) a stronge female warrior in the conquest of Syria also veil. They were never week but the best of women veil and pious soldiers of Allah. Your mothers oppression was do to your fathers lack of Islamic knowledge. He was the oppressor not your mothers veil. Her oppession was mental. And now shaitan has done the same to you and most the Ummah male and female. 1 00% sunnah for male and female alike. 100% obedience to Allah. Break your mental chains of oppression you fathers shaitonic mindset still inslaves you in your disobedieance to Allah. May Allah unlock you heart and ears, and lift the veil from your eyes, and give your the power to veil every thing else...Ameen ",
                'replyTo'   => FALSE
            )
        );
        $this->assertSame($expectedCommentsArray, $commentsArray);
    }

    /**
     * @test
     * it should return the comments from a post with replies
     */
    public function isShouldParseTheCommentsFromAPostWithReplies(){
        //Canonical URL: https://www.gatestoneinstitute.org/12341/khaled-montaser
        $SinglePostProcessor = new Gatestone\SinglePostProcessor;
        $stubResponse = file_get_contents("/var/www/html/wp-content/plugins/gatestone/tests/unit/stubWithReplyComment.html");
        $commentsArray = $SinglePostProcessor->parserForComments($stubResponse);
        $expectedCommentsArray = array(
            array(
                'ID' => 125478,
                'userName'  => "Warren s Pugh",
                'dateTime'  => "May 27, 2018 at 15:53",
                'content'   => "<p>A breath of fresh air from the an intelligent Egyptian. Wonder how he feels about Copts?</p>",
                'replyTo'   => FALSE
            ),
            array(
                'ID' => 124734,
                'userName'  => "Michael Godfrey",
                'dateTime'  => "May 23, 2018 at 09:37",
                'content'   => "<p>Brave and wise words. In my own homeland, the UK, Dr. Montaser would probably even now be having his collar felt one of the special squads of \"hate speech\" police tasked with nipping any criticism of Islam, however justifiable, in the bud.</p>
<p>This is a religion, ideology and political movement out of step with the ethos of those civilised, tolerant, democratic Western societies to which so many of its followers have fled - and are still fleeing to escape the bloody sectarian conflicts in their own backyards.</p>
<p>Ordinary citizens across the UK and Europe are at last starting to wake up to downside - social and cultural as well as financial - of laying down the welcome mat for migrants less interested in integration than the establishment of a global Caliphate.</p>",
                'replyTo'   => FALSE
            ),
            array(
                'ID' => 124732,
                'userName'  => "John Miller",
                'dateTime'  => "May 23, 2018 at 09:07",
                'content'   => "<p>It is misleading to suggest that because Hindu and Buddhist fundamentalists do not blow themselves up they are any less dangerous that the misguided followers of Islam who do. Any student of contemporary Christian persecution, for example in India and Thailand, will readily bear testimony to the ferocity and barbarity of attacks against peaceful followers of Jesus by these other philosophies. I do respect A.Z. Mohammed's analysis of his stated facts, but at the root of all these so-called religions of peace there is an intolerance of the Christian faith lying just below the surface and ready to ignite into violence. The notion of salvation through undeserved grace and by faith alone insults man's arrogant self confidence that he can be the author of his own salvation.</p>",
                'replyTo'   => FALSE
            ),
            array(
                'ID' => 125114,
                'userName'  => "Sola Fide",
                'dateTime'  => "May 26, 2018 at 10:55",
                'content'   => "<p>With reference to your last sentence, I suspect that you're criticizing Christian doctrine. Fair enough, but if you undertake an expositional study of Romans, Paul makes it very clear (chapters 1 through 3) that it was impossible for man to be the author of his own salvation, and that the only way to achieve it was to accept that the blood spilled at the crucifixion of Jesus Christ was for our sins, and His subsequent resurrection, for our eternal life, as the only door to God's offered salvation.</p>
<p>This is the basis of Christian faith. So, I suggest that, rather than man's arrogant self confidence in his being the author of his own salvation (i.e. through works), we should recognize that it is impossible, and that faith and acceptance of Christ are the criteria by which we will be judged.</p>",
                'replyTo'   => 124732
            )
        );
        $this->assertSame($expectedCommentsArray, $commentsArray);
    }

    /**
     * @test
     * it should return the sidebar
     */
    public function isShouldParseTheSidebar(){
        $SinglePostProcessor = new Gatestone\SinglePostProcessor;
        $stubResponse = file_get_contents("/var/www/html/wp-content/plugins/gatestone/tests/unit/stub-1.html");

        $sidebarDiv = $SinglePostProcessor->parseSidebarAd($stubResponse);
        //it's the only div with the text "iranhumanrights.org" in it
        //just get the div
        $expectedSidebar = '<div style="margin:0 0 15px 0; padding-bottom: 10px; border-bottom:1px solid gray; text-align:center; ">
<a href="https://www.iranhumanrights.org/2015/05/atena-daemi-2/" target=_blank style="text-decoration:none; color:black;">
<div style="margin:0 12px 7px 12px; font-size:130%;"><b style="color:#B60505;">FREE ATENA DAEMI!</b></div>
<div style="margin:0 16px 10px 16px; line-height:1.3; text-align:left;">Atena Daemi, a popular 29-year-old women\'s rights activist and campaigner against the death penalty, was violently re-arrested by Iranian authorities on November 26, 2016. In September, an Iranian appeals court sentenced Ms. Daemi to seven years in prison for her peaceful activism.
</div>
<img src="https://www.iranhumanrights.org/wp-content/uploads/10672213_737992909600218_3667890679649800134_n2-1-e1431964851706.jpg" border="0" style="margin:0; width:100%; max-width:350px;" >
</a>
</div>
';
        $this->assertEquals($expectedSidebar, $sidebarDiv);
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