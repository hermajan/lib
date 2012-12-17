<?php
require_once dirname(__DIR__).'/Loading.php';

\lib\Loading::loadJS(".");
\lib\Loading::loadPHP(__DIR__);

// Load folders with languages
\lib\Loading::loadJS(__DIR__."/czech");
\lib\Loading::loadPHP(__DIR__."/czech");
\lib\Loading::loadJS(__DIR__."/english");
\lib\Loading::loadPHP(__DIR__."/english");
?>
