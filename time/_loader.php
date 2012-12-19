<?php
require_once dirname(__DIR__)."/Lib.php"; new \lib\Lib();

\lib\Loading::loadJS(LIB_DIR."/time/clock.js");
\lib\Loading::loadPHPfiles(__DIR__);

// Load folders with languages
\lib\Loading::loadPHPfiles(__DIR__."/czech");
\lib\Loading::loadPHPfiles(__DIR__."/english");
?>
