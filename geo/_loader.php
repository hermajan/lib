<?php 
require_once dirname(__DIR__)."/Lib.php"; new \lib\Lib();

$loading=new \lib\Loading();
$loading->loadJS(LIB_DIR."/geo/geolocation.js");
$loading->loadPHPfiles(__DIR__);
?>
