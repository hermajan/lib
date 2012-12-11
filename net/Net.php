<?php
/**
 * Working with internet related things.
 * 
 * @author DJohnny
 * @version 26.10.2012
 */
namespace lib\Net;

class Net {
  /**
   * Returns client IP address.
   * 
   * @return IP address
   */
  function getClientIP() {
    return $_SERVER['REMOTE_ADDR'];
  }
  
}
?>
