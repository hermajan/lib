<?php 
require_once 'loading.php';

loadLoader("geo"); loadLoader("net"); loadLoader("time");

if(file_exists("favicon.ico")){
  echo "<link href='favicon.ico' rel='shortcut icon'>";
}

//load("."); //nefunguje kvůli phpinfo.php
require_once "akce.php"; require_once "file.php"; require_once "math.php";
loadJS(".");
?>
