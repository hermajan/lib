<?php
require_once dirname(__DIR__)."/Lib.php"; new \lib\Lib();

$loading=new \lib\Loading();
$loading->loadJS(LIB_DIR."/time/clock.js");
$loading->loadPHPfiles(__DIR__);

// Load folders with languages
$loading->loadPHPfiles(__DIR__."/czech");
$loading->loadPHPfiles(__DIR__."/english");
?>
