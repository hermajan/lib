<?php
 function presmerovat($kam) {
    echo "<script>window.location.href='".$kam."';</script>";
 }
 function upozorneni($zprava) {
    echo "<script type='text/javascript'>alert('".$zprava."')</script>";
 }
 
 
 function http_prihlaseni($kam) {
   if (empty($_SERVER['PHP_AUTH_USER']) OR empty($_SERVER['PHP_AUTH_PW']) OR $_SERVER['PHP_AUTH_USER']!="jmeno" OR $_SERVER['PHP_AUTH_PW']!="heslo") {
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
 function cas($typ=0) {
    echo "<body onload='cas($typ);'>";
      echo "<span id='cas'>00:00:00</span>";
    echo "</body>";
 }
 function svatek($den=0,$mesic=0) {
   echo "<script type='text/javascript'>svatek($den,$mesic);</script>";
 }
 function cas_formular() {
   	echo "<body onload='cas_formular();'>
      <p>Aktuální čas: <span id='cas'>00:00:00</span></p>
      <form>
    	<label><input type='checkbox' name='slovy'> slovy</label>
      </form>
	</body>";
 }
?>
