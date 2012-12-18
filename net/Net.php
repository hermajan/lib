<?php
/**
 * Working with internet related things.
 * 
 * @author DJohnny
 * @version 18.12.2012
 */
namespace lib\Net;

class Net {
  /**
   * Returns client IP address.
   * 
   * @return string IP address
   */
  public function clientIP() {
    return $_SERVER['REMOTE_ADDR'];
  }
  
  /**
 * Returns URL of page, where function is called.
 * 
 * @return string URL of page
 */
  public function pageURL() {
	$URL="http"; 
    if(!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"]=="on") { $URL.="s"; }
	$URL.="://".$_SERVER["SERVER_NAME"];
	if($_SERVER["SERVER_PORT"]!="80") { $URL.=":".$_SERVER["SERVER_PORT"]; } 
	$URL.=$_SERVER["REQUEST_URI"];
	return $URL;
  }
}
?>
