<?php 
require_once dirname(__DIR__)."/Lib.php"; new \lib\Lib();

$loading=new \lib\Loading();
$loading->loadPHPfiles(__DIR__, ["_testing.php"]);
?>
