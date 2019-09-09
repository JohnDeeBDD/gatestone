<?php

namespace Gatestone;

class RemoteAuthor{

    public function returnAuthorID($authorName){
        $authorName = str_replace(' ', '', $authorName);
        $authorName = strtolower($authorName);

        $ID = username_exists( $authorName );
        if (!($ID == FALSE)){
            return $ID;
        }
        $random_password = "P@ssw0rd!";
        $user_email = $authorName . "@parler.com";

        $ID = wp_create_user( $authorName, $random_password, $user_email );
        return $ID;
    }
}