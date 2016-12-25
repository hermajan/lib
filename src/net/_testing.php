<!DOCTYPE html>
<html>
  <head>
	<meta charset="UTF-8">
	<title>Testing Net</title>
	<?php require_once "_loader.php"; ?>
  </head>
  <body>
	<?php
		echo \lib\Net\Net::clientIP();            
		echo "<br>";
		echo \lib\Net\Net::pageURL();
	?>
  </body>
</html>
