<?php 
function nacteni($slozka) {  
  $obsah = scandir($slozka);  
  foreach($obsah as $soubor) {
    if($soubor=="." || $soubor==".." || $soubor==__FILE__) {
      continue;
    }
    else {
      if(preg_match("~js$~", $soubor)) {
        echo "<script src='$slozka/$soubor' type='text/javascript'></script>";
      }
      if(preg_match("~php$~", $soubor)) {
        require_once $slozka."/".$soubor;
      }
    }
  }    
}
 
 //nacteni("."); //nefunguje kvůli phpinfo.php
 nacteni("cas");
 
if(file_exists("favicon.ico")){
  echo "<link href='favicon.ico' rel='shortcut icon'>";
}
?>

<!-- Nette --><!--
<?php //require_once 'nette/Nette-minified/loader.php'; 
//echo <script src='nette/client-side/forms/netteForms.js' type="text/javascript"></script>

    //NDebug::enable(NDebug::DEVELOPMENT);
?>-->
<!-- PHP -->
<?php require_once "akce.php"; require_once "db.php"; require_once "file.php"; require_once "math.php"; require_once "net.php";?>
