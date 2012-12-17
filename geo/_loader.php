<?php 
require_once dirname(__DIR__).'/Loading.php';

if(basename(dirname($_SERVER["REQUEST_URI"]))=="geo") { \lib\Loading::loadJS("."); }
else { \lib\Loading::loadJS("http://test.hermajan.net/lib/geo"); }
\lib\Loading::loadPHP(__DIR__);
?>
