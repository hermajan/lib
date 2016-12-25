<?php 
require_once __DIR__."/Lib.php"; new \lib\Lib();

$loading=new \lib\Loading();
//$loading->loadLoader(__DIR__."/net");
$loading->loadPHPfiles(__DIR__, ["_testing.php", "phpinfo.php"]);

if(file_exists("favicon.ico")) {
  echo "<link href='favicon.ico' rel='icon'>";
}

//require_once __DIR__."/file.php";
//$loading->loadJS(LIB_DIR."/script.js");
?>
