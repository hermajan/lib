<?php
/**
 * Base class of Lib.
 * 
 * @author DJohnny
 * @version 19.12.2012
 */
namespace lib;

class Lib {
/**
 * Lib constructor.
 */
  public function __construct() {
    $json=json_decode(file_get_contents(__DIR__."/_config.json"),false);
    
    @define("LIB_DIR",$json->lib_dir);
    
    require_once __DIR__."/Loading.php";
  }
}
?>
