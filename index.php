<?php

/*
Plugin Name: JohnDee Content
Plugin URI: mailto:technohub.php@gmail.com
Description: This Plugin will automatically insert data into media citations post type.
Author: JohnDee
Version: 1.7.2
Author URI: mailto://technohub.php@gmail.com
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
ini_set('max_execution_time', '0');
// example of how to use advanced selector features
include(plugin_dir_path(__FILE__). 'dom.php');
function activate_myplugin()
{
error_reporting(-1);

// nested selector
$str = <<<HTML
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://nypost.com/2019/03/13/the-college-scandal-is-about-a-lot-more-than-just-bribery-and-other-commentary/">Mideast watch: PA's Abbas Stands 'Trial' for Treason</a></h1>
<p style="margin:0;">by <b>Post Editorial Board</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">March 13, 2019</span> &nbsp;�&nbsp; <i>The New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Hamas has made no secret of its desire to put Palestinian Authority President Mahmoud Abbas on trial and hang him for "betraying" the Palestinians through "collaboration" with Israel. But as the Gatestone Institute's Khaled Abu Toameh notes, Abbas "is not going to show up in the Hamas-ruled Gaza Strip anytime soon" and "hand himself over." So a Hamas affiliate last week held a mock trial of Abbas, attended by "hundreds of Palestinians, including heads of clans, university students and employees whose salaries have been cut by Abbas." Not surprisingly, Abbas was "convicted" and sentenced to death. This may seem like some bizarre comedy act, but it's actually "designed to send a signal" to "any Palestinian who even thinks of making peace with Israel or recognizing its right to exist" that he's "signing his own death warrant."</p></div></div>


</div>

<a name="toc_item_13772"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://nypost.com/2019/02/01/the-push-for-legal-until-birth-abortion-and-other-commentary/">Foreign desk: How the Palestinians Prepare for Peace</a></h1>
<p style="margin:0;">by <b>Post Editorial Board</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">February 1, 2019</span> &nbsp;�&nbsp; <i>The New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Palestinian leaders "clearly seem emboldened by the fact that the international community and media are oblivious to the plight of Palestinian journalists," reports Khaled Abu Toameh at the Gatestone Institute. Indeed, the Palestinian Authority is not only arresting and intimidating Palestinian journalists in the West Bank, it's also waging a campaign against Arab journalists from abroad who visit Israel. PA leaders know too well that "the only stories that attract the world's attention are those in which Israel is involved." The crackdown is aimed at "silencing critics and deterring journalists from reporting on sensitive issues such as financial corruption and human rights violations by the Palestinian Authority and Hamas." Sadly, it's "achieved its goal," as most journalists under the PA and Hamas "are afraid publicly to voice any form of criticism of their leaders."</p></div></div>


</div>

<a name="toc_item_13773"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://nypost.com/2019/01/08/cuomo-may-be-the-strongest-2020-candidate-and-other-commentary/">Foreign desk: The Palestinians' Uncivil War</a></h1>
<p style="margin:0;">by <b>Post Editorial Board</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 8, 2019</span> &nbsp;�&nbsp; <i>The New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Fatah and Hamas, the Palestinians' major ruling groups, are now saying "they are done with each other" and "the divorce is final," reports Khaled Abu Toameh at the Gatestone Institute. Indeed, they have reached "a new level of mutual loathing" that seems to surpass even what they feel toward Israel. Which is why the only "peace process" that the Middle East "is crying out for" is one "that would end their bloody, internecine war." Because the Palestinians "cannot make peace with Israel while they are busy killing their own people." But this rivalry "is not over who will bring democracy and a better economy to the Palestinians" � it's "a struggle over money, power and ego." And it won't end until both sides "come up with new leaders who actually give a damn about their people."</p></div></div>


</div>

<a name="toc_item_13774"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://nypost.com/2018/12/13/the-ignored-sex-abuse-scandals-in-chicago-schools-and-other-commentary/">Mideast watch: Hamas' Plan to Take the West Bank</a></h1>
<p style="margin:0;">by <b>Post Editorial Board</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 13, 2018</span> &nbsp;�&nbsp; <i>The New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">It "seems clear by now" that Hamas is behind some of the recent deadly terror attacks against Israelis in the West Bank � given that, as Khaled Abu Toameh notes at the Gatestone Institute, they "serve the interests of Hamas and its friends and sponsors, especially the Palestinian Islamic Jihad organization and Iran." In fact, Hamas has a not-so-secret plan to export its "armed struggle" from Gaza and ultimately take control of the West Bank. And that's been aided by a fresh infusion of $30 million in cash from Qatar and the UN General Assembly's failure to adopt an anti-Hamas resolution. Says Toameh: "These two steps have left Hamas leaders laughing all the way to the next shooting attack on Israel." Which is why not just Israel, but also Palestinian Authority President Mahmoud Abbas, has reason to be worried.</p></div></div>


</div>

<a name="toc_item_13775"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.express.co.uk/news/politics/1048929/url-brexit-news-theresa-may-jacob-rees-mogg-parliament-vote">May NEEDS support of THESE ministers to survive as Prime Minister � expert claim</a></h1>
<p style="margin:0;">by <b>Ciaran McGrath</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 22, 2018</span> &nbsp;�&nbsp; <i>The Daily Express</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">In an article written on the website of the Gatestone Institute International Policy Council, scholar Malcolm Lowe referred to the two distinct factions within her party who were posing a huge threat to Mr May's Brexit divorce deal, which she is due to discuss with European Union leaders at a summit on Sunday. The first consisted of MPs from the European Research Group (ERG), chaired by Jacob Rees-Mogg � MPs the Prime Minister is highly unlikely to win the support of when she tries to push her proposals through Parliament next month, assuming they are ratified this weekend. Mr Lowe added: "The second group consists of five senior ministers who decided not to resign alongside others on November 15, but to stay on in the hope of persuading May to seek modification of the Protocol, although both she and her EU counterparts insist that it is too late to do so."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.express.co.uk/news/politics/1048929/url-brexit-news-theresa-may-jacob-rees-mogg-parliament-vote" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_13776"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://nypost.com/2018/10/18/democrats-supreme-court-packing-fantasy-and-other-comments/">Mideast watch: Why Palestinians Lack a Parliament</a></h1>
<p style="margin:0;">by <b>Post Editorial Board</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 18, 2018</span> &nbsp;�&nbsp; <i>The New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Parliaments may be "among the strongest manifestations of a democracy," but as Khaled Abu Toameh at the Gatestone Institute notes, for the past 11 years, the Palestinians have not had a functioning one. Yes, there's a 132-member Palestinian Legislative Council, but its last election was in 2006 and was won by Hamas, which a year later violently seized control of Gaza. Since then, "the Palestinian parliament has not been functioning properly," leaving President Mahmoud Abbas to pass laws by "presidential decree." It also leaves him unaccountable to anyone, making him "an autocratic and totalitarian president." And it leaves the Palestinian people "with no address to express their grievances," save social media � especially now that Abbas' loyalists are moving to formally dissolve the PLC for good.</p></div></div>


</div>

<a name="toc_item_13777"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://nypost.com/2018/10/10/how-haleys-un-vision-clashed-with-trump-and-other-comments/">Foreign desk: How Iran Plans To Take Gaza</a></h1>
<p style="margin:0;">by <b>Post Editorial Board</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 10, 2018</span> &nbsp;�&nbsp; <i>The New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Anyone hoping that removing Hamas from Gaza would improve the chances for Israeli-Palestinian peace is "in for a big disappointment," suggests Khaled Abu Toameh at the Gatestone Institute. Because Hamas "is not the only terrorist group in the coastal enclave." Remove Hamas from power "and you will most likely end up having to deal with Palestinian Islamic Jihad," which is "not more moderate" and is "dependent on Iran's political, financial and military backing." Through PIJ, which Tehran considers "its real ally," Iran "inserts its tentacles in the internal affairs of the Palestinians." This is the crucial factor that anyone seeking "a solution to the catastrophe called Gaza" must understand� unless they'd rather "inhabit some alternate reality" in which "all would be well if Israel would only ease restrictions on the Gaza Strip."</p></div></div>


</div>

<a name="toc_item_13778"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://nypost.com/2018/03/26/bolton-can-finally-kill-the-iran-deal-and-other-comments/">Mideast desk: Why Hamas Refuses to Disarm</a></h1>
<p style="margin:0;">by <b>Post Editorial Board</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">March 26, 2018</span> &nbsp;�&nbsp; <i>The New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">If Palestinian Authority President Mahmoud Abbas seriously thought his rivals in Hamas would lay down their weapons or cede control over Gaza, he's "living in an illusion," says the Gatestone Institute's Khaled Abu Toameh. Which is why the "reconciliation agreement" Abbas signed with Hamas last October "will never be translated into facts on the ground." Fact is, Hamas "is prepared to give Abbas anything he wants" in Gaza "except for security control," which is "a red line not to be crossed" for two reasons. One is the desire to continue the "armed struggle" against Israel. But Hamas also knows that "the moment it hands over security control" to Abbas, "many of its leaders and members will either be killed or imprisoned" by his forces.</p></div></div>


</div>

<a name="toc_item_11887"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://freebeacon.com/politics/conor-lamb-accused-israel-terrorism-targeting-innocent-civilians/">Conor Lamb Accused Israel of 'Terrorism,' Targeting 'Innocent Civilians'</a></h1>
<p style="margin:0;">by <b>Brent Scher</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">February 12, 2018</span> &nbsp;�&nbsp; <i>Washington Free Beacon</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Pennsylvania Democrat Conor Lamb wrote in a 2002 post on his college newspaper's website that the Israeli government committed "terrorism" and was intentionally targeting civilians in the Gaza Strip.</p><p style="padding:0; margin:0 0 10px 0;">The comments by Lamb, currently running for Congress in a special election taking place next month, were made in response to a pro-Israel ad published in the <i>Daily Pennsylvanian</i>, a University of Pennsylvania paper, which Lamb said was "disheartening to see."</p></div></div>


</div>

<a name="toc_item_11395"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://nationalpost.com/opinion/robert-fulford-i-watched-anti-semitism-wither-now-im-seeing-it-come-back-to-life">I watched anti-Semitism wither. Now I'm seeing it come back to life.</a></h1>
<p style="margin:0;">by <b>Robert Fulford</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 17, 2017</span> &nbsp;�&nbsp; <i>National Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">One day in the 1940s a man knocked on the door of my family's house in the east end of Toronto, seeking signatures for a petition. After he said the petition was an attempt to keep Jews off our street, my parents declined to sign and he went away. Later I asked my mother why he and others were against Jews. She answered with probably the least offensive accusation she had heard about them: "People say they give loud parties." She was not interested in the petitioner's more virulent arguments.</p><p style="padding:0; margin:0 0 10px 0;">That was my first brush, at age 10, with anti-Semitism, a prejudice I've tended to watch with great interest over the years. By the time I was grown it was much diminished. The barriers to Jews in the professions and business fell, one after another. Eventually, it seemed reasonable to say that, while anti-Semitism still existed, it no longer played a significant role in shaping Canadian society.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://nationalpost.com/opinion/robert-fulford-i-watched-anti-semitism-wither-now-im-seeing-it-come-back-to-life" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_11235"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.usatoday.com/story/opinion/2017/10/27/facebook-censored-cross-your-countrys-government-and-they-might-censor-you-too-james-bovard-column/795271001/">Facebook censored me. Criticize your government and it might censor you too.</a></h1>
<p style="margin:0;">by <b>James Bovard</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 27, 2017</span> &nbsp;�&nbsp; <i>USA Today</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Responding to Russian-funded political advertisements, Facebook chairman Mark Zuckerberg declared last month that "we will do our part to defend against nation states attempting to spread misinformation." But Facebook is effectively sowing disinformation by kowtowing to foreign regimes and censoring atrocities such as ethnic cleansing in Myanmar. In the name of repressing fake news and hate speech, Facebook is probably suppressing far more information than Americans realize.</p><p style="padding:0; margin:0 0 10px 0;">Facebook blocked a post of mine last month for the first time since I joined it nine years ago. I was seeking to repost a blog article I had written on Janet Reno, the controversial former attorney general who died last year. I initially thought that Facebook was having technical glitches (no novelty). But I checked the page and saw the official verdict: "Could not scrape URL because it has been blocked."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.usatoday.com/story/opinion/2017/10/27/facebook-censored-cross-your-countrys-government-and-they-might-censor-you-too-james-bovard-column/795271001/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_11124"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://nypost.com/2017/10/04/jimmy-kimmels-divisive-hate-why-dems-lose-on-guns-other-comments/">Foreign desk: A Palestinian State Within a State?</a></h1>
<p style="margin:0;">by <b>Post Editorial Board</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 4, 2017</span> &nbsp;�&nbsp; <i>The New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Hamas and Mahmoud Abbas' Palestinian Authority "are now headed, willingly or unwillingly, toward plunging the Palestinians into a similar scenario as in Lebanon," contends Khaled Abu Toameh at the Gatestone Institute. There, "Hezbollah maintains a separate mini-state of its own," with "its own army and territory." Now, an Egyptian-sponsored "reconciliation" deal "paves the way for creating a mini-state within a mini-state in the Gaza Strip," in addition to the PA mini-state that exists in parts of the West Bank. With Abbas gaining civilian control and Hamas retaining security control, "Hamas could not have asked for a better deal," given that it's "effectively been absolved of any responsibility" toward Gaza's population. Says Toameh: "Hezbollah and Hamas must be laughing their heads off as, under weak and impotent governments, they see their power grow."</p></div></div>


</div>

<a name="toc_item_11013"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.arabnews.com/node/1162501/world">Segregation plan defended after UK prison system dubbed 'Harvard for radicals'</a></h1>
<p style="margin:0;">by <b>Alicia Buller</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">September 17, 2017</span> &nbsp;�&nbsp; <i>Arab News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">LONDON: The author of a landmark review of extremism in British prisons has defended a controversial strategy to separate "subversive offenders" from other inmates.</p><p style="padding:0; margin:0 0 10px 0;">The UK Ministry of Justice opened its first separation center in July and plans to open two more in the coming months � housing a total of 28 inmates.</p><p style="padding:0; margin:0 0 10px 0;">It comes as Prime Minister Theresa May put Britain on its highest security footing following a London commuter train bombing that injured 30 people on Friday.</p><p style="padding:0; margin:0 0 10px 0;">Separating inmates was one of the central recommendations of a review into extremism in prisons led by Ian Acheson, a former prison governor, in 2016.</p><p style="padding:0; margin:0 0 10px 0;">But the strategy has attracted criticism from some experts who claim it will fuel radicalization.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.arabnews.com/node/1162501/world" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_11012"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.foxnews.com/opinion/2017/09/16/london-bombing-shows-danger-islamification-in-britain-and-europe-is-us-next.html">London bombing shows danger of Islamification in Britain and Europe. Is the US next?</a></h1>
<p style="margin:0;">by <b>Julienne Davis</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">September 16, 2017</span> &nbsp;�&nbsp; <i>Fox News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The terrorist bombing Friday of a train on the London Underground, which injured 30 people � including one of my very close friends � was yet more evidence of a painful truth: the Islamification of the United Kingdom and Europe is well under way, changing the very character of the continent that gave birth to Western Civilization.</p><p style="padding:0; margin:0 0 10px 0;">To escape this disturbing transformation of Britain � a place I had come to love after spending much of my adult life there, even becoming a dual British-U.S. citizen in 2000 � my English husband and I moved back to America at the end of 2006. I felt like a bit of a coward, but I did not want to live in an England changing dramatically for the worse before my eyes.</p><p style="padding:0; margin:0 0 10px 0;">Yet now I fear that the United States will be next in line to see our wonderful traditions of freedom, tolerance, respect for human rights and the rule of law threatened by the regressive and oppressive ideology of Islamic fundamentalism.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.foxnews.com/opinion/2017/09/16/london-bombing-shows-danger-islamification-in-britain-and-europe-is-us-next.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_11014"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.santafenewmexican.com/opinion/my_view/wrestling-jerusalem-moral-myopia-at-work/article_07a2cbd4-a694-52c4-9f93-6acfa5161baf.html">'Wrestling Jerusalem': Moral myopia at work</a></h1>
<p style="margin:0;">by <b>Kristina Harrigan</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">September 15, 2017</span> &nbsp;�&nbsp; <i>The Santa Fe New Mexican</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Last month, Creativity for Peace and the Council on International Relations sponsored <i>Wrestling Jerusalem</i>, a movie based on a play by Aaron Davidman.</p><p style="padding:0; margin:0 0 10px 0;">The play misrepresents the Arab-Israeli conflict and demonstrates an only too-widespread moral blindness about Israeli and Palestinian relations. The author repeatedly channels the views of Israelis and Palestinians without any comment, thus indulging in the fiction that these views, and their portrayal of the situation on the ground, are factually and morally equivalent.</p><p style="padding:0; margin:0 0 10px 0;">Two examples should suffice to illustrate the lack of equivalence.</p><p style="padding:0; margin:0 0 10px 0;">The play begins with a recital of "catastrophes," "massacres" and "what ifs" in antiphonal fashion; alternating Palestinian and Israeli voices. The 1929 massacre of Jews in Hebron is followed by the 1994 massacre of Muslims in Hebron; the 1982 massacre at Sabra and Shatila is followed by the 2003 massacre at the Tel Aviv bus station.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.santafenewmexican.com/opinion/my_view/wrestling-jerusalem-moral-myopia-at-work/article_07a2cbd4-a694-52c4-9f93-6acfa5161baf.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<div id="more_articles"><a name="toc_item_10904"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.theaustralian.com.au/news/inquirer/moorish-past-makes-spain-a-focus-for-islamic-state/news-story/6e5596487d99ea1b0919f2cb1ef61cfc">With Islamic State threat, Moorish past haunts Spain</a></h1>
<p style="margin:0;">by <b>Bruce Loudon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 28, 2017</span> &nbsp;�&nbsp; <i>The Australian</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The rhetoric could hardly be more menacing. "Spain is the land of our forefathers, and we are going to take it back with the power of Allah," it declares.</p><p style="padding:0; margin:0 0 10px 0;">Since the establishment of the Spanish Inquisition in 1478, it adds, "Spain has done everything to �destroy the Koran ... Spain is a criminal state that usurps our land." It goes on to claim Muslims have been "burned alive" in the Iberian nation and demands that faithful jihadists should set out to kill Spanish "infidels" by "reconnoitring airline and train routes for attacks" and "poisoning food and water with insecticides".</p><p style="padding:0; margin:0 0 10px 0;">The source for this demented diatribe is of course Islamic State. Thankfully, there is most of the time a great gap between what the evil Islamist terrorist organisation's monstrous propaganda machine churns out and what it actually succeeds in doing.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.theaustralian.com.au/news/inquirer/moorish-past-makes-spain-a-focus-for-islamic-state/news-story/6e5596487d99ea1b0919f2cb1ef61cfc" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_10882"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://nypost.com/2017/08/21/trumps-good-start-on-afghanistan-the-lefts-nazi-hunt-freakout-and-other-comments/">Foreign desk: Suicide Bombers Are Targeting Hamas</a></h1>
<p style="margin:0;">by <b>Post Editorial Board</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 21, 2017</span> &nbsp;�&nbsp; <i>The New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The terrorist movement of Hamas "is finally getting a dose of its own medicine," reports Khaled Abu Toameh at the Gatestone Institute, "in the form of suicide bombing" by ISIS "targeting its members in the Gaza Strip." For Hamas, "suicide bombings are a noble deed when they are carried out by its members and the victims are Jews." But "now that the shoe is on the other foot, things look a bit different." Hamas, "which is not used to being targeted by suicide bombers, has employed powerful rhetoric to condemn the terror attack and those behind it" � which it claims is Israel. This "false accusation is an excellent example of the Palestinian modus operandi � at all cost, divert attention from a disturbing truth," namely that "ISIS jihadis have long been operating under its rule in the Gaza Strip."</p></div></div>


</div>

<a name="toc_item_10877"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.yahoo.com/news/isis-attack-barcelona-history-islam-spain-holds-answers-181326373.html">Why did ISIS attack Barcelona? The history of Islam in Spain holds answers.</a></h1>
<p style="margin:0;">by <b>Melissa Rossi</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 18, 2017</span> &nbsp;�&nbsp; <i>Yahoo! News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;" type="text" content="BARCELONA, Spain � When the ominous maps first appeared two years ago, residents of Barcelona scoffed, if they noticed the tabloid news about their home at all. Drawn by ISIS, the maps showed Spain and Portugal in black, signifying territory controlled by the jihadi terror group. And the maps came with a promise: " we="" will="" take="" spain="" back"="" �="" by="" 2020,="" isis="" said."="" data-reactid="32">BARCELONA, Spain � When the ominous maps first appeared two years ago, residents of Barcelona scoffed, if they noticed the tabloid news about their home at all. Drawn by ISIS, the maps showed Spain and Portugal in black, signifying territory controlled by the jihadi terror group. And the maps came with a promise: "We will take Spain back" � by 2020, ISIS said.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.yahoo.com/news/isis-attack-barcelona-history-islam-spain-holds-answers-181326373.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_10534"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.dailymail.co.uk/news/article-4605624/Sex-crimes-migrants-soar-Germany.html">Sex crimes by migrants in Germany have doubled to over 3,000 in a single year, official figures show</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">June 15, 2017</span> &nbsp;�&nbsp; <i>The Daily Mail</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;" id="ext-gen120">Sex offences committed by migrants in Germany have doubled to more than 3,000 in a single year, official figures have shown.</p><p style="padding:0; margin:0 0 10px 0;">A new report issued by the German Government states that there were 3,404 sex crimes involving migrants last year compared with 1,683 in 2015.</p><p style="padding:0; margin:0 0 10px 0;">The crimes range from less serious crimes up to rape.</p><p style="padding:0; margin:0 0 10px 0;">According to HeatStreet, data analysis by the Gatestone Institute think tank, the most frequently recorded nationalities were Syrian, Afghan, Iraqi, Pakistani, Iranian, Algerian and Moroccan.</p><p style="padding:0; margin:0 0 10px 0;">This comes after the number of migrant criminal suspects in Germany soared by more than 50 per cent in 2016, according to data from the Interior Ministry.</p><p style="padding:0; margin:0 0 10px 0;">Police were hunting 174,000 suspects classed as immigrants in 2016, the data showed, 52.7 per cent more than in the previous year.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.dailymail.co.uk/news/article-4605624/Sex-crimes-migrants-soar-Germany.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_13779"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.dailymail.co.uk/news/article-4449330/Murder-shocked-Germany-leaders-deny-migrant-crisis.html">The murder that shocked Germany - and why its leaders are still in denial over migrant crisis: Medical student, 19, was raped and throttled to death by Afghan in German town with signs proudly saying 'refugees welcome'</a></h1>
<p style="margin:0;">by <b>Sue Reid</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">April 26, 2017</span> &nbsp;�&nbsp; <i>The Daily Mail</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Soon after 11pm, a BMW police car with lights flashing races through a pretty park in the university city of Freiburg at the edge of Germany's Black Forest.</p><p style="padding:0; margin:0 0 10px 0;">Out jump four officers with torches who chase five young men stumbling under the trees, swigging vodka and shouting loudly in Arabic.</p><p style="padding:0; margin:0 0 10px 0;">I watch as one aggressive drunk is handcuffed before being frogmarched to an ambulance and taken to hospital. The others show their identity papers and are then thrown out into a side street, where they lunge at a small woman wheeling her suitcase from the railway station nearby.</p><p style="padding:0; margin:0 0 10px 0;">She was cycling home at 3am from a party at her university when she was ambushed, in a crime that shocked Germany</p><p style="padding:0; margin:0 0 10px 0;">The blonde, in her 20s, neatly side-steps them and walks away to safety. This time.</p><p style="padding:0; margin:0 0 10px 0;">It's the end of another long evening in Freiburg, which has proudly supported German Chancellor Angela Merkel's decision to open her country's door to migrants from all over the globe.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.dailymail.co.uk/news/article-4449330/Murder-shocked-Germany-leaders-deny-migrant-crisis.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_10176"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.foxnews.com/world/2017/04/07/sweden-torn-over-how-to-handle-incoming-terrorists.html">Sweden torn over how to handle incoming terrorists</a></h1>
<p style="margin:0;">by <b>Brooke Singman</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">April 7, 2017</span> &nbsp;�&nbsp; <i>Fox News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">As investigators piece together a possible motive in Friday's apparent terror attack in Stockholm, government officials have disagreed on the right way to handle terrorists entering the country � with one lawmaker suggesting they should be "integrated" back into society.</p><p style="padding:0; margin:0 0 10px 0;">Swedish Minister of Culture and Democracy Alice Bah Kuhnke, reportedly made the remarks in early March.</p><p style="padding:0; margin:0 0 10px 0;">"First of all there are suspicions of crimes, they need to be investigated � and any such crimes should be punished," Kuhnke said. "But after that we need structures locally, such as social services, around our country to integrate them back into our democratic society."</p><p style="padding:0; margin:0 0 10px 0;">Liberal Party leader Jan Bj�rklund called the comments "ignorant". Prime Minister Stefan L�fven said Kuhnke's words were misinterpreted, and that security for Sweden's citizens was paramount.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.foxnews.com/world/2017/04/07/sweden-torn-over-how-to-handle-incoming-terrorists.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_9643"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.gatestoneinstitute.org/9643/we-havent-seen-nothing-yet-geert-wilders-warns">'We haven't seen nothing yet': Geert Wilders warns 2017 will have even worse terror attacks</a></h1>
<p style="margin:0;">by <b>Siobhan McFadyen</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 24, 2016</span> &nbsp;�&nbsp; <i>Express</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">OUTSPOKEN Dutch politician Geert Wilders has warned that Europe is unprepared for the scale of terror attacks it is facing and that 2017 will bring more bloodshed.</p><p style="padding:0; margin:0 0 10px 0;"></p><p style="padding:0; margin:0 0 10px 0;">And he's calling for German leader Angela Merkel to be driven out of power in a shocking speech where he slams the political establishment.</p><p style="padding:0; margin:0 0 10px 0;">In an essay for US think tank the Gatestone Institute Mr Wilders says that politicians are failing to prosecute criminals falsely seeking asylum.</p><p style="padding:0; margin:0 0 10px 0;">And he says politicians across the bloc are refusing to accept the scale of the "self-inflicted problem" insisting a political revolution is brewing in Europe.</p> <p style="padding:0; margin:0 0 10px 0;">He said: "There is little doubt that 2017 will bring Germany and the entire West more violence, more attacks on our women and daughters, more bloodshed, more tears, more sorrow.</p><p style="padding:0; margin:0 0 10px 0;">"The terrible truth is that, in all likelihood, we ain't seen nothing yet.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.gatestoneinstitute.org/9643/we-havent-seen-nothing-yet-geert-wilders-warns" class="continue">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_9642"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nationalreview.com/article/443268/germany-islamist-enclaves-europe-jihad-terrorism-problem-growing">German Lesson: Islamist Enclaves Breed Jihadism</a></h1>
<p style="margin:0;">by <b>Andrew C. McCarthy</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 22, 2016</span> &nbsp;�&nbsp; <i>National Review Online</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">German investigators have named a Tunisian refugee, Anis Amri, as the jihadist whom they suspect carried out Tuesday's mass-murder attack. Amri is believed to be the man who drove a truck through a Christmas festival in Berlin, killing twelve and wounding four dozen others in an atrocity reminiscent of the attack in July, when 86 people were killed at a Bastille Day celebration in Nice.</p><p style="padding:0; margin:0 0 10px 0;">Notwithstanding that they arrested and held the wrong man for several hours, it turns out that German authorities have been well aware that Amri posed a danger. He is yet another of what my friend the terrorism analyst Patrick Poole has dubbed "known wolves" � Islamic terrorists who were already spotlighted by counterterrorism investigators as likely to strike.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.nationalreview.com/article/443268/germany-islamist-enclaves-europe-jihad-terrorism-problem-growing" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_9453"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.theaustralian.com.au/opinion/editorials/time-to-scrutinise-foreign-aid/news-story/2b9870053aa1ce7e7cdd69e8b08d3b0a">Time to scrutinise foreign aid</a><br>
<span style="font-size:85%">Editorial</span></h1>
<p style="margin:0;"><span style="white-space:nowrap;">November 29, 2016</span> &nbsp;�&nbsp; <i>The Australian</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">If the Israelis are right, the Australian taxpayer has been one of the biggest (unwitting) funders of the terror group Hamas in Gaza. The claim is that money given to World Vision for farms and other economic projects has been diverted to build a military base, tunnels and weapons for Hamas. The head of World Vision Gaza, Mohammad El Halabi, stands accused of funnelling \$US43 million ($57.4m) to Hamas since infiltrating the charity in 2010. These are serious allegations. Australia gives aid money to the Palestinian Authority to encourage the economic development without which a two-state solution cannot be viable. It is a destructive fraud if those funds are used to bankroll terror.</p><p style="padding:0; margin:0 0 10px 0;">There is much at stake. Through AusAID and the Department of Foreign Affairs and Trade, the Australian government has been the world's single biggest donor to World Vision in Jerusalem, the West Bank and Gaza, as we reported yesterday.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.theaustralian.com.au/opinion/editorials/time-to-scrutinise-foreign-aid/news-story/2b9870053aa1ce7e7cdd69e8b08d3b0a" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_9394"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://video.foxnews.com/v/5219401444001/?#sp=show-clips">President-elect Trump and the refugee crisis</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">November 21, 2016</span> &nbsp;�&nbsp; <i>Fox News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;"><iframe src="//video.foxnews.com/v/video-embed.html?video_id=5219401444001" marginwidth="0" marginheight="0" scrolling="no" width="466" height="263" frameborder="0" __idm_id__="304789505"></iframe></p><p style="padding:0; margin:0 0 10px 0;">Defcon3: KT McFarland talks to the Gatestone Institute's Soeren Kern on the refugee crisis and US national security.</p></div></div>


</div>

<a name="toc_item_9269"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://nypost.com/2016/11/04/dems-selective-rage-at-russia-leftover-people-for-trump-and-other-notable-commentary/">Conservative take: Europe's New Blasphemy Courts</a></h1>
<p style="margin:0;">by <b>Post Editorial Board</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 4, 2016</span> &nbsp;�&nbsp; <i>New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">European nations are "seeing the reintroduction of blasphemy laws through both the front and back doors," writes London-based commentator Douglas Murray for The Gatestone Institute. British Olympic gymnast Louis Smith's career "has been put on hold and potentially ruined" because of a drunken video in which he and friends imitated Islamic prayer rituals. Murray questions the outrage over Smith's mockery of religion "in a country in which Monty Python's 'Life of Brian' is regularly voted the nation's favorite comic movie." Meanwhile, Dutch politician Geert Wilders is on trial for asking a crowd whether they wanted "fewer Moroccans" in their country. Agree with him or not, says Murray, "by prosecuting someone for saying what he said, the courts in Holland are effectively ruling that there is only one correct answer to the question."</p></div></div>


</div>

<a name="toc_item_9239"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.dailymail.co.uk/news/article-3893436/Angela-Merkel-pressure-refugee-policy-revealed-migrants-committed-142-500-crimes-Germany-six-months-2016.html">Angela Merkel under more pressure over refugee policy as it is revealed migrants committed 142,500 crimes in Germany during the first six months of 2016</a></h1>
<p style="margin:0;">by <b>Julian Robinson</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 1, 2016</span> &nbsp;�&nbsp; <i>Daily Mail</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Migrants in Germany have committed 142,500 crimes in just six months, police figures have revealed</p><p style="padding:0; margin:0 0 10px 0;">This was the equivalent of 780 crimes a day - an increase of nearly 40 percent over 2015, according to data from Germany's Federal Criminal Police Office</p><p style="padding:0; margin:0 0 10px 0;" id="ext-gen26">It comes as German chancellor Angela Merkel remains under pressure over her open-door policy on immigration amid concerns over how to integrate 900,000 newcomers who arrived last year.</p><p style="padding:0; margin:0 0 10px 0;">A separate report from late last year by the Federal Criminal Office found that migrants registered as living in Germany committed more than 200,000 crimes over the whole of 2015 with two-thirds involving theft counterfeiting and financial crimes.</p><p style="padding:0; margin:0 0 10px 0;">According to the Gatestone Institute, an international policy council, police in some parts of the country fear they are being stretched to the limit amid climbing crime figures.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.dailymail.co.uk/news/article-3893436/Angela-Merkel-pressure-refugee-policy-revealed-migrants-committed-142-500-crimes-Germany-six-months-2016.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_9235"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.express.co.uk/news/world/727263/Angela-Merkel-migrant-crisis-worsens-as-Germany-descends-into-lawlessness">'We are losing control of the streets' Merkel's Germany descends into lawlessness</a></h1>
<p style="margin:0;">by <b>Siobhan McFadyen</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 1, 2016</span> &nbsp;�&nbsp; <i>Express</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">During the first six months of 2016, migrants committed 142,500 crimes, according to the Federal Criminal Police Office.</p><p style="padding:0; margin:0 0 10px 0;">And the country has been hit by a spate of horrendous violent crime including rapes, sexual and physical assaults, stabbings, home invasions, robberies, burglaries and drug trafficking.</p><p style="padding:0; margin:0 0 10px 0;">Adding to the country's woes is the fact that thousands of people have gone missing after travelling to the country on invitation from the country's leader.</p><p style="padding:0; margin:0 0 10px 0;">Germany took in more than 1.1million migrants in the past year and parts of the country are crippled with a lack of infrastructure.</p><p style="padding:0; margin:0 0 10px 0;">Now the true reality is hitting home ahead of next year's elections as the far right surges in the polls threatening to topple the Christian Democratic Union (CDU) leader Mrs Merkel.</p><p style="padding:0; margin:0 0 10px 0;">According to a report by the international policy council the Gatestone Institute, local police in many parts of the country admit that they are stretched to the limit.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.express.co.uk/news/world/727263/Angela-Merkel-migrant-crisis-worsens-as-Germany-descends-into-lawlessness" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_9221"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.theaustralian.com.au/opinion/columnists/jennifer-oriel/open-borders-inevitably-stoke-xenophobia/news-story/4d7e85601106514769a8ae16d7ab82c4">Open borders inevitably stoke xenophobia</a></h1>
<p style="margin:0;">by <b>Jennifer Oriel</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 31, 2016</span> &nbsp;�&nbsp; <i>The Australian</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The Western world is edging towards a precipice. The postwar consensus that cast internationalism as a global ideal is unravelling. The Muslim migrant crisis has revealed that the political ideals of the West's ruling elite and the people they govern are not simply different but apparently opposed.</p><p style="padding:0; margin:0 0 10px 0;">Historically, such a clash of ideals between the governing and the governed tends to produce the mass suppression of dissidents by the elite, or a grassroots revolution from below. Each tendency has become amplified in the battle �between sovereign citizens and supranational elites over border policy.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.theaustralian.com.au/opinion/columnists/jennifer-oriel/open-borders-inevitably-stoke-xenophobia/news-story/4d7e85601106514769a8ae16d7ab82c4" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_9220"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://nypost.com/2016/10/27/how-a-dem-landslide-could-doom-school-reform-and-other-notable-commentary/">Mideast desk: No Outcry Over Palestinian Child Abuse</a></h1>
<p style="margin:0;">by <b>Post Editorial Board</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 27, 2016</span> &nbsp;�&nbsp; <i>New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Palestinian children in the West Bank and Gaza "do not dream about becoming doctors, pilots or engineers," writes Khaled Abu Toameh for the Gatestone Institute. "Rather, they dream of destroying Israel and 'liberating Palestine.' " Indeed, "an entire generation . . . has been raised on the glorification of suicide bombers and anyone who kills a Jew." Children, he notes, have long been "an integral part of 'military' parades held in the Gaza Strip." Yet none of this draws even a hint of criticism from human-rights groups or children's advocates like UNICEF, "whose declared goal is to 'work for a world in which every child has a fair chance in life and a right to survive, thrive and fulfill their potential.'"</p></div></div>


</div>

<a name="toc_item_8942"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nydailynews.com/opinion/nathan-diament-tax-dollars-fund-mideast-terror-article-1.2792743">How our tax dollars fund Mideast terror</a></h1>
<p style="margin:0;">by <b>Nathan Diament</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">September 15, 2016</span> &nbsp;�&nbsp; <i>New York Daily News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">American and Israeli government officials signed an agreement Wednesday that locks in the largest-ever package of U.S. military aid � $38 billion over the next decade � to Israel. This includes funds for missile defense systems, including the noted Iron Dome, that will protect against rockets fired by Hamas and Hezbollah and other terrorist groups.</p><p style="padding:0; margin:0 0 10px 0;">While this long-term aid agreement is worthy of applause, American taxpayers should be alarmed that the very same terrorist attacks on Israel are also being financed with American taxpayer dollars. According to a 2015 Congressional Research Service report, the Palestinians are among the largest recipients of international aid, with the U.S. contributing more than $5 billion in security assistance and bilateral economic aid since the mid-1990s.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.nydailynews.com/opinion/nathan-diament-tax-dollars-fund-mideast-terror-article-1.2792743" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_8998"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.ncregister.com/daily-news/christians-besieged">Christians Besieged: We Must Stand With the Suffering</a><br>
<span style="font-size:85%">Editorial</span></h1>
<p style="margin:0;"><span style="white-space:nowrap;">September 14, 2016</span> &nbsp;�&nbsp; <i>National Catholic Register</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">On March 25, 2016, Pope Francis marked Good Friday in Rome at the Colosseum. In his meditation on the <i>Via Crucis</i>, Francis prayed:</p><blockquote><p style="padding:0; margin:0 0 10px 0;">"O cross of Christ, today, too, we see you raised up in our sisters and brothers killed, burned alive, throats slit and decapitated by barbarous blades amid cowardly silence.</p><p style="padding:0; margin:0 0 10px 0;">"O cross of Christ, today, too, we see you in the faces of children, of women and people, worn out and fearful, who flee from war and violence and who often only find death and many Pilates who wash their hands."</p></blockquote><p style="padding:0; margin:0 0 10px 0;">The Pope's comments are a helpful reminder to all of us of the immense suffering of our Christian sisters and brothers across the globe. From North Korea and China to Nigeria and Sudan, from Iraq and Syria to Venezuela and Mexico, Christians are facing unprecedented levels of persecution.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.ncregister.com/daily-news/christians-besieged" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_8575"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://nypost.com/2016/07/27/a-feminist-pans-bills-speech-isis-shocking-church-attack-and-other-notable-commentary/">A feminist pans Bill's speech, ISIS' shocking church attack, and other notable commentary</a></h1>
<p style="margin:0;">by <b>Post Editorial Board</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 27, 2016</span> &nbsp;�&nbsp; <i>New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;"><b>Terrorist Watch: For ISIS, Everyone is a Target</b></p><p style="padding:0; margin:0 0 10px 0;">The murder of 84-year-old Fr. Jacques Hamel � his throat slit as he was forced to kneel at the altar � was shocking, even after all France has endured at the hands of Islamist terrorists over the past 18 months, writes Douglas Murray for The Gatestone Institute. But unlike the Charlie Hebdo massacre, there was no "provocation" to serve as a possible excuse. "An enemy willing to slaughter the most rollicking secularists and the most devout priest, both in their places of work," he writes, "is an enemy � extremist Islam � clearly intent not on some kind of tributary offering or suit for peace, but rather an enemy which seeks its opponents' total and utter destruction," no matter who they are.</p></div></div>


</div>

<a name="toc_item_8414"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.vanityfair.com/news/2016/07/are-we-at-the-start-of-a-tech-world-war">Are We at the Start of a Tech World War?</a></h1>
<p style="margin:0;">by <b>Nick Bilton</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 6, 2016</span> &nbsp;�&nbsp; <i>Vanity Fair</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;"></p><p style="padding:0; margin:0 0 10px 0;">During this past year, various theories have been posited to suggest that our current political mood might foretell a reckoning so dark that it could eventually spiral into a veritable international crisis�some terrifying World War III doomsday scenario. Some of these hypotheses have been undeniably hysterical, for sure. But others have been remarkably, even eerily, sober. And now, with a world on edge, they have gone mainstream.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.vanityfair.com/news/2016/07/are-we-at-the-start-of-a-tech-world-war" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_8326"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.washingtonpost.com/opinions/five-myths-about-sharia/2016/06/24/7e3efb7a-31ef-11e6-8758-d58e76e11b12_story.html">Five myths about sharia</a></h1>
<p style="margin:0;">by <b>Asifa Quraishi-Landes</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">June 24, 2016</span> &nbsp;�&nbsp; <i>The Washington Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Clearly, Americans fear sharia, Islam's legal framework. At least nine states have passed "foreign law" statutes banning sharia in American courts � even though no U.S. court has ever ruled based on sharia. Although the Constitution expressly forbids a religious test for would-be leaders of the nation, then-presidential candidate Ben Carson said last year that he'd oppose any Muslim White House aspirant who was "not willing to reject sharia." In this election year, Donald Trump calls for a ban on all Muslim immigration, and pundits argue that sharia prompted the killing of innocent dancers at a gay nightclub in Orlando. Falsehoods about Islam abound, and many of them center on what sharia is and what it is not. Here are five myths.</p><p style="padding:0; margin:0 0 10px 0;"><b>Myth No. 1</b></p><p style="padding:0; margin:0 0 10px 0;">Sharia is "Islamic law."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.washingtonpost.com/opinions/five-myths-about-sharia/2016/06/24/7e3efb7a-31ef-11e6-8758-d58e76e11b12_story.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7999"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Middle-East/Turkey-EU-visa-deal-disaster-for-EU-as-Erdogan-likely-to-flood-EU-with-Muslim-migrants-453133">Turkey-EU visa deal disaster for EU as Erdogan likely to flood EU with Muslim migrants</a></h1>
<p style="margin:0;">by <b>Ariel Ben Solomon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 5, 2016</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The EU effort to grant visa-free entry to Turks in return for help in blocking the entry of refugees could backfire, leading to a flood of Muslim migrants.</p><p style="padding:0; margin:0 0 10px 0;">Turkish President Recep Tayyip Erdogan could use the mechanism to increase the number of Muslims in Europe as part of his Islamist agenda to Islamize Europe.</p><p style="padding:0; margin:0 0 10px 0;">He could be planning to accomplish this through a slow, clever strategy without firing a shot, achieving what the Ottoman Empire failed to do by force in the Second Siege of Vienna in 1683.</p><p style="padding:0; margin:0 0 10px 0;">The governing AK Party has been linked with neo-Ottoman ambitions as it has slowly Islamized Turkish society.<br>Historian Bernard Lewis, in What Went Wrong?: Western Impact and Middle Eastern Response (2002), argues that since the Second Siege of Vienna, Islam has been in retreat.</p><p style="padding:0; margin:0 0 10px 0;">And as a result, he wrote, Muslims have sought to regain their glory.</p><p style="padding:0; margin:0 0 10px 0;">The Turkish president's ideology should be seen within this historical context.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Middle-East/Turkey-EU-visa-deal-disaster-for-EU-as-Erdogan-likely-to-flood-EU-with-Muslim-migrants-453133" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7965"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.heraldscotland.com/news/14466282.Scottish_Labour_leader_Kezia_Dugdale_says_she_will_reply_to_group_over_anti_semitism/">Scottish Labour leader Kezia Dugdale says she will reply to group over anti-semitism</a></h1>
<p style="margin:0;">by <b>Stephen Naysmith</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 3, 2016</span> &nbsp;�&nbsp; <i>Glasgow Herald</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The Scottish Labour Party has said its leader Kezia Dugdale will reply to a group calling for her to take a firm stand against any party members who are found to have made anti-semitic comments.</p><p style="padding:0; margin:0 0 10px 0;">She reiterated her view that comments by former London mayor Ken Livingston, when he said Hitler had been a supporter of Zionism, were 'appalling'.</p><p style="padding:0; margin:0 0 10px 0;">However Scottish Labour was unable to confirm that she would act to suspend members guilty of such statements, as issues of party discipline are still the responsibility of the UK party.</p><p style="padding:0; margin:0 0 10px 0;">The comments came as Labour Leader Jeremy Corbyn continues to face pressure over whether the party has taken a strong enough line over alleged antisemitism among its membership. Ms Dugdale herself admitted the controversy is hurting Labour's electoral chances in Thursday's Scottish Parliament Elections.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.heraldscotland.com/news/14466282.Scottish_Labour_leader_Kezia_Dugdale_says_she_will_reply_to_group_over_anti_semitism/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7822"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Opinion/Column-One-Inconvenient-genocide-450612">Inconvenient genocide</a></h1>
<p style="margin:0;">by <b>Caroline Glick</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">April 7, 2016</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The Christian communities of Iraq, Syria, Egypt and Lebanon are well on the way to joining their Jewish cousins. The Jewish communities of these states predated Islam by a millennium, and were vibrant until the 20th century. But the Arab world's war on the Jewish state, and more generally on Jews, wiped out the Jewish populations several decades ago.</p><p style="padding:0; margin:0 0 10px 0;">And now the Christian communities, which like the Jews, predate Islam, are being targeted for eradication.</p><p style="padding:0; margin:0 0 10px 0;">The ongoing genocide of Middle Eastern Christians at the hands of Sunni jihadists is a moral outrage. Does it also affect Israeli national interests? What do we learn from the indifference of Western governments � led by the Obama administration � to their annihilation? True, after years of deliberately playing down the issue and denying the problem, the Obama administration is finally admitting it exists.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Opinion/Column-One-Inconvenient-genocide-450612" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7670"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://nypost.com/2016/03/22/muslim-ghettos-in-europe-are-hotbeds-for-terror/">Muslim ghettos in Europe are breeding grounds for terror</a></h1>
<p style="margin:0;">by <b>Jamie Schram and Bob Fredericks</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">March 22, 2016</span> &nbsp;�&nbsp; <i>New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Muslim ghettos in Paris and Brussels are incubators of Islamic extremism where police fear to tread, crime and unemployment are rampant and radical imams aggressively recruit young men to wage jihad against the West, experts said Tuesday.</p><p style="padding:0; margin:0 0 10px 0;">The identities of the terrorists who attacked an airport and subway station in Belgium remained unclear.</p><p style="padding:0; margin:0 0 10px 0;">But the perpetrators of last November's bloody attack on Paris and other terror strikes in Belgium and France hailed from Molenbeek, a Brussels slum that has long been a hotbed for radical Islam, drugs and lawlessness.</p><p style="padding:0; margin:0 0 10px 0;">Others, including the brothers who carried out the Charlie Hebdo massacre in January 2015, lived in the "banlieues," or suburbs of Paris, desolate, run-down neighborhoods of shops, mosques, and high-rise apartment buildings built 50 years ago to house waves of immigrants from former French colonies in Africa.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://nypost.com/2016/03/22/muslim-ghettos-in-europe-are-hotbeds-for-terror/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7608"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.news.com.au/finance/economy/world-economy/cologne-is-every-day-europes-rape-epidemic/news-story/e2e618e17ad4400b5ed65045e65e141d">'Cologne is every day': Europe's rape epidemic</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">March 11, 2016</span> &nbsp;�&nbsp; <i>news.com.au</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">GERMANY, Sweden and other European countries are facing growing public unrest amid a wave of reports of sexual assaults since the Cologne attacks.</p><p style="padding:0; margin:0 0 10px 0;">New York-based conservative think tank Gatestone Institute has compiled a shocking list of sexual assaults and rapes by migrants in Germany in just the first two months of the year.</p><p style="padding:0; margin:0 0 10px 0;">Drawing only from German media reports, the list documents more than 160 instances of rape and sexual assault committed by migrants in train stations, swimming pools and other public places against victims as young as seven.</p><p style="padding:0; margin:0 0 10px 0;">German police use terms such as "southerners" (s�dl�nder), men with "dark skin" (dunkelh�utig, dunklere gesichtsfarbe, dunklem hauttyp) or "southern skin colour" (s�dl�ndische hautfarbe) to describe the alleged perpetrators.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.news.com.au/finance/economy/world-economy/cologne-is-every-day-europes-rape-epidemic/news-story/e2e618e17ad4400b5ed65045e65e141d" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7567"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.dailymail.co.uk/news/article-3477510/Migrant-attacks-conspiracy-hide-truth-Europe-s-liberal-country-Sweden-stopped-citizens-discussing-refugee-influx.html">How Europe's most liberal nation gagged its own people on migration attacks: The Swedish conspiracy to hide the truth about the refugee influx</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">March 5, 2016</span> &nbsp;�&nbsp; <i>The Daily Mail</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Stockholm railway station isn't a nice place at nine on a winter evening. Smart young Swedes run to catch trains to the suburbs watched by groups of men in hoodies leaning against pillars in the shadows as they swap plastic bags of cannabis or heroin for wads of krona, the national currency.</p><p style="padding:0; margin:0 0 10px 0;">Occasionally, police in twos and threes patrol through this scene of Nordic Noir as chimes ring from the nearby 16th century St Clare's Lutheran church, with spires piercing the dark sky.</p><p style="padding:0; margin:0 0 10px 0;">Yet the police rarely stop and no one takes much notice of them anyway. 'I am here to buy cannabis with my friends,' Mustapha Drummeh, a 31-year-old Ghanaian who came to Sweden seven years ago told me, as he hung around the station amid other African and Arab migrants.</p><p style="padding:0; margin:0 0 10px 0;">Suddenly, his friend, a 43-year-old Eritrean called Mahoud, darts off to dance a circle round two Swedish women in their early twenties, walking briskly by us towards the trains.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.dailymail.co.uk/news/article-3477510/Migrant-attacks-conspiracy-hide-truth-Europe-s-liberal-country-Sweden-stopped-citizens-discussing-refugee-influx.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7496"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.israelhayom.com/site/newsletter_opinion.php?id=15349">The hypocrisy of the foreign media</a></h1>
<p style="margin:0;">by <b>Judith Bergman</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">February 24, 2016</span> &nbsp;�&nbsp; <i>Israel Hayom</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">A little over a month ago, the Gatestone Institute website ran an insightful article by Khaled Abu Toameh titled "Palestinians: Western Media and Ignorance." In it, Abu Toameh described the disastrous job that foreign journalists are doing at reporting truthfully or objectively about the Israeli-Palestinian conflict.</p><p style="padding:0; margin:0 0 10px 0;" align="left">He mentioned the known fact that "foreign journalists based in Jerusalem and Tel Aviv have for years refused to report on the financial corruption and human rights violations that are rife under the Palestinian Authority and Hamas regimes. Palestinian 'suffering' and the 'evil' of the Israeli 'occupation' are the only admissible topics."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.israelhayom.com/site/newsletter_opinion.php?id=15349" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7482"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.washingtonpost.com/news/wonk/wp/2016/02/19/scalia-died-at-a-secluded-texas-ranch-heres-where-else-the-supreme-court-justices-go-when-they-leave-town/">Scalia died at a secluded Texas ranch. Here's where else the Supreme Court justices go when they leave town.</a></h1>
<p style="margin:0;">by <b>Christopher Ingraham</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">February 19, 2016</span> &nbsp;�&nbsp; <i>The Washington Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The death of Supreme Court Justice Antonin Scalia at a lavish Texas resort last weekend has raised questions about who paid for Scalia's trip and the justice's relationship with the businessman who owns the resort. The resort owner also had a business involved in a case that the court declined to hear last year. And, as The Washington Post's Mark Berman noted, had the justice not died there it's possible the public would have never learned about the trip at all.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.washingtonpost.com/news/wonk/wp/2016/02/19/scalia-died-at-a-secluded-texas-ranch-heres-where-else-the-supreme-court-justices-go-when-they-leave-town/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7404"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Middle-East/ANALYSIS-Russia-US-compete-to-ally-with-Kurds-in-ISIS-fight-444316">Russia, US compete to ally with Kurds in ISIS fight</a></h1>
<p style="margin:0;">by <b>Ariel Ben Solomon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">February 9, 2016</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Russian President Vladimir Putin appears to be making another shrewd play for power in the Middle East by allying with the Kurds, in a step that undermines United States and Turkish policy in the region.</p><p style="padding:0; margin:0 0 10px 0;">Russia-Turkey relations have deteriorated since the crisis over the downing of a Russian aircraft in November.</p><p style="padding:0; margin:0 0 10px 0;">Syrian Kurds announced on Saturday that they would open their first foreign office in Moscow, with a ceremony to be held on Wednesday in a ceremony to be attended by Russian foreign ministry officials as well as representatives from several other countries, according to Abdulsalam Ali, the Syrian Kurdish envoy in Moscow.</p><p style="padding:0; margin:0 0 10px 0;">"Our ambition is to rally support behind our Kurdish enclave in Syria through this office," said Ali, according to Rudaw. He is also a member of the Democratic Unity Party (PYD), the main political organization in Syria's Kurdish administrated areas.</p><p style="padding:0; margin:0 0 10px 0;">The choice of Moscow and not Washington or Western Europe is telling.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Middle-East/ANALYSIS-Russia-US-compete-to-ally-with-Kurds-in-ISIS-fight-444316" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7403"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.washingtontimes.com/news/2016/feb/8/dana-rohrabacher-christians-yazidis-must-get-emerg/">Forsaken for their faith</a></h1>
<p style="margin:0;">by <b>Dana Rohrabacher</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">February 8, 2016</span> &nbsp;�&nbsp; <i>The Washington Times</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">It's now a couple of weeks of news cycles since we learned from satellite imagery that the Islamic State had destroyed the monastery of St. Elijah, which for more than 11 centuries served as a spiritual oasis for the promulgation of Christianity in the Middle East.</p><p style="padding:0; margin:0 0 10px 0;">Because of our own century's dizzying acceleration of history, I'm afraid, the unfathomable destruction of this priceless site already may be receding from our minds.</p><p style="padding:0; margin:0 0 10px 0;">The razing of Dair Mar Elia, the monastery's local name in Iraq, requires that we give it more reflection � like the reflection of Edmund Burke when he beheld the bloody upheaval of the French Revolution and contemplated its meaning for Western Civilization.</p><p style="padding:0; margin:0 0 10px 0;">The Sunni terrorists, as we know, have declared war on modernity, on human progress, on civilization itself. They signal this apocalyptic intention by targeting any physical antiquity that stands in their way � prior to St. Elijah, they blew up Roman ruins at Palmyra in Syria.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.washingtontimes.com/news/2016/feb/8/dana-rohrabacher-christians-yazidis-must-get-emerg/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7369"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.thetower.org/2905-analyst-hamas-continues-tunnel-building-threatening-israel-while-leaving-gaza-in-misery/">Analyst: Hamas Continues Tunnel Building, Threatening Israel While Leaving Gaza in Misery</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">February 3, 2016</span> &nbsp;�&nbsp; <i>The Tower</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The expense and effort that the terrorist organization Hamas is putting into building attack tunnels while the Gaza Strip, which it rules, is mired in poverty shows that "the last thing Hamas cares about is the welfare of the Palestinians in the Gaza Strip," veteran Palestinian affairs correspondent Khaled Abu Toameh wrote in an analysis for The Gatestone Institute on Tuesday.</p><p style="padding:0; margin:0 0 10px 0;">The collapse of a terror tunnel last week, in which seven terrorists were killed, "provides further proof that the Islamist movement has stayed true to its charter, which calls for the total destruction of Israel," Abu Toameh observed.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.thetower.org/2905-analyst-hamas-continues-tunnel-building-threatening-israel-while-leaving-gaza-in-misery/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7368"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.washingtontimes.com/news/2016/feb/3/cal-thomas-the-failure-of-multiculturalism/">The failure of multiculturalism</a></h1>
<p style="margin:0;">by <b>Cal Thomas</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">February 3, 2016</span> &nbsp;�&nbsp; <i>The Washington Times</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Just as radar warns of approaching storms, so does the flood of migrants entering Europe warn us of a deluge yet to come, not only for Europeans, if they continue to allow unrestricted immigration, but for the United States.</p><p style="padding:0; margin:0 0 10px 0;">Reports that women in Cologne, Germany, have been groped and robbed by men described by authorities as having "a North African or Arabic" appearance should be warning enough, but there are other and more ominous warnings that suggest worse lies ahead, unless the problem receives immediate attention and action. And it's not just Cologne.</p><p style="padding:0; margin:0 0 10px 0;">The Gatestone Institute, a nonpartisan, not-for-profit international policy council and think tank, is in possession of what it describes as a "leaked German intelligence document," which says, "We are importing Islamic extremism, Arab anti-Semitism, national and ethnic conflicts of other peoples, as well as a different understanding of society and law."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.washingtontimes.com/news/2016/feb/3/cal-thomas-the-failure-of-multiculturalism/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7362"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Arab-Israeli-Conflict/Ex-Pentagon-official-Rhode-Muslim-world-must-undergo-thought-revolution-443554">Ex-Pentagon official Rhode: Muslim world must undergo 'thought revolution'</a></h1>
<p style="margin:0;">by <b>Ariel Ben Solomon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">February 2, 2016</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">There can be no peace between Israel and the Palestinians until there is a "thought revolution" in the Muslim world, former longtime Pentagon official Harold Rhode told The Jerusalem Post Monday.</p><p style="padding:0; margin:0 0 10px 0;">Rhode cited the doctrine in Islam in which land conquered by Muslims must remain under Muslim rule forever.</p><p style="padding:0; margin:0 0 10px 0;">This includes present-day Israel, which the Muslims conquered in 637 CE.</p><p style="padding:0; margin:0 0 10px 0;">"There can only be final peace when the Muslims recognize Israel as a Jewish state and declare an end to the conflict," he said. "Until then, peace as we understand it is impossible."</p><p style="padding:0; margin:0 0 10px 0;">Rhode, currently a senior fellow at the New York-based Gatestone Institute, made the point that independent thinking and personal responsibility were generally lacking in the region.</p><p style="padding:0; margin:0 0 10px 0;">While it had been shown through testing that some Palestinians have DNA similar to that of Jews, which indicates that, biologically, they are just as capable as Jews, it is Islamic culture, he said, that stifles them.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Arab-Israeli-Conflict/Ex-Pentagon-official-Rhode-Muslim-world-must-undergo-thought-revolution-443554" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7354"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://video.foxnews.com/v/4732304671001/is-europes-plan-to-handle-refugees-a-political-charade/?#sp=show-clips">Is Europe's plan to handle refugees a 'political charade'?</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">February 1, 2016</span> &nbsp;�&nbsp; <i>Fox News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;"><iframe src="//video.foxnews.com/v/video-embed.html?video_id=4732304671001" marginwidth="0" marginheight="0" scrolling="no" width="466" height="263" frameborder="0" __idm_id__="304789506"></iframe></p>

</div>


</div>

<a name="toc_item_7322"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://video.foxnews.com/v/4726564666001/migrant-crisis-puts-spotlight-on-europes-open-border-policy/?playlist_id=930909808001">Migrant crisis puts spotlight on Europe's open border policy</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">January 28, 2016</span> &nbsp;�&nbsp; <i>Fox News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;"><iframe src="//video.foxnews.com/v/video-embed.html?video_id=4726564666001" marginwidth="0" marginheight="0" scrolling="no" width="466" height="263" frameborder="0" __idm_id__="304789507"></iframe></p>

</div>


</div>

<a name="toc_item_7332"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.gatestoneinstitute.org/7332/al-jazeera-files-150m-claim-against-egypt-for">Al-Jazeera Files $150M Claim Against Egypt for Harassment of Journalists</a></h1>
<p style="margin:0;">by <b>John Hayward</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 27, 2016</span> &nbsp;�&nbsp; <i>Breitbart</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">The Al-Jazeera news network has filed a $150M arbitration claim against the government of Egypt, making good on a three-year-old threat to seek redress for what it describes as the persecution of its journalists.</p><p style="padding:0; margin:0 0 10px 0;">Al-Jazeera, which is based in Qatar, filed the complaint before the International Center for the Settlement of Investment Disputes in Washington, D.C., because Egypt's actions are said to be a breach of a 1999 investment treaty between Egypt and Qatar.</p><p style="padding:0; margin:0 0 10px 0;">The UK <i>Guardian</i> reports that Al-Jazeera complained about several of its journalists facing harassment, after the military regime of current President Abdel Fatah al-Sisi overthrew the Muslim Brotherhood government of Mohammed Morsi, which in turn came to power after the fall of longtime dictator Hosni Mubarak. Among the offending actions were detentions based on what Al-Jazeera calls "spurious and politically-motivated charges," and others based on no stated charges at all.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.gatestoneinstitute.org/7332/al-jazeera-files-150m-claim-against-egypt-for" class="continue">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7307"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.breitbart.com/big-journalism/2016/01/25/veteran-arab-reporter-western-journalists-do-not-conceal-their-hatred-for-israel-and-for-jews/">Veteran Arab Reporter: Western Journalists do not 'Conceal Their Hatred for Israel and for Jews'</a></h1>
<p style="margin:0;">by <b>Deborah Danan</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 25, 2016</span> &nbsp;�&nbsp; <i>Breitbart</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">A veteran Arab reporter said that many of the Western journalists sent to cover the Israeli-Palestinian conflict are "clueless" and do not "conceal their hatred for Israel and for Jews" while seeing "no evil" on the part of the Palestinians.</p><p style="padding:0; margin:0 0 10px 0;">Award-winning journalist Khaled Abu Toameh, who covers Arab affairs for the Jerusalem Post, wrote in an article for the Gatestone Institute that Western journalists sent to cover the conflict suffer from "professional laziness" and lack a basic grasp of events in the region.</p><p style="padding:0; margin:0 0 10px 0;">In addition to citing shocking examples of reporters' misinformation, Abu Toameh expounds on the Western penchant for simplistic reporting that adheres to a predetermined dichotomy of good guy versus bad guy, resulting in anti-Israel bias in the mainstream media.</p><p style="padding:0; margin:0 0 10px 0;">In one example, a Western correspondent asked a Palestinian colleague to arrange an interview with the late PLO leader Yasser Arafat, years after Arafat had died.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.breitbart.com/big-journalism/2016/01/25/veteran-arab-reporter-western-journalists-do-not-conceal-their-hatred-for-israel-and-for-jews/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7295"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.theblaze.com/stories/2016/01/24/clueless-veteran-journalist-reveals-just-how-ignorant-some-reporters-are-who-cover-middle-east/">'Clueless': Veteran Journalist Reveals Just How Ignorant Some Reporters Are Who Cover Middle East</a></h1>
<p style="margin:0;">by <b>Sharona Schwartz</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 24, 2016</span> &nbsp;�&nbsp; <i>The Blaze</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">Supporters of Israel frequently complain of anti-Israel bias in the mainstream media. Now, a veteran reporter who has been covering the Israeli-Palestinian conflict for decades has revealed the level of ignorance he's encountered among some foreign correspondents deployed to region.</p><p style="padding:0; margin:0 0 10px 0;">Khaled Abu Toameh, an award-winning journalist who covers Arab affairs for the Jerusalem Post, wrote in an article for the Gatestone Institute about the "clueless" Western reporters who hadn't even the slightest grasp of basic details of the Arab-Israeli conflict.</p><p style="padding:0; margin:0 0 10px 0;">He cited the example of a Western correspondent who asked a Palestinian colleague of his to set up an interview with Yasser Arafat � only the former leader of the Palestine Liberation Organization and first Palestinian Authority president had been dead for years by then.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.theblaze.com/stories/2016/01/24/clueless-veteran-journalist-reveals-just-how-ignorant-some-reporters-are-who-cover-middle-east/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7277"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.lifezette.com/polizette/facebook-unfriends-free-speech/">Facebook Unfriends Free Speech</a></h1>
<p style="margin:0;">by <b>Edmund Kozak</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 21, 2016</span> &nbsp;�&nbsp; <i>LifeZette</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">In a worrying development for free speech and the free exchange of ideas, Facebook has announced a Europeanwide initiative to combat so-called online extremism and "hate speech."</p><p style="padding:0; margin:0 0 10px 0;">The social media giant pledged to spend over $1 million on the new "Initiative for Civil Courage Online," which it launched in Berlin in partnership with the German Ministry of Justice and other organizations. It has even hired a unit of publisher Bertelsmann to monitor and delete "racist" posts on its site in Germany.</p><p style="padding:0; margin:0 0 10px 0;">But critics are concerned the initiative will be used to suppress the free speech of conservative and populist critics of the mass Muslim migration to Europe.</p><p style="padding:0; margin:0 0 10px 0;">"It's certainly a form of censorship," said Nina Rosenwald, founder and president of the Gatestone Institute, a conservative think tank based in New York City. "The underlying problem with these initiatives is, who decides what is extremist speech and who should be censored?"</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.lifezette.com/polizette/facebook-unfriends-free-speech/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7276"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.usnews.com/news/the-report/articles/2016-01-21/obamas-iran-nuclear-deal-is-a-bad-deal-off-to-a-worse-start">A Bad Deal Off to a Worse Start</a></h1>
<p style="margin:0;">by <b>Mortimer B. Zuckerman</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 21, 2016</span> &nbsp;�&nbsp; <i>U.S. News &amp; World Report</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">President Barack Obama never submitted his Iranian nuclear deal for ratification by the Congress because he knew it would have no chance of passing. That does not make the United States unique: The Iranian parliament has never approved it either (that body passed a heavily amended version) and the Iranian president has never signed it. The Iranian cabinet has never even discussed it. And the other members of the P5+1 � Britain, China, Germany, France and Russia � have likewise given it short legal shrift. Indeed, President Obama "may end up being the only person in the world to sign his much-wanted deal, in effect making a treaty with himself," as the Gatestone Institute's Amir Taheri has said.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.usnews.com/news/the-report/articles/2016-01-21/obamas-iran-nuclear-deal-is-a-bad-deal-off-to-a-worse-start" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7262"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.gatestoneinstitute.org/7262/swedish-activists-answer-to-migrant-sexual">Swedish Activists' Answer to Migrant Sexual Assaults � Early Sex Education for Young Refugees</a></h1>
<p style="margin:0;">by <b>Sharona Schwartz</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 19, 2016</span> &nbsp;�&nbsp; <i>The Blaze</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">Advocates of youth sex education in Sweden have suggested one way to combat sexual assaults by migrants is to offer young refugees sex education, including teaching them about gay rights, abortion, STDs and gender equality, a Swedish newspaper reported.</p><p style="padding:0; margin:0 0 10px 0;">Leaders of the sexual education organization RFSU � the Swedish Association for Sexuality Education � promoted Sex Ed classes for refugee teenage boys in an opinion piece in the Swedish newspaper Svenska Dagbladet, excerpts of which were translated by the English-language website The Local.</p><p style="padding:0; margin:0 0 10px 0;">"There is an acute need for knowledge about everything from sexually transmitted diseases and condoms to abortion rights, gender equality, legislation and LGBTQ rights," RFSU Chairwoman Kristina Ljungros and Secretary-General Maria Andersson wrote, according to The Local.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.gatestoneinstitute.org/7262/swedish-activists-answer-to-migrant-sexual" class="continue">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7236"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.gatestoneinstitute.org/7236/remember-it-well-why-anti-migrant-politicians-say">'Remember It Well': Why Anti-Migrant Politicians Say You Should Know the Arabic Word 'Taharrush'</a></h1>
<p style="margin:0;">by <b>Sharona Schwartz</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 14, 2016</span> &nbsp;�&nbsp; <i>The Blaze</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">German investigators suspect the numerous New Year's Eve sexual assaults were part of a Middle Eastern group sex-assault activity known as "taharrush," a German newspaper reported.</p><p style="padding:0; margin:0 0 10px 0;">"Such crimes are committed by groups of young men ... mostly when there are large gatherings of people, such as demonstrations. They range from sexual harassment to rape," the Federal Criminal Police Office (BKA) told the German newspaper Die Welt, according to a translation by American Thinker.</p><p style="padding:0; margin:0 0 10px 0;">While group sexual assaults during large gatherings had previously been seen in Egypt � most famously the sexual assault of CBS News correspondent Lara Logan while covering the 2011 Tahrir Square demonstrations � Welt noted that, until now, the violent display had not yet appeared in Germany.</p><p style="padding:0; margin:0 0 10px 0;"></p><p style="padding:0; margin:0 0 10px 0;">Demonstrators hold a sign "Rapefugees not welcome � !Stay away!" and a sign with a crossed out mosque as they march in Cologne, Germany, Jan. 9, 2016. (AP Photo/Juergen Schwarz)</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.gatestoneinstitute.org/7236/remember-it-well-why-anti-migrant-politicians-say" class="continue">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7235"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nationalreview.com/article/429746/mass-sexual-assault-europe-us-still-denial">'See Something, Do Nothing' - Germans and Americans Turn a Blind Eye to Muslims' Crimes</a></h1>
<p style="margin:0;">by <b>John Fund</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 14, 2016</span> &nbsp;�&nbsp; <i>National Review Online</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">'See something, say something." We've all seen ads from the U.S. Department of Homeland Security that ask people not to turn a blind eye to suspicious activity. But all too often the reality, both in the U.S. and even more so in Europe, is that neighbors, politicized police departments, and the mainstream media act as if the slogan should be "See Something, Do Nothing."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.nationalreview.com/article/429746/mass-sexual-assault-europe-us-still-denial" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7232"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Middle-East/Iran/Former-Pentagon-official-to-Post-Iran-humiliating-US-with-no-consequences-441451">Former Pentagon official to 'Post': 'Iran humiliating US with no consequences'</a></h1>
<p style="margin:0;">by <b>Ariel Ben Solomon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 14, 2016</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">Iran's capture and release of 10 US sailors demonstrated that "moderates" such as President Hassan Rouhani and Foreign Minister Mohammad Javad Zarif have no real weight, while the real power continues to be wielded by Supreme Leader Ayatollah Ali Khamenei and his hardline allies, such as the Revolutionary Guard, several commentators said Wednesday.</p><p style="padding:0; margin:0 0 10px 0;">Propaganda videos of the soldiers blindfolded and kneeling released by Iranian media humiliated the world's superpower and shows that Iran can continue its aggressive behavior with no consequences.</p><p style="padding:0; margin:0 0 10px 0;">The Obama administration will not allow anything to get in the way of the nuclear deal's implementation and the lifting of sanctions on Iran, they said.</p><p style="padding:0; margin:0 0 10px 0;">"Test fire ballistic missiles. Check. Fire missiles near US ships. Check. Torch US ally's missions. Check. Seize US sailors. Check. Get paid," tweeted Tony Badran, a research fellow at the Foundation for Defense of Democracies.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Middle-East/Iran/Former-Pentagon-official-to-Post-Iran-humiliating-US-with-no-consequences-441451" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7226"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://pjmedia.com/diaryofamadvoter/2016/1/13/nikki-haley-misses-an-opportunity">Nikki Haley Misses an Opportunity on Women</a></h1>
<p style="margin:0;">by <b>Roger L Simon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 13, 2016</span> &nbsp;�&nbsp; <i>PJ Media</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">Nikki Haley seemed to be competing for the Nice Woman Prize last night in her response to Barack Obama's predictably tedious final State of the Union address. (When during his presidency has this man said anything memorable that wasn't a lie ["you can keep your plan"], a slur ["clinging to guns and religion"] or almost deliberately clueless ["ISIS as JV team"]?)</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://pjmedia.com/diaryofamadvoter/2016/1/13/nikki-haley-misses-an-opportunity" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7211"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://thehill.com/opinion/katie-pavlich/265495-katie-pavlich-what-real-rape-culture-looks-like">What real rape culture looks like</a></h1>
<p style="margin:0;">by <b>Katie Pavlich</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 11, 2016</span> &nbsp;�&nbsp; <i>The Hill</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">On New Year's Eve, mobs made up of a thousand Muslim men, many of whom are asylum seekers, coordinated and planned sexual assaults on women attending public festivities in the city of Cologne, Germany. At first, it was reported 100 women suffered abuse, but that number has now grown to more than 500 cases. The majority of the cases involve groping and violent sexual assault, with the women reporting being surrounded by men and torn from their friends. These are the same tactics used to sexually assault CBS News correspondent Lara Logan, who is still suffering from her injuries, in Egypt during her coverage of the 2010 Arab Spring.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://thehill.com/opinion/katie-pavlich/265495-katie-pavlich-what-real-rape-culture-looks-like" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7210"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.wsj.com/articles/the-cologne-portent-1452555941">The Cologne Portent</a><br>
<span style="font-size:85%">In the spirit of Christian charity, Merkel has imported Muslim misogyny.</span></h1>
<p style="margin:0;">by <b>Bret Stephens</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 11, 2016</span> &nbsp;�&nbsp; <i>The Wall Street Journal</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Among the hard lessons of our wars in Iraq and Afghanistan, surely one of them is that it's foolish to expect that backward and often barbaric societies can be transformed into functioning liberal democracies. So why do liberals seem so surprised that so many people from these societies behave in barbaric ways after they've shoved their way into the West?</p><p style="padding:0; margin:0 0 10px 0;">As I write, 516 criminal complaints have been filed in Germany against men of mainly North African or Arab origin who went on a New Year's Eve sexual-assault rampage in the city of Cologne.</p><p style="padding:0; margin:0 0 10px 0;">"Twenty or 30 men, foreign men, surrounded us and we couldn't even move anymore," a woman identified as Michelle told the BBC. "They just grabbed our arms and tried to tear us apart and pushed our clothes away and tried to get between our legs."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.wsj.com/articles/the-cologne-portent-1452555941" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7212"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://video.foxnews.com/v/4690508187001/reports-across-germany-of-organized-sexual-assault-attacks/">Reports across Germany of organized sexual assault attacks</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">January 7, 2016</span> &nbsp;�&nbsp; <i>Fox News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;"><iframe src="//video.foxnews.com/v/video-embed.html?video_id=4690508187001" marginwidth="0" marginheight="0" scrolling="no" width="466" height="263" frameborder="0" __idm_id__="304789508"></iframe></p>

</div>


</div>

<a name="toc_item_7178"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.gatestoneinstitute.org/7178/bds-a-weapon-of-islamic-warfare">BDS: A weapon of Islamic warfare</a></h1>
<p style="margin:0;">by <b>Dand Diker and Harold Rhode</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 5, 2016</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">Hamas, PLO groups and the Palestinian Authority exploit the global Boycott, Divestment and Sanctions campaign as a tool of Islamic warfare.</p><p style="padding:0; margin:0 0 10px 0;">Arab and Muslim leaders publicly declare the same goals as BDS activists; to eliminate Israel as a non-Muslim entity from lands that "belong" to Islam. Following the al-Aksa war of terrorism in 2001, leading Muslim Brotherhood scholar Sheik Yusuf Qaradawi published an Islamic legal ruling (fatwa) on boycotting Israeli goods. Iranian Supreme Leader Ayatollah Ali Khamenei did the same. For Islamists, the reason is simple:</p><p style="padding:0; margin:0 0 10px 0;">Since the existence of Israel is an affront to Islam, as former Syrian leader Hafez al-Assad, himself an Alawite and therefore not a true Muslim in Sunni eyes, declared throughout his life, any strategy and every tactic to rid the world of Israel is acceptable in service of advancing Islam as a victorious and conquering civilization.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.gatestoneinstitute.org/7178/bds-a-weapon-of-islamic-warfare" class="continue">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7172"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.breitbart.com/big-government/2016/01/03/muslims-riot-over-death-of-one-muslim-cleric-but-silent-over-genocide-of-christians-in-their-midst/">Muslims Riot Over Death of One Muslim Cleric, But Silent Over Genocide of Christians in Their Midst</a></h1>
<p style="margin:0;">by <b>Chris Burton</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 3, 2016</span> &nbsp;�&nbsp; <i>Breitbart</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">In July of 2015, Eliza Griswold of the <i>New York Times</i>, wrote a comprehensive piece entitled "Is This The End Of Christianity In The Middle East?"</p><p style="padding:0; margin:0 0 10px 0;">She wrote of ISIS militants in towns they had captured, marking certain houses with the Arabic letter "N" in red spray paint. It looks kind of like a one eyed smiley face, but looks are deceiving. The letter, pronounced as "noon," is the first letter of the word Nasrani, or "one who believes in Jesus of Nazareth." It was a marking of death to many, as was the "Juden" label or yellow Star of David stitched on clothing some eighty years ago.</p><p style="padding:0; margin:0 0 10px 0;">On October 5, Breitbart's Mary Chastain wrote the following:</p><blockquote><p style="padding:0; margin:0 0 10px 0;">The Islamic State (ISIS/ISIL) executed 12 Christians, including a 12-year-old boy, after they refused to abandon their faith and convert to Islam. The murders occurred on August 28 outside of Aleppo.</p></blockquote>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.breitbart.com/big-government/2016/01/03/muslims-riot-over-death-of-one-muslim-cleric-but-silent-over-genocide-of-christians-in-their-midst/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7156"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://news.vice.com/article/islamic-state-affiliate-blamed-for-attack-on-tourists-in-southern-russia">Islamic State Affiliate Blamed for Attack on Tourists in Southern Russia</a></h1>
<p style="margin:0;">by <b>John Dyer</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 31, 2015</span> &nbsp;�&nbsp; <i>Vice News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">As Russia bombs militants in Syria, jihadists might be shooting tourists in Russia.</p><p style="padding:0; margin:0 0 10px 0;">On Tuesday night, three gunman shot at sightseers visiting the 8th century fortress of Naryn-Kala in Derbent, an ancient city on the Caspian Sea in the southern Russian republic of Dagestan, where Moscow has been fighting Islamist insurgents seeking an independent state since the 1990s.</p><p style="padding:0; margin:0 0 10px 0;">The shooters killed one person � a border guard visiting the citadel � and injured another 11, according to the state-owned RIA Novosti news agency. Russian authorities quickly blamed terrorists referred to as a "Derbent group," the agency reported. The militant group has been fighting Russian rule for years, but pledged allegiance to the Islamic State (IS) in June. No group has come forward to take credit for the shootings.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://news.vice.com/article/islamic-state-affiliate-blamed-for-attack-on-tourists-in-southern-russia" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7146"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://sputniknews.com/middleeast/20151230/1032496312/turkey-kurds-demonstration-curfew.html">Get Out of the Street: Turkish Police Violently Crash Kurdish Rally</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">December 30, 2015</span> &nbsp;�&nbsp; <i>Sputnik International</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">The Turkish government violently dispersed thousands of Kurdish demonstrators in Diyarbakir, Turkey's largest predominantly Kurdish populated town.</p><p style="padding:0; margin:0 0 10px 0;">Turkish police used tear gas and water cannons indiscriminately against the Kurdish demonstrators, while some of the protesters fought back by throwing stones at riot police vehicles, RT said.</p><p style="padding:0; margin:0 0 10px 0;">According to Turkish media, the public rally was organized by the Democratic Regions Party (DBP), pro-Kurdish People's Democratic Party (HDP), the Democratic Society Congress and a number of pro-Kurdish NGOs.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://sputniknews.com/middleeast/20151230/1032496312/turkey-kurds-demonstration-curfew.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7136"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://pjmedia.com/ronradosh/2015/12/28/diplomacy-ad-absurdum-recognizing-isis/">Diplomacy Ad Absurdum: Recognizing ISIS</a></h1>
<p style="margin:0;">by <b>Ron Radosh</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 28, 2015</span> &nbsp;�&nbsp; <i>PJ Media</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">Recently, the argument that "diplomacy always is a better option than war" reached new heights of <i>reductio ad absurdum</i> in an op-ed which appeared in the British newspaper, <i>The Independent</i>. The writer, Vadim Nikitim, begins his column by noting that ISIS has produced a "24-page statecraft blueprint," a document that serves as its legal case for establishing a "caliphate."</p><p style="padding:0; margin:0 0 10px 0;">Mr. Nikitim is upset because the West continues "to deny this reality." On the contrary, the West clearly acknowledges that ISIS functions as a state in the territory it has captured, but does not believe it should be given legitimacy. But Nikitim argues that:</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://pjmedia.com/ronradosh/2015/12/28/diplomacy-ad-absurdum-recognizing-isis/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7124"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.express.co.uk/news/world/629563/Daesh-kidnaps-women-children-sell-sex-slaves-social-media">Daesh kidnaps women and children to sell as sex slaves on social media</a></h1>
<p style="margin:0;">by <b>Marco Giannangeli</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 27, 2015</span> &nbsp;�&nbsp; <i>The Express</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">Turkey was last night facing questions about its role in the war against the extremists as it was claimed IS had been running their human trafficking business from offices in a Turkish city.</p><p style="padding:0; margin:0 0 10px 0;">As coalition air attacks pummel IS revenue-generating oil fields, the warlords have been forced to diversify and are now focusing efforts on targeting and abducting innocent civilians in Syria and Northern Iraq.</p><p style="padding:0; margin:0 0 10px 0;">Their pictures are posted on social media feeds including WhatsApp and the Messenger for slave buyers to peruse from the safety of their homes. Women fetch an average �15,000 while children are thought to command about �10,000 each.</p><p style="padding:0; margin:0 0 10px 0;">The women are largely sold to the Middle East as sex slaves while the males go into servitude. Others are sold for ransom.</p><p style="padding:0; margin:0 0 10px 0;">Over the past few weeks, the terror group's coffers have been swelled by more than �170million as desperate Yazidi families paid ransoms to retrieve 250 women and children.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.express.co.uk/news/world/629563/Daesh-kidnaps-women-children-sell-sex-slaves-social-media" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7101"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://freebeacon.com/issues/germans-move-to-arm-themselves-in-wake-of-terror-attacks-and-migrant-spike/">Germans Move to Arm Themselves in Wake of Terror Attacks and Migrant Spike</a></h1>
<p style="margin:0;">by <b>Stephen Gutowski</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 22, 2015</span> &nbsp;�&nbsp; <i>The Washington Free Beacon</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">Germans are arming themselves with self defense weapons in the aftermath of recent terror attacks around the world and the influx of new migrants from the Middle East.</p><p style="padding:0; margin:0 0 10px 0;">In reaction to increasing crime and an ever-present terror threat many German citizens have turned to weapons such as pepper spray, a report from the Gatestone Institute found.</p><p style="padding:0; margin:0 0 10px 0;">"Germans, facing an influx of more than one million asylum seekers from Africa, Asia and the Middle East, are rushing to arm themselves," the report said. "All across Germany, a country with some of the most stringent gun-control laws in Europe, demand is skyrocketing for non-lethal self-defense weapons, including pepper sprays, gas pistols, flare guns, electroshock weapons and animal repellents. Germans are also applying for weapons permits in record numbers."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://freebeacon.com/issues/germans-move-to-arm-themselves-in-wake-of-terror-attacks-and-migrant-spike/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7077"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.gatestoneinstitute.org/7077/iran-has-already-cheated-on-obama-nuke-deal">Iran has already cheated on Obama nuke deal</a></h1>
<p style="margin:0;">by <b>Rick Jensen</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 19, 2015</span> &nbsp;�&nbsp; <i>The Port Huron Times Herald</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">Deep behind the headlines of recent political theater is the very real rattle of Iran's ballistic sabre.</p><p style="padding:0; margin:0 0 10px 0;">Missile tests that don't violate specific wording of President Obama's Joint Comprehensive Plan of Action are pushing the early limits of what will certainly be future violations of the agreement.</p><p style="padding:0; margin:0 0 10px 0;">The recent ballistic missile tests likely violate multiple U.N. resolutions including UN Security Council Resolution #2231, which bans ballistic missile tests by Iran.</p><p style="padding:0; margin:0 0 10px 0;">It's a game for Iran, whose Ayatollah has written a book on how to "destroy America."</p><p style="padding:0; margin:0 0 10px 0;">Jonathan Tobin at "Commentary" provides links to the translated version, such as:</p><p style="padding:0; margin:0 0 10px 0;">"Our position against Israel is, as always: Israel is a malignant cancer gland that needs to be uprooted. In contrast to what shallow people believe, it is not impossible to defeat Israel and the United States. Superpowers have come and gone throughout history. Materialistic powers are neither everlasting nor infinite."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.gatestoneinstitute.org/7077/iran-has-already-cheated-on-obama-nuke-deal" class="continue">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7075"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://english.alarabiya.net/en/views/news/middle-east/2015/12/18/Forgiveness-is-strength.html">Forgiveness is strength</a></h1>
<p style="margin:0;">by <b>Khalaf Ahmad Al Habtoor</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 18, 2015</span> &nbsp;�&nbsp; <i>Al Arabiya</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">"The weak can never forgive. Forgiveness is the attribute of the strong," wrote one of the 20th century's wisest men, Mahatma Gandhi. The British ruled his country India with an iron first and stripped it of its resources for almost 90 years, but he eschewed revenge for reconciliation. So too did Nelson Mandela, who guided a divided South Africa toward a peaceful future. The Arab world should take a leaf out of their book.</p><p style="padding:0; margin:0 0 10px 0;">During a troubled era, when our enemies are so numerous it is hard to keep track of them, we should shore up our defenses rather than exact revenge on the disgraced mighty who have fallen, such as the surviving sons of Libya's late leader Muammar Qaddafi. We should be better than that. There is nothing purer than mercy. Kicking someone when they are down stains our Arab dignity.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://english.alarabiya.net/en/views/news/middle-east/2015/12/18/Forgiveness-is-strength.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7072"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.americanthinker.com/blog/2015/12/as_sweden_goes_so_goes_the_west.html">As Sweden goes, so goes the West</a></h1>
<p style="margin:0;">by <b>Carol Brown</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 17, 2015</span> &nbsp;�&nbsp; <i>American Thinker</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">Sweden is on the bleeding edge of the West's march into its self-dug grave. The chaos that is unfolding is a direct result of the country's official policy to become a multicultural nation, which received a unanimous vote in Parliament forty years ago. But abandoning their national identity and importing barbarians would necessarily have consequences. And so, as these new and presumably wonderful cultures have reached a critical mass and the native Swedish population has declined, those consequences have taken hold.</p><p style="padding:0; margin:0 0 10px 0;">And so now chaos reigns in Sweden.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.americanthinker.com/blog/2015/12/as_sweden_goes_so_goes_the_west.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7034"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.cnsnews.com/news/article/barbara-hollingsworth/amnesty-anarchy-forces-eus-most-refugee-friendly-country-roll">'Amnesty Anarchy' Forces EU's Most Refugee-Friendly Country to Roll Up Welcome Mat</a></h1>
<p style="margin:0;">by <b>Barbara Hollingsworth</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 10, 2015</span> &nbsp;�&nbsp; <i>CNS News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">"Amnesty anarchy" has forced Sweden - which has taken in more refugees per capita from the Middle East and Northern Africa than any other European nation - to roll up its welcome mat last month.</p><p style="padding:0; margin:0 0 10px 0;">According to the United Nations High Commissioner for Refugees (UNHCR), "Sweden became the biggest European host country of refugees, following a move in September 2013 to offer permanent residency to Syrian refugees."</p><p style="padding:0; margin:0 0 10px 0;">The BBC reports that nearly 200,000 migrants are expected to relocate to Sweden in 2015, more than any other EU nation.</p><p style="padding:0; margin:0 0 10px 0;">But at a November 24 press conference, Swedish Prime Minister Stefan Lofven announced that he was imposing temporary border controls and limiting refugees to EU minimums to give some "respite" to the country with the most generous immigration rules in all of Europe.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.cnsnews.com/news/article/barbara-hollingsworth/amnesty-anarchy-forces-eus-most-refugee-friendly-country-roll" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7014"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.pappaspost.com/u-s-government-commission-on-religious-freedom-calls-on-turkey-to-reopen-halki-seminary/">U.S. Government Commission on Religious Freedom Calls on Turkey to Reopen Halki Seminary</a></h1>
<p style="margin:0;">by <b>Gregory Pappas</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 6, 2015</span> &nbsp;�&nbsp; <i>The Pappas Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><p style="padding:0; margin:0 0 10px 0;">The United States Commission on International Religious Freedom (USCIRF) has called on the Turkish government to reopen the Greek Orthodox Theological School of Halki, which was closed 44 years ago this month when the government nationalized all private institutions of higher learning.</p><p style="padding:0; margin:0 0 10px 0;">"Without the seminary, the Greek Orthodox community cannot educate in Turkey the next generation of clergy to lead their congregants in worship, observance, and practice," said USCIRF Chairman Robert P. George. "The failure to reopen the Halki seminary is a stark example of the Turkish government's failure to uphold its international obligations to protect and promote the freedom of religion or belief."</p><p style="padding:0; margin:0 0 10px 0;"></p><p style="padding:0; margin:0 0 10px 0;">The seminary on the island of Halki once trained church leaders, many of whom are important leaders of churches throughout the world, today. It was closed in 1971.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.pappaspost.com/u-s-government-commission-on-religious-freedom-calls-on-turkey-to-reopen-halki-seminary/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div>


</div>

<a name="toc_item_7015"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Israel-News/Analysis-Fighting-ISIS-from-the-inside-out-436305">Fighting ISIS from the inside-out</a></h1>
<p style="margin:0;">by <b>Ariel Ben Solomon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 4, 2015</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The idea gaining traction in some quarters that a local Sunni military force is needed to take on Islamic State is unrealistic, especially when Sunnis see Shi'ites and their allies as the biggest threat.</p><p style="padding:0; margin:0 0 10px 0;">The centuries-deep, Sunni- Shi'ite divide is raging across the region and is much more important than any intra-Sunni rivalries or threats.</p><p style="padding:0; margin:0 0 10px 0;">Sunni Arabs are not in a rush to put too much energy into cracking down on Islamic State, partially because many see it as a bulwark against advancing Iranian and Shi'ite allies across the region.</p><p style="padding:0; margin:0 0 10px 0;">Approximately 87-90 percent of the world's Muslims are Sunnis, and most Shi'a live in four countries � Iran, Pakistan, India and Iraq, according to the Pew Research Center.</p><p style="padding:0; margin:0 0 10px 0;">In addition, significant Shi'ite populations can also be found in Lebanon and the Gulf states.</p><p style="padding:0; margin:0 0 10px 0;">The outnumbered Shi'ites have a bunker mentality and fear being slaughtered by the Sunni masses.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Israel-News/Analysis-Fighting-ISIS-from-the-inside-out-436305" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_7006"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://pjmedia.com/trending/2015/12/3/canada-awaits-a-pair-of-impending-catastrophes">Canada Awaits a Pair of Impending Catastrophes</a></h1>
<p style="margin:0;">by <b>David Solway</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 3, 2015</span> &nbsp;�&nbsp; <i>PJ Media</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">There are two countries that I once regarded as home: Canada, where I have spent most of my life, and Greece, where I lived for five years. Both are now lost to me. Governed by a leftist administration and effectively submitting to the <i>adhan</i>�the call of the muezzin�each is now under siege.</p><p style="padding:0; margin:0 0 10px 0;">Greece has become a way-station for a vast press of Muslim refugees sowing disorder and mayhem in their wake. Fishermen on the island of Lesbos, which I know well, have seen their livelihoods disrupted, and are unable to navigate through the filth and garbage littering their shores. Elsewhere the migrants reward their hosts by going on rampages. A graphic video shows what lies in wait for this once anti-Islamic country, which endured over 400 years of Ottoman oppression. As one Greek respondent says, "We are under occupation."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://pjmedia.com/trending/2015/12/3/canada-awaits-a-pair-of-impending-catastrophes" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6933"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.catholicworldreport.com/Item/4380/Who_Will_Reform_Islam.aspx">Who Will Reform Islam?</a></h1>
<p style="margin:0;">by <b>William Kilpatrick</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 19, 2015</span> &nbsp;�&nbsp; <i>The Catholic World Report</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Those who are relying on the moderate Muslims of the world to correct their errant brethren might profit from a news story out of Pakistan. The All Pakistan Private Schools Federation (APPSF) has launched a book titled <i>I am Not Malala, I am Muslim, I am Pakistani.</i> It's meant to "counter [the] anti-Islamic propaganda" in Nobel Prize winner Malala Yousufzai's book, <i>I am Malala</i>. In addition, the teacher's association is going to court to have Malala's book banned.</p><p style="padding:0; margin:0 0 10px 0;">So, the girl whom the Nobel Prize Committee looks upon as the face of moderate Islam is looked upon as something of a heretic by a sizable segment of Pakistani teachers (the association represents 173,000 private schools.)</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.catholicworldreport.com/Item/4380/Who_Will_Reform_Islam.aspx" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6925"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nationalreview.com/article/427302/frances-fifth-column-muslims-resist-assimilation">France's No-Go Zones: Assimilation-Resistant Muslims Are the Real Refugee Problem</a></h1>
<p style="margin:0;">by <b>Andrew C. McCarthy</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 18, 2015</span> &nbsp;�&nbsp; <i>National Review Online</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The jihad is raging in Paris. President Hollande repeatedly declares that France is at war, and press reporting has highlighted the French military's combat operations against ISIS in Syria. But what the French are most worried about � and what the Obama-friendly media are happy to gloss over while the president is pushing to import thousands of Middle Eastern Muslims into our country � is fifth-column activity, meaning French Islamists supportive of violent jihadists.</p><p style="padding:0; margin:0 0 10px 0;">Early Wednesday morning, French police conducted a raid in Saint-Denis, on the northern edge of Paris, where operatives of the jihadist enemy were holed up in an apartment. In the ensuing shootout involving several jihadists, Kalashnikovs were fired at police who stormed the hideaway. A woman detonated an explosive suicide vest. Several police were wounded; the woman and a male terrorist were killed.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.nationalreview.com/article/427302/frances-fifth-column-muslims-resist-assimilation" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6914"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://ricochet.com/isis-hatred-internet-plus-fear-trembling/">ISIS, Hatred, the Internet, Plus Fear and Trembling</a></h1>
<p style="margin:0;">by <b>Liz Harrison</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 17, 2015</span> &nbsp;�&nbsp; <i>Ricochet</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">While many are quick to malign the current administration for never letting a tragedy go to waste, the sad truth is I am doing exactly that. Either it's because the end of the year is near, or I'm shifting my career focus, or Paris has given me a grand opportunity to ferret out negativity � the outcome remains the same. I am paring down my existence on the Internet, at least on what many consider the backwaters of human despair, social media. As for how I am using tragedy to my own advantage, it's just the simple act of "unfriending" the particularly venomous individuals that have taken the low road of fear and hatred.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://ricochet.com/isis-hatred-internet-plus-fear-trembling/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6911"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://pjmedia.com/blog/what-about-our-sons/">What about Our Sons?</a></h1>
<p style="margin:0;">by <b>David Solway and Janice Fiamengo</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 17, 2015</span> &nbsp;�&nbsp; <i>PJ Media</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Why is it that, even when we're being politically incorrect about Islam, most of us toe the PC line? A good friend and political author writes with regard to the Muslim irruption into the west: "As the father of a daughter and two granddaughters, I worry about our tolerism of the [Islamic] Culture of Rape...men whose culture makes them a serious threat to those daughters and granddaughters." Islamic culture has a worrisome record, he goes on to note, not only in its treatment of women but also in its savage persecution of gays. I write back to him: "I am not only worried for my daughters. I am worried as well for my sons. Analogously, I not only deplore what may befall the gay community; I fear what will happen to the straight community."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://pjmedia.com/blog/what-about-our-sons/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6910"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.catholicworldreport.com/Item/4373/the_lesson_of_paris.aspx">The Lesson of Paris</a></h1>
<p style="margin:0;">by <b>William Kilpatrick</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 17, 2015</span> &nbsp;�&nbsp; <i>The Catholic World Report</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Of all the commentaries on the Paris massacres I've read, the one that seems most perceptive is a piece by Judith Bergman for the Gatestone Institute titled "How Can Anyone Be Shocked?" Indeed. The attacks had all the inevitability of a Greek tragedy: they were entirely predictable. Nevertheless many reacted with "shock," including Angela Merkel, David Cameron, and the Vatican.</p><p style="padding:0; margin:0 0 10px 0;">As Bergman writes:</p><p style="padding:0; margin:0 0 10px 0;">After 9/11 in the United States; the 2004 Madrid train bombings, which killed nearly 200 and wounded 2,000; and the 2005 attacks on London's transit system, where 56 people were killed and 700 wounded, world leaders have no conceivable excuse left to be shocked and surprised at mass terrorism occurring in the midst of Western capitals.</p><p style="padding:0; margin:0 0 10px 0;">In the unlikely case anyone should have missed those incidents, there have been several thousand other Islamic terror attacks�some big and some small�since 9/11. How, as Bergman asks, can anyone still be shocked?</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.catholicworldreport.com/Item/4373/the_lesson_of_paris.aspx" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6912"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.chicagotribune.com/news/opinion/editorials/ct-muslim-immigrants-america-1117-20151116-story.html">Editorial: On being Muslim in America</a></h1>
<p style="margin:0;">by <b>Editorial Board</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 16, 2015</span> &nbsp;�&nbsp; <i>Chicago Tribune</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The motto on the seal of the United States is "E Pluribus Unum," Latin for "out of many, one." American history has been one of endlessly absorbing people from the rest of the world and making them part of the national fabric.</p><p style="padding:0; margin:0 0 10px 0;">It's not always an easy task. Newcomers from abroad bring different languages, customs, religions and complexions, which may irritate or offend natives. This phenomenon certainly includes American Muslims, many of whom are immigrants.</p><p style="padding:0; margin:0 0 10px 0;">Anti-Muslim sentiment is hardly unknown in this country. But it's clear that Muslims are largely well-integrated into American society. At a time when France in particular and Europe as a whole are struggling with how to adapt to a growing Muslim presence, as well as a refugee crisis, our experience holds valuable lessons.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.chicagotribune.com/news/opinion/editorials/ct-muslim-immigrants-america-1117-20151116-story.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6876"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.dailymail.co.uk/news/article-3317978/Torn-apart-open-door-migrants-Sweden-seen-Europe-s-liberal-nation-violent-crime-soaring-Far-Right-march-reports-SUE-REID.html">Torn apart by an open door for migrants: Sweden is seen as Europe's most liberal nation, but violent crime is soaring and the Far Right is on the march</a></h1>
<p style="margin:0;">by <b>Sue Reid</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 14, 2015</span> &nbsp;�&nbsp; <i>The Daily Mail</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Waiting at the bus stop with their bags are three Syrian men fed up with Swedish hospitality. Five minutes ago, they walked out of a charity-run migrants' hostel surrounded by trees in a pretty tourist town, an hour's drive from the country's second city of Gothenburg.</p><p style="padding:0; margin:0 0 10px 0;">'We refuse to stay there,' says 29-year-old Maher Al-Saleh, as he stands defiantly on the roadside. 'The bedrooms are small, it's dirty, and they serve pasta every night, which we don't like. It is run like a Christian prison, with prayers before meals. We are Muslims.'</p><p style="padding:0; margin:0 0 10px 0;">This may sound rather ungrateful. Maher and his two friends, Mahamed, 22, and Mahmood, 38, came to Sweden after taking this summer's well-trodden route to Europe from the Middle East, via Turkey. On reaching Germany, they discovered that the waiting time to claim asylum was running into months.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.dailymail.co.uk/news/article-3317978/Torn-apart-open-door-migrants-Sweden-seen-Europe-s-liberal-nation-violent-crime-soaring-Far-Right-march-reports-SUE-REID.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6867"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://spectator.org/articles/64637/will-our-values-make-us-seek-peace-genocide">Will Our Values Make Us Seek Peace With Genocide?</a></h1>
<p style="margin:0;">by <b>John C. Wohlstetter</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 12, 2015</span> &nbsp;�&nbsp; <i>The American Spectator</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">When Prime Minister Benjamin Netanyahu said that Hitler got the idea of perpetrating the Holocaust from Haj Amin al-Husseini, as Grand Mufti of Jerusalem from 1922 to 1948 spiritual leader of the Arabs in Palestine, he predictably ignited a firestorm. In fact, as this Israel Network video (4:56) shows, the mufti's role in the Nazi genocidal enterprise was that of eager collaborator and cheerleader, though not as instigator. (He also eagerly incorporated Soviet communism into his totalitarian arsenal.)</p><p style="padding:0; margin:0 0 10px 0;">Scholar Jeffrey Herf recently addressed this issue in a <i>Times of Israel</i> posting:</p><blockquote><p style="padding:0; margin:0 0 10px 0;">The now widely accepted international consensus among historians of the Holocaust is that Hitler had both made the decisions to implement the Final Solution and had communicated those decisions to key actors in the Nazi regime at the latest a month before his meeting with Husseini on November 28<sup>th</sup>....</p></blockquote>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://spectator.org/articles/64637/will-our-values-make-us-seek-peace-genocide" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6847"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://spectator.org/articles/64594/its-touch-ngo-mideast">It's Touch NGO in the Mideast</a></h1>
<p style="margin:0;">by <b>Jay D. Homnick</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 9, 2015</span> &nbsp;�&nbsp; <i>The American Spectator</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">T<i>he American Spectator</i> is a great admirer of the Gatestone Institute, founded and ably presided over by Nina Rosenwald. This is the premier "thinking man's think tank," where American principles are applied to world problems. There is no greater friend to pro-democracy movements and religious minorities around the globe. In October, <i>TAS</i> was in attendance when Dr. Gerald Steinberg, founder of NGO-Monitor, was the featured speaker at a Gatestone event. His organization, based in Israel, monitors the work of NGOs, "non-governmental organizations."</p><p style="padding:0; margin:0 0 10px 0;">Dr. Steinberg was kind enough to sit down for an interview, so our readers could have a window into his valuable work.</p><p style="padding:0; margin:0 0 10px 0;"><i><b>TAS:</b></i> <b>Do you think the public assumes NGOs to be altruistic, giving them a natural advantage over government and business?</b></p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://spectator.org/articles/64594/its-touch-ngo-mideast" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6782"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.breitbart.com/london/2015/10/28/u-s-2nd-amendment-not-archaic-hoards-migrants-flood-europe-wreak-havoc/">U.S. 2nd Amendment Not So Archaic As Hordes of Migrants Flood Europe, Wreak Havoc</a></h1>
<p style="margin:0;">by <b>Awr Hawkins</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 28, 2015</span> &nbsp;�&nbsp; <i>Breitbart</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The United States' Second Amendment protections of the right to keep and bear arms may have gone from archaic to envied this week as Austrians and other Europeans�particularly women�pour into stores looking for firearms with which to protect themselves from the hordes of Islamic migrants flooding into their countries.</p><p style="padding:0; margin:0 0 10px 0;">The migrants have brought violence and already portend a change in culture for the countries they are entering.</p><p style="padding:0; margin:0 0 10px 0;">For example, Breitbart News previously reported that violence is a fixed part of life in the centers where migrants are gathered in Germany, and the violence is expected to spread from there. Researchers at Die Welt observed, "Violent behaviour and aggressive verbal confrontations, threats or insults and serious damage to property were very commonly reported, indicating they are part of everyday life in the hired accommodation."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.breitbart.com/london/2015/10/28/u-s-2nd-amendment-not-archaic-hoards-migrants-flood-europe-wreak-havoc/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6778"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://nypost.com/2015/10/28/liberal-hero-james-comey-now-the-enemy-for-telling-the-truth-about-cops/">'Peripheral' vision</a></h1>
<p style="margin:0;">by <b>Michael Goodwin</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 28, 2015</span> &nbsp;�&nbsp; <i>New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Former UN Ambassador John Bolton punctuated a serious speech at the Gatestone Institute with a clever dig at Secretary of State John Kerry. Noting that Kerry showed more interest in the simmering Israeli-Palestinian conflict than the total meltdown of Syria and millions of refugees, Bolton said Kerry demonstrated "an unerring instinct for the capillaries."</p><p style="padding:0; margin:0 0 10px 0;">Touch�!</p></div></div>


</div>

<a name="toc_item_6783"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.ijreview.com/2015/10/456587-2-one-thing-driving-mad-scramble-guns-europe-not-sale-walmart/">One Thing is Driving a Mad Scramble for Guns in Europe � And It's Not a Sale on 'Assault Rifles'</a></h1>
<p style="margin:0;">by <b>Justen Charters</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 27, 2015</span> &nbsp;�&nbsp; <i>Independent Journal</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The influx of immigrants into Europe in recent months has been nothing short of massive.</p><p style="padding:0; margin:0 0 10px 0;">In fear of the staggering number of refugees coming into their countries, residents in some European nations are buying up whatever firearms they can get their hands on.</p><p style="padding:0; margin:0 0 10px 0;">According to the Daily Mail:</p><blockquote><p style="padding:0; margin:0 0 10px 0;">Weapon sales are soaring in Austria as citizens of the small Alpine nation become paranoid over the numbers of refugees crowding into their country. In a country of 8.5 million people, there are now an estimated 900,000 firearms in homes.</p><p style="padding:0; margin:0 0 10px 0;">And gun dealers report that it is women driving the sales rush. This year alone, police say 70,000 guns have been sold. Czech Independent TV also reported on the arms upsurge. As of Monday most rifles in the country are out of stock.</p></blockquote>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.ijreview.com/2015/10/456587-2-one-thing-driving-mad-scramble-guns-europe-not-sale-walmart/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6769"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.foxnews.com/opinion/2015/10/22/truth-is-first-victim-palestinian-violence.html">For Israel, truth is first victim of Palestinian violence</a></h1>
<p style="margin:0;">by <b>Kenneth Bandler</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 22, 2015</span> &nbsp;�&nbsp; <i>Fox News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Over the years, Israeli and Palestinian peace negotiators have considered the status of Jerusalem to be among the last issues to tackle because the complex mix of politics and religion stirs deep passions. As we see today, these can turn volatile with deadly consequences.</p><p style="padding:0; margin:0 0 10px 0;">Two Israeli prime ministers, Ehud Barak and Ehud Olmert, offered creative proposals that recognized both Israeli and Palestinian connections to Jerusalem. But Palestinian leaders spurned those ideas�which included sharing the Old City and the Temple Mount�as they rejected comprehensive peace plans in 2000, 2001, and 2008 that could have resolved the conflict.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.foxnews.com/opinion/2015/10/22/truth-is-first-victim-palestinian-violence.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6770"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.thetower.org/2461-analysts-increasingly-seeing-isis-link-in-palestinian-violence/">Analysts Increasingly Seeing ISIS Link in Palestinian Violence</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">October 20, 2015</span> &nbsp;�&nbsp; <i>The Tower</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The Islamic State of Iraq and Syria (ISIS) is taking credit for the current round of Palestinian anti-Israel terror, Marc Shulman wrote an analysis for Newsweek on Monday. Citing Israeli sources calling the violence an "ISIS uprising," Shulman observed:</p><blockquote><p style="padding:0; margin:0 0 10px 0;">[ISIS] issued five videos on this newest round of the conflict, trying to take responsibility for it. The videos called on Palestinians to continue the attacks as the first step in liberating Jerusalem's Al-Aqsa mosque from the Jews. Some Israeli observers are already calling this latest barrage of violence "the ISIS uprising," not because the attacks are under its direction but because the spirit of ISIS has now seeped into the West Bank and East Jerusalem.</p></blockquote>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.thetower.org/2461-analysts-increasingly-seeing-isis-link-in-palestinian-violence/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6739"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.familysecuritymatters.org/publications/detail/altruist-economics-an-oxymoron">Altruist Economics: An Oxymoron</a></h1>
<p style="margin:0;">by <b>Edward Cline</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 20, 2015</span> &nbsp;�&nbsp; <i>Family Security Matters</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">As the term <i>economy</i> is understood to be a system of trade - a barter system, or <i>laissez-faire,</i> or a mixed economy in which the freedom to trade and produce hampered, saddled and skewed by government controls and regulations, the notion of an economy founded on <i>altruism</i> is, like an "Islamic economy," an oxymoron.</p><p style="padding:0; margin:0 0 10px 0;">The Gatestone Institute carried a revealing article about the state of Sweden on October 17th, Ingrid Carlqvust's "Sweden Close to Collapse." She began the article with:</p><p style="padding:0; margin:0 0 10px 0;">Sweden is fast approaching a complete collapse. More and more municipalities are raising the alarm that if the migrants keep coming at this pace, the government can no longer guarantee normal service to its citizens. In addition, ominous statements from government officials have left Swedes in fear of what tomorrow may bring. If the migrant wave keeps coming, in 10-15 years, Swedes will be a minority in their own country.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.familysecuritymatters.org/publications/detail/altruist-economics-an-oxymoron" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6738"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.americanthinker.com/articles/2015/10/islam_and_the_fall_of_europe.html">Islam and the Fall of Europe</a></h1>
<p style="margin:0;">by <b>Jerrold L. Sobel</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 20, 2015</span> &nbsp;�&nbsp; <i>American Thinker</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">A duality, Islam is first and foremost a political movement ensconced in a religion from which it expresses its imperialist nature through a multi faceted concept known as jihad. Christian Europe today, among other factors to be discussed later, lacking cognizance of Islam's millennial ploy of hegemonic control via emigration, is saddled with a demographic birthrate inverse to that of their new emigres. Europe is in the throes of Islamization. Writes author Bat'Ye'or in her critically acclaimed work: <i>Eurabia: The Euro-Arab Axis</i>.</p><blockquote><p style="padding:0; margin:0 0 10px 0;">"The ideology, strategy, and tactics of Jihad has constituted throughout history a fundamental part of Islamic Jurisprudence and literature, since it is through jihad that the Islamic community developed and expanded."</p></blockquote>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.americanthinker.com/articles/2015/10/islam_and_the_fall_of_europe.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6732"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.ibtimes.co.in/isis-unleashes-propaganda-videos-against-israelis-incites-palestinians-behead-jews-651123">Isis unleashes propaganda videos against Israelis, incites Palestinians to 'behead the Jews'</a></h1>
<p style="margin:0;">by <b>Johnlee Varghese</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 19, 2015</span> &nbsp;�&nbsp; <i>International Business Times</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The Islamic State (Isis) terrorists on Sunday unleashed a stream of hate propaganda through videos inciting Palestinians to "behead the Jews."</p><p style="padding:0; margin:0 0 10px 0;">The release of the videos is important, as this is the first time that the Isis has directly involved itself in the current Israeli-Palestinian violence, centred in Jerusalem.</p><p style="padding:0; margin:0 0 10px 0;">Praising the knife attacks targeting the Israelis, one video urges Palestinians to "bring back horror to the Jews with explosions, burning and stabbings."</p><p style="padding:0; margin:0 0 10px 0;">An Isis fighter in the video exhorts Palestinians to carry out more "lone wolf" attacks against "God's enemies."</p><p style="padding:0; margin:0 0 10px 0;">"Time is running out, and this life is what Allah has given to us and we must offer it back in his service," the Isis terrorist says in the video released from Deir ez-Zor in Syria.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.ibtimes.co.in/isis-unleashes-propaganda-videos-against-israelis-incites-palestinians-behead-jews-651123" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6731"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.americanthinker.com/blog/2015/10/europes_first_national_election_since_mass_muslim_invasion_drives_power_to_conservatives.html">Europe's first national election since mass Muslim invasion drives power to conservatives</a></h1>
<p style="margin:0;">by <b>Thomas Lifson</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 19, 2015</span> &nbsp;�&nbsp; <i>American Thinker</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Switzerland just elected a new parliament, and a conservative, anti-immigration party, the Swiss People's Party (SVP) won a record vote, enabling it to form a government with a conservative majority. The political fallout in Europe is just beginning, and Angela Merkel's Christian Democrats in Germany had better take notice. The BBC reports on the Swiss election:</p><blockquote><p style="padding:0; margin:0 0 10px 0;"><b>The right-wing, anti-immigration Swiss People's Party (SVP) has won Switzerland's parliamentary election with a record 29.4% of the vote.</b></p><p style="padding:0; margin:0 0 10px 0;">Its victory translates into 11 extra seats, giving it 65 out of the total 200 in the lower house.</p><p style="padding:0; margin:0 0 10px 0;">Europe's migrant crisis boosted support for the SVP, commentators say - though Switzerland is taking in far fewer migrants than Germany.</p><p style="padding:0; margin:0 0 10px 0;">The right-wing liberal FDP also got an electoral boost, coming third.</p></blockquote>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.americanthinker.com/blog/2015/10/europes_first_national_election_since_mass_muslim_invasion_drives_power_to_conservatives.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6733"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.breitbart.com/london/2015/10/16/equality-last-worlds-first-male-rape-centre-opens-sweden/">Equality At Last? World's First Male Rape Centre Opens In Sweden</a></h1>
<p style="margin:0;">by <b>Oliver Lane</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 16, 2015</span> &nbsp;�&nbsp; <i>Breitbart</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The largest hospital in Europe's rape-capital Sweden has opened a rape centre for men and boys, a crucial badge of honour for their commitment to "gender equal" patient care.</p><p style="padding:0; margin:0 0 10px 0;">The hospital's pre-existing rape crisis centre has proven a useful service for locals, receiving between 600 and 700 walk-in cases every year, but like most such wards worldwide it caters only for women. The new clinic at the S�dersjukhuset opened yesterday to great acclaim, and is now open 24-hours a day, 365-days a year for emergency treatment of men and boys who have been attacked.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.breitbart.com/london/2015/10/16/equality-last-worlds-first-male-rape-centre-opens-sweden/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6717"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://atimes.com/2015/10/more-horrible-than-rape/">More horrible than rape</a></h1>
<p style="margin:0;">by <b>David P. Goldman</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 14, 2015</span> &nbsp;�&nbsp; <i>Asia Times</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The body of a 20-year-old Syrian woman, "Rokstan M.," was unearthed from a shallow grave in the small Saxon town of Dessau last week. Her father and brothers stabbed her to death on her mother's orders, after she was gang-raped by three men. The rape left her "unclean" and the mother allegedly demanded the killing to restore the family's honor. German police are seeking the father and brothers. That by itself is not newsworthy; what is newsworthy is the news itself, which appeared in not one of Germany's major daily newspapers or websites. The tabloid <i>Bild-Zeitung</i> ran the story, along with the regional press, while the arbiters of enlightened opinion buried it. <i>Der Spiegel</i>, the country's biggest news site, and the Frankfurter <i>Algemeine Zeitung</i>, the newspaper of record, made no mention.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://atimes.com/2015/10/more-horrible-than-rape/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6690"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nationalreview.com/corner/424953/germany-evicts-residents-and-seizes-property-house-migrants">Deutsche Raus! Germany Evicts Residents and Seizes Property to House Migrants</a></h1>
<p style="margin:0;">by <b>Mark Krikorian</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">October 1, 2015</span> &nbsp;�&nbsp; <i>National Review Online</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The Gatestone Institute has an alarming roundup of news from German sources about how citizens are being evicted from their homes and private property is being confiscated by the government to house the "Syrian" "refugees" flooding into the country at Angela Merkel's invitation.</p><p style="padding:0; margin:0 0 10px 0;">The Green Party mayor of Tubingen told of his efforts to buy vacant homes to house migrants:</p><blockquote><p style="padding:0; margin:0 0 10px 0;">In the written offers, I advise that the Police Law (Polizeigesetz) gives us the possibility, in cases of emergency, to confiscate homes for several months. The law provides for seizure in emergencies. I want to avoid this, but if there is no other way, I will make use of this law.</p></blockquote><p style="padding:0; margin:0 0 10px 0;">In another part of the country,</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.nationalreview.com/corner/424953/germany-evicts-residents-and-seizes-property-house-migrants" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6689"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.foxnews.com/us/2015/09/30/iraqi-christians-denied-asylum-in-us-facing-looming-expulsion/">Iraqi Christians denied asylum in US, facing looming expulsion</a></h1>
<p style="margin:0;">by <b>Hollie McKay</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">September 30, 2015</span> &nbsp;�&nbsp; <i>Fox News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Nearly two dozen Iraqi Christians who fled ISIS and crossed into the U.S. from Mexico seeking religious asylum have been denied protection and could be booted from American soil within days, a federal official said.</p><p style="padding:0; margin:0 0 10px 0;">Some 27 Iraqi Christians, known as Chaldeans, were held at the Otay Detention Center in San Diego since entering the U.S. in April and May. Seven have already been extradited, and five more criminally charged with making false statements. In all, 22 have been ordered out of the U.S. and five still have asylum applications pending, according to Lauren Mack, spokeswoman for U.S. Immigration and Customs Enforcement (ICE) in San Diego.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.foxnews.com/us/2015/09/30/iraqi-christians-denied-asylum-in-us-facing-looming-expulsion/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6474"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.gatestoneinstitute.org/6474/securing-jerusalem-status-quo">Securing Jerusalem's status quo</a></h1>
<p style="margin:0;">by <b>Dan Diker</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">September 5, 2015</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Islamist violence and incitement on the Temple Mount plaza over the past months has inspired the recent spate of terrorist attacks in Jerusalem.</p><p style="padding:0; margin:0 0 10px 0;">This is unsurprising. Traditionally, the battle for the Holy City has been associated in the public mind with the epicenter of the Arab-Israeli conflict. However, intra-Muslim warfare and Islamic State's destruction of Muslim holy sites across Syria and Iraq have changed the context of the Muslim struggle for control of Jerusalem's Muslim holy shrines. Islamist incitement against Jordanian custodianship and ongoing attempts by the Palestinian Authority to exercise influence and control threaten the stability of the Temple Mount plaza. They also underscore the importance of deepening Israeli- Jordanian cooperation and bolstering the delicate status quo in Jerusalem that has defied the ruthless Islamist campaign to destroy holy sites across the Middle East region.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.gatestoneinstitute.org/6474/securing-jerusalem-status-quo" class="continue">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6392"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Opinion/My-word-BDS-and-Matisyahus-bum-rap-412778">BDS and Matisyahu's bum rap</a></h1>
<p style="margin:0;">by <b>Liat Collins</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 20, 2015</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;"><i>"All my life I've been waiting for<br>I've been praying for<br>For the people to say<br>That we don't wanna fight no more<br>There will be no more wars<br>And our children will play..."</i></p><p style="padding:0; margin:0 0 10px 0;"><i>� "One Day," performed by Matisyahu</i></p><p style="padding:0; margin:0 0 10px 0;">The lyrics might seem innocuous � pro-peace and world harmony, even � but hip-hop singer Matisyahu who performs them was singled out as being out of tune with the message of an annual music festival in Benicassim, near Valencia in Spain. As The Jerusalem Post's Herb Keinon put it: "If you plan on going to the Sunsplash Rototom Reggae Festival in Spain this week, you better not speak the language of the Hebrewman. If you do, they might kick you out."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Opinion/My-word-BDS-and-Matisyahus-bum-rap-412778" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6393"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.gatestoneinstitute.org/6393/terrorist-torturer-turncoat-make-short-list-to">Terrorist, torturer, turncoat make short list to succeed Palestinian chief Abbas</a></h1>
<p style="margin:0;">by <b>Paul Alster</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 17, 2015</span> &nbsp;�&nbsp; <i>Fox News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The age and flagging popularity of Mahmoud Abbas have spurred speculation the Palestinian Authority president is preparing to step down, and the short list of likely successors is topped by a convicted terrorist serving life in an Israeli prison.</p><p style="padding:0; margin:0 0 10px 0;">Abbas, who is 80 and reportedly in failing health, has led the West Bank government for the entire decade since the death of Yasser Arafat. But growing and open discontent with Abbas has been accompanied by an Egyptian TV report that he told that nation's president he intends to step down in the coming months.</p><p style="padding:0; margin:0 0 10px 0;">"He doesn't have a protege, he hasn't facilitated a system in which people feel they can rise to the top," Grant Rumley, an expert on Palestinian affairs at the Washington-based Foundation for Defense of Democracies, told The Jerusalem Post.</p><blockquote><p style="padding:0; margin:0 0 10px 0;">"The Palestinian Authority cannot afford a leadership crisis if Abbas were to leave office ..."</p></blockquote>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.gatestoneinstitute.org/6393/terrorist-torturer-turncoat-make-short-list-to" class="continue">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6436"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.americanthinker.com/blog/2015/08/netherlands_abandoning_multiculturalism.html">Netherlands abandoning multiculturalism</a></h1>
<p style="margin:0;">by <b>Thomas Lifson</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 4, 2015</span> &nbsp;�&nbsp; <i>American Thinker</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Famously progressive and permissive Holland has tried multiculturalism and decided that it just doesn't work. In a historic reversal, the Dutch are abandoning government policies in support of multiculturalism and demanding intregration and acceptance of Dutch values from immigrants, mostly Muslims, who now constitute 6 percent of their population.</p><p style="padding:0; margin:0 0 10px 0;">The <i>Gatestone Institute</i> reports:</p><blockquote><p style="padding:0; margin:0 0 10px 0;">A new integration bill (covering letter and 15-page action plan), which Dutch Interior Minister Piet Hein Donner presented to parliament on June 16, reads: "The government shares the social dissatisfaction over the multicultural society model and plans to shift priority to the values of the Dutch people. In the new integration system, the values of the Dutch society play a central role. With this change, the government steps away from the model of a multicultural society."</p></blockquote>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.americanthinker.com/blog/2015/08/netherlands_abandoning_multiculturalism.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6434"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.theblaze.com/stories/2015/08/02/american-great-satan-while-obama-aims-to-sell-iran-deal-at-home-heres-what-irans-supreme-leader-is-telling-iranians/">'American Great Satan': While Obama Aims to Sell Iran Deal at Home, Here's What Iran's Supreme Leader Is Telling Iranians</a></h1>
<p style="margin:0;">by <b>Sharona Schwartz</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 2, 2015</span> &nbsp;�&nbsp; <i>The Blaze</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">While President Barack Obama aimed to sell Congress on the Iran agreement, Iranian Supreme Leader Ayatollah Ali Khamenei was working on his own domestic front, releasing a book detailing his plan to eliminate the "cancerous tumor" Israel.</p><p style="padding:0; margin:0 0 10px 0;">Journalist Amir Taheri obtained a copy of the 416-page book entitled "Palestine," published last week in Tehran, in which Khamenei also denied the Holocaust, an event he described as "a propaganda ploy."</p><p style="padding:0; margin:0 0 10px 0;">"If there was such a thing ... we don't know why it happened and how," Khamenei wrote, according to Taheri who posted translated excerpts in the New York Post and the Gatestone Institute website.</p><p style="padding:0; margin:0 0 10px 0;">In the book, Khamenei used three words to describe how Israel is to be destroyed, which translate to "annihilation," "fading out" and "effacement."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.theblaze.com/stories/2015/08/02/american-great-satan-while-obama-aims-to-sell-iran-deal-at-home-heres-what-irans-supreme-leader-is-telling-iranians/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6433"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.powerlineblog.com/archives/2015/08/khamenis-kampf.php">Khameni's "Kampf"</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">August 2, 2015</span> &nbsp;�&nbsp; <i>Power Line</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">At the site of the Gatestone Institute Amir Taheri explores the book published in Iran by the Supreme Leader of the Islamic Republic of Iran. Taheri's column on the book is published there under the heading "The ayatollah's plans for Israel and Palestine." Taheri has also adapted his Gatestone column into a piece for the New York Post published as "Iran publishes book on how to outwit US and destroy Israel." Taheri's columns are of great interest. They don't tell us anything we don't already know, but they nevertheless add depth to what we already know.</p><p style="padding:0; margin:0 0 10px 0;">Our Supreme Leader thinks that we can do business with Islamic Republic of Iran. He wants to set Iran up as a constructive regional power. He is in the process of financing and facilitating Iran's development of nuclear weapons and otherwise strengthening the regime. Our Supreme Leader is going into partnership with their Supreme Leader.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.powerlineblog.com/archives/2015/08/khamenis-kampf.php" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6280"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.algemeiner.com/2015/08/02/report-new-khamenei-book-outlines-slow-painful-strategy-to-destroy-israel/">Report: New 'Khamenei' Book Outlines Slow, Painful Strategy to Destroy Israel</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">August 2, 2015</span> &nbsp;�&nbsp; <i>The Algemeiner</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Iranian Supreme Leader Ayatollah Ali Khamenei outlined his excruciating and patient strategy to annihilate the State of Israel in a new volume entitled "Palestine," New York-based think tank the Gatestone Institute revealed last week.</p><p style="padding:0; margin:0 0 10px 0;">Rather than wiping Israel off the map through conventional warfare, Khamenei recommends an everlasting chain of low-intensity attacks that will ultimately make life unbearable for Israelis, who would largely respond, the supreme leader hypothesizes, by packing their bags and relocating themselves out of the country.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.algemeiner.com/2015/08/02/report-new-khamenei-book-outlines-slow-painful-strategy-to-destroy-israel/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6435"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.gatestoneinstitute.org/6435/iranian-jews-murdered-trying-to-flee-to-israel">Iranian Jews murdered trying to flee to Israel, Mossad reveals</a></h1>
<p style="margin:0;">by <b>Ariel Ben Solomon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 28, 2015</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Israel's overseas intelligence agency, the Mossad, has discovered that Iran murdered three Iranian Jews who disappeared in 1997 as they attempted to flee to Israel via Pakistan.</p><p style="padding:0; margin:0 0 10px 0;">The three, Nourollah Rabizadeh and brothers Cyrus and Avraham Ghahremani, fled Tehran in February 1997. They were supposed to meet up with a smuggler on the Pakistani border, but disappeared along the way, according to a report in Ynet on Monday.</p><p style="padding:0; margin:0 0 10px 0;">Newly discovered information led the intelligence agency to conclude that they were captured while escaping and murdered. Their families, which had escaped to Israel via Turkey, were recently informed of the agency's conclusion.</p><p style="padding:0; margin:0 0 10px 0;">On the basis of the information, a rabbinical court in Jerusalem has ruled that the wives of the missing husbands are now widows and able to remarry. The families requested meetings with President Reuven Rivlin and Prime Minister Benjamin Netanyahu.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.gatestoneinstitute.org/6435/iranian-jews-murdered-trying-to-flee-to-israel" class="continue">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6246"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.frontpagemag.com/fpm/259443/scandinavias-new-religion-multiculturalism-joseph-puder">Scandinavia's New Religion: Multiculturalism</a></h1>
<p style="margin:0;">by <b>Joseph Puder</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 13, 2015</span> &nbsp;�&nbsp; <i>FrontPageMagazine.com</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">During recent travel to Scandinavia after a six year absence, the take-away now is even more pronounced: Christianity is a diminishing reality and the new faith that has arisen is multiculturalism. It may be more evident in Sweden than in Norway or Finland, but nevertheless, it is found everywhere. As you watch the morning commuter trains unload, four -- if not five -- out of every ten non-tourist passengers appear to be non-native. A significant number of the city's bus drivers in Oslo are Africans. Many of the uniformed personnel in Sweden and Norway appear to be of Middle Eastern origin.</p><p style="padding:0; margin:0 0 10px 0;">The North Sea oil, which brought enormous wealth to Norway, changed the habits of the once hard-working Norwegians. The young people in this geographically gorgeous country have been spoiled by instantaneous wealth. Immigrants from South Asia, the Middle East, Africa, and Latin America are employed in the service industries in Oslo, Bergen, Stockholm, Copenhagen, and Helsinki.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.frontpagemag.com/fpm/259443/scandinavias-new-religion-multiculturalism-joseph-puder" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6136"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.breitbart.com/london/2015/07/09/left-wing-scottish-muslim-minister-wants-britain-to-fling-open-its-doors-to-migrants/">Left-Wing Scottish Muslim Minister Wants Britain To Fling Open Its Doors to Migrants</a></h1>
<p style="margin:0;">by <b>Oliver Lane</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 9, 2015</span> &nbsp;�&nbsp; <i>Breitbart</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The Islamist-linked radical at the heart of Scotland's devolved government has castigated David Cameron for not signing up to the European Union plan to welcome thousands of Mediterranean boat migrants to Britain. He says the nation has a "moral obligation" to act.</p><p style="padding:0; margin:0 0 10px 0;">Scottish minister Humza Yousaf made the comments yesterday after meeting with the chief executive of the Refugee Council, opening a potentially serious rift with the Westminster government over how to deal with the great volumes of people now crossing the Mediterranean. Despite Britain not participating in the European Union plan to relocate 40,000 of the migrants who have arrived in Greece and Italy already, many still continue to come here, attempting to illegally board trains and lorries to cross the English channel.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.breitbart.com/london/2015/07/09/left-wing-scottish-muslim-minister-wants-britain-to-fling-open-its-doors-to-migrants/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6248"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.westernjournalism.com/you-wont-believe-what-british-lawmakers-proposed-in-connection-with-the-islamic-state/">You Won't Believe What British Lawmakers Proposed In Connection With The Islamic State!</a></h1>
<p style="margin:0;">by <b>Yochanan Visser</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 6, 2015</span> &nbsp;�&nbsp; <i>Western Journalism</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Last week, British lawmakers urged the BBC to stop using the term "Islamic State" for ISIS (also called ISIL), the jihadist organization led by Abu Bakr al-Baghdadi. Prime Minister David Cameron is one of over a hundred British politicians who think the term "Islamic State" is not correct and offends Muslims.</p><p style="padding:0; margin:0 0 10px 0;">In an interview with the BBC, Cameron explained why he wants the BBC and others to refrain from using the term "Islamic State":</p><blockquote><p style="padding:0; margin:0 0 10px 0;">I wish the BBC would stop calling it 'Islamic State' because it is not an Islamic state. What it is, is an appalling, barbarous regime. It is a perversion of the religion of Islam, and, you know, many Muslims listening to this program will recoil every time they hear the words 'Islamic State.'</p></blockquote>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.westernjournalism.com/you-wont-believe-what-british-lawmakers-proposed-in-connection-with-the-islamic-state/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6249"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.todayszaman.com/diplomacy_pondering-military-incursion-into-syria-ak-party-eyes-early-election_392808.html">Pondering military incursion into Syria, AK Party eyes early election</a></h1>
<p style="margin:0;">by <b>Deniz Arslan</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 4, 2015</span> &nbsp;�&nbsp; <i>Today's Zaman</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Considering the Kurds as a security threat more than the terrorist Islamic State in Iraq and the Levant (ISIL), the interim Turkish government is pushing the highly reluctant Turkish military to prepare for a possible military incursion into Syria, despite the objections of Turkey's allies, stressing that the aim is to prevent a stronger Kurdish establishment in the north, but the real motive behind it may be an early election in Turkey, experts say.</p><p style="padding:0; margin:0 0 10px 0;">The ruling Justice and Development Party (AK Party) lost its parliamentary majority with the June 7 general election and party leaders in Parliament are currently facing the difficult task of forming a coalition government. Pro-government media last weekend reported that the government has ordered the military to take security measures, including a cross-border operation into Syria to stop Kurdish advances in the north.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.todayszaman.com/diplomacy_pondering-military-incursion-into-syria-ak-party-eyes-early-election_392808.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6247"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.thecommentator.com/article/5952/islam_conservative_leaders_and_pastor_james_mcconnell">Islam, Conservative leaders, and Pastor James McConnell</a></h1>
<p style="margin:0;">by <b>George Igler</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 2, 2015</span> &nbsp;�&nbsp; <i>The Commentator</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">At 78 years of age, Pastor James McConnell is being treated for both cancer and diabetes. He faces six months in a Belfast prison for a sermon delivered to his church in May last year.</p><p style="padding:0; margin:0 0 10px 0;">As the fate of indigenous Christians across Syria and Iraq played on the minds of his flock the Evangelical minister took to his lectern in Northern Ireland to address the exterminations being carried out by the soon to be declared Islamic State.</p><p style="padding:0; margin:0 0 10px 0;">"Today we see powerful evidence," he began, "that more and more Muslims are putting the Quran's hatred of Jews and Christians alike into practice." As always, McConnell's remarks at the Whitewell Metropolitan Tabernacle were also streamed online.</p><p style="padding:0; margin:0 0 10px 0;">He then delivered the sort of rhetoric, for which Ulster churchmen are renowned. "Islam is heathen," he declared. "Islam is Satanic. Islam is a doctrine spawned in Hell."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.thecommentator.com/article/5952/islam_conservative_leaders_and_pastor_james_mcconnell" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6250"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.gatestoneinstitute.org/6250/judge-william-walls-outwitted-in-menendez-motion">Judge William Walls Outwitted In Menendez Motion</a></h1>
<p style="margin:0;">by <b>Donald Scarinci</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">June 24, 2015</span> &nbsp;�&nbsp; <i>PolitickerNJ</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Fortunately for the U.S. Attorney and unfortunately for constitutional law experts, the retired judge selected to hear the Menendez case might be one of the weakest thinkers on the federal bench in New Jersey for constitutional issues. His decision last week to keep the case in NJ reveals the mind of a judge who thinks the case is really about a "crime."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.gatestoneinstitute.org/6250/judge-william-walls-outwitted-in-menendez-motion" class="continue">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6056"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.cosmopolitan.com/sex-love/news/a42191/sweden-male-rape-center/">The First Emergency Rape Center for Men Is Set to Open in Sweden</a></h1>
<p style="margin:0;">by <b>Tess Koman</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">June 18, 2015</span> &nbsp;�&nbsp; <i>Cosmopolitan</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">According to <i> The Local</i>, the S�dersjukhuset hospital in Stockholm, Sweden, will open the country's first emergency department specifically for male rape victims.</p><p style="padding:0; margin:0 0 10px 0;">The hospital, which treats 600 to 700 female rape victims per year, will begin treating male victims in mid-October. The hospital announced the new department "as part of a strategy to ensure 'gender equal' emergency care for rape victims of both sexes."</p><p style="padding:0; margin:0 0 10px 0;">Since 2010, Sweden has been the country with the second-highest rate of rape in the world, according to the Gatestone Institute. The Swedish National Council for Crime Prevention reports 370 cases of sexual assault on men or boys were reported across Sweden in 2014. The  Rape Abuse &amp; Incest National Network explains that even though fewer men are sexually assaulted than women, the experience is equally traumatic for anyone who has been abused.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.cosmopolitan.com/sex-love/news/a42191/sweden-male-rape-center/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5998"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://blog.camera.org/archives/2015/06/wheres_the_coverage_arabic_isl_1.html">Where's the Coverage? Arabic, Islamic Studies Expert Exposes BDS Dishonesty</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">June 17, 2015</span> &nbsp;�&nbsp; <i>CAMERA</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Denis MacEoin earned a B.A. and an M.A. in English Language and Literature from Trinity College, Dublin, followed by a second 4-year M.A. in Persian, Arabic, and Islamic Studies from Edinburgh and a PhD in Persian/Islamic Studies from Cambridge (King's College). He has lectured in Arabic and Islamic Studies at Newcastle University, and written several academic books, numerous articles as well as reports on hate literature, Shari'a Law, and Islamic schools.</p><p style="padding:0; margin:0 0 10px 0;">As an expert on Arabic and Islamic studies, fluent in Arabic and Persian languages, one might think that Dr. MacEoin's point of view on the Arab-Israeli conflict and its related controversies would get some coverage in the press. Well, not so much.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://blog.camera.org/archives/2015/06/wheres_the_coverage_arabic_isl_1.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5987"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://pagesix.com/2015/06/15/henry-kissinger-praises-the-iron-lady/">Henry Kissinger praises the Iron Lady</a></h1>
<p style="margin:0;">by <b>Richard Johnson</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">June 15, 2015</span> &nbsp;�&nbsp; <i>New York Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Henry Kissinger has nothing but admiration for the Iron Lady Margaret Thatcher.</p><p style="padding:0; margin:0 0 10px 0;">President Nixon's secretary of state appeared last week at a private club on the Upper East Side in a dialogue organized by the Gatestone Institute with Charles Powell, Baron Powell of Bayswater, who was private secretary to the British prime minister.</p><p style="padding:0; margin:0 0 10px 0;">Powell recalled how Thatcher once started off a meeting with the leader of a Communist country by announcing, "I hate Communists." The translator sugar-coated her candor.</p><p style="padding:0; margin:0 0 10px 0;">Kissinger said during the Falklands crisis when an adviser suggested a compromise, Thatcher snapped, "How dare you utter the word 'compromise' in my presence?"</p><p style="padding:0; margin:0 0 10px 0;">Thatcher never watched the news on TV or read the papers, Kissinger said, because she didn't care what her critics believed.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://pagesix.com/2015/06/15/henry-kissinger-praises-the-iron-lady/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6086"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jns.org/latest-articles/2015/6/12/will-erdogans-election-setback-spell-change-for-turkey-and-its-ties-with-israel-1">Will Erdogan's Election Setback Mean Improved Relations With Israel?</a></h1>
<p style="margin:0;">by <b>Alina Dain Sharon and Sean Savage</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">June 12, 2015</span> &nbsp;�&nbsp; <i>JNS.org</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;" id="yui_3_17_2_1_1435727518481_459">A political upheaval is seemingly underway in Turkey, as the rule of President Recep Tayyip Erdogan experienced a significant setback in the country's June 7 parliamentary election. What does this mean for the country's future as well as its relationship with the West and Israel?</p><p style="padding:0; margin:0 0 10px 0;">Although the long-dominant Islamist party of Erdogan again received the most votes in the election, the number of seats it won is not enough for a full parliamentary majority. Besides thwarting Erdogan's ambition of amending the Turkish constitution to give the presidency more executive power, the election results could force Erdogan's Justice and Development Party (AKP) to form a governing coalition with other parties in Turkey's parliament. AKP also faces the possibility of being completely ousted from a coalition by the other parties.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jns.org/latest-articles/2015/6/12/will-erdogans-election-setback-spell-change-for-turkey-and-its-ties-with-israel-1" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6085"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://europe.newsweek.com/new-ramadan-rules-help-nordic-muslims-fasting-328669">New Ramadan rules to help Nordic Muslims with fasting</a></h1>
<p style="margin:0;">by <b>Eilish O'Gara</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">June 12, 2015</span> &nbsp;�&nbsp; <i>Newsweek</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Muslims living in the Arctic Circle, who would usually be expected to fast from dawn until sunset during the holy month of Ramadan, may be following new guidelines this year in an attempt to combat the issue of the region's long daylight hours.</p><p style="padding:0; margin:0 0 10px 0;">This year's holy month of Ramadan begins on 18 June, three days before the longest day of the year on 21 June when, in some parts of the region receive 24-hours of sunlight, raising a significant problem for observant Muslims who are fasting.</p><p style="padding:0; margin:0 0 10px 0;">Due to the long daylight hours, Muslims living in countries in the Nordic regions, which include Denmark, Iceland, Finland, Norway, and Sweden, have requested some religious guidance and clarification on when is appropriate to break their fast in the evening time and resume it in the mornings.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://europe.newsweek.com/new-ramadan-rules-help-nordic-muslims-fasting-328669" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5941"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.theaustralian.com.au/opinion/you-cant-be-a-jihadist-and-a-good-citizen/story-e6frg6zo-1227391988988">You can't be a jihadist and a good citizen</a></h1>
<p style="margin:0;">by <b>Jennifer Oriel</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">June 11, 2015</span> &nbsp;�&nbsp; <i>The Australian</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;"><b> To consider whether one can be dually a citizen of jihadism and a citizen of Australia, we must strategise like jihadists but legislate to eternify liberal democracy.</b></p><p style="padding:0; margin:0 0 10px 0;">The recent revelation that Islamic State rose to power using a jihadist playbook has offered the world a blueprint of their battle plan. Written by Abu Bakr Naji (nom de guerre of former al-Qa'ida official Mohammad Hasan Khalil al-Hakim), The Management of Savagery exposes jihadism as the centrepiece of militant Islamist plans to destroy freedom from within legitimate nation states. It is a game changer for the Western approach to terrorism.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.theaustralian.com.au/opinion/you-cant-be-a-jihadist-and-a-good-citizen/story-e6frg6zo-1227391988988" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5943"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://sputniknews.com/europe/20150609/1023134625.html">Europe's New Hotbed of Extremism: Spain 'in the Eye of the Storm of Jihad'</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">June 9, 2015</span> &nbsp;�&nbsp; <i>Sputnik News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;"><b itemprop="description">Spain is "in the eye of the storm of jihad" with the country at a heightened risk to the threat of radical jihadists, despite an increase in government efforts to counter terrorism, an expert in foreign affairs has warned.</b></p><p style="padding:0; margin:0 0 10px 0;">Researcher Soeren Kern, in an essay for the think tank, the Gatestone Institute, warned that Spain has become a hotbed of extremism in Europe, with many radicals from France moving south, following a French counter-terror crackdown in the wake of the Charlie Hebdo and Paris kosher shop attacks.</p><p style="padding:0; margin:0 0 10px 0;">The threats stemming from an increase in the number of suspected extremists has been been compounded by targeted attacks to Spain's 50,000 Muslim converts, who Kern says are particularly at risk of becoming radicalized.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://sputniknews.com/europe/20150609/1023134625.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5942"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.thelocal.es/20150609/expert-spain-in-the-eye-of-the-storm-of-jihad">Spain 'in eye of the storm of jihad', warns expert</a></h1>
<p style="margin:0;">by <b>Emma Anderson</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">June 9, 2015</span> &nbsp;�&nbsp; <i>The Local (Spain)</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;"><b>A German-American foreign policy expert warned that Spain is at a heightened risk of radical jihadists, even as the government continues its crackdown on suspected terrorists.</b></p><p style="padding:0; margin:0 0 10px 0;">Soeren Kern of the American Gatestone Institute think-tank explained the growing concerns about radical jihadists in the country in an essay published on Saturday June 6th.</p><p style="padding:0; margin:0 0 10px 0;">Kern referenced an Interior Ministry report last month that revealed authorities have arrested 568 jihadists over the past ten years in 124 different operations, but emphasized that the same report also estimated the probability of an attack in Spain to be 70 percent.</p><p style="padding:0; margin:0 0 10px 0;">Spanish authorities have been increasingly cracking down on suspected terrorists in recent months amid growing concerns about Isis and lingering fears following the Paris attacks at magazine Charlie Hebdo.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.thelocal.es/20150609/expert-spain-in-the-eye-of-the-storm-of-jihad" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5980"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://metro.co.uk/2015/05/26/rape-is-more-common-in-sweden-than-india-5215287">Rape is more common in Sweden than India</a></h1>
<p style="margin:0;">by <b>Richard Hartley-Parkinson</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 26, 2015</span> &nbsp;�&nbsp; <i>Metro</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">India is trying to shake off its reputation as a dangerous place for women.</p><p style="padding:0; margin:0 0 10px 0;">After several high profile rapes that have led to lynch mobs or horrific deaths, the country's women's minister, Maneka Ghandi, said in an interview on Swedish TV network SVT: 'We have four rapes per 100,000 women, while Sweden has more than 130.'</p><p style="padding:0; margin:0 0 10px 0;">The most recent figures suggest that it is actually half that number � 57 per 100,000 in 2013 in Sweden and 2.7 in India � but Sweden is still among the highest in the world for reported offences.</p><p style="padding:0; margin:0 0 10px 0;">So much so that in February this year, the Gatestone Institute described it as the Rape Capital of the West.</p><p style="padding:0; margin:0 0 10px 0;">Internationally only Lesotho has a higher incidence of rape.</p><p style="padding:0; margin:0 0 10px 0;">In 2012 a 23-year-old medical student died days after she was subjected to a horrific sex assault that led to protests.</p><p style="padding:0; margin:0 0 10px 0;">Ghandi said that more women were now reporting sex assaults than before as a result, but acknowledged a lot are still not reported.</p></div></div>


</div>

<a name="toc_item_5986"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.israelnationalnews.com/News/News.aspx/195741">Jihadist Assassination Plan Against Geert Wilders Revealed</a></h1>
<p style="margin:0;">by <b>Ari Yashar and Sarah Leah Lawent</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 22, 2015</span> &nbsp;�&nbsp; <i>Israel National News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The outspoken Dutch politician Geert Wilders, who heads the Party for Freedom (PVV) and has been a staunch supporter of Israel and a critic of Islam, apparently was the target of a jihadist assassination attempt.</p><p style="padding:0; margin:0 0 10px 0;">It was revealed in court that Mohammed A., who is suspected of returning from jihad in Syria to conduct attacks, told others that he planned to attack Wilders, reports <i>NL Times</i>.</p><p style="padding:0; margin:0 0 10px 0;">A., a 22-year-old from the city of Delft, was on trial for preparing a robbery and possessing three firearms. The public prosecutor has called for a four-year prison term against him.</p><p style="padding:0; margin:0 0 10px 0;">The conversations in which A. told others he was going to attack Wilders, which took place in A.'s mother's car that police had bugged with listening devices, were discussed in court. Reportedly he refused to answer questions about the conversations in court, taking the right of silence.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.israelnationalnews.com/News/News.aspx/195741" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5981"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://dailycaller.com/2015/05/22/war-is-a-four-letter-word-spelled-i-r-a-n/">War Is A Four-Letter Word, Spelled I-R-A-N</a></h1>
<p style="margin:0;">by <b>Ken Blackwell</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 22, 2015</span> &nbsp;�&nbsp; <i>The Daily Caller</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">House Foreign Relations Chairman Ed Royce (R-Calif.) recently briefed members of the Israel Allies Caucus on Capitol Hill.He spoke to supporters about Iran. Leading off with a question from decades ago: "What distinguishes the United States' nuclear missile arsenal from that of the Soviet Union?"</p><p style="padding:0; margin:0 0 10px 0;">That question was asked of President John F. Kennedy. And that young President answered succinctly: Attitude. Exactly right. The attitude of the United States is not one of dominance and aggression, whereas that the USSR was undeniably so. President Kennedy had only to point to the Berlin Wall � an ugly spike driven through the heart of a great old European city.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://dailycaller.com/2015/05/22/war-is-a-four-letter-word-spelled-i-r-a-n/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5982"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jewishpress.com/news/breaking-news/most-dutch-muslims-view-syrian-jihadists-as-heroes-says-wilders/2015/05/21/">Most Dutch Muslims View Syrian Jihadists as Heroes, Says Wilders</a></h1>
<p style="margin:0;">by <b>Hana Levi Julian</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 21, 2015</span> &nbsp;�&nbsp; <i>The Jewish Press</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">More than 100,000 Muslims in the Netherlands are prepared to use violence for the sake of Islam, according to a study by the University of Amsterdam quoted this month by Dutch lawmaker Geert Wilders.</p><p style="padding:0; margin:0 0 10px 0;">The figure, which represents 11 percent of the country's one million Muslim population, is a sobering comment on the impact of jihadism in Europe. But worse, 73, percent of the Muslim population in the country views those who go to Syria to fight in the jihad (Islamic 'holy war') as being "heroes."</p><p style="padding:0; margin:0 0 10px 0;">Wilders cited the research in an address to the Gatestone Institute in New York.</p><p style="padding:0; margin:0 0 10px 0;">"That is 100,000 people in a country of 17 million inhabitants," he said. "The terrorists may be only a minority, but polls suggest that they have the support of the majority."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jewishpress.com/news/breaking-news/most-dutch-muslims-view-syrian-jihadists-as-heroes-says-wilders/2015/05/21/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5807"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Opinion/The-state-of-Palestine-Still-mired-in-Jew-hatred-403557">The state of Palestine? Still mired in Jew hatred</a></h1>
<p style="margin:0;">by <b>Gil Troy</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 19, 2015</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">With the Palestinians taking Israel to the International Criminal Court and trying to kick Israel out of the international soccer league, FIFA, while still boycotting normal, constructive, personal, economic or cultural ties with Israel, their war against the Jews continues. Even if Pope Francis � whom I respect � has been seduced by Palestinian self-pity to recognize the "state of Palestine," even if much of the world continues to blame Israel exclusively, the fact remains. Palestinian rhetoric and behavior reflect their honest intentions: their official organs and most of their leaders seek Israel's destruction and hate the Jewish people � not just "Zionists" � so much, they keep their people miserable rather than make any accommodation with the Jewish state. The Palestinians' self-destructive commitment to delegitimizing Israel rather than building their state or improving their lives proves they are motivated by bigotry.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Opinion/The-state-of-Palestine-Still-mired-in-Jew-hatred-403557" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5810"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.gatestoneinstitute.org/5810/female-genital-mutilation">British Activist Calls On Churches To Address Female Genital Mutilation</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">May 14, 2015</span> &nbsp;�&nbsp; <i>Religious Freedom Coalition</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Dr. Ann Marie Wilson, with the anti-FGM group "28 Too Many" has issued a call to churches in England to address the issue of Female Genital Mutilation � as if this were widespread in churches.</p><p style="padding:0; margin:0 0 10px 0;">According to Wilson, "FGM predates Islam and Christianity and although it is not part of any religion, it is practiced by both Christians and Muslims."</p><p style="padding:0; margin:0 0 10px 0;">The Gatestone Institute paints a far more accurate picture of FGM in Britain � and it's primarily a Muslim practice, not a Christian practice. It's unlikely that Wilson will call on Muslims to stop the practice for fear of getting her head cut off with a pocket knife.</p><p style="padding:0; margin:0 0 10px 0;">As the Gatestone Institute reports:</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.gatestoneinstitute.org/5810/female-genital-mutilation" class="continue">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5985"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.hurriyetdailynews.com/how-turkish-army-put-boots-on-syrian-ground.aspx?pageID=449&amp;nID=82322&amp;NewsCatID=398">How Turkish army put boots on Syrian ground</a></h1>
<p style="margin:0;">by <b>Burak Bekdil</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 13, 2015</span> &nbsp;�&nbsp; <i>H�rriyet Daily News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">In a recent act of heroism, the Turkish military headquarters proudly announced that its howitzers (with 40 km firing range) shelled a Syrian missile battery (180 km away).</p><p style="padding:0; margin:0 0 10px 0;">Even more heroically than that, at the weekend, Prime Minister Ahmet Davutoglu's military convoy, protected by helicopters and armored vehicles, stepped foot deep into the Syrian soil: 253 meters from the Turkish side. They were paying a visit to the tomb of S�leyman Sah, the grandfather of the founder of the Ottoman Empire. The tomb had been successfully abducted by a military operation 37 km from the Turkish-Syrian border and relocated in its present place.</p><p style="padding:0; margin:0 0 10px 0;">Mr. Davutoglu's brave visit to enemy land came at a time when the entire world was discussing the merits and demerits of a potential Turkish-Saudi (ground and air) military offensive against President Bashar al-Assad's regime in Damascus. Luckily, Mr. Davutoglu ruled out that option.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.hurriyetdailynews.com/how-turkish-army-put-boots-on-syrian-ground.aspx?pageID=449&amp;nID=82322&amp;NewsCatID=398" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5984"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.israelnationalnews.com/Articles/Article.aspx/16869">Will the EU Delegate to the Global Anti-Semitism Forum Tell the Truth?</a></h1>
<p style="margin:0;">by <b>Manfred Gerstenfeld</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 3, 2015</span> &nbsp;�&nbsp; <i>Israel National News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The fifth Global Forum on Combating Anti-Semitism will begin on May 12th in Jerusalem. The Israeli government ministries who have organized the event have invited the First Vice President of the European Commission, Frans Timmermans � a Dutchman � to speak at its opening session.</p><p style="padding:0; margin:0 0 10px 0;">In view of the discriminatory attitudes Timmermans, the Dutch Labor party he belongs to and the EU hold toward Israel, I suggest that he includes the following in his lecture, in order to clear things up.</p><p style="padding:0; margin:0 0 10px 0;">"I am very glad to have been invited to this Global Forum. It is a unique occasion to finally confess and declare the truth about European discrimination against Israel and about European anti-Semitism. I would also like to mention the indirect support my own party, the Dutch Labor Party, gives to the Islamo-Nazis of Hamas, and apologize for my prejudice regarding Israel.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.israelnationalnews.com/Articles/Article.aspx/16869" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5983"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.israelnationalnews.com/Articles/Article.aspx/16850">The Connection between Swedish Aid and Hamas Institutions</a></h1>
<p style="margin:0;">by <b>Tobias Petersson</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">April 29, 2015</span> &nbsp;�&nbsp; <i>Israel National News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The Swedish International Development Cooperation Agency (SIDA), which comes under the Swedish foreign ministry, has for several years cooperated with the organization Islamic Relief (IR). According to the SIDA documentation, SIDA renewed its agreement with IR last year giving the international organization more than 59 million SEK(6,8 million USD) for various aid projects.</p><p style="padding:0; margin:0 0 10px 0;">However IR is not only an organization associated with aid. It is also associated with the Muslim Brotherhood and with funding terror organizations, and therefore terror-listed by the United Arab Emirates since last year. In 2006 the Israeli authorities were notified of IR's terror connections, resulting in the arrest of IR's project manager at that time. Iyaz Ali. Ali confessed that he was in contact with the Hamas and had transferred funds to organizations linked to Hamas.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.israelnationalnews.com/Articles/Article.aspx/16850" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5811"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.algemeiner.com/2015/04/29/israel-and-india-work-together-on-nepal-quake-relief/">Israel and India Work Together on Nepal Quake Relief</a></h1>
<p style="margin:0;">by <b>Vijeta Uniyal</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">April 29, 2015</span> &nbsp;�&nbsp; <i>The Algemeiner</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">As the dust settles in the aftermath of the massive earthquake that hit Nepal last week, the real extent of the disaster is slowly coming to light. Local authorities have revised the death toll to more than 4,400, with twice that number seriously injured.</p><p style="padding:0; margin:0 0 10px 0;">The Himalayan Republic continues to be jolted by powerful aftershocks, and a secondary disaster could be on the horizon. With people huddled up in hurriedly set up tent cities across the country, and water and power supplies rendered irreparable, the risk of communicable and waterborne diseases is on the rise.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.algemeiner.com/2015/04/29/israel-and-india-work-together-on-nepal-quake-relief/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5808"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://thehill.com/blogs/congress-blog/lawmaker-news/239777-schumers-ambition-will-be-tested-by-obama-and-iran">Schumer's ambition will be tested by Obama and Iran</a></h1>
<p style="margin:0;">by <b>Lawrence Kadish</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">April 23, 2015</span> &nbsp;�&nbsp; <i>The Hill</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Could the son of a hardworking blue collar Brooklyn war veteran become the first Jewish president?</p><p style="padding:0; margin:0 0 10px 0;">For Chuck Schumer (D), New York's senior Senator, it is one of those aspirations that may be dreamed of but never uttered, for it would reveal a political ambition that would cast a long and deep shadow on his every vote, political alliance and Congressional leadership position.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://thehill.com/blogs/congress-blog/lawmaker-news/239777-schumers-ambition-will-be-tested-by-obama-and-iran" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5812"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.centerforsecuritypolicy.org/2015/04/15/chinas-push-to-restart-falklands-war/">China's Push to Restart Falklands War</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">April 15, 2015</span> &nbsp;�&nbsp; <i>Secure Freedom Radio</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">With Dr. Harold Rhode, Diana West, Rick Fisher, Jasvinder Sanghera</p><p style="padding:0; margin:0 0 10px 0;">Dr. HAROLD RHODE, Distinguished Senior Fellow at the Gatestone Institute, and former Turkish Desk Officer at the Department of Defense:</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.centerforsecuritypolicy.org/2015/04/15/chinas-push-to-restart-falklands-war/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5809"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://dailycaller.com/2015/04/10/dershowitz-menendez-indictment-could-be-punishment-for-foreign-policy-opposition/">Dershowitz: Menendez Indictment Could Be Punishment For Foreign Policy Opposition</a></h1>
<p style="margin:0;">by <b>Sarah Hurtubise</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">April 10, 2015</span> &nbsp;�&nbsp; <i>The Daily Caller</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Harvard law professor Alan Dershowitz is suggesting that the administration may have indicted Sen. Robert Menendez for corruption as punishment for "policy differences."</p><p style="padding:0; margin:0 0 10px 0;">The Department of Justice indicted the New Jersey Democrat Menendez earlier this month for engaging in corruption and bribery, complete with bawdy details about foreign "girlfriends." Menendez has been accused of accepting close to $1 million in gifts and campaign donation from Salomon Melgen, a Florida eye doctor and close friend, in exchange for his political muscle � purportedly used to help Melgen's businesses deal with the feds and to get three of Melgen's foreign model girlfriends U.S. visas.</p><p style="padding:0; margin:0 0 10px 0;">Now Dershowitz, a prominent lawyer and professor who's been a longtime supporter of the Obama administration, is arguing in a post at policy forum the Gatestone Institute that the evidence for Menendez's indictment is thin, and could be a politically-motivated move by the Obama administration.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://dailycaller.com/2015/04/10/dershowitz-menendez-indictment-could-be-punishment-for-foreign-policy-opposition/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5521"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nytimes.com/2015/04/08/opinion/austrias-islamic-reforms.html">Austria's Islamic Reforms</a></h1>
<p style="margin:0;">by <b>Soeren Kern</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">April 7, 2015</span> &nbsp;�&nbsp; <i>The New York Times</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;" id="story-continues-1" itemprop="articleBody" data-total-count="331" data-para-count="331">In February, the Austrian Parliament amended the country's century-old "Islam Law." The new legislation, though controversial, is a significant achievement. In promoting a moderate, homegrown Islam compatible with democratic values, Austria has taken a positive step to combat extremism while protecting religious liberties.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.nytimes.com/2015/04/08/opinion/austrias-islamic-reforms.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5485"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://mosaicmagazine.com/picks/2015/03/desmond-tutu-liberation-theology-and-anti-semitism/">Desmond Tutu, Liberation Theology, and Anti-Semitism</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">March 31, 2015</span> &nbsp;�&nbsp; <i>Mosaic Magazine</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The South African clergyman Desmond Tutu has made himself the patron of the Sabeel Ecumenical Liberation Theology Center, a Christian organization whose goal is to encourage churches to boycott Israel. <b>Christine Williams</b> explains the theological roots of this particular form of hatred for the Jewish state:</p><p style="padding:0; margin:0 0 10px 0;">Liberation theology is a radical movement that originally developed in South America before making its way to South Africa. The movement was apparently created in response to poverty and ill-treatment of ordinary people. It was caricatured in the phrase, "If Jesus Christ were on earth today, he would be a Marxist revolutionary."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://mosaicmagazine.com/picks/2015/03/desmond-tutu-liberation-theology-and-anti-semitism/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_5486"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://mosaicmagazine.com/picks/2015/03/islamic-state-poses-a-threat-to-jordan-israel-and-the-palestinians/">Islamic State Poses a Threat to Jordan, Israel, and the Palestinians</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">March 3, 2015</span> &nbsp;�&nbsp; <i>Mosaic Magazine</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Jordan, writes the Palestinian scholar <b>Bassam Tawil</b>, seems to be experiencing a rare degree of national unity in supporting the fight against Islamic State (IS), a struggle taken up in full force following the immolation of a Jordanian pilot. The threat posed by IS extends to the West Bank and the rest of Israel as well, Tawil writes:</p><p style="padding:0; margin:0 0 10px 0;">[Most likely,] if Israeli security forces were to withdraw from [the West Bank] as a result of Palestinian elections or an arrangement with Israel, Hamas would immediately take over the West Bank the way it took over the Gaza Strip.</p><p style="padding:0; margin:0 0 10px 0;">Within a short time, rockets and mortar shells would be launched into Israel, and then IS-supported terrorist operatives would swarm into the Palestinian Authority through Jordan, and from there work to subvert Jordan as well as Israel. They would do exactly what Hamas and the other Islamist organizations are currently doing in the Sinai peninsula against Egypt.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://mosaicmagazine.com/picks/2015/03/islamic-state-poses-a-threat-to-jordan-israel-and-the-palestinians/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_6913"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://theweek.com/articles/535096/frances-alienated-muslims">France's alienated Muslims</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">January 24, 2015</span> &nbsp;�&nbsp; <i>The Week</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;"><b> How many Muslims live in France?</b><br>The republic's secular principles forbid the collection of data on ethnicity and religion, but it's estimated that there are about 5 million Muslims, or 7.5 percent of the population. That's the largest Muslim community in Europe, and makes Islam second only to Catholicism in the number of adherents in France. Even before the <i>Charlie Hebdo</i> terrorist attacks, French society viewed this substantial minority with great ambivalence � and Muslims viewed French society with great ambivalence of their own. Only 27 percent of French citizens said they had an unfavorable view of Muslims � compared with 63 percent of Italians and 46 percent of Spaniards � but 74 percent thought that Islam was inherently incompatible with France's secular values. Those values leave the Muslim community largely alienated from the rest of France. "They're not integrated into French society at all," says Soeren Kern of the Gatestone Institute, a think tank. "In a way, they're stateless."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://theweek.com/articles/535096/frances-alienated-muslims" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4644"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://blogs.timesofisrael.com/defending-israels-gaza-policy/">Defending Israel's Gaza policy</a></h1>
<p style="margin:0;">by <b>Ben Gladstone</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 22, 2014</span> &nbsp;�&nbsp; <i>The Times of Israel</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;" itemprop="articleBody">A couple of weeks ago, I met with a coworker from my summer job for ice cream and a friendly debate about Israel, Gaza, and Operation Protective Edge. I took note of the arguments that he used most often, all of which were familiar to me from a multitude of past debates. I have included below eight most common anti-Israel arguments in the wake of Operation Protective Edge and my responses to them.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://blogs.timesofisrael.com/defending-israels-gaza-policy/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4643"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.truthrevolt.org/news/why-did-forbes-delete-pro-israel-opinion-piece">Why Did Forbes Delete Pro-Israel Opinion Piece?</a></h1>
<p style="margin:0;">by <b>Jeff Dunetz</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 21, 2014</span> &nbsp;�&nbsp; <i>Truth Revolt</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">On his "Forbes Magazine" blog, lobbyist and public relations-superstar Jeff Ballabon published a piece called "The 20 Most Ridiculous Things People Believe About The Hamas/Israel Conflict." Within hours of the article going live, the post was taken down. Ballabon was given conflicting reasons for the removal of the post. The one reason he wasn't given was the most obvious one: "Forbes Magazine" did not like the post's pro-Israel content.</p><p style="padding:0; margin:0 0 10px 0;">After posting the article the morning of August 8th, Ballabon began to hear from friends that it was gone.</p><p style="padding:0; margin:0 0 10px 0;">A few hours later Ballabon got the official news:</p><p style="padding:0; margin:0 0 10px 0;">Eventually, he reposted the article at the Gatestone Institute:</p><p style="padding:0; margin:0 0 10px 0;">"Buzzfeed" asked about the pulling of the article:</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.truthrevolt.org/news/why-did-forbes-delete-pro-israel-opinion-piece" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4648"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.buzzfeed.com/anitabadejo/forbes-wont-explain-why-it-deleted-gaza-post">Forbes Won't Explain Why It Deleted Gaza Post</a></h1>
<p style="margin:0;">by <b>Anita Badejo</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 20, 2014</span> &nbsp;�&nbsp; <i>BuzzFeed</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">On the morning of August 8th, Forbes contributor Jeff Ballabon published a post on "The 20 Most Ridiculous Things People Believe About The Hamas/Israel Conflict." In the post, Ballabon�a former Washington lobbyist and conservative Republican leader with deep roots in the Orthodox Jewish community�included a list of statements regarding the current conflict in Gaza that, in his opinion, are unfounded. Among those included were "Israel started it," "Hamas: Democratically elected terrorists with hearts of gold," and Genocide!"</p><p style="padding:0; margin:0 0 10px 0;">A few hours later, the piece was deleted.</p><p style="padding:0; margin:0 0 10px 0;">"They just killed the link. There was no explanation at all," he told BuzzFeed. He quickly took to Twitter to air his frustration.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.buzzfeed.com/anitabadejo/forbes-wont-explain-why-it-deleted-gaza-post" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4635"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.frontpagemag.com/2014/joseph-puder/christians-and-yazidis-in-iraq-and-a-worlds-indifference/">Christians and Yazidis in Iraq - and a World's Indifference</a></h1>
<p style="margin:0;">by <b>Joseph Puder</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 19, 2014</span> &nbsp;�&nbsp; <i>FrontPageMagazine.com</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">For the United Nation's (UN) and the international media, there is one standard for Palestinian people and refugees, and another for others. This can be deduced from the reaction to the plight of the Iraqi Christians and the Yazidis (a Kurdish ethno-religious group of people, concentrated primarily in the Nineveh Province in Northern Iraq, now occupied by the fanatical jihadists of the Islamic State of Iraq and the Levant [ISIL] now called the Islamic State � IS.) The Yazidis practice a syncretic religion that fuses Shia and Sufi Islam along with indigenous regional folk traditions. They are considered infidels by the Sunni Muslim IS and the Gaza Palestinians.</p><p style="padding:0; margin:0 0 10px 0;">There are no protest marches in European capitals or American cities on behalf of the Christians and Yazidis of Iraq like those recently held in solidarity with Hamas in Gaza. Nor has there been sustained media coverage of Christian and Yazidi suffering, as was seen during the Gaza war about the Palestinians.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.frontpagemag.com/2014/joseph-puder/christians-and-yazidis-in-iraq-and-a-worlds-indifference/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4623"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.haaretz.com/news/diplomacy-defense/1.611084">The Guardian rejects Dershowitz ad on 'human shields' in Gaza</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">August 18, 2014</span> &nbsp;�&nbsp; <i>Haaretz</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The British Guardian newspaper rejected an ad written by Harvard University Law Professor Alan Dershowitz, JNS.org reported over the weekend.</p><p style="padding:0; margin:0 0 10px 0;">The ad, titled "The Empty Spaces in Gaza," counters the claims that Gaza is "one of the most densely populated areas in the world," and is based on a an article of the same name that Dershowitz wrote earlier this month for the Gatestone Institute.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.haaretz.com/news/diplomacy-defense/1.611084" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4619"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.wnd.com/2014/08/jihadists-prep-for-takeover-of-spain/">Jihadists prep for takeover of Spain</a></h1>
<p style="margin:0;">by <b>Bob Unruh</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 18, 2014</span> &nbsp;�&nbsp; <i>WorldNetDaily</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Jihadists inside Spain have begun prepping for a takeover of the nation by ISIS, also known as Islamic State, the terror army that has been marching across Iraq, destroying Christians and evidence of their faith and imposing the extreme control of Islam's Shariah law.</p><p style="padding:0; margin:0 0 10px 0;">According to a new report from Soeren Kern, a senior fellow at the New York-based Gatestone Institute, there have developed more frequent and more strident statements regarding Spain being ruled once again by the violence of Islam.</p><p style="padding:0; margin:0 0 10px 0;">Muslims, known then as Moors, occupied that region of the world from 711 until 1492.</p><p style="padding:0; margin:0 0 10px 0;">"Clearly Spain forms part of the strategic objectives of global jihad," Spanish Interior Minister Jorge Fernandez Diaz is quoted in the report. "We are not the only ones but we are in their sights."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.wnd.com/2014/08/jihadists-prep-for-takeover-of-spain/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4622"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="www.jpost.com/Opinion/Column-One-Anti-Semitism-and-its-limitations-371172">Anti-Semitism and its limitations</a></h1>
<p style="margin:0;">by <b>Caroline Glick</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 15, 2014</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Outside the US, throughout the Western world, anti-Semitism is becoming a powerful social and political force. And its power is beginning to have a significant impact on Israel's relations with other democracies.</p><p style="padding:0; margin:0 0 10px 0;">Consider South Africa. Following a lopsided vote by the University of Cape Town's Student Union to boycott Israel, Jewish students fear that their own student union will be barred from operating on campus. Carla Frumer from the South African Jewish Student Union told The Times of Israel, "If they prove we are a Zionist organization and support Israel, they can have us banned and seek to de-register us."</p><p style="padding:0; margin:0 0 10px 0;">In Sydney, Australia, Jewish families received a triple blow last week when Jewish children on a chartered school bus were assaulted by eight anti-Semitic drunken teenagers.</p><p style="padding:0; margin:0 0 10px 0;">The first shock was that their children, some as young as five, were terrorized on their school bus.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="www.jpost.com/Opinion/Column-One-Anti-Semitism-and-its-limitations-371172" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4621"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.americanthinker.com/2014/08/israels_disproportionate_decency.html">Israel's Disproportionate Decency</a></h1>
<p style="margin:0;">by <b>Noah Beck</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 15, 2014</span> &nbsp;�&nbsp; <i>American Thinker</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">When observers describe or denounce Israeli military actions as "disproportionate," they glibly assume sweeping legal conclusions without sufficient proof or analysis. But the evidence shows that Israel has acted with disproportionate decency, while Hamas has committed war crimes.</p><p style="padding:0; margin:0 0 10px 0;">Hamas's indiscriminate rocket and missile attacks � which now total about 3,500 in the last month � target primarily Israeli civilians. The effects of Hamas's attacks have been serious (contrary to what most media reports suggest):</p><p style="padding:0; margin:0 0 10px 0;">a) increasing premature births;</p><p style="padding:0; margin:0 0 10px 0;">b) shutting down Israel's biggest airport, blocking 90 percent of incoming and outgoing passengers;</p><p style="padding:0; margin:0 0 10px 0;">c) forcing about 8 million people to live on the edge 24/7, fearing that if their missile defense system or scramble to shelters falters, they could die;</p><p style="padding:0; margin:0 0 10px 0;">d) constant interruptions throughout the day and night, with as little as ten seconds to find shelter;</p><p style="padding:0; margin:0 0 10px 0;">e) billions of dollars in economic damage.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.americanthinker.com/2014/08/israels_disproportionate_decency.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4620"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jns.org/latest-articles/2014/8/15/putting-up-a-shield-guardian-blocks-dershowitz-ad-on-hamas-tactics">Putting up a shield: Guardian blocks Dershowitz ad on Hamas tactics</a></h1>
<p style="margin:0;">by <b>Alina Dain Sharon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 15, 2014</span> &nbsp;�&nbsp; <i>JNS</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;" id="yui_3_17_2_1_1408392245405_428">The British newspaper <i>The Guardian</i> turned down an advertorial piece penned by famed Harvard Law School professor and pro-Israel advocate Alan Dershowitz. In the ad, whose rejection was first reported by <i>JNS.org</i> on Aug. 15, Dershowitz refutes statements by many media outlets that all of the Gaza Strip is densely populated, a claim that has been used to justify the use of human shields by Hamas in its recent conflict with Israel.</p><p style="padding:0; margin:0 0 10px 0;">"The British media is divided," Dershowitz said in an interview. "But <i>The Guardian</i>, which holds itself out to be a purveyor of diverse truth, clearly reflects a bias against Israel on its editorial pages, as well as in its presentation of the news. Now that bias has spread to the advertising pages."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jns.org/latest-articles/2014/8/15/putting-up-a-shield-guardian-blocks-dershowitz-ad-on-hamas-tactics" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4605"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.timesofmalta.com/articles/view/20140813/opinion/Horrific-sound-of-silence.531657">Horrific sound of silence</a></h1>
<p style="margin:0;">by <b>Miriam Sciberras</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 13, 2014</span> &nbsp;�&nbsp; <i>Times of Malta</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">As the world watches the escalating human catastrophe of the people of Iraq, in the name of Allah, ISIS continues in its unstoppable cold-blooded rampage, starving and murdering innocent children and massacring all non-Muslims.</p><p style="padding:0; margin:0 0 10px 0;">The news headlines worldwide do not even come close to reporting the extreme brutality of what is going on. Even the local papers give minimal coverage. Marcus Tullius Cicero was never proven so right in his famous quote: "Laws are silent in times of war."</p><p style="padding:0; margin:0 0 10px 0;">Where are the street protests worldwide? Where is the international community? Why does no one intervene to stop this evident genocide? Why are we all eating and drinking and going on with our normal lives when our brothers and sisters are being brutally murdered? Are we not our brothers' and sisters' keepers?</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.timesofmalta.com/articles/view/20140813/opinion/Horrific-sound-of-silence.531657" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4603"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jewishpress.com/news/breaking-news/has-isis-reached-the-gaza-strip/2014/08/13/">Has ISIS reached the Gaza Strip?</a></h1>
<p style="margin:0;">by <b>Anav Silverman</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 13, 2014</span> &nbsp;�&nbsp; <i>The Jewish Press</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">According to a recent Gatestone Institute publication, the presence of the Islamic State of Iraq and Syria (ISIS) has begun to grow in the Gaza Strip, with both the PA and Israel convinced that followers of ISIS in Gaza have been responsible for some of the rocket attacks on Israel.</p><p style="padding:0; margin:0 0 10px 0;">Last month, the Israel Intelligence and Terrorism Information Center reported that Salafist-jihadi operatives in the Gaza Strip uploaded a video clip to YouTube on July 8, documenting several instances of rockets being launched at Israel. The video clip, entitled "The Salafist-jihadi [movement[ in the Gaza Strip � lovers of the Islamic state [i.e. ISIS] launches rockets at the Jews." The video showed at least 10 rockets being launched at Israel.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jewishpress.com/news/breaking-news/has-isis-reached-the-gaza-strip/2014/08/13/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4604"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.investigativeproject.org/4510/isis-supporters-rally-in-germany">ISIS Supporters Rally in Germany</a></h1>
<p style="margin:0;">by <b>John Rossomando</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 11, 2014</span> &nbsp;�&nbsp; <i>Investigative Project on Terrorism</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Supporters of the genocidal Islamic State, formerly ISIS, violently attacked Kurdish Yazidis living in the German state of North Rhine-Westphalia, according to Soeren Kern of the Gatestone Institute. German police say Muslim extremists stormed a restaurant in the German town of Herford on Thursday afternoon.</p><p style="padding:0; margin:0 0 10px 0;">They tried to remove a poster calling for support of thousands of Yazidis in Iraq, who face the choice of converting to the Islamic State's brand of Islam or death. Some 500 Yazidis have been killed by the Islamic State thus far, including some who have been buried alive, according to Iraqi authorities.</p><p style="padding:0; margin:0 0 10px 0;">The Islamic State issued a fatwa on Saturday saying it will fight the Yazidis "until they become Muslim" and that they would be ineligible to pay the jizyah tax in exchange for their lives.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.investigativeproject.org/4510/isis-supporters-rally-in-germany" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4597"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.investigativeproject.org/4508/emerson-interviewed-on-fox-news-justice-with">"There is no difference between Hamas and ISIS"</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">August 10, 2014</span> &nbsp;�&nbsp; <i>Fox News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;"><b>Judge Jeanine:</b> And with me now terrorism analyst with the Investigative Project, Steve Emerson. All right good evening Steve. Thanks so much for being with us this evening. At the end of the day, I'm talking with Dany Danon just a minute ago about the fact that we have one ceasefire after another and if the ceasefire itself isn't violated by Hamas, repeatedly history has shown us, then as soon as it ends they start fighting again. How long does this go on?</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.investigativeproject.org/4508/emerson-interviewed-on-fox-news-justice-with" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4606"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.algemeiner.com/2014/08/08/hamas-riddles-former-spokesman-with-bullet-holes-dumps-body-at-hospital-then-blames-israel-for-death/">Hamas Riddles Former Spokesman With Bullet Holes, Dumps Body at Hospital, Then Blames Israel for Death</a></h1>
<p style="margin:0;">by <b>Joshua Levitt</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 8, 2014</span> &nbsp;�&nbsp; <i>The Algemeiner</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Former Hamas spokesman Ayman Taha was executed by firing squad on Tuesday with bullet holes to his head and chest, his body dumped in front of Gaza's Shifa Hospital, where it laid untouched for an hour, before gunmen returned to remove it from the scene, the <i>Al-Quds</i> daily reported in Arabic late Thursday citing unnamed sources.</p><p style="padding:0; margin:0 0 10px 0;">Al Quds said that Hamas banned publication of the story of his death, but then later said the body was at the hospital.</p><p style="padding:0; margin:0 0 10px 0;">On Friday, Hamas issued a statement, reported by AFP without mentioning the <i>Al Quds</i> version, that Israeli forces had "targeted him in the apartment where he was with several others in Gaza City" in the Sheja'iya neighborhood. AFP cited a medical source as saying that the body was brought to the "hospital in Gaza City before it was transferred to his family's home in the Bureij camp."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.algemeiner.com/2014/08/08/hamas-riddles-former-spokesman-with-bullet-holes-dumps-body-at-hospital-then-blames-israel-for-death/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4598"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.worldtribune.com/2014/08/08/report-israel-goes-great-lenghts-avoid-civilian-casualties-gaza/">Report details comprehensive Israeli measures avoid civilian casualties in Gaza</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">August 8, 2014</span> &nbsp;�&nbsp; <i>World Tribune</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">WASHINGTON � Israel's military has developed a range of systems to warn civilians in enemy territory of an attack, a report said.</p><p style="padding:0; margin:0 0 10px 0;">The Gatestone Institute asserted that Israel's military deployed communications that warned residents of the Gaza Strip of impending air and artillery attacks during the war with Hamas in July.</p><p style="padding:0; margin:0 0 10px 0;">Analyst Richard Kemp, a leading counter-insurgency specialist in both the British Army and parliament, said the Israel Air Force aborted numerous missions because of reports of civilians in the area.</p><p style="padding:0; margin:0 0 10px 0;">"The IDF [Israel Defense Forces] has developed the most comprehensive and sophisticated measures to minimize civilian casualties during attacks against legitimate military targets," the institute said in a report.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.worldtribune.com/2014/08/08/report-israel-goes-great-lenghts-avoid-civilian-casualties-gaza/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4596"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.theblaze.com/stories/2014/08/08/two-major-news-organizations-have-questioned-the-high-palestinian-casualty-figures-and-its-probably-not-ones-youd-expect/">Two Major News Organizations Have Questioned the High Palestinian Casualty Figures � and It's Probably Not Ones You'd Expect</a></h1>
<p style="margin:0;">by <b>Sharona Schwartz</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 8, 2014</span> &nbsp;�&nbsp; <i>The Blaze</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">After more than a month of strife in Israel and Gaza, two major news organizations are posing serious questions about the widely repeated Palestinian casualty figures disseminated by Hamas officials in Gaza.</p><p style="padding:0; margin:0 0 10px 0;">The BBC on Thursday published an article alerting readers, "Caution needed with Gaza casualty figures."</p><p style="padding:0; margin:0 0 10px 0;">"Among civilians, more than three times as many men were killed as women, while three times as many civilian men were killed as fighters," the BBC observed, adding, "If the Israeli attacks have been 'indiscriminate,' as the U.N. Human Rights Council says, it is hard to work out why they have killed so many more civilian men than women."</p><p style="padding:0; margin:0 0 10px 0;">In other words, the high number of men killed seemingly supports Israel's assertion that it is targeting terrorists, not civilians.</p><p style="padding:0; margin:0 0 10px 0;"></p><p style="padding:0; margin:0 0 10px 0;">The BBC's head of statistics posted this chart of Palestinian and Israeli deaths while raising questions about Gaza death toll figures. (Image source: BBC)</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.theblaze.com/stories/2014/08/08/two-major-news-organizations-have-questioned-the-high-palestinian-casualty-figures-and-its-probably-not-ones-youd-expect/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4595"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://thehill.com/policy/international/214693-obama-calls-jordans-king-as-strikes-begin">Obama calls Jordan's king as strikes begin</a></h1>
<p style="margin:0;">by <b>Justin Sink</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 8, 2014</span> &nbsp;�&nbsp; <i>The Hill</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">President Obama spoke Friday with King Abdullah of Jordan as the United States launched airstrikes in Iraq.</p><p style="padding:0; margin:0 0 10px 0;">Reporters were allowed to observe Obama, seated behind his desk in the Oval Office, placing the phone call. Four staffers, including deputy national security adviser Tony Blinken, sat on nearby couches listening in on the conversation.</p>The White House said details about what the leaders discussed would come later Friday.<p style="padding:0; margin:0 0 10px 0;">Jordan, a key U.S. ally, has so far been able to resist efforts by the Islamic State of Iraq and Syria (ISIS) � the Islamist terror group being targeted by the U.S. military action in Iraq � to push into its territory.</p><p style="padding:0; margin:0 0 10px 0;">In June, ISIS militants posted a video to YouTube denouncing King Abdullah as a "tyrant" and calling for his "slaughter." Fighters affiliated with the group were shown destroying their passports and vowing suicide attacks within Jordan, according to the Gatestone Institute.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://thehill.com/policy/international/214693-obama-calls-jordans-king-as-strikes-begin" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4587"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Opinion/Columnists/Think-Again-The-solution-is-in-the-semantics-370399">The solution is in the semantics</a></h1>
<p style="margin:0;">by <b>Jonathan Rosenblum</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 7, 2014</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Multiculturalism � which celebrates the diversity of cultures and treats them as all equally worthy of respect � is all the rage in academia and other precincts of the Left. Yet that celebration of diversity often is little more than a cover for intellectual sloth, and a total lack of interest in the actual nature of any particular culture.</p><p style="padding:0; margin:0 0 10px 0;">And where that sloth prevails, its corollary is likely to be an unfounded projection of one's own culture onto others.</p><p style="padding:0; margin:0 0 10px 0;">Nowhere is that phenomenon more evident than in American foreign policy on the Middle East.</p><p style="padding:0; margin:0 0 10px 0;">Last month, I attended a panel in Jerusalem titled "Why Have 'Peace Plans' Backfired: How Honor-Shame Dynamics Affect Arab-Israel Relations."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Opinion/Columnists/Think-Again-The-solution-is-in-the-semantics-370399" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4586"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jewishpress.com/news/breaking-news/hamas-list-of-casualties-includes-those-who-died-twice/2014/08/07/">Hamas' List of Casualties Includes Those Who Died Twice</a></h1>
<p style="margin:0;">by <b>Tzvi Ben-Gedalyahu</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 7, 2014</span> &nbsp;�&nbsp; <i>The Jewish Press</i></p>


<div style="margin:8px 0;"></div>


</div>

<a name="toc_item_4583"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jewishpress.com/indepth/front-page/john-bolton-we-must-protect-our-interests-and-allies/2014/08/06/">John Bolton: 'We Must Protect Our Interests And Allies'</a></h1>
<p style="margin:0;">by <b>Sara Lehmann</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 6, 2014</span> &nbsp;�&nbsp; <i>The Jewish Press</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Ambassador John Bolton is the rare diplomat who champions honesty in diplomacy. A lawyer known for his blunt views during his years in public service, Bolton served in several Republican administrations, including as undersecretary of state for arms control and international security from 2001-2005 and as assistant secretary for international organization affairs from 1989-93. He is probably best remembered for his role as U.S. ambassador to the UN under President George W. Bush from 2005-06.</p><p style="padding:0; margin:0 0 10px 0;">After contemplating his own run for presidency in 2012, Bolton served as foreign policy adviser to Republican nominee Mitt Romney. He is now chairman of the Gatestone Institute, a senior fellow at the American Enterprise Institute, a Fox News Channel commentator, and a frequent contributor to the Wall Street Journal, Washington Times, Weekly Standard, and other media outlets.</p><p style="padding:0; margin:0 0 10px 0;">The Jewish Press spoke with him last week.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jewishpress.com/indepth/front-page/john-bolton-we-must-protect-our-interests-and-allies/2014/08/06/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4582"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.investigativeproject.org/4497/anti-semitic-european-incidents-since-may-2014">Anti-Semitic European Incidents Since May 2014</a></h1>
<p style="margin:0;">by <b>Abigail R. Esman</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 4, 2014</span> &nbsp;�&nbsp; <i>IPT News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">In France, eight synagogues were attacked within a week in July.</p><p style="padding:0; margin:0 0 10px 0;">Among other attacks in France, reports the <i>Sunday Times Leader</i>, on July 20<sup>th</sup> "a mob of 400 armed with petrol bombs rampaged into the mainly Jewish Paris suburb of Sarcelles and attacked a synagogue, a pharmacy, and a kosher supermarket. Their banners, reading 'Death to Jews" and 'Slit Jews' throats,' were chilling." The supermarket burned to the ground.</p><p style="padding:0; margin:0 0 10px 0;">In Hamburg, Germany, anti-Israel protesters attacked an elderly Jewish man in during a pro-Israel event, and then began beating his daughter when she rushed to his aid.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.investigativeproject.org/4497/anti-semitic-european-incidents-since-may-2014" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4577"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.israelhayom.com/site/newsletter_opinion.php?id=9453">Alan Dershowitz's realization</a></h1>
<p style="margin:0;">by <b>Charles Bybelezer</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 4, 2014</span> &nbsp;�&nbsp; <i>Israel Hayom</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">At the height of Operation Protective Edge, prominent American lawyer and pro-Israel advocate Alan Dershowitz penned a largely overlooked article titled "Has Hamas ended the prospects for a two-state solution?" (Gatestone Institute, July 22.)</p><p style="padding:0; margin:0 0 10px 0;" align="left">His ostensible motive was Hamas' targeting of Ben-Gurion Airport with a rocket that fell some 2 kilometers away, an act which he designated as a war crime.</p><p style="padding:0; margin:0 0 10px 0;" align="left">In response, the Federal Aviation Administration made the questionable call of banning all US air traffic into and out of Israel for some 36 hours. Many European airlines followed suit, causing a mass cancellation of flights and providing Hamas with what Israel's transportation minister described as a "victory for terror."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.israelhayom.com/site/newsletter_opinion.php?id=9453" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4576"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.odwyerpr.com/story/public/2870/2014-08-04/profs-media-try-sort-mideast-battlefront-messages.html">Profs, Media Try to Sort MidEast Battlefront Messages</a></h1>
<p style="margin:0;">by <b>Jack O'Dwyer</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 4, 2014</span> &nbsp;�&nbsp; <i>O'Dwyer's</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Academics and media figures are trying to sift the truth from a barrage of facts and images emerging from the Israel/Palestine battlefront. "PR" is working hard for both sides.</p><p style="padding:0; margin:0 0 10px 0;">As of press time, Israeli Prime Minister Benjamin Netanyahu had reiterated his determination to remove the threats of rockets and the tunnels while withdrawing some troops from Gaza. Hamas leaders continued sending rockets into Israel.</p><p style="padding:0; margin:0 0 10px 0;">The death toll had reached more than 1,800 Palestinians, 64 Israeli soldiers and three Israeli civilians.</p><p style="padding:0; margin:0 0 10px 0;">The totals supplied by Hamas and the United Nations are challenged by some sources.</p><p style="padding:0; margin:0 0 10px 0;">Richard Kemp, retired U.K. Army colonel, cast doubt on the figures in an article for the Gatestone Institute, an international policy council. He says "All Palestinian civilian casualties in this conflict result ultimately from Gaza terrorists' aggression against Israel, and Hamas' use of human shields�the most important plank of Hamas's war-fighting policy."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.odwyerpr.com/story/public/2870/2014-08-04/profs-media-try-sort-mideast-battlefront-messages.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4565"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://cnsnews.com/news/article/patrick-goodenough/kerry-2009-qatar-can-t-be-american-ally-monday-sends-money-hamas">Kerry in 2009: Qatar Can't 'Be American Ally on Monday That Sends Money to Hamas on Tuesday'</a></h1>
<p style="margin:0;">by <b>Patrick Goodenough</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 1, 2014</span> &nbsp;�&nbsp; <i>CNS News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">On a day when Secretary of State John Kerry spoke to his Qatari counterpart by phone "numerous times" in efforts to achieve a ceasefire between Israel and Hamas, a Republican lawmaker sent him a letter challenging "the State Department's active partnership with Qatar."</p><p style="padding:0; margin:0 0 10px 0;">The department for days has been defending its intensive engagement with Hamas-supporting Qatar and Turkey, arguing that the two governments have leverage with the U.S.-designated foreign terrorist organization that controls the Gaza Strip.</p><p style="padding:0; margin:0 0 10px 0;">Kerry, currently in India, announced late Thursday that "all parties" had agreed to a 72-hour humanitarian ceasefire, beginning on Friday morning local time. His statement also thanked "key regional stakeholders for their vital support of this process."</p><p style="padding:0; margin:0 0 10px 0;">Before he joined the Obama administration, then-Senate Foreign Relations Committee chairman Kerry (D-Mass.) spoke out against Qatar's relationship with Hamas.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://cnsnews.com/news/article/patrick-goodenough/kerry-2009-qatar-can-t-be-american-ally-monday-sends-money-hamas" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4564"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://wallstcheatsheet.com/politics/a-visual-window-into-immigration-problems-across-the-globe.html/?a=viewall">A Visual Window Into Immigration Problems Across the Globe</a></h1>
<p style="margin:0;">by <b>Anthea Mitchell</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 31, 2014</span> &nbsp;�&nbsp; <i>Politics CheatSheet</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The United States has been increasingly focused on its immigration problem as unaccompanied minors have been crossing the Southern border in greater numbers and Congress has been so far unable to pass effective reform � a trend likely to continue at least until after midterm elections. As the U.S. struggles with its immigration problem, other nations face their own. For a visual tour of international immigration, let's start with the U.S., and continue across the globe.</p>1. U.S.<p style="padding:0; margin:0 0 10px 0;">America's main immigraton problem deals with those illegal immigrants already present in large numbers within the U.S. � 11 million undocumented based on the White House's estimates � and how best to handle their presence in the U.S., as well as how best to prevent further illegal entrances while maintaining a reasonable humanitarian policy in the face of a population often seeking refuge from violence, gang intimidation, and poverty.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://wallstcheatsheet.com/politics/a-visual-window-into-immigration-problems-across-the-globe.html/?a=viewall" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4559"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.gatestoneinstitute.org/4559/israel-cant-let-up-in-war-on-terror">Israel can't let up in war on terror</a></h1>
<p style="margin:0;">by <b>Steve Huntley</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 30, 2014</span> &nbsp;�&nbsp; <i>Chicago Sun-Times</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">There is a lot of talk about how Israel is faring in the propaganda war over terrorism in the Gaza Strip. There can be little doubt, though, that the government of Prime Minister Benjamin Netanyahu, with the firm backing of 90 percent of Israeli Jews, is determined to win the actual war, to accomplish the worthy goal of crippling Hamas' ability to wage terror on Israeli civilians.</p><p style="padding:0; margin:0 0 10px 0;">That means destroying the Hamas stockpile of rockets it fires toward Israeli towns and cities with the intention, mostly foiled, of slaughtering civilians. That means blowing up and collapsing the surprisingly large number of tunnels found during the incursion, tunnels built to infiltrate terrorist murderers into Israel.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.gatestoneinstitute.org/4559/israel-cant-let-up-in-war-on-terror" class="continue">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4558"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://thefederalist.com/2014/07/30/genital-mutilation-the-real-war-on-women/">Genital Mutilation: The Real War On Women</a></h1>
<p style="margin:0;">by <b>D.C. McAllister</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 30, 2014</span> &nbsp;�&nbsp; <i>The Federalist</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Nafissatou of Guinea knows what the real war on women looks and feels like. When she was a child, she was awakened early in the morning when it wasn't yet light out. The old women made her and other girls leave the village. "We lined up, and they took us one by one. When it was my turn, one woman, very old and heavy-set, grabbed me and blindfolded me. She made me lay down on the mat and someone grabbed one of my legs while another person grabbed the other. Then someone cut me. It was the most terrible pain, and I struggled hard, though I could not get away from the grasp of the old women. After cutting me, they used a sticky substance to glue me together so that I would heal closed. Afterward, we were told not to cry, but all I could do was cry."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://thefederalist.com/2014/07/30/genital-mutilation-the-real-war-on-women/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4555"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Operation-Protective-Edge/How-Gaza-takes-center-stage-in-the-Muslim-world-369225">How Gaza takes center stage in the Muslim world</a></h1>
<p style="margin:0;">by <b>Ariel Ben Solomon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 29, 2014</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">At the drop of a hat, the Muslim world has dropped its focus on the uprisings, wars, killings and violence in the Middle East, and instead, drew its attention to the war in Gaza.</p><p style="padding:0; margin:0 0 10px 0;">Why? The short answer is that Muslim-on-Muslim violence draws less outrage than non- Muslim-on-Muslim violence.</p><p style="padding:0; margin:0 0 10px 0;">The Arab world has its hands full in states such as Syria, Iraq, Yemen and Libya, and so it seems that the concern for the Palestinians is not a priority but an effort to distract from the divisions and struggles at home.</p><p style="padding:0; margin:0 0 10px 0;">"Our wars against Israel have been brief. We wage them enthusiastically at the media and rhetorical levels without enough military planning, preparation or readiness for the patience and perseverance they require," wrote Saudi journalist Jamal Khashoggi, in an article on the Al-Arabiya website, which was originally published in the London based Al-Hayat newspaper on Saturday.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Operation-Protective-Edge/How-Gaza-takes-center-stage-in-the-Muslim-world-369225" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4525"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Diplomacy-and-Politics/Freedom-Flotilla-II-set-to-sail-for-Gaza-from-Turkey-369065">'Freedom Flotilla II' set to sail for Gaza from Turkey</a></h1>
<p style="margin:0;">by <b>Ariel Ben Solomon and Herb Keinon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 28, 2014</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Amid Israel's Operation Protective Edge to stop Hamas attacks from Gaza, a "Freedom Flotilla" is being organized in Turkey to bring humanitarian aid to the Hamas-controlled Palestinian coastal enclave with the protection of the Turkish military, according to an unconfirmed media report.</p><p style="padding:0; margin:0 0 10px 0;">The flotilla, called "Freedom Flotilla II," is being organized by the Turkish Humanitarian Relief Foundation (IHH), the same organization that was behind the <i>Mavi Marmara</i> flotilla that sought to break Israel's blockade of the Gaza Strip in May 2010.</p><p style="padding:0; margin:0 0 10px 0;">Israel Navy commandos boarded the ship, were attacked, and killed nine of the attackers.</p><p style="padding:0; margin:0 0 10px 0;">IHH chairman Bulent Yildrim was quoted by The Middle East Monitor as telling Gulf Online last week that the activists would set sail as soon as they receive the necessary permit from the authorities in Ankara and that the Turkish military would provide protection to the ship.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Diplomacy-and-Politics/Freedom-Flotilla-II-set-to-sail-for-Gaza-from-Turkey-369065" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4524"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.americanthinker.com/blog/2014/07/and_now_europes_kristallnacht.html">'And Now... Europe's Kristallnacht'</a></h1>
<p style="margin:0;">by <b>Rick Moran</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 28, 2014</span> &nbsp;�&nbsp; <i>American Thinker</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">That's the title of an article at the Gatestone Institute by Douglas Murray. It paints a disturbing picture of the rise of anti-Semitism on the Continent and in Great Britain, begging the question of whether these sporadic outbursts of violence directed against Jews might explode into something truly nasty and barbaric - a pogrom.</p><p style="padding:0; margin:0 0 10px 0;">After describing several incidents that occurred at London protests - including one young Muslim holding up a sign that said "Hitler was right" - Murray takes us on a tour of protests across Europe:</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.americanthinker.com/blog/2014/07/and_now_europes_kristallnacht.html" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4523"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://pjmedia.com/rogerlsimon/2014/07/25/hamas-terror-tunnels/">Hamas Terror Tunnels: What Did the UN Know and When Did It Know It?</a></h1>
<p style="margin:0;">by <b>Roger L Simon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 25, 2014</span> &nbsp;�&nbsp; <i>PJ Media</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Amidst news the Israelis have turned down secretary of State Kerry's latest, apparently Qatar-inspired, ceasefire, not to mention the other day's nauseatingly familiar anti-Israel fusillade from the mega-Orwellian UN Human Rights Council, comes word that Hamas had been planning a gigantic attack on Israel this September via its dozens of tunnels.</p><p style="padding:0; margin:0 0 10px 0;">From the Gatestone Institute:</p><blockquote><p style="padding:0; margin:0 0 10px 0;">Hamas had apparently been preparing a murderous assault on Israeli civilian targets for the coming Jewish New Year Holiday, Rosh Hashanah, which begins on September 24, according anonymous sources in the Israeli security services, as reported today by the Israeli daily <i>Maariv</i>.</p><p style="padding:0; margin:0 0 10px 0;">The Hamas plan consisted of what was to be a surprise attack in which 200 fighters would be dispatched through each of dozens of tunnels dug by Hamas under the border from Gaza to Israel, and seize kibbutzim and other communities while killing and kidnapping Israeli civilians.</p></blockquote>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://pjmedia.com/rogerlsimon/2014/07/25/hamas-terror-tunnels/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4484"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.aijac.org.au/news/article/hamas-targeting-of-ben-gurion-airport-has-large-">Hamas' targeting of Ben Gurion airport has large implications</a></h1>
<p style="margin:0;">by <b>Robert Ellenhorn</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 24, 2014</span> &nbsp;�&nbsp; <i>AIJAC</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Reports emerged on Wednesday of a Hamas rocket, fired into Israel that landed within 2 kilometres or so of Israel's Ben Gurion International airport. This prompted a US Federal Aviation Association (FAA) ban on American based airlines flying to the airport just outside of Tel Aviv as well as the cancellation of flights by other international airlines. Air traffic to and from Israel was reduced almost exclusively to El-Al flights, which continued operating - leaving thousands of travellers stranded. While the FAA ban was lifted today, the closure has both immediate and longer-term implications.</p><p style="padding:0; margin:0 0 10px 0;">Ben Gurion is Israel's largest and most important airport - handling nearly all international travel to and from Israel. The targeting of a civilian airport is an alarming reminder - especially in the wake of the tragic shooting down of Malaysian Airlines flight MH17 - of the danger posed by irresponsible military forces' possession of deadly weapons.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.aijac.org.au/news/article/hamas-targeting-of-ben-gurion-airport-has-large-" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4482"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.israelnationalnews.com/News/News.aspx/183269">Finally Obama Leads from the Front: The Hamas-FAA Move</a></h1>
<p style="margin:0;">by <b>J.E. Dyer</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 23, 2014</span> &nbsp;�&nbsp; <i>Israel National News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">For whatever reason, the Obama administration wasn't willing to wait and lead from behind on this one. Within hours of a Hamas rocket landing near Ben Gurion airport � for the first time in the current conflict � the Federal Aviation Administration (FAA) issued an order banning U.S. carriers from operating there. As many readers will have heard, a Delta Airlines flight headed for Ben Gurion on Tuesday had to turn around over the Mediterranean and divert to Paris.</p><p style="padding:0; margin:0 0 10px 0;">The ban is in effect for 24 hours, starting at 12:15 EDT on the 22nd. The ban will be revisited at the end of the 24 hours (which at this point is about 10 hours from the posting of this article. <i>Ed: It has since been renewed</i>.).</p><p style="padding:0; margin:0 0 10px 0;">A number of European nations have followed suit.</p><p style="padding:0; margin:0 0 10px 0;"><b>An unjustified political action</b></p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.israelnationalnews.com/News/News.aspx/183269" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4480"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.tabletmag.com/scroll/180254/if-you-want-to-find-support-for-israel-read-the-newspapers-in-cairo">If You Want to Find Support For Israel, Read the Newspapers�in Cairo</a></h1>
<p style="margin:0;">by <b>Myer Freimann</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 23, 2014</span> &nbsp;�&nbsp; <i>Tablet Magazine</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Historically, Arab states have banded together in support of the Palestinians when fighting with Israel erupted: Any mention of Israel typically drew accusations of IDF gross misconduct and dramatic statements of solidarity with the Palestinian people. This has not been the case in the latest round of fighting. Egypt's stance specifically has changed remarkably, combining implicit support for Israel's military operation in Gaza with harsh criticisms of Hamas.</p><p style="padding:0; margin:0 0 10px 0;">Egyptian Foreign Minister, Sameh Shoukri, went so far as to blame Hamas for Palestinian deaths: "Had Hamas accepted the Egyptian proposal, it could have saved the lives of at least 40 Palestinians," as reported by Egyptian state news agency MENA.</p><p style="padding:0; margin:0 0 10px 0;">Numerous Egyptian media reports have also expressed explicit support for Israel's actions. Azza Sami of the Egyptian newspaper <i>Al-Ahram</i> wrote, "Thank you Netanyahu and may God give us more [people] like you to destroy Hamas!"</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.tabletmag.com/scroll/180254/if-you-want-to-find-support-for-israel-read-the-newspapers-in-cairo" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4473"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.breitbart.com/Big-Peace/2014/07/23/Obama-is-Helping-Israel-by-Trying-to-Harm-It">Obama: Israel's Best Enemy</a></h1>
<p style="margin:0;">by <b>Joel Pollack</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 23, 2014</span> &nbsp;�&nbsp; <i>Breitbart</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Israelis have long warned that a Palestinian state on the West Bank could mean rockets threatening Ben Gurion. Obama radically--and needlessly--accelerated that scenario, such that even big fans of a two-state solution, like Alan Dershowitz, say a Palestinian state may be impossible.</p></div></div>


</div>

<a name="toc_item_4483"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://jerusalemchannel.tv/heartless-pictures-footage-conflicts-mostly-iraq-syria-used-media-depict-israeli-atrocities-gaza/">Heartless Deception: Pictures and footage from other conflicts being used in the media to depict Israeli 'atrocities' in Gaza.</a></h1>
<p style="margin:0;">by <b>Christine Darg</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 22, 2014</span> &nbsp;�&nbsp; <i>Jerusalem Channel</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Blood libels against the Jews perpetuated on the social media, by jihadist websites and even from time to time within the mainstream media are staggering, and any believer possessing even a whiff of discernment should instantly sense a check in one's spirit about some of the evil that's proliferated in the name of truth.</p><p style="padding:0; margin:0 0 10px 0;">For days The Jerusalem Channel has been receiving images from various blogs of atrocities that supposedly happened in Gaza but were, in fact, photos from jihadists' persecutions of Syrian Christians passed off as Israeli atrocities in Gaza. One such example showed an Arab Syrian man holding the corpse of a beheaded Christian toddler; but the same image, with the same house detail background, was used without any photoshopping to claim the murder happened in Gaza.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://jerusalemchannel.tv/heartless-pictures-footage-conflicts-mostly-iraq-syria-used-media-depict-israeli-atrocities-gaza/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4481"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.tabletmag.com/scroll/180071/are-israels-attacks-on-gaza-proportional">Are Israel's Attacks on Gaza Proportional?</a></h1>
<p style="margin:0;">by <b>Myer Freimann</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 22, 2014</span> &nbsp;�&nbsp; <i>Tablet Magazine</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Israel is often accused of using disproportionate force. Last Thursday, U.K. Deputy Prime Minister Nick Clegg blasted Israel's operation in response to Hamas rockets raining down on its cities as being "deliberately disproportionate". Similar claims have been made by other world leaders and can be frequently heard in the corridors and meeting halls of the United Nations in New York.</p><p style="padding:0; margin:0 0 10px 0;">So what does "disproportionate" mean? The number of dead on each side is often cited as evidence of disproportionality�so far more than 600 Gazans have been killed and 30 Israelis. In war, one side aims to emerge victorious and intuitively their casualties will be fewer. Israel's Ambassador to the U.S., Ron Dermer, has highlighted that this was the case in World War II, when German casualties were 20 times greater than those of the Allies, who turned German cities to piles of rubble despite the fact that Germany never managed to drop a single bomb on the continental U.S.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.tabletmag.com/scroll/180071/are-israels-attacks-on-gaza-proportional" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4474"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://legalinsurrection.com/2014/07/implications-of-rocket-fire-towards-ben-gurion-intl-airport/">Implications of rocket fire towards Ben-Gurion Int'l Airport</a></h1>
<p style="margin:0;">by <b>William A. Jacobson</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 22, 2014</span> &nbsp;�&nbsp; <i>Legal Insurrection</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Part of the big news today is that multiple airlines have cancelled flights to Ben-Gurion Airport in Israel as a result of a rocket landing in a town nearby.</p><p style="padding:0; margin:0 0 10px 0;">At first it was unclear if this was a unilateral action, or under pressure from governments. It appears that the FAA and European aviation authority issued a temporary order to that effect.</p><p style="padding:0; margin:0 0 10px 0;">El Al continues to fly, as do some other airlines. But one cancellation can have a ripple effect as other airlines are questioned whether they are putting passengers at undo risk in light of other airlines' can</p><p style="padding:0; margin:0 0 10px 0;">The implications are enormous. Whether intended or not, Hamas has made the case as to why it's rocket arsenal and infrastructure must be dismantled no matter the cost. It also has justified why Israel cannot give up security control of Judea and Samaria (the "West Bank"). Hamas has to fire a long way to scare away air traffic, but from the West Bank it's practically a stone's throw.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://legalinsurrection.com/2014/07/implications-of-rocket-fire-towards-ben-gurion-intl-airport/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4472"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://jerusalemchannel.tv/attacking-civilian-airport-war-crime-may-torpedo-two-state-solution/">Targeting Israel's Civilian Airport is a War Crime that May Torpedo the Two-State Solution</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">July 22, 2014</span> &nbsp;�&nbsp; <i>Jerusalem Channel</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">After a terrorist rocket hit a house about a mile from Israel's international airport, major airlines have suspended travel to Tel Aviv for 24 hours or more. Hamas' actions in essentially closing down international air traffic into Israel is being lauded by Palestinians as a major victory against their enemy, but at the same time, the terrorists may have torpedoed the chances of a two-state solution.</p><p style="padding:0; margin:0 0 10px 0;">So says Alan M. Dershowitz, Professor of Law at Harvard Law School, in an article published by the Gatestone Institute.</p><p style="padding:0; margin:0 0 10px 0;">Dershowitz stated that "this stoppage cannot possibly be tolerated by a democratic country that relies so heavily on tourism and international travel. It is of course a war crime to target an international civilian airport, as Hamas has clearly done. Israel has every right to keep that airport open, employing all reasonable military means at its disposal."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://jerusalemchannel.tv/attacking-civilian-airport-war-crime-may-torpedo-two-state-solution/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4517"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://english.al-akhbar.com/node/20799/">Egyptian media wages incitement campaign against Palestinians as Gaza burns</a></h1>
<p style="margin:0;">by <b>Rana Harbi</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 18, 2014</span> &nbsp;�&nbsp; <i>Al Akhbar</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Right across Egypt's Rafah border crossing, civilians in Gaza are facing yet another heinous Israeli military offensive that started on July 8 and has so far claimed the lives of over 265 Palestinians and left a further 2,000 injured. While the hostile political and military stance against Hamas in Egypt is of no surprise, anti-Hamas and anti-Palestinian sentiments have recently emerged among Egypt's populace and different media outlets.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://english.al-akhbar.com/node/20799/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4510"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nationalreview.com/article/382931/how-israel-learned-love-missile-defense-taylor-dinerman/page/0/1">How Israel Learned to Love Missile Defense</a></h1>
<p style="margin:0;">by <b>Taylor Dinerman</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 17, 2014</span> &nbsp;�&nbsp; <i>National Review Online</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Between the fall of the Jewish Commonwealth to the Romans in the first century A.D. and the founding of Israel in 1948, Jews were remarkably easy to kill. Not anymore.</p><p style="padding:0; margin:0 0 10px 0;">Today, thanks to an innovative missile-defense system called Iron Dome (in Hebrew <i>Kipat Barzel</i>), it's harder than ever. Yet when it was first proposed, many Israeli defense experts (and one way or another most Israelis consider themselves defense experts) were reluctant to support the idea of a defensive response to rocket attacks from Gaza and Lebanon.</p><p style="padding:0; margin:0 0 10px 0;">Throughout the history of warfare there has been conflict between those who believe in the strength of a defensive posture and those who put their faith in the attack. Aside from the proponents of the nuclear doctrine known as Mutual Assured Destruction, no one has ever seriously claimed that an exclusively offensive or defensive strategy is viable. Some military organizations have traditionally put more emphasis on defense and others on offense.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.nationalreview.com/article/382931/how-israel-learned-love-missile-defense-taylor-dinerman/page/0/1" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4475"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Opinion/Columnists/Fed-up-with-Hamas-363283">Fed up with Hamas</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">July 17, 2014</span> &nbsp;�&nbsp; <i>The Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Increasingly, the world � and not just the Western world � is learning to appreciate the challenges Israel faces in its war against Hamas's autocratic terrorist regime.</p><p style="padding:0; margin:0 0 10px 0;">Arabs nations of the region seem increasingly cognizant of the fact that the same reactionary, violent and anti-Semitic version of Islam that fuels Hamas's aggression against Israel is the driving force behind the sectarian violence in Iraq, Syria and other parts of the Middle East, and they are fed up. It is beginning to dawn on them that Hamas's brutal regime, which rules in accordance with a reactionary form of Islamic law that persecutes women, Christians and homosexuals and glorifies violent death, and holds captive Gaza's population of 1.8 million, causing them incalculable suffering, is a danger to the wider Arab world.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Opinion/Columnists/Fed-up-with-Hamas-363283" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4476"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.cbn.com/cbnnews/world/2014/July/Ibrahim-Obama-Downplays-Muslim-Attacks-on-Christians/">Ibrahim: Obama Downplays Muslim Attacks on Christians</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">July 15, 2014</span> &nbsp;�&nbsp; <i>CBN News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">While national and international media attention is focused on Israel's military operation against Gaza, CBN News Contributor Raymond Ibrahim believes the Obama administration is downplaying and even denying the extent of Muslim attacks against Christians around the world.</p><p style="padding:0; margin:0 0 10px 0;">In an extensive article for the Gatestone Institute, Ibrahim documents cases of harrassment, torture and slaughter of Christians, ranging from Nigeria, Sudan and Somalia in Africa, to Egypt, Iraq and Iran in the Middle East, to Pakistan and Kazakhstan in Asia.</p><p style="padding:0; margin:0 0 10px 0;">He also claims the Obama administration has missed a number of opportunities to raise the human rights issues with leaders in those countries.</p><p style="padding:0; margin:0 0 10px 0;">Ibrahim concludes that "while not all, or even most, Muslims are involved, persecution of Christians is expanding."</p></div></div>


</div>

<a name="toc_item_4479"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://news.nationalpost.com/2014/07/12/israels-quandary-hamas-probably-weak-enough-to-eradicate-but-whoever-takes-their-place-will-likely-be-worse/">Israel's quandary: Hamas probably weak enough to eradicate - but whoever takes their place will likely be worse</a></h1>
<p style="margin:0;">by <b>Michael Higgins</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 12, 2014</span> &nbsp;�&nbsp; <i>National Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">One of the biggest dangers Israel faces as it cracks down on the Hamas terror group is that it could be too successful.</p><p style="padding:0; margin:0 0 10px 0;">Hamas is convinced it has everything to play for and little to lose in an escalating battle with the Jewish state. Its government in Gaza is bankrupt, increasingly isolated and friendless, and at risk of being seen as impotent. A war against Israel will burnish its "resistance" credentials and gain it support at home and in some foreign quarters.</p><p style="padding:0; margin:0 0 10px 0;">So with more than 700 rockets already fired from Gaza, Israel can only expect more in the coming days. Even a ground invasion targeting terrorist commanders, command and control structures, tunnels and weapons is unlikely to produce an immediate ceasefire.</p><p style="padding:0; margin:0 0 10px 0;">Israel wants to achieve "calm for calm," as Prime Minister Benjamin Netanyahu said this week, but what if airstrikes and a ground invasion cripple a politically and economically weak Hamas?</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://news.nationalpost.com/2014/07/12/israels-quandary-hamas-probably-weak-enough-to-eradicate-but-whoever-takes-their-place-will-likely-be-worse/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4477"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.breitbart.com/Big-Peace/2014/07/10/Moderate-Fatah-Also-Firing-Rockets-Abbas-won-t-condemn-attacks-on-Israel">'Moderate' Fatah Also Firing Rockets; Abbas Won't Condemn Attacks on Israel</a></h1>
<p style="margin:0;">by <b>Abe Katsman</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 11, 2014</span> &nbsp;�&nbsp; <i>Breitbart</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Palestinian Authority President and Fatah head Mahmoud Abbas has called for an "immediate cessation" of Israeli air strikes on the Gaza Strip. But Abbas, considered a moderate by most world leaders, stopped short of calling for an end to the hundreds of rocket attacks on Israel which triggered the current fighting.</p><p style="padding:0; margin:0 0 10px 0;">Writing for the Gatestone Institute, Khaled Abu Toameh analyzes why.</p><p style="padding:0; margin:0 0 10px 0;">The key reason Abbas is not willing to condemn the rocket attacks is because his own Fatah loyalists in the Gaza Strip are also participating in the fighting against Israel.</p><p style="padding:0; margin:0 0 10px 0;">Fatah has several hundred militiamen in the Gaza Strip who belong to various armed groups. Some, in fact, are former members of the Palestinian Authority security forces, who continue to receive their salaries from the Palestinian government in Ramallah�funded by Western governments.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.breitbart.com/Big-Peace/2014/07/10/Moderate-Fatah-Also-Firing-Rockets-Abbas-won-t-condemn-attacks-on-Israel" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4478"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jns.org/news-briefs/2014/7/10/fatah-joins-hamas-and-islamic-jihad-in-rocket-attacks-on-israel">Fatah joins Hamas and Islamic Jihad in rocket attacks on Israel</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">July 10, 2014</span> &nbsp;�&nbsp; <i>JNS</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Terrorist groups affiliated with Palestinian Authority (PA) President Mahmoud Abbas's Fatah party claim that they have joined the rocket attacks against Israel from Gaza.</p><p style="padding:0; margin:0 0 10px 0;">According to the <i>Gatestone Institute</i>, Fatah has several hundred militiamen in the Gaza Strip who belong to various armed terrorist groups. Some of these terrorists formerly belonged to the PA's security forces and still receive salaries from the PA�which is funded by Western governments, including the U.S.</p><p style="padding:0; margin:0 0 10px 0;">"This blessed operation came as an answer to the enemy's repeated crimes against our defenseless people," the Fatah-affiliated Abdul Qader Husseini Battalions said in a statement on its Facebook page, the <i>Times of Israel</i> reported.</p><p style="padding:0; margin:0 0 10px 0;">A photo of two members of the Husseini Battlions preparing to launch a rocket at Israel was also posted on Fatah's Facebook page.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jns.org/news-briefs/2014/7/10/fatah-joins-hamas-and-islamic-jihad-in-rocket-attacks-on-israel" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4511"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jns.org/latest-articles/2014/7/9/in-gaza-israel-faces-new-jihadist-threats-on-top-of-a-wounded-hamas">In Gaza, Israel faces new jihadist threats on top of a wounded Hamas</a></h1>
<p style="margin:0;">by <b>Sean Savage</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 9, 2014</span> &nbsp;�&nbsp; <i>JNS</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;" id="yui_3_17_2_1_1406234987353_421">With the launch of the Israeli army's Operation Protective Edge in Gaza, much of the public's attention has appropriately focused on Hamas, the Palestinian terrorist group behind the June 12 abduction and murder of three Jewish teens and more recently the escalation of rocket fire on Israel. But the threats the Jewish state faces from Gaza may not be as clear-cut as they seem.</p><p style="padding:0; margin:0 0 10px 0;">While Hamas is still extremely deadly, it has seen a weakening of its grip on the coastal enclave over the past few years, due to challenges from other Islamic terror groups and isolation from its former patrons in the Muslim world.</p><p style="padding:0; margin:0 0 10px 0;">"Hamas has been on the brink of collapse," Jonathan Schanzer, vice president for research at the Foundation for Defense of Democracies, told <i>JNS.org</i>. "It has become very isolated politically and economically."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jns.org/latest-articles/2014/7/9/in-gaza-israel-faces-new-jihadist-threats-on-top-of-a-wounded-hamas" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4485"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.timesofisrael.com/iran-rapper-strips-for-prisoners-rights/">Iran rapper strips for prisoners' rights</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">June 19, 2014</span> &nbsp;�&nbsp; <i>The Times of Israel</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;" itemprop="articleBody">An exiled Iranian rapper and his bandmates recently stripped on stage in protest of the harsh treatment � including strip searches � that political prisoners are subject to in his home country.</p><p style="padding:0; margin:0 0 10px 0;" itemprop="articleBody">Shahin Najafi's Toronto performance on June 7 was said to have stirred up much interest on Iranian social media sites, as the public figure associated with Islamic apostasy took his cause to a new and shocking level.</p><p style="padding:0; margin:0 0 10px 0;" itemprop="articleBody">Najafi, a resident of Germany since 2005, was issued a death sentence fatwa by Grand Ayatollah Lotfollah Safi Golpaygani for apostasy in 2012 after the singer released a song deemed offensive to Islam. The controversial rapper has also been subject to repeated death threats and calls for his execution. One Islamist website, Shia Online, offered a $100,000 reward for his murder, the BBC reported.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.timesofisrael.com/iran-rapper-strips-for-prisoners-rights/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4487"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.breitbart.com/Breitbart-London/2014/06/13/ISIS-Threatens-to-Invade-Jordan-Slaughter-King-Abdullah">ISIS Threatens to Invade Jordan, 'Slaughter' King Abdullah</a></h1>
<p style="margin:0;">by <b>Abe Katsman</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">June 13, 2014</span> &nbsp;�&nbsp; <i>Breitbart</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Islamist terrorists in Iraq and Syria have begun creeping toward neighboring countries, sources close to the Islamic fundamentalists revealed this week, according to a report from the Gatestone Institute.</p><p style="padding:0; margin:0 0 10px 0;">The terrorists, who belong to The Islamic State of Iraq and Syria (ISIS), an offshoot of al-Qaeda, are reported to be planning to take their jihad to Jordan, Lebanon, the Gaza Strip and the Sinai Peninsula -- after having already captured large parts of Syria and Iraq.</p><p style="padding:0; margin:0 0 10px 0;">The ISIS terrorists see Jordan's Western-backed King Abdullah as an enemy of Islam and an infidel, and have publicly called for his execution. ISIS terrorists recently posted a video on YouTube in which they threatened to "slaughter" Abdullah, whom they denounced as a "tyrant." Some of the terrorists who appeared in the video were Jordanian citizens who tore up their passports in front of the camera and vowed to launch suicide attacks inside the kingdom.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.breitbart.com/Breitbart-London/2014/06/13/ISIS-Threatens-to-Invade-Jordan-Slaughter-King-Abdullah" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4486"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://eipa.eu.com/2014/06/israeli-diplomat-warns-about-the-problem-of-foreign-jihadists-in-syria/">Israeli diplomat warns about the problem of foreign jihadists in Syria</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">June 13, 2014</span> &nbsp;�&nbsp; <i>EIPA</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Israel's ambassador to the United Nations has warned that the problem of foreign jihadists fighting in Syria is spiraling out of control.</p><p style="padding:0; margin:0 0 10px 0;">"More than 10,000 foreign fighters have joined the fighting in Syria, and some of them have managed to return home and are spreading terror," Prosor stated. "The citizens of the world should be aware that fundamentalist terrorists are moving from place to place," Ron Prosor told a discussion in the United Nations General Assembly on the situation in Iraq.</p><p style="padding:0; margin:0 0 10px 0;">Earlier this week, the Al Qaeda-linked terrorist group Islamic State of Iraq and the Levant (ISIS) forces from Syria invaded the northwestern Iraqi cities cities of Mosul, Tikrit, and Kirkuk, imposing Islamic Sharia law and a sparking a mass refugee crisis. On Friday morning, officials also admitted that ISIS terrorists had seized the eastern town of Jawlala, security sources told BBC.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://eipa.eu.com/2014/06/israeli-diplomat-warns-about-the-problem-of-foreign-jihadists-in-syria/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4491"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://washingtonexaminer.com/obamas-state-department-has-joined-the-islamic-assault-on-western-liberty/article/2549185">Obama's State Department has joined the Islamic assault on Western liberty</a></h1>
<p style="margin:0;">by <b>Abraham H. Miller</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">June 2, 2014</span> &nbsp;�&nbsp; <i>The Washinton Examiner</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Not satisfied with expunging any reference to Islam from government documents containing the word "terrorism," the Obama administration is embarking on a wider anti-free-speech policy mapped out by the Organization of Islamic Cooperation.</p><p style="padding:0; margin:0 0 10px 0;">Comprised of 56 countries and the Palestinian Authority, the OIC claims to speak for the world's 1.5 billion Muslims.</p><p style="padding:0; margin:0 0 10px 0;">Clearly it does not, as Islam involves different intellectual currents. But the powerful OIC still presumes to speak for Islam in the international community.</p><p style="padding:0; margin:0 0 10px 0;">When the UN's Universal Declaration of human rights was created in 1948, Saudi Arabia joined apartheid South Africa in rejecting it.</p><p style="padding:0; margin:0 0 10px 0;">The Saudis found it violated Sharia, and the South Africans saw it as a threat to their racist society. Most Muslim majority states, however, supported the resolution.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://washingtonexaminer.com/obamas-state-department-has-joined-the-islamic-assault-on-western-liberty/article/2549185" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4490"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.breitbart.com/Breitbart-London/2014/05/30/Palestinian-Reconciliation-Is-World-Deaf-to-What-Hamas-is-Saying">Palestinian Reconciliation: Is the World Deaf to What Hamas is Saying?</a></h1>
<p style="margin:0;">by <b>Abe Katsman</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 30, 2014</span> &nbsp;�&nbsp; <i>Breitbart</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">With official reconciliation between Hamas and the Palestinian Authority expected to be finalised any day, there is little attention being paid to Hamas's statements of their intentions. According to an analysis from the <i>Gatestone Institute</i>, Hamas is plainly stating that the Palestinian Unity Government will not renounce violence and will not recognize Israel's right to exist.</p><p style="padding:0; margin:0 0 10px 0;">Hamas's two most senior representatives, Khaled Mashaal and Mahmoud Zahar, have both made it clear that their movement is planning to continue "resistance" actions against Israel even after the formation of the unity government. They also emphasized that Hamas has no intention of dismantling its military wing, Izaddin al-Qassam, as part of the unity accord.</p><p style="padding:0; margin:0 0 10px 0;">"The reconciliation will actually consolidate the resistance ... from one intifada to another until the liberation of Palestine," says Mashaal, leader of the Hamas political bureau.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.breitbart.com/Breitbart-London/2014/05/30/Palestinian-Reconciliation-Is-World-Deaf-to-What-Hamas-is-Saying" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4488"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.israelnationalnews.com/Articles/Article.aspx/15083">Election Results Show Europe's True Face</a></h1>
<p style="margin:0;">by <b>Manfred Gerstenfeld</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 29, 2014</span> &nbsp;�&nbsp; <i>Israel National News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">How bad is the increasing emergence of neo-fascist and extreme right wing parties in recent European parliamentary elections for the Jews and Israel? Asking incomplete questions will not help much to better understand the huge complexity of the European Union's reality.</p><p style="padding:0; margin:0 0 10px 0;">Much more useful would be to ask another more far-reaching question � what threats against Jews and Israel are emanating from the European Union? To obtain insights, one should separate the two.</p><p style="padding:0; margin:0 0 10px 0;">Much of what is threatening to the Jews isn't necessarily extremely dangerous for Israel, and vice versa.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.israelnationalnews.com/Articles/Article.aspx/15083" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4489"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.commentarymagazine.com/2014/05/26/international-law-is-broken/">International Law Is Broken</a></h1>
<p style="margin:0;">by <b>Tom Wilson</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 26, 2014</span> &nbsp;�&nbsp; <i>Commentary</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The redundancy, not to mention the hypocrisy, of the international law regime is hardly any great secret. Just how broken the system has now become was evidenced in recent weeks by two particularly striking rulings. On Thursday Russia and China vetoed the fourth attempt at a United Nations Security Council resolution on Syria's referral to the International Criminal Court in the Hague. Given Syria's use of chemical weapons against its own population, and the fact that the death toll in that country now stands at an estimated 162,000, it is unfathomable that a referral to the ICC hasn't already been accomplished. Yet Syria is not a signatory of the Rome Statute and as such can only be referred to the ICC via the Security Council.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.commentarymagazine.com/2014/05/26/international-law-is-broken/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4107"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.commentarymagazine.com/2013/12/23/kerry-misreads-palestinian-unrest-abbas-fatah-intifada/">Kerry Misreads Palestinian Unrest</a></h1>
<p style="margin:0;">by <b>Jonathan S. Tobin</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">December 23, 2013</span> &nbsp;�&nbsp; <i>Commentary</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">In recent weeks, Secretary of State John Kerry has taken to warning Israel that if it doesn't give away more of its positions in the peace talks with the Palestinians, it will face a third intifada. Though it is unlikely that any Israeli concessions would be enough to convince Palestinian Authority leader Mahmoud Abbas that he should risk everything by ending the conflict, Kerry's threat is something of a self-fulfilling prophecy. Though this may not be his intention, by speaking in this manner Kerry is sending a clear message to the Palestinians that any violence will be considered justified by Washington. The question is, do a string of recent events indicate that the Palestinians are listening to him?</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.commentarymagazine.com/2013/12/23/kerry-misreads-palestinian-unrest-abbas-fatah-intifada/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_4492"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Opinion/Columnists/Anti-Semitism-in-Belgium-reaches-new-heights-326993">Anti-Semitism in Belgium reaches new heights</a></h1>
<p style="margin:0;">by <b>Isi Leibler</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">September 24, 2013</span> &nbsp;�&nbsp; <i>Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">I have devoted numerous columns of late to the tsunami of anti-Semitism sweeping through Western Europe, noting that aside from the frenziedly anti-Semitic Islamic extremists, the principal perpetrators are left-wing activists frequently led by those purportedly promoting human rights.</p><p style="padding:0; margin:0 0 10px 0;">Manfred Gerstenfeld's most recent book, Demonizing Israel and the Jews, documents evidence of the depressingly high levels of European anti-Semitism, highlighting the frequent employment of Holocaust inversion as a vehicle to incite Jew-hatred. He notes that opinion polls indicate that nearly half of all European adults � close to 150 million people � are today convinced that Israelis behave toward the Palestinians like the Nazis did toward the Jews.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Opinion/Columnists/Anti-Semitism-in-Belgium-reaches-new-heights-326993" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3927"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Opinion/Columnists/Think-Again-Israel-sues-for-peace-322434">Israel sues for peace</a></h1>
<p style="margin:0;">by <b>Jonathan Rosenblum</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 9, 2013</span> &nbsp;�&nbsp; <i>The Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">We can safely conclude that Prime Minister Binyamin Netanyahu did not happily agree to release 104 savage Palestinian murderers as the prize for Palestinian agreement to once again sit at the negotiating table. In so doing, he damaged not just his political standing, but whatever remains of his moral authority and reputation for strategic thinking.</p><p style="padding:0; margin:0 0 10px 0;">Not too many readers outside Israel will be exposed to a full catalogue of the deeds perpetrated by those to be released. But Israelis were, and they were revolted.</p><p style="padding:0; margin:0 0 10px 0;">Over the years, Netanyahu has often adopted the role of Winston Churchill hectoring the nations of the world about the futility of attempting to appease terrorists or of giving in to their demands. He has now lost whatever standing he might have once possessed to do so.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Opinion/Columnists/Think-Again-Israel-sues-for-peace-322434" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3928"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://frontpagemag.com/2013/enza-ferreri/halal-a-taste-of-terror/">Halal: A Taste of Terror</a></h1>
<p style="margin:0;">by <b>Enza Ferreri</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 8, 2013</span> &nbsp;�&nbsp; <i>FrontPageMagazine.com</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">"Beware! Halal food funds terrorists." Stickers with this slogan were sold in July by a candidate of the Australian political party One Nation, and condemned by the country's Multicultural Affairs Minister Glen Elmes as "offensive, grotesque and designed to inflame hatred." He added: "People are encouraged to put the stickers on food products in supermarkets, which isn't just racial discrimination, it's also vandalism."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://frontpagemag.com/2013/enza-ferreri/halal-a-taste-of-terror/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3929"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://thehill.com/blogs/congress-blog/foreign-policy/315363-time-to-recognize-the-muslim-brotherhood-for-what-it-is-a-hate-group">Recognize Muslim Brotherhood for the hate group it is</a></h1>
<p style="margin:0;">by <b>Marvin Hier and Abraham Cooper</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 5, 2013</span> &nbsp;�&nbsp; <i>The Hill</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">From his historic Cairo Speech President Obama sought to empower moderate Muslims, including the 'moderate' Muslim Brotherhood. The election of Muslim Brotherhood's Mohamad Morsi was hailed as a slam-dunk for democracy and earned Washington's backing.</p><p style="padding:0; margin:0 0 10px 0;">But a year later, 22 million Egyptians saw things differently, returning to Tahrir Square and prompting the military to give Morsi and company the boot.</p><p style="padding:0; margin:0 0 10px 0;">Secretary of State Kerry is to be commended for declaring that the Egyptian military was "restoring democracy" by deposing Morsi. Now the U.S. should drop its flawed Muslim Brotherhood policy. Never a force for moderation, it should be recognized for what it is: An enemy of freedom and tolerance-- a hate group with a long enemies list.</p><p style="padding:0; margin:0 0 10px 0;">There should be no more grants and no more White House visits for bigots.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://thehill.com/blogs/congress-blog/foreign-policy/315363-time-to-recognize-the-muslim-brotherhood-for-what-it-is-a-hate-group" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3909"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jns.org/news-briefs/2013/8/1/egypt-coptic-christians-have-one-of-their-worst-months-gatestone-institute-report-says">Egypt Coptic Christians have one of their 'worst months,' Gatestone Institute report says</a></h1>
<p style="margin:0;"><span style="white-space:nowrap;">August 1, 2013</span> &nbsp;�&nbsp; <i>JNS.org</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The ongoing persecution of Egypt's Coptic Christians�including the unprecedented attack on St. Mark's Cathedral, among other incidents�is highlighted in the latest monthly report by the Gatestone Institute on the global persecution of Christians.</p><p style="padding:0; margin:0 0 10px 0;">According to the report, April was "one of the worst months for Christian Copts." On April 5, six Christians were killed near Cairo after a dispute between local Muslims and Christians escalated. Afterwards, what the report called a "collective punishment" spree against Christians resulted in "the injury of at least 20 other Copts, an Evangelical church being set on fire, and an attack on a Coptic church."</p><p style="padding:0; margin:0 0 10px 0;">"Two days later, St. Mark's�Coptic Christianity's holiest site�came under assault by Muslim protestors and even state security forces, resulting in the deaths of two more Coptic Christians," Raymond Ibrahim wrote for Gatestone.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jns.org/news-briefs/2013/8/1/egypt-coptic-christians-have-one-of-their-worst-months-gatestone-institute-report-says" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3899"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="www.washingtontimes.com/news/2013/jul/23/embassy-row-surrender-snowden/?page=all">'Brotherhood Lackey'</a></h1>
<p style="margin:0;">by <b>James Morrison</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 23, 2013</span> &nbsp;�&nbsp; <i>The Washington Times</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Three weeks after Egyptians ousted the Islamist-led government, the U.S. ambassador remains a pariah among many Egyptians, while the military chief who overthrew the regime is viewed as a hero in Israel.</p><p style="padding:0; margin:0 0 10px 0;">Ambassador <b>Anne Patterson</b>, a career foreign service officer, was pilloried by countless protesters among millions who demanded an end to a government led by Islamic fundamentalists of the Muslim Brotherhood.</p><p style="padding:0; margin:0 0 10px 0;">Ex-President <b>Mohammed Morsi</b> remains in custody, after the military overthrew his government on July 3. Protesters accused Mr. Morsi of failing to rescue a crumbling economy and imposing strict Islamist laws.</p><p style="padding:0; margin:0 0 10px 0;">Mrs. Patterson, echoing White House policy, repeatedly urged Egyptians to cease their protests last month against Mr. Morsi, who more than a year ago won an election that the U.S. and other Western nations considered free and fair.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="www.washingtontimes.com/news/2013/jul/23/embassy-row-surrender-snowden/?page=all" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3898"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.theblaze.com/stories/2013/07/22/video-claims-to-show-imam-on-jerusalems-temple-mount-calling-for-caliphate-and-destruction-of-the-u-s-france-britain-rome/">Video Claims to Show Imam on Jerusalem's Temple Mount Calling for Caliphate and Destruction of the U.S., France, Britain, Rome</a></h1>
<p style="margin:0;">by <b>Sharona Schwartz</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 22, 2013</span> &nbsp;�&nbsp; <i>The Blaze</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">TheBlaze reported last week that prayer services at the al-Aqsa Mosque in Jerusalem on the first Friday of Ramadan took on a political tone when worshipers marched with posters showing support for ousted Egyptian President Mohammed Morsi and raised a huge banner celebrating his leadership.</p><p style="padding:0; margin:0 0 10px 0;">Now, video has emerged of the events on the Temple Mount where the mosque is situated where it appears a Muslim religious leader also took the opportunity to virulently slam the U.S., Europe and Israel.</p><p style="padding:0; margin:0 0 10px 0;">"What happened at the al-Aqsa Mosque during last week's Friday prayers should be sounding alarm bells in the U.S., Britain and France," writes journalist Khaled Abu Toameh who for years has been covering the Palestinian beat for the Jerusalem Post.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.theblaze.com/stories/2013/07/22/video-claims-to-show-imam-on-jerusalems-temple-mount-calling-for-caliphate-and-destruction-of-the-u-s-france-britain-rome/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3870"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nationalreview.com/corner/353767/what-he-going-england-jack-fowler">What the He!! Is Going On in England?</a></h1>
<p style="margin:0;">by <b>Jack Fowler</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 18, 2013</span> &nbsp;�&nbsp; <i>National Review Online</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The Gatestone Institute is a remarkable resource, a fount of unnerving news and analysis of other-side-of-the-pond political correctness in the face of Muslim demands. This week, Distinguished Senior Fellow Soeren Kern has a report coldly titled "UK Taxi Rapes," and subtitled "No Woman Is Safe in a Cab."</p><blockquote><p style="padding:0; margin:0 0 10px 0;">Great Britain is in the throes of a rape and pedophilia epidemic unlike anything the country has experienced in living memory.</p><p style="padding:0; margin:0 0 10px 0;">Many of the sex crimes are being perpetrated by Muslim child grooming gangs responsible for drugging, raping and torturing hundreds and possibly thousands of British girls.</p></blockquote><p style="padding:0; margin:0 0 10px 0;">"Muslim child grooming gangs?!" More on that:</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.nationalreview.com/corner/353767/what-he-going-england-jack-fowler" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3861"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="https://www.embooks.com/blog/single/please-mr-obama-stop-supporting-terrorists-here-in-egypt">'Please Mr Obama, stop supporting terrorists here in Egypt'</a></h1>
<p style="margin:0;">by <b>Melanie Phillips</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 14, 2013</span> &nbsp;�&nbsp; <i>Melanie Phillips Electric Media</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">In all the welter of words about the ousting of the Muslim Brotherhood in Egypt, very little has been written in the mainstream media about the extraordinary contortions of the Obama administration, which did so much to put the Brothers into power there in the first place.</p><p style="padding:0; margin:0 0 10px 0;">The administration's first reaction was to threaten to cut off US aid to Egypt in order to punish the military for unseating the Muslim Brother President, Mohamed Morsi. Then a State Department official vouchsafed that Morsi had been 'undemocratic', and the administration backed away from outright confrontation.</p><p style="padding:0; margin:0 0 10px 0;">Nevertheless, reports persist that the US continues to support the Brothers against the Egyptian military. As Raymond Ibrahim reports, the US ambassador to Egypt, Anne Patterson, has come to be seen as a Brotherhood stooge:</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="https://www.embooks.com/blog/single/please-mr-obama-stop-supporting-terrorists-here-in-egypt" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3871"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Middle-East/Analysts-Improvement-in-relations-with-Ankara-unlikely-319471">Analysts: Improvement in relations with Ankara unlikely</a></h1>
<p style="margin:0;">by <b>Ariel Ben Solomon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">July 11, 2013</span> &nbsp;�&nbsp; <i>The Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Anti-Semitism in Turkey has increased over the past decade partly because of government policies and rhetoric by Prime Minister Recep Tayyip Erdogan and other leaders, said Efrat Aviv at an international conference on Wednesday at Bar-Ilan University titled "Turkey � Where to?" The conference was organized by The Begin-Sadat Center for Strategic Studies, with the assistance of Aviv, a researcher at BESA and a lecturer in the department of Middle East studies at Bar-Ilan.</p><p style="padding:0; margin:0 0 10px 0;">A poll she conducted under the auspices of the Vidal Sassoon International Center for the Study of Antisemitism showed that Erdogan's rhetoric resulted in higher anti- Semitism in the country.</p><p style="padding:0; margin:0 0 10px 0;">Aviv described how Jews in Turkey live on edge, particularly because of the upsurge in tensions with Israel under the current Justice and Development Party (AKP) government.</p><p style="padding:0; margin:0 0 10px 0;">In public Turkish Jews tend not even to use the word "Israel," she said, instead referring to "the state."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Middle-East/Analysts-Improvement-in-relations-with-Ankara-unlikely-319471" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3813"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.upi.com/Top_News/Analysis/Outside-View/2013/05/28/Outside-View-Europes-tolerance-tested-by-Islam/UPI-41711369714020/">Europe's tolerance tested by Islam</a></h1>
<p style="margin:0;">by <b>James Zumwalt</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 28, 2013</span> &nbsp;�&nbsp; <i>UPI</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">HERNDON, Va. -- In 1995, herpetologists began observing frogs in the U.S. with various mutations and genetic defects. Suspecting the cause was environmental rather than natural, they launched a decades' long study linking pesticides and other toxins to disturbing nature's balance.</p><p style="padding:0; margin:0 0 10px 0;">If so few herpetologist observers could identify such a dangerous trend evolving and isolate its cause, why then is it so difficult for social scientists to do so concerning human behavior within democracies that is disrupting stability's natural balance?</p><p style="padding:0; margin:0 0 10px 0;">A series of articles by author Soeren Kern underscores this trend in Europe.</p><p style="padding:0; margin:0 0 10px 0;">Switzerland is a land famous for not having had to fight a war for centuries. Generations of its citizens have proven adept getting along with all cultures. With no standing army, it opted instead to provide for its national defense with a people's militia.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.upi.com/Top_News/Analysis/Outside-View/2013/05/28/Outside-View-Europes-tolerance-tested-by-Islam/UPI-41711369714020/" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3829"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nationalreview.com/corner/349337/islams-parallel-emirate-uk">Islam's Parallel Emirate in the U.K.</a></h1>
<p style="margin:0;">by <b>Andrew C. McCarthy</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 25, 2013</span> &nbsp;�&nbsp; <i>National Review Online</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Mark's column this weekend is on the mulish and all too familiar refusal of the West (in this case, Britain) to grapple with the unyielding fact that barbaric attacks (in this case, the savage murder of Lee Rigby on Wellington Street in Woolwich) are driven by an ideology rooted in Islamic scripture. I discuss some of these scriptures, cited by Rigby's brazen jihadist killers, in my own column about President Obama's national security speech this week � particularly, about the president's willful blindness to Islamic supremacist ideology.</p><p style="padding:0; margin:0 0 10px 0;">As part of his conclusion, Mark observes:</p><blockquote><p style="padding:0; margin:0 0 10px 0;">One in ten Britons under 25 is now Muslim. That number will increase, through immigration, disparate birth rates, and conversions like those of the Woolwich killers, British-born and -bred. Metternich liked to say the Balkans began in the Landstrasse, in southeast Vienna. Today, the Dar al-Islam begins in Wellington Street, in southeast London. . . .</p></blockquote>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.nationalreview.com/corner/349337/islams-parallel-emirate-uk" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3827"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.israelnationalnews.com/Articles/Article.aspx/13300">Europe's Muslims Are Fighting the World Jihad War</a></h1>
<p style="margin:0;">by <b>Giulio Meotti</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 14, 2013</span> &nbsp;�&nbsp; <i>Israel National News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Up to 100 Dutch Muslims are currently fighting in Syria. The Netherlands is the biggest supplier of European jihadist fighters, and most of them are members of pro al Qaeda Al Nusra movement which wants to create an Islamic state in Syria.</p><p style="padding:0; margin:0 0 10px 0;">A recent Gatestone Institute paper by Soeren Kern gives the numbers:</p><p style="padding:0; margin:0 0 10px 0;">1.000 Europeans are currently fighting against Bashar el Assad's regime in Syria. The U.K. government thinks there are about 100 British Muslim fighters in Syria. It is like during the war in Yugoslavia, when 6,000 Muslims travelled to Bosnia to join the war against the Serbs. Imad al-Hussein, a medical student from Syria with a beard, became the public face of these mujahedeen.</p><p style="padding:0; margin:0 0 10px 0;">In Iraq many European muslims detonated themselves against US troops, Iraqi soldiers and Shia pilgrims.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.israelnationalnews.com/Articles/Article.aspx/13300" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3828"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.ibtimes.com/fighting-words/will-real-erdogan-please-stand-1254539">Will The Real Erdogan Please Stand Up?</a></h1>
<p style="margin:0;">by <b>Elisha Maldonado</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 13, 2013</span> &nbsp;�&nbsp; <i>International Business Times</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">As Turkish Prime Minister Recep Tayyip Erdogan prepares to discuss his disagreements on how to approach Syria, and other vital Middle East issues with President Barack Obama on Thursday at the White House, the Gatestone Institute's Veli Sirin has written a sort of primer on just who exactly the president will be talking with.</p><p style="padding:0; margin:0 0 10px 0;">It's a long one, so here is a snippet, but do give it a read.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.ibtimes.com/fighting-words/will-real-erdogan-please-stand-1254539" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3814"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://news.investors.com/ibd-editorials/050613-655038-israel-shows-up-obama-bluster-in-syria.htm">Israel Shows Its Strength Against Syria And America's Weakness</a><br>
<span style="font-size:85%">Editorial</span></h1>
<p style="margin:0;"><span style="white-space:nowrap;">May 6, 2013</span> &nbsp;�&nbsp; <i>Investor's Business Daily</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Israel's as-yet-unacknowledged multiple airstrikes near Damascus demonstrated its ability to take care of itself without America's help. The action also underscored the expanding U.S. leadership vacuum.</p><p style="padding:0; margin:0 0 10px 0;">Bibi Netanyahu's air attacks on military targets in Bashar al-Assad's terrorist state Sunday followed the bombing of a shipment of surface-to-surface rockets bound for the Iranian-backed Lebanese terrorist group Hezbollah.</p><p style="padding:0; margin:0 0 10px 0;">What a difference between the quiet effectiveness of the Jewish state and the empty bluster and blunder of the Obama administration.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://news.investors.com/ibd-editorials/050613-655038-israel-shows-up-obama-bluster-in-syria.htm" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3815"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.cjnews.com/index.php?q=node/106489">Lack of PA press freedom an unreported story</a></h1>
<p style="margin:0;">by <b>Paul Michaels</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 5, 2013</span> &nbsp;�&nbsp; <i>Canadian Jewish News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">In her April 30 Toronto Star column ("Palestinian Authority keeps media under thumb"), Vivian Bercovici shines a light on an under-reported phenomenon in the Middle East: the contrast between Israel and the Palestinian Authority when it comes to press freedom.</p><p style="padding:0; margin:0 0 10px 0;">For many journalists who report routinely from Israel and take the country's open, democratic system for granted (the very reason they're based in Israel in large numbers), this contrast is not "news" and thus garners little attention in the West. What sometimes does make news, however, are complaints about occasional constraints by Israeli authorities on their free access to conflict-driven stories involving the IDF in the West Bank and Gaza. Israel's refusal to allow foreign correspondents entry into Gaza during the January 2009 war with Hamas is one example.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.cjnews.com/index.php?q=node/106489" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3834"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Middle-East/Hundreds-of-European-Muslims-fighting-Assad-311008">Hundreds of European Muslims fighting Assad</a></h1>
<p style="margin:0;">by <b>Ariel Ben Solomon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">April 25, 2013</span> &nbsp;�&nbsp; <i>The Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">European intelligence agencies are worried that European Muslims fighting in Syria will return to carry out terrorist attacks because of their contacts built with al-Qaida, the BBC reported on Wednesday.</p><p style="padding:0; margin:0 0 10px 0;">The UK, Ireland and France are the Western countries believed to have the most fighters in Syria, according to the report, which quotes EU anti-terror chief Gilles de Kerchove as saying that about 500 Muslims from Europe are fighting with the rebels.</p><p style="padding:0; margin:0 0 10px 0;">However, according to Soeren Kern, a senior fellow for the New York-based Gatestone Institute, and a longtime observer of Islam in Europe, more than 1,000 European Muslims are fighting in Syria. In an article for Gatestone in March titled "European Jihadists: The Latest Export," he wrote that Syria "has replaced Afghanistan, Pakistan and Somalia as the main destination for militant Islamists seeking to obtain immediate combat experience with little or no official scrutiny."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Middle-East/Hundreds-of-European-Muslims-fighting-Assad-311008" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3823"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/Opinion/Editorials/Fayyads-resignation-309997">Fayyad's resignation</a><br>
<span style="font-size:85%">Editorial</span></h1>
<p style="margin:0;"><span style="white-space:nowrap;">April 16, 2013</span> &nbsp;�&nbsp; <i>The Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">In August 2009, Salaam Fayyad, then prime minister of the Palestinian Authority, presented an ambitious and refreshingly constructive plan for instituting the two-state solution titled "Palestine: Ending the Occupation, Establishing a State."</p><p style="padding:0; margin:0 0 10px 0;">Salaam, who resigned on Friday, rejected the Oslo Accords' "top-down" legacy of negotiations between political leaders, and various forms of resistance to the "occupation" � from civil disobedience to terrorism.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/Opinion/Editorials/Fayyads-resignation-309997" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3835"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.israelnationalnews.com/Articles/Article.aspx/13056">Allah Finds a Home in a German Cathedral</a></h1>
<p style="margin:0;">by <b>Giulio Meotti</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">March 27, 2013</span> &nbsp;�&nbsp; <i>Israel National News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">During the last hours of their agony in 1453, the Christian faithful took refuge within the hallowed walls of the Hagia Sophia. The Muslims killed the weak and the elderly and reduced the others to slavery. When the carnage came to an end, Sultan Mehmed II ordered an Islamic scholar to declare that there was no God but Allah and Mohammed was his Prophet. The ancient church was then converted into a mosque; hundreds of other churches in Constantinople and other places suffered the same fate.</p><p style="padding:0; margin:0 0 10px 0;">Today in Europe we are witnessing the same process of conversion, but there is no bloodbath nor ceremony. It is a voluntary and sterile process of conversion. It is enough to sign a piece of paper in front of a notary and Europe turns to Islam.</p><p style="padding:0; margin:0 0 10px 0;">Ten years ago the Nobel Prize Laureate for Literature, G�nter Grass, proposed transforming empty churches into mosques. "It would be a great gesture", proclaimed the "painful consciousness of Germany".</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.israelnationalnews.com/Articles/Article.aspx/13056" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3826"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/International/N-African-chaos-continues-from-Libya-to-Mali-to-Algeria">N. African chaos continues -- from Libya to Mali to Algeria</a></h1>
<p style="margin:0;">by <b>Ariel Ben Solomon</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 21, 2013</span> &nbsp;�&nbsp; <i>The Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The focus of the tensions, fighting and killing that resulted from the Arab uprisings, including the ongoing civil war in Syria, has moved west to north Africa.</p><p style="padding:0; margin:0 0 10px 0;">On Saturday, the Algerian army finished its attack on the terrorists who had led a four-day siege of a gas plant, killing the majority for a provisional count of 32. The number of hostages killed as of Sunday was put at a preliminary 23, according to Algerian officials.</p><p style="padding:0; margin:0 0 10px 0;">The targeted workers came from many countries, as the plant came under a coordinated attack by terrorists who had also tried to blow up a pipeline.</p><p style="padding:0; margin:0 0 10px 0;">Algerian Communication Minister Muhammad Said stated that the attackers came from various countries and included only three Algerians.</p><p style="padding:0; margin:0 0 10px 0;">They entered from neighboring countries, according to DPA.</p><p style="padding:0; margin:0 0 10px 0;">"We have indications that they originated from northern Mali," a senior official was quoted as saying by The New York Times.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/International/N-African-chaos-continues-from-Libya-to-Mali-to-Algeria" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3825"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.israelnationalnews.com/News/News.aspx/164245">Facebook Caves to Arab Threats Against Journalist</a></h1>
<p style="margin:0;">by <b>Chana Ya'ar</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 16, 2013</span> &nbsp;�&nbsp; <i>Israel National News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Facebook has apparently caved in to pressure from pro-Palestinian Authority activists, temporarily banning Arab journalist Khaled Abu Toameh and setting up what may be a structure for anti-Israel support in future posts.</p><p style="padding:0; margin:0 0 10px 0;">Abu Toameh is an internationally-known Arab journalist who publishes in numerous media outlets around the world. He often writes controversial pieces that raise eyebrows in the Arab world, particularly in the Palestinian Authority.</p><p style="padding:0; margin:0 0 10px 0;">His latest challenge to Arab dictatorship came Monday in a report on the trial of a former Jordanian intelligence chief facing corruption charges. He included a link to coverage of the trial in an Arabic-language Jordanian newspaper. The journalist also included a link to a post he wrote for the Gatestone Institute blog in which he criticized the Palestinian Authority for its own dirty little government secrets.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.israelnationalnews.com/News/News.aspx/164245" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3820"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.jpost.com/National-News/Facebook-temporarily-bans-Post-reporter">Facebook temporarily bans 'Post' reporter</a></h1>
<p style="margin:0;">by <b>Melanie Lidman</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 15, 2013</span> &nbsp;�&nbsp; <i>The Jerusalem Post</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Facebook temporarily shut down The Jerusalem Post reporter Khaled Abu Toameh's Facebook page, possibly in response to a campaign by anti-Israel activists who object to Abu Toameh's views on corruption within the Palestinian Authority.</p><p style="padding:0; margin:0 0 10px 0;">On Monday, Abu Toameh posted a link to an Arabic report in a Jordanian newspaper about the corruption trial of former Jordanian intelligence chief. He also posted a link to an acerbic blog post slamming the PA that he wrote for the Gatestone Institute, where he is a contributor.</p><p style="padding:0; margin:0 0 10px 0;">"The truth sometimes hurts," Abu Toameh wrote in the blog post. "That is why the Palestinian Authority has been working hard to prevent the outside world from hearing about many occurrences that reflect negatively on its leaders or people."</p><p style="padding:0; margin:0 0 10px 0;">Hate mail and death threats poured into Abu Toameh's inbox. While the veteran reporter has received hate mail before, he said the response to the last two posts was overwhelming.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.jpost.com/National-News/Facebook-temporarily-bans-Post-reporter" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3836"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.israelnationalnews.com/Articles/Article.aspx/12438">Freedom House: Libelling Israel for Defending Itself</a></h1>
<p style="margin:0;">by <b>Lee Kaplan</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">November 15, 2012</span> &nbsp;�&nbsp; <i>Israel National News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Freedom House, once a reliable guardian of protecting freedom and human rights, continues to slander Israel based on false Palestinian propaganda, which it presents as facts in order to declare Israel "less free" and a violator of human rights.</p><p style="padding:0; margin:0 0 10px 0;">Freedom House's current research director on Israel, Arch Puddington, was, it seems, less than pleased with a recent Gatestone Institute article slamming the substandard, reckless, and apparently malicious methods to which Freedom House resorts to suppress "inconvenient" information, for example, reports that a member of its Board of Trustees might regard as "politically incorrect".</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.israelnationalnews.com/Articles/Article.aspx/12438" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3821"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nationalreview.com/content/germany-and-jews">Germany and Jews</a></h1>
<p style="margin:0;">by <b>Jack Fowler</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">September 12, 2012</span> &nbsp;�&nbsp; <i>National Review Online</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">If you want to read a troubling book, troubling because it reveals the extent to which Germany and Germans are obsessed with Jews � how a relentless in-denial masquerading anti-Semitism is part of Deutschland's cultural psyche � I heartily recommend<i> I Sleep in Hitler's Room: An American Jew Visits Germany (The Uncensored Version)</i> by Tuvia Tenenbom<i>.</i></p><p style="padding:0; margin:0 0 10px 0;">I met Tuvia this spring in New York City at a wonderful lunch put on by the Gatestone Institute. Jolly, roly-poly, mischievous, a real character, Tuvia is a popular columnist for <i>Die Zeit</i>, for which he pens regular commentary about the land of the cowboys and Indians. And Jewish bankers. This book was to be and is a travel log, commissioned in 2009 by Rowohlt, the big German publishing house, which had prepped a major publicity campaign and targeted the book (its original title, <i>Ich bin Deutschland: Eine Entdeckungsreise</i>, refers to a "voyage of discovery") as a bestseller for early 2011.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.nationalreview.com/content/germany-and-jews" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3822"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nationalreview.com/content/and-then-they-came-meter-maids">And Then They Came for the Meter Maids...</a></h1>
<p style="margin:0;">by <b>Jay Nordlinger</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">September 11, 2012</span> &nbsp;�&nbsp; <i>National Review Online</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">If you're a reader of Soeren Kern, you won't necessarily be happy, but you won't be uninformed either. Kern is associated with a couple of outfits: the Gatestone Institute in New York and the Grupo de Estudios Estrat�gicos in Madrid. His latest piece is here. He says,</p><blockquote><p style="padding:0; margin:0 0 10px 0;">Muslim immigrants in Palma de Mallorca, the capital of the Balearic Islands in Spain, have succeeded in forcing the expulsion of all female parking meter enforcement officers from a city neighborhood that is home to a growing Muslim population.</p><p style="padding:0; margin:0 0 10px 0;">The move reflects the increasing assertiveness of Spain's Muslim community, which in recent years has sought to impose its will over Spanish society on a variety of issues . . .</p></blockquote><p style="padding:0; margin:0 0 10px 0;">In his piece, Kern gives example after example of how the Muslim community has "sought to impose its will." Some of the examples are mild. Others are much less so.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.nationalreview.com/content/and-then-they-came-meter-maids" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3837"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.israelnationalnews.com/News/News.aspx/156339">Power Ranger Samurai Sparks Outrage in Saudi Arabia</a></h1>
<p style="margin:0;">by <b>Rachel Hirshfeld</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">May 30, 2012</span> &nbsp;�&nbsp; <i>Israel National News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Saudi Arabians have expressed outrage over a McDonald's toy which, they say, mocks the Prophet Muhammad, The Gatestone Institute reported Monday.</p><p style="padding:0; margin:0 0 10px 0;">According to a report that appeared on the Arabic news website, Kermalkom.com, on Sunday, the McDonald's fast food restaurant "abused the Prophet Muhammad by placing his name at the base of a toy that is being distributed as part of the Happy Meal, a toy which steps on the name 'Muhammad.'"</p><p style="padding:0; margin:0 0 10px 0;">The blue superhero, apparently a Power Ranger Samurai, stands on one leg, and, when the lever is pressed, pounds on the base with the other leg.</p><p style="padding:0; margin:0 0 10px 0;">According to the Saudis, the designs that appear all around the base, where the figurine stomps its foot, is actually the name "Muhammad" written several times in circles.</p><p style="padding:0; margin:0 0 10px 0;">The toy had been distributed a few days before Saudi children and their parents became aware of the situation.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.israelnationalnews.com/News/News.aspx/156339" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3838"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.israelnationalnews.com/News/News.aspx/154687">'Silent Terrorists' Hijacking 'Arab Spring'</a></h1>
<p style="margin:0;">by <b>Tzvi Ben Gedalyahu</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">April 11, 2012</span> &nbsp;�&nbsp; <i>Israel National News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The Muslim Brotherhood and similar "silent terrorists" have sabotaged the Arab Spring movement, according to the European-based Gatestone Institute, which described its staff as "human rights activists, moderate Muslims and expert investigative reporters.</p><p style="padding:0; margin:0 0 10px 0;">The Gatestone report said that the "war on terrorism" has overlooked "silent terrorists who execute their agenda through politics rather than bombs."</p><p style="padding:0; margin:0 0 10px 0;">It asked rhetorically, "Has the Muslim Brotherhood outwitted all of us? It has been quietly putting into place the same expansionist agenda as the militant terrorists � to establish a fundamentalist Islamic realm, except with plans to accomplish this by means of politics rather than explosives and machine guns."</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.israelnationalnews.com/News/News.aspx/154687" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3818"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nationalreview.com/content/babes-left-and-right-c">Babes left and right, &amp;c.</a></h1>
<p style="margin:0;">by <b>Jay Nordlinger</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">March 19, 2012</span> &nbsp;�&nbsp; <i>National Review Online</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;"><i>The New Yorker</i> has gotten pretty good mileage out of something I wrote in August 2007. It was in this here breezy lil' web column. Some of us National Review types were fresh off a cruise to Alaska. (Through Alaska, I should say.) And, amid my jottings, I wrote,</p><blockquote><p style="padding:0; margin:0 0 10px 0;">In Juneau, the governor invited us to the mansion for a reception. She is Sarah Palin, a former beauty-pageant contestant, and a real honey, too. Am I allowed to say that? Probably not, but too bad. She is a honey in multiple ways. It was a pleasure to be with her, and her political career will probably take her beyond Alaska. Dick Morris is only one who thinks so.</p></blockquote>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.nationalreview.com/content/babes-left-and-right-c" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3819"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nationalreview.com/content/i-have-been-sent-obfuscation">'I Have Been Sent with Obfuscation'</a></h1>
<p style="margin:0;">by <b>Andrew C. McCarthy</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">March 1, 2012</span> &nbsp;�&nbsp; <i>National Review Online</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">The quote is from Mohammed, Islam's founding prophet, in a canonical hadith. My friend Raymond Ibrahim alludes to it, and so much more, in "Tawriya: Islamic Doctrine of 'Creative Lying'," an essay published at both FrontPage Magazine and the Stonegate Institute (and at Ray's website). It's interesting stuff, and slightly different from the more familiar concept of <i>taqiyya</i>, which is lying made permissible by the circumstances. <i>Tawriya</i> is, instead, statements that are literally true but intended to mislead. It goes to one of my bugaboos: Islamists who feign condemnations of "terrorism" � hint: If their subjective definition of <i>terrorism</i> (the unjust killing of Muslims) is different from your common definition, it is unsurprising that you can get them to condemn "terrorism" with all apparent earnestness but find them squirming when you specify names like "Hamas" and "bin Laden."</p><p style="padding:0; margin:0 0 10px 0;">As with everything Ray writes, it's worth reading.</p></div></div>


</div>

<a name="toc_item_3839"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.israelnationalnews.com/News/News.aspx/159536">Gaza's 'Humanitarian Disaster': 600 Millionaires</a></h1>
<p style="margin:0;">by <b>Tzvi Ben Gedalyahu</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">February 9, 2012</span> &nbsp;�&nbsp; <i>Israel National News</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">There are 600 millionaires living in Gaza, which mainstream media for years have reported is an "humanitarian disaster" blamed on Israel for what was a partial blockade of materials that could possibly be used to build weapons manufacturing plants and rockets aimed at Israeli civilians.</p><p style="padding:0; margin:0 0 10px 0;">The blockade has been all but lifted, except for the maritime ban that a United Nations report has said is legal. It reached its conclusion after investigating the ill-fated May 2010 flotilla, led by Turkish IHH terrorists who tried tried to kill Israeli commandos on the high seas when the IDF stopped the boats from heading to the Hamas-controlled area.</p><p style="padding:0; margin:0 0 10px 0;">Even before the land blockade, which has been lifted except for materials used directly for terror, smuggling has been a staple of the Gaza economy for decades,</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.israelnationalnews.com/News/News.aspx/159536" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3816"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nationalreview.com/content/losing-malmo">Losing Malmo</a><br>
<span style="font-size:85%">And Brussels, and Rome, and Amsterdam...</span></h1>
<p style="margin:0;">by <b>Andrew C. McCarthy</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">August 27, 2011</span> &nbsp;�&nbsp; <i>National Review Online</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Do you remember the jihadist terror campaign that ravaged Malmo, Sweden's third largest city? Do you recall the bombings, the suicide-hijackings, and the random assassinations that finally coerced the city to surrender to Islamization?</p><p style="padding:0; margin:0 0 10px 0;">No? Funny, I don't remember them either. Yet there is no question that Malmo has surrendered. Large enclaves of the city, like similar enclaves throughout Western Europe, have earned the dread label "no-go zone." They are unsafe for non-Muslims, particularly women who do not conform to Islamist conventions of dress and social interaction. They are especially perilous for police, firefighters, and emergency-medical technicians.</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.nationalreview.com/content/losing-malmo" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>

<a name="toc_item_3817"></a>
<div class="article article_hp" style="padding:10px 0px; margin-bottom:5px; border-bottom:1px solid #F2F2F2;">
<h1 style="margin-bottom:0;"><a href="http://www.nationalreview.com/content/jihad-101">Jihad 101</a></h1>
<p style="margin:0;">by <b>Clifford May</b> &nbsp;�&nbsp; <span style="white-space:nowrap;">January 6, 2011</span> &nbsp;�&nbsp; <i>National Review Online</i></p>


<div style="margin:8px 0;"></div>

<div class="hp_excerpt"><div class=""><p style="padding:0; margin:0 0 10px 0;">Last month, Americans celebrated the holidays without a terrorist attack on American soil. That should be a source of relief but not complacency. <u>Egypt</u>, Iraq, Pakistan, Nigeria, and the Philippines were not so lucky.</p><p style="padding:0; margin:0 0 10px 0;">The hard fact is a global conflict is underway. You, as an incoming member of the 112th Congress, need to understand that. You need to know who is waging this war, what motivates them, and what their goals are. Without such knowledge, you will not be able to make informed � much less wise � legislative and policy decisions. So here's a very brief briefing:</p>

<p style="text-align:right; padding:0; margin:4px 0 10px 0;"><b><a href="http://www.nationalreview.com/content/jihad-101" class="continue" target="_blank">Continue Reading Article<span style="text-decoration:none;"><img src="https://www.gatestoneinstitute.org/images/greyarrow.png" width="8" height="16" hspace="4" border="0" style="vertical-align:text-middle;"></span></a></b></p>

</div></div>


</div>
HTML;
$item = array();
$html = str_get_html($str);
foreach($html->find('div.article') as $articl) {
    
    if(is_object($articl->find('p b', 0)) ){
        $post_author = trim($articl->find('p b', 0)->plaintext);
        }
       
        if(is_object($articl->find('div.hp_excerpt', 0))){
        
            $c = str_replace('Continue Reading Article','',trim($articl->find('div.hp_excerpt', 0)->plaintext));
}
$my_post = array(
    'post_title'   => trim(@$articl->find('h1', 0)->plaintext),
    'post_type' => 'media-citations',
    'post_content' => $c,
    'post_status'  => 'publish',
    'post_date'  => date("Y-m-d H:i:s", strtotime($articl->find('p span', 0)->plaintext)),
    'post_author'  => get_current_user_id(),
    
    'meta_input'   => array(
        'author' => trim($post_author ),
        'Url' => trim($articl->find('a', 0)->href),
        'siteName' => trim($articl->find('p i', 0)->plaintext),
    )
);

wp_insert_post( $my_post );

        // get title
      //  $item['post_title'] = trim($article->find('h1', 0)->plaintext);
        // get details
       // $item['post_url'] = trim($article->find('a', 0)->href);
        //$item['post_author'] = trim($article->find('p b', 0)->plaintext);
        
        
        //$item['post_published_on'] = trim($article->find('p span', 0)->plaintext);
        //$item['post_publication'] = trim($article->find('p i', 0)->plaintext);
        
        // get intro
        //$item['post_content'] = str_replace('Continue Reading Article','',trim($article->find('div.hp_excerpt', 0)->plaintext));

       // $ret[] = $item;
  //  foreach($ul->find('li') as $li)
//        echo $li->innertext . '<br>';
}$html->clear();unset($html);
}

register_activation_hook( __FILE__, 'activate_myplugin' );
// -----------------------------------------------------------------------------
// parsing checkbox
?>