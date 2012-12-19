<?php 
require_once __DIR__."/Lib.php"; new \lib\Lib();

\lib\Loading::loadLoader(__DIR__."/geo"); \lib\Loading::loadLoader(__DIR__."/net"); \lib\Loading::loadLoader(__DIR__."/time");

if(file_exists("favicon.ico")) {
  echo "<link href='favicon.ico' rel='icon'>";
}

require_once __DIR__."/akce.php"; require_once __DIR__."/file.php"; require_once __DIR__."/math.php";
\lib\Loading::loadJS(LIB_DIR."/skript.js");
?>
