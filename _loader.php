<?php 
require_once __DIR__.'/Loading.php';

\lib\Loading::loadLoader(__DIR__."/geo"); \lib\Loading::loadLoader(__DIR__."/net"); \lib\Loading::loadLoader(__DIR__."/time");

if(file_exists("favicon.ico")){
  echo "<link href='favicon.ico' rel='shortcut icon'>";
}

//load("."); //nefunguje kvůli phpinfo.php
require_once "akce.php"; require_once "file.php"; require_once "math.php";
\lib\Loading::loadJS(".");
?>
