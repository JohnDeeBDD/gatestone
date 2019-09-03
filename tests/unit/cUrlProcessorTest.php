<?php

class cUrlProcessorTest extends \Codeception\TestCase\WPTestCase{

    /**
     * @test
     * it should be instantiatable
     */
    public function it_should_be_instantiatable(){
        $cUrlProcessor = new ExternalContentPortfolio\cUrlProcessor();
    }

    /**
     * @test
     * it should identify WordPress
     */
    public function itShouldIdentifyWordPress(){
        $cUrl['body'] = $this->WpResponseStub;
        $cUrlProcessor = new ExternalContentPortfolio\cUrlProcessor();
        $type =  $cUrlProcessor->lookForSiteTypeInRemoteGetFetch($cUrl);
        $this->assertEquals($type, "WordPress");
    }

    /**
     * @test
     * it should get a string in the middle
     */
    public function getStringInTheMiddle(){
        $cUrlProcessor = new ExternalContentPortfolio\cUrlProcessor();
        $string = "ABCdefGHI";
        $start = "ABC";
        $end = "GHI";
        $result = $cUrlProcessor->getStringBetween2Strings($string, $start, $end);
        $this->assertEquals($result, "def");
    }

    /**
     * @test
     * it should get the post ID
     */
    public function shouldGetThePostID(){
        $cUrlProcessor = new ExternalContentPortfolio\cUrlProcessor();
        $string = $this->WpResponseStub;
        $result = $cUrlProcessor->getPostID($string);
        $this->assertEquals($result, "14985");
    }

    public $WpResponseStub = <<<reponseStub
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<title>Business Stakeholders: How to Describe a Software FEATURE &#8211; General Chicken</title>
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="General Chicken &raquo; Feed" href="https://generalchicken.net/feed/" />
<link rel="alternate" type="application/rss+xml" title="General Chicken &raquo; Comments Feed" href="https://generalchicken.net/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="General Chicken &raquo; Business Stakeholders: How to Describe a Software FEATURE Comments Feed" href="https://generalchicken.net/the-feature/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/generalchicken.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.2"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='https://generalchicken.net/wp-includes/css/dist/block-library/style.min.css?ver=5.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-style-css'  href='https://generalchicken.net/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=2.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='child-theme-generator-css'  href='https://generalchicken.net/wp-content/plugins/child-theme-generator/public/css/child-theme-generator-public.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='https://generalchicken.net/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='https://generalchicken.net/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=3.7.0' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='https://generalchicken.net/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=3.7.0' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='parent-style-css'  href='https://generalchicken.net/wp-content/themes/responsive-kubrick/style.css?ver=5.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='child-style-css'  href='https://generalchicken.net/wp-content/themes/rk-child/style.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-kubrick-style-css'  href='https://generalchicken.net/wp-content/themes/rk-child/style.css?ver=1.0' type='text/css' media='all' />
<script>if (document.location.protocol != "https:") {document.location = document.URL.replace(/^http:/i, "https:");}</script><script type='text/javascript' src='https://generalchicken.net/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='https://generalchicken.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://generalchicken.net/wp-content/plugins/child-theme-generator/public/js/child-theme-generator-public.js?ver=1.0.0'></script>
<link rel='https://api.w.org/' href='https://generalchicken.net/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://generalchicken.net/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://generalchicken.net/wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='Protected: 30 Second WordCamp!' href='https://generalchicken.net/30-second-wordcamp/' />
<link rel='next' title='What do you think of Gutenberg?' href='https://generalchicken.net/what-do-you-think-of-gutenberg/' />
<meta name="generator" content="WordPress 5.2.2" />
<meta name="generator" content="WooCommerce 3.7.0" />
<link rel="canonical" href="https://generalchicken.net/the-feature/" />
<link rel='shortlink' href='https://generalchicken.net/?p=14985' />
<link rel="alternate" type="application/json+oembed" href="https://generalchicken.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgeneralchicken.net%2Fthe-feature%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://generalchicken.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgeneralchicken.net%2Fthe-feature%2F&#038;format=xml" />
<link rel="pingback" href="https://generalchicken.net/xmlrpc.php">
		<style type="text/css">
			.site-header {
				background: linear-gradient(to bottom,  0%,  100%);
			}
		</style>
			<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<link rel="icon" href="https://generalchicken.net/wp-content/uploads/cropped-redgreenrefacor-1-32x32.png" sizes="32x32" />
<link rel="icon" href="https://generalchicken.net/wp-content/uploads/cropped-redgreenrefacor-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://generalchicken.net/wp-content/uploads/cropped-redgreenrefacor-1-180x180.png" />
<meta name="msapplication-TileImage" content="https://generalchicken.net/wp-content/uploads/cropped-redgreenrefacor-1-270x270.png" />
</head>

<body data-rsssl=1 class="post-template-default single single-post postid-14985 single-format-standard theme-responsive-kubrick woocommerce-no-js">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<header id="masthead" class="site-header" role="banner">

		<div class="site-branding">
								<p class="site-title">
						<a href="https://generalchicken.net/" rel="home">General Chicken</a>
					</p>
											<p class="site-description">Behavior Driven Development in WordPress</p>
								<nav>
			<div class="menu-maino-container"><ul id="primary-menu" class="menu"><li id="menu-item-16169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16169"><a href="https://generalchicken.net/hire-john/">Hire John Dee</a></li>
<li id="menu-item-16170" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16170"><a href="https://generalchicken.net/tuts/">Tutorials</a></li>
<li id="menu-item-16536" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16536"><a href="https://generalchicken.net/tag/plugin/">Plugins</a></li>
</ul></div>		</nav><!-- #site-navigation -->
			<div class="clear"></div>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
<article id="post-14985" class="post-14985 post type-post status-publish format-standard hentry category-help-articles category-software tag-bdd tag-behavior-driven-development tag-biz-facing tag-devops tag-software tag-tdd tag-test-driven-development tag-wordpress">

	
	<header class="entry-header">
		<h1 class="entry-title">Business Stakeholders: How to Describe a Software FEATURE</h1>		<div class="entry-meta">
			<span class="posted-on"><a href="https://generalchicken.net/the-feature/" rel="bookmark"><time class="entry-date published" datetime="2018-12-08T06:58:10-07:00">December 8, 2018</time><time class="updated" datetime="2019-05-01T20:55:36-07:00">May 1, 2019</time></a></span><span class="byline"> by <span class="author vcard"><a class="url fn n" href="https://generalchicken.net/author/johndee/">JohnDee</a></span></span>		</div><!-- .entry-meta -->
			</header><!-- .entry-header -->

	<div class="entry-content">
		<p><strong>What is a feature</strong>?<br />
A <strong><em>feature</em> </strong>is an aspect of software that is useful. Anything you can express, that is possible, and that you can afford, can be a feature. A <em>bug</em> is an aspect of software that isn&#8217;t useful.</p>
<p>Since we&#8217;re talking about development, we&#8217;re discussing software features that don&#8217;t exist yet. These are features that we would like to build, or existing features that we would like to make better. Describe a feature with <strong><em>should</em></strong> statements:</p>
<ul>
<li>It should email all the clients once a month.</li>
<li>The client should have a setting page in the admin area.</li>
<li>The plugin should have a custom post type called GPS coordinates for each subscriber.</li>
<li>The div should show a timeline of Civil War battles in the footer area.</li>
</ul>
<p>The next statement you should create is the <strong><em>reason</em> </strong>for the feature you are requesting. What is the business value of this feature? Describe the reason by using a &#8220;Because&#8221;, or &#8220;So that&#8221;&nbsp; or &#8220;In or that&#8221;</p>
<ul>
<li>So that the clients are routinely updated.</li>
<li>In order that the user can change the settings.</li>
<li>Because we need to store the GPS data.</li>
</ul>
<p>Alternatively, you can use Gherkin syntax&nbsp;for feature development.</p>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<span class="cat-links">Posted in <a href="https://generalchicken.net/category/help-articles/" rel="category tag">Help Articles</a>, <a href="https://generalchicken.net/category/software/" rel="category tag">Software</a></span><span class="tags-links"> | Tagged <a href="https://generalchicken.net/tag/bdd/" rel="tag">BDD</a>, <a href="https://generalchicken.net/tag/behavior-driven-development/" rel="tag">Behavior Driven Development</a>, <a href="https://generalchicken.net/tag/biz-facing/" rel="tag">biz facing</a>, <a href="https://generalchicken.net/tag/devops/" rel="tag">DevOps</a>, <a href="https://generalchicken.net/tag/software/" rel="tag">software</a>, <a href="https://generalchicken.net/tag/tdd/" rel="tag">TDD</a>, <a href="https://generalchicken.net/tag/test-driven-development/" rel="tag">Test Driven Development</a>, <a href="https://generalchicken.net/tag/wordpress/" rel="tag">WordPress</a></span>	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

	<nav class="navigation post-navigation" role="navigation">
		<h2 class="screen-reader-text">Post navigation</h2>
		<div class="nav-links"><div class="nav-previous"><a href="https://generalchicken.net/30-second-wordcamp/" rel="prev">30 Second WordCamp!</a></div><div class="nav-next"><a href="https://generalchicken.net/what-do-you-think-of-gutenberg/" rel="next">What do you think of Gutenberg?</a></div></div>
	</nav>
<div id="comments" class="comments-area">

		<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/the-feature/#respond" style="display:none;">Cancel reply</a></small></h3>			<form action="https://generalchicken.net/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
				<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" required='required' /></p>
<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required='required' /></p>
<p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url" value="" size="30" maxlength="200" /></p>
<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment" /> <input type='hidden' name='comment_post_ID' value='14985' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p>
<!-- Anti-spam plugin v.5.5 wordpress.org/plugins/anti-spam/ -->
		<p class="antispam-group antispam-group-q" style="clear: both;">
			<label>Current ye@r <span class="required">*</span></label>
			<input type="hidden" name="antspm-a" class="antispam-control antispam-control-a" value="2019" />
			<input type="text" name="antspm-q" class="antispam-control antispam-control-q" value="5.5" autocomplete="off" />
		</p>
		<p class="antispam-group antispam-group-e" style="display: none;">
			<label>Leave this field empty</label>
			<input type="text" name="antspm-e-email-url-website" class="antispam-control antispam-control-e" value="" autocomplete="off" />
		</p>
			</form>
			</div><!-- #respond -->
	
</div><!-- #comments -->

		</main><!-- #main -->
	</div><!-- #primary -->


<aside id="secondary" class="widget-area" role="complementary">
	<section id="search-2" class="widget widget_search"><form role="search" method="get" class="search-form" action="https://generalchicken.net/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Search" />
			</form></section>		<section id="recent-posts-2" class="widget widget_recent_entries">		<h2 class="widget-title">Recent Posts</h2>		<ul>
											<li>
					<a href="https://generalchicken.net/better-error-messages/">Better Error Messages</a>
									</li>
											<li>
					<a href="https://generalchicken.net/external-content-portfolio/">External Content Portfolio</a>
									</li>
											<li>
					<a href="https://generalchicken.net/what-do-you-think-of-gutenberg/">What do you think of Gutenberg?</a>
									</li>
											<li>
					<a href="https://generalchicken.net/the-feature/">Business Stakeholders: How to Describe a Software FEATURE</a>
									</li>
											<li>
					<a href="https://generalchicken.net/seo-article/">SEO Article Type &#8220;H&#8221; Test Article</a>
									</li>
					</ul>
		</section></aside><!-- #secondary -->
	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			&copy; 2019 General Chicken	
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
			<script type="text/javascript">
			var wc_product_block_data = JSON.parse( decodeURIComponent( '%7B%22min_columns%22%3A1%2C%22max_columns%22%3A6%2C%22default_columns%22%3A3%2C%22min_rows%22%3A1%2C%22max_rows%22%3A6%2C%22default_rows%22%3A1%2C%22thumbnail_size%22%3A300%2C%22placeholderImgSrc%22%3A%22https%3A%5C%2F%5C%2Fgeneralchicken.net%5C%2Fwp-content%5C%2Fuploads%5C%2Fwoocommerce-placeholder-300x300.png%22%2C%22min_height%22%3A500%2C%22default_height%22%3A500%2C%22isLargeCatalog%22%3Afalse%2C%22limitTags%22%3Afalse%2C%22hasTags%22%3Afalse%2C%22productCategories%22%3A%5B%7B%22term_id%22%3A71%2C%22name%22%3A%22Uncategorized%22%2C%22slug%22%3A%22uncategorized%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A71%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A2%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fgeneralchicken.net%5C%2Fproduct-category%5C%2Funcategorized%5C%2F%22%7D%5D%2C%22homeUrl%22%3A%22https%3A%5C%2F%5C%2Fgeneralchicken.net%5C%2F%22%7D' ) );
		</script>
		<script type='text/javascript' src='https://generalchicken.net/wp-content/plugins/anti-spam/js/anti-spam-5.5.js'></script>
<script type='text/javascript' src='https://generalchicken.net/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/generalchicken.net\/cart\/","is_cart":"","cart_redirect_after_add":"yes"};
/* ]]> */
</script>
<script type='text/javascript' src='https://generalchicken.net/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.7.0'></script>
<script type='text/javascript' src='https://generalchicken.net/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://generalchicken.net/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.7.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_283e0c1879e6553d85c1e249826dc760","fragment_name":"wc_fragments_283e0c1879e6553d85c1e249826dc760","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='https://generalchicken.net/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.7.0'></script>
<script type='text/javascript' src='https://generalchicken.net/wp-includes/js/comment-reply.min.js?ver=5.2.2'></script>
<script type='text/javascript' src='https://generalchicken.net/wp-includes/js/wp-embed.min.js?ver=5.2.2'></script>
</body>
</html>
reponseStub;

}