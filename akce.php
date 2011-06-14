<?php
 function presmerovat($kam) {
    echo "<script>window.location.href='".$kam."';</script>";
 }
 function upozorneni($zprava) {
    echo "<script type='text/javascript'>alert('".$zprava."')</script>";
 }
 
 
 function http_prihlaseni($jmeno,$heslo,$kam) {
   if (empty($_SERVER['PHP_AUTH_USER']) OR empty($_SERVER['PHP_AUTH_PW']) OR $_SERVER['PHP_AUTH_USER']!=$jmeno OR $_SERVER['PHP_AUTH_PW']!=$heslo) {
		header('WWW-Authenticate: Basic Realm="jmeno"');
		header('HTTP/1.1 401 Unauthorized');
		echo "Zadejte jmeno: ";
		exit();
	}
    else {
      presmerovat($kam);
    }
 } 
 
 
 function tisk() {
   echo "<a href='javascript:window.print()' target='_self'>Vytisknout</a>";
 }
 function obnovit() {
   echo "<a href='javascript:location.reload()' target='_self'>Obnovit</a>";
 }
 function zpet() {
   echo "<a href='javascript:history.back(1)'>Zpět</a>";
 }
 function vpred() {
   echo "<a href='javascript:history.forward(1)'>Vpřed</a>";
 }
 function poslaniEmailu($adresa,$predmet) {
   echo "<a href='mailto:$adresa?subject=$predmet'>Napište mi.</a>";
 }

?>
