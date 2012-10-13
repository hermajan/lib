<?php 
if(file_exists("favicon.ico")){
  echo "<link href='favicon.ico' rel='shortcut icon'>";
}

//load("."); //nefunguje kvůli phpinfo.php
require_once "akce.php"; require_once "db.php"; require_once "file.php"; 
require_once "math.php"; require_once "net.php";
?>

<?php 
// Nette
//require_once 'nette/Nette-minified/loader.php'; 
//echo <script src='nette/client-side/forms/netteForms.js' type="text/javascript"></script>

    //NDebug::enable(NDebug::DEVELOPMENT);
?>
