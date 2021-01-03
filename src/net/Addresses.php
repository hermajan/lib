<?php
namespace Lib\Net;

/**
 * Working with internet related things.
 */
class Addresses {
	/**
	 * Returns client IP address.
	 * @return string IP address
	 */
	public static function clientIP(): string {
		return $_SERVER['REMOTE_ADDR'];
	}
	
	/**
	 * Returns URL of page, where function is called.
	 * @return string URL of page
	 */
	public static function pageURL(): string {
		$URL = "http";
		if(!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
			$URL .= "s";
		}
		$URL .= "://".$_SERVER["SERVER_NAME"];
		if($_SERVER["SERVER_PORT"] != "80") {
			$URL .= ":".$_SERVER["SERVER_PORT"];
		}
		$URL .= $_SERVER["REQUEST_URI"];
		return $URL;
	}
}
