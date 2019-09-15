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
            //die('runner');
            $output = $output . "<script src=\"/wp-content/plugins/gatestone/src/Gatestone/runner.js\"></script>";
        }
        $output = $output . <<<output

<form method = "post">
Nigeria: https://www.gatestoneinstitute.org/topics/18/nigeria<br />
AR: https://ar.gatestoneinstitute.org/topics/30/<br />
<br />
<a href = "/parser/?reset=TRUE">RESET</a><br />

Parse for Archive Rows: <input type = "text" name = "fetch-url-for-rows" /><br />
<br />
Parse for Author Rows: <input type = "text" name = "fetch-url-for-author-rows" /><br />
<br />
Single post parse: <input type = "text" name = "fetch-single-remote-post" /><br />
<br />
<input type = "submit" />
</form>
<br />
output;
        $response = $this->processForm();
        $output = $output . $response;
        $output = $output . $this->getNextItemLink();
        //$ID = username_exists( "lawrenceafranklin" );
        //var_dump($ID);die();

        //die('xx');

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
                echo "<h2>Next!:<br/><a id = 'next-item' href = '$Url/parser/?runner=TRUE&nextPost=$ID'>NEXT ITEM</a></h2>";

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

        if(isset($_GET['reset'])){
            $args = array(
                'post_type' => 'post',
                'nopaging' => true
            );

            $post_query = new \WP_Query($args);
            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                    $post_query->the_post();
                    $ID = get_the_ID();
                    wp_delete_post( $ID, TRUE );
                    //echo ($ID . "<br />");
                }
            }
            wp_reset_postdata();
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
        if (isset($_POST['fetch-url-for-author-rows']) && (!( $_POST['fetch-url-for-author-rows']== "")) ) {
            //die('rows');
            $CurlFetcher = new CurlFetcher;
            $response = $CurlFetcher->fetchRemoteCurl($_POST['fetch-url-for-author-rows']);
            $output = $this->parseForAuthorRows($response);
            return $output;
        }



    }

    public function parseForAuthorRows($response){

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


}