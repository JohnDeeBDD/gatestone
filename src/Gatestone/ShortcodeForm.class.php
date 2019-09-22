<?php

namespace Gatestone;

class ShortcodeForm
{

    public function renderForm()
    {
        $output = "";
        $CurlCFetcher = new CurlFetcher();
        $CurlCFetcher->getGateStoneUrlFromCurrentSite();

        if(isset($_GET['runner'])){

            $lastPostID = $_GET['nextPost'];
            $output = $output . "<script src='/wp-content/plugins/gatestone/src/Gatestone/runner.js'></script>";
        }

        $output = $output . <<<output

<form method = "post">
<br />
<a href = "/parser/?reset=TRUE">RESET</a><br />
Parse for Archive Rows: <input type = "text" name = "fetch-url-for-rows" /><br />
<br />
Single post parse: <input type = "text" name = "fetch-single-remote-post" /><br />
<br />
<input type = "submit" />
</form>
<br />
output;
            $output = $output . $this->parserLinksHTML();
        $response = $this->processForm();
        $output = $output . $response;
        $output = $output . $this->getNextItemLink();
        return $output;
    }

    public function parserLinksHTML(){
        $output = <<<OUTPUT
https://.gatestoneinstitute.org/archives/<br />
    <a href = "http://ar.yeezyideationcenter.com/parser/">ar</a><br />
    <a href = "http://cs.yeezyideationcenter.com/parser/">cs</a><br />
    <a href = "http://da.yeezyideationcenter.com/parser/">da</a><br />
    <a href = "http://de.yeezyideationcenter.com/parser/">de</a><br />
    <a href = "http://el.yeezyideationcenter.com/parser/">el</a><br />
    <a href = "http://yeezyideationcenter.com/parser/"></a><br />
    <a href = "http://es.yeezyideationcenter.com/parser/">es</a><br />
    <a href = "http://fr.yeezyideationcenter.com/parser/">fr</a><br />
    <a href = "http://he.yeezyideationcenter.com/parser/">he</a><br />
    <a href = "http://it.yeezyideationcenter.com/parser/">it</a><br />
    <a href = "http://nl.yeezyideationcenter.com/parser/">nl</a><br />
    <a href = "http://pl.yeezyideationcenter.com/parser/">pl</a><br />
    <a href = "http://pt.yeezyideationcenter.com/"parser/>pt</a><br />
    <a href = "http://ru.yeezyideationcenter.com/parser/">ru</a><br />
    <a href = "http://sk.yeezyideationcenter.com/parser/">sk</a><br />
    <a href = "http://sv.yeezyideationcenter.com/"parser/>sv</a><br />
OUTPUT;
        return $output;
    }

    public function getNextItemLink(){
        $issue = new \WP_Query( array(
            'posts_per_page' => 1, 'post_type'=> 'post', 'author' => 1
        ) );

        if ( $issue->have_posts() ) {
            while ( $issue->have_posts() ) : $issue->the_post();
                $ID = get_the_ID();

                $title = get_the_title();
                $Url = site_url();
                echo "<h2><a id = 'next-item' href = '$Url/parser/?runner=TRUE&nextPost=$ID'>NEXT ITEM</a></h2>";
                if(isset($_GET['nextPOST'])){
                    if($_GET[['nextPost']] == $ID){die("PROBLEM WITH $ID");}
                }
            endwhile;
        }
    }

    public function processForm(){
        //die('processForm');
        $output = "";
        if(isset($_GET['nextPost'])){
            $_POST['fetch-single-remote-post'] = $_GET['nextPost'];
        }

        if(isset($_GET['nigeria'])){
            $response = file_get_contents("/var/www/html/wp-content/plugins/gatestone/tests/unit/NigeriaResponse.html");
            $this->parseForRows($response);
        }

        if(isset($_GET['reset'])) {
            $this->resetPosts();
        }

        if (isset($_POST['fetch-single-remote-post']) && (!( $_POST['fetch-single-remote-post']== "")) ) {
            $ID = $_POST['fetch-single-remote-post'];
            $SinglePostProcessor = new SinglePostProcessor;
            $SinglePostProcessor->cUrlFromID($ID);
            return $output;
        }
        //die("44");
        if (isset($_POST['fetch-url-for-rows']) && (!( $_POST['fetch-url-for-rows']== "")) ) {
            //die('rows');
            $CurlFetcher = new CurlFetcher;
            $response = $CurlFetcher->fetchRemoteCurl($_POST['fetch-url-for-rows']);
            $output = $this->parseForRows($response);
            return $output;
        }

    }

    public function parseForRows($response){
        $CurlParser = new CurlParser;
        $arrayOfLinks = $CurlParser->returnArrayOfLinks($response);
        //var_dump($arrayOfLinks);die('dead');

        $output = "";
        foreach ($arrayOfLinks as $linkRow) {
            $remotePostID = $CurlParser->retunRemotePostID($linkRow);
            $remoteSlug = $CurlParser->retunRemoteSlug($linkRow);
            $remoteTitle = $CurlParser->retunRemoteTitle($linkRow);
            //$remoteAuthorString = $CurlParser->retunRemoteAuthor($linkRow);
            //$RemoteAuthor = new RemoteAuthor();
            //$authorID = $RemoteAuthor->returnAuthorID($remoteAuthorString);
            $authorID = 1;

            $remoteDate = $CurlParser->retunRemoteDate($linkRow);
            //$output = $output . "remotePostID $remotePostID remoteSlug $remoteSlug remoteTitle $remoteTitle remoteAuthor $remoteAuthorString remoteDate $remoteDate <br />";

            if (get_post_status($remotePostID)) {
                $post = array(
                    'ID' => $remotePostID,
                    //'comment_status'    =>  'open',
                    'post_content' => 'NO CONTENT YET',
                    'post_author' => $authorID,
                    'post_name' => $remoteSlug,
                    'post_status' => 'publish',
                    'post_title' => $remoteTitle,
                    'post_type' => 'post',
                );
                $post_id = wp_insert_post($post);
            } else {
                //$x = "import_id = $remotePostID "; die($x);
                $post = array(
                    'import_id' => $remotePostID,
                    //'comment_status'  =>  'open',
                    'post_author' => $authorID,
                    'post_content' => 'NO CONTENT YET',
                    'post_name' => $remoteSlug,
                    'post_status' => 'publish',
                    'post_title' => $remoteTitle,
                    'post_type' => 'post',
                );
                $post_id = wp_insert_post($post);
            }

        }
        return $output;
    }

    public function resetPosts(){
       // die('abc');
        $args = array(
            'post_type' => 'post',
            //'nopaging' => true,
            'posts_per_page'         => '500',
        );

        $post_query = new \WP_Query($args);
        if($post_query->have_posts() ) {
            while($post_query->have_posts() ) {
                $post_query->the_post();
                $ID = get_the_ID();
                //wp_delete_post( $ID, TRUE );
                //echo ($ID . "<br />");
                $post = array(
                    'ID' => $ID,
                    //'comment_status'    =>  'open',
                    'post_content' => 'NO CONTENT YET',
                    'post_author' => 1,
                  );
                //$post_id = wp_update_post($post);
               wp_delete_post( $ID, TRUE);
            }
        }
        wp_reset_postdata();
    }


}