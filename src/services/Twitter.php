<?php
namespace Lib\Services;

/**
 * Getting tweets from the Twitter.
 * @see https://dev.twitter.com/docs/embedded-tweets
 */
class Twitter {
	/** @var string */
	private $lang = "", $align = "";
	
	public function __construct(string $lang = "", string $align = "") {
		$this->lang = $lang;
		$this->align = $align;
		echo "<script src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>";
	}
	
	public function getLang(): string {
		return $this->lang;
	}
	
	public function setLang(string $lang): Twitter {
		$this->lang = $lang;
		return $this;
	}
	
	public function getAlign(): string {
		return $this->align;
	}
	
	public function setAlign(string $align): Twitter {
		$this->align = $align;
		return $this;
	}
	
	/**
	 * Returns HTML element of tweet specified by ID.
	 * @param string $id
	 * @return string
	 */
	public function tweetByID(string $id): string {
		$response = file_get_contents('https://api.twitter.com/1/statuses/oembed.json?id='.$id.'&omit_script=true'.'&align='.$this->align.'&lang='.$this->lang);
		if($response === false) {
			return "Error! Can't get that tweet!";
		}
		$json = json_decode($response);
		
		return $json->html;
	}
	
	/**
	 * Returns HTML element of tweet specified by URL.
	 * @param string $url
	 * @return string
	 */
	public function tweetByURL(string $url): string {
		$response = file_get_contents('https://api.twitter.com/1/statuses/oembed.json?url='.$url.'&omit_script=true'.'&align='.$this->align.'&lang='.$this->lang);
		if($response === false) {
			return "Error! Can't get that tweet!";
		}
		$json = json_decode($response);
		
		return $json->html;
	}
	
	/**
	 * Returns HTML element of last tweet from specified user.
	 * @param string $user
	 * @return string
	 */
	public function lastTweet(string $user): string {
		$response = file_get_contents('https://api.twitter.com/1/statuses/user_timeline.json?screen_name='.$user.'&count=1');
		if($response === false) {
			return "Error! Can't get that tweet!";
		}
		$json = json_decode($response);
		
		return $json->html;
	}
}
