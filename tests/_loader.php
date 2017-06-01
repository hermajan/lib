<?php
require_once __DIR__."/../libs/autoload.php";

$src = __DIR__."/../src";
require_once $src."/Lib.php"; 
$lib = new Lib\Lib();

$loading = new Lib\Loading();
$loading->loadPHPfolders($src, ["phpinfo.php"]);

//$loading->loadJS(LIB_DIR."/script.js");
?>
