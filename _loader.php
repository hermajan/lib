<?php 
require_once __DIR__."/Lib.php"; new \lib\Lib();

$loading=new \lib\Loading();
$loading->loadLoader(__DIR__."/geo"); $loading->loadLoader(__DIR__."/net"); $loading->loadLoader(__DIR__."/time");

if(file_exists("favicon.ico")) {
  echo "<link href='favicon.ico' rel='icon'>";
}

require_once __DIR__."/akce.php"; require_once __DIR__."/file.php"; require_once __DIR__."/math.php";
$loading->loadJS(LIB_DIR."/skript.js");
?>
