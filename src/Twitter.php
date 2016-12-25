<?php
namespace Lib;

/**
 * Getting tweets from the Twitter.
 * @see https://dev.twitter.com/docs/embedded-tweets
 */
class Twitter {
    private $lang="",$align="";
    
    public function getLang() { return $this->lang; }
    public function getAlign() { return $this->align; }
    public function setLang($lang) { $this->lang=$lang; }
    public function setAlign($align) { $this->align=$align; }

    public function __construct($lang="",$align="") {
        $this->lang=$lang;
        $this->align=$align;
        echo "<script src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>";
    }

    public function tweetByID($id) {
        $response=file_get_contents('https://api.twitter.com/1/statuses/oembed.json?id='.$id.'&omit_script=true'
                .'&align='.$this->align.
                '&lang='.$this->lang);
        if($response===FALSE) { 
            return "Error! Can't get that tweet!";
        }
        $json=json_decode($response);

        return $json->html;
    }
    
    public function tweetByURL($url) {
        $response=file_get_contents('https://api.twitter.com/1/statuses/oembed.json?url='.$url.'&omit_script=true'
                .'&align='.$this->align.
                '&lang='.$this->lang);
        if($response===FALSE) { 
            return "Error! Can't get that tweet!";
        }
        $json=json_decode($response);

        return $json->html;
    }
    
    public function lastTweet($user) {
        $response=file_get_contents('https://api.twitter.com/1/statuses/user_timeline.json?screen_name='.$user.'&count=1');
        if($response===FALSE) { 
            return "Error! Can't get that tweet!";
        }
        $json=json_decode($response);

        return $json->html;
    }
}
