<?php
require __DIR__."/../libs/autoload.php";

$src = __DIR__."/../src";
require_once $src."/Lib.php"; new Lib\Lib();

$loading = new Lib\Loading();
//$loading->loadLoader(__DIR__."/net");
$loading->loadPHPfiles($src, ["phpinfo.php"]);
$loading->loadPHPfiles($src."/database");
$loading->loadPHPfiles($src."/fontAwesome");
$loading->loadPHPfiles($src."/net");
$loading->loadPHPfiles($src."/nette");
$loading->loadPHPfiles($src."/services");

//$loading->loadJS(LIB_DIR."/script.js");
?>
