<?php
require_once __DIR__."/../vendor/autoload.php";

$src = __DIR__."/../src";
require_once $src."/Lib.php"; 
$lib = new Lib\Lib();

$loading = new Lib\Loading();
$loading->loadPHPfolders($src, ["phpinfo.php"]);

$temp = __DIR__."/../.temp";
if(!is_dir($temp)) {
	mkdir($temp, 0777, true);
}

Tester\Environment::setup();
Tester\Dumper::$dumpDir = $temp."/output";
date_default_timezone_set("Europe/Prague");
