<?php

namespace Gatestone;

class RemoteAuthor{

    public function hashUnNames($unName){
        $unName = md5($unName);
        $unName = substr($unName, 0, 5);
        return $unName;
    }

    /**
     * @param $niceName
     * @return mixed
     */
    public function returnAuthorID($niceName){
        $siteUrl = site_url();

        if(
            ($siteUrl === 'http://ar.yeezyideationcenter.com' ) ||
            ($siteUrl === 'http://el.yeezyideationcenter.com' ) ||
            ($siteUrl === 'http://ru.yeezyideationcenter.com' )
        ){
            $niceName = $this->hashUnNames($niceName);
        }

        $authorName = $this->cleanAuthorName($niceName);
        //
        $ID = username_exists( $authorName );
        //var_dump($ID);die();
        if ($ID){
           return $ID;
        }
        $random_password = 'P@ssw0rd!';
        $user_email = $authorName . '@parler.com';
        //$x = ( $authorName . " ".  $random_password . " ".$user_email ); die($x);

        $ID = wp_create_user( $authorName, $random_password, $user_email );


        wp_update_user( array('ID' => $ID,'display_name' => $niceName) );
        wp_update_user( array('ID' => $ID,'last_name' => $niceName) );
        update_user_meta( $ID, 'nickname', $niceName );

        $u = new \WP_User( $ID );
        $u->remove_role( 'subscriber' );
        $u->add_role( 'author' );
        return $ID;
    }

    /**
     * @param $authorName
     * @return bool|string
     */
    public function parseCharSetName($authorName){
        $authorName = md5($authorName);
        $authorName = substr($authorName, 0, 5);
        return $authorName;
    }

    /**
     * @param $authorName
     * @return mixed|string
     */
    public function cleanAuthorName($authorName){
        $authorName = str_replace(array( ' ', '.', ' ', '-' ), '', $authorName);
        //$authorName = str_replace('-', '', $authorName);
        $authorName = $this->hyphenize($authorName);
        $authorName = strtolower($authorName);
        return $authorName;
    }

    /**
     * @param $string
     * @return string
     */
    public function hyphenize($string): string
    {
        $dict = array(
            'I\'m'      => 'I am',
            'thier' => 'their',
            // Add your own replacements here
        );
        return strtolower(
            preg_replace(
                array( '#[\\s-]+#', '#[^A-Za-z0-9\. -]+#' ),
                array( '-', '' ),
                // the full cleanString() can be downloaded from http://www.unexpectedit.com/php/php-clean-string-of-utf8-chars-convert-to-similar-ascii-char
                $this->cleanString(
                    str_replace( // preg_replace can be used to support more complicated replacements
                        array_keys($dict),
                        array_values($dict),
                        urldecode($string)
                    )
                )
            )
        );
    }

    /**
     * @param $text
     * @return string|string[]|null
     */
    public function cleanString($text) {
        $utf8 = array(
            '/[áàâãªä]/u'   =>   'a',
            '/[ÁÀÂÃÄ]/u'    =>   'A',
            '/[ÍÌÎÏ]/u'     =>   'I',
            '/[íìîï]/u'     =>   'i',
            '/[éèêë]/u'     =>   'e',
            '/[ÉÈÊË]/u'     =>   'E',
            '/[óòôõºö]/u'   =>   'o',
            '/[ÓÒÔÕÖ]/u'    =>   'O',
            '/[úùûü]/u'     =>   'u',
            '/[ÚÙÛÜ]/u'     =>   'U',
            '/ç/'           =>   'c',
            '/Ç/'           =>   'C',
            '/ñ/'           =>   'n',
            '/Ñ/'           =>   'N',
            '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
            '/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote
            '/[“”«»„]/u'    =>   ' ', // Double quote
            '/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
        );
        return preg_replace(array_keys($utf8), array_values($utf8), $text);
    }

}