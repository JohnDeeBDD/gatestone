<?php
namespace Gatestone;
//examples curl:
// https://www.gatestoneinstitute.org/author/Bernard+Lewis

class AuthorCurlParser{
    public function parseRow($row,$section){
        preg_match('|<tr><td(?:[^>]+)><a href="http(?:s?):\\/\\/([^\\/]*)\\/([^"]*)\\/([^"]*)"(?:.*)>(.*)<\\/a><\\/td><td(?:[^>]*)>(.*)<\\/td><td>(.*)<\\/td><\\/tr>|',$row,$matches);
        $sections=array('domain'=>1,'postID'=>2,'slug'=>3,'title'=>4,'author'=>5,'date'=>6);

        if ($matches){
            return $matches[$sections[$section]];
        }
        return false;
    }

    public function retunRemotePostID($row){
        return $this->parseRow($row,'postID');
    }

    public function retunRemoteSlug($row){
        return $this->parseRow($row,'slug');
    }

    public function retunRemoteTitle($row){
        return $this->parseRow($row,'title');
    }

    public function retunRemoteAuthor($row){
        return $this->parseRow($row,'author');
    }

    public function retunRemoteDate($row){
        return $this->parseRow($row,'date');
    }

    public function returnArrayOfLinks($response){
        $t1=explode('datatable display compact block',$response);
        if (count($t1)!=2){
            return false;
        }
        $t2=explode('</table>',$t1[1]);
        if (count($t2)<2){
            return false;
        }
        preg_match_all('|<tr>.*<\\/tr>|',$t2[0],$trs);
        if ($trs){
            return $trs[0];
        }
        return false;
    }

}