<?php

namespace Gatestone;

class ShortcodeForm
{

    public function renderForm()
    {
        $output = "";
        $output = $output . $this->getNextItemLink();
        $output = $output . <<<output
<form method = "post">
Parse for Rows: <input type = "text" name = "fetch-url-for-rows" /><br />
<br />
Single post parse: <input type = "text" name = "fetch-single-remote-post" /><br />
<br />
<input type = "submit" />
</form>
output;
        $response = $this->processForm();
        $output = $output . $response;
        return $output;
    }

    public function getNextItemLink(){
        $output = "<a href = '/parser?nextCurl=23'>NEXT CURL</a>";
        return $output;
    }

    public function processForm()
    {
        $output = "";
        if(isset($_GET['nextCurl'])){
            die("NEXTCURL!");
        }
        //die($output);
        if (isset($_POST['fetch-single-remote-post'])) {
            $ID = $_POST['fetch-single-remote-post'];
            $SinglePostProcessor = new SinglePostProcessor;
            $SinglePostProcessor->cUrlFromID($ID);
            return $output;
        }

        if (isset($_POST['fetch-url-for-rows'])) {
            $CurlFetcher = new CurlFetcher;
            $response = $CurlFetcher->fetchRemoteCurl($_POST['fetch-url-for-rows']);

            $CurlParser = new CurlParser;


            $arrayOfLinks = $CurlParser->returnArrayOfLinks($response);
            foreach ($arrayOfLinks as $linkRow) {
                $remotePostID = $CurlParser->retunRemotePostID($linkRow);
                $remoteSlug = $CurlParser->retunRemoteSlug($linkRow);
                $remoteTitle = $CurlParser->retunRemoteTitle($linkRow);
                $remoteAuthorString = $CurlParser->retunRemoteAuthor($linkRow);
                $RemoteAuthor = new RemoteAuthor();
                $authorID = $RemoteAuthor->returnAuthorID($remoteAuthorString);

                $remoteDate = $CurlParser->retunRemoteDate($linkRow);
                $output = $output . "remotePostID $remotePostID remoteSlug $remoteSlug remoteTitle $remoteTitle remoteAuthor $remoteAuthorString remoteDate $remoteDate <br />";

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


}