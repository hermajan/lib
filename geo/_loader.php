<?php 
require_once dirname(__DIR__)."/Lib.php"; new \lib\Lib();

\lib\Loading::loadJS(LIB_DIR."/geo/geolocation.js");
\lib\Loading::loadPHPfiles(__DIR__);
?>
