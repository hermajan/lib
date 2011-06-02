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
?>
