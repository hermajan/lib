<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Testing Net</title>
		<?php require_once __DIR__."/../bootstrap.php"; ?>
	</head>
	<body>
<?php
	echo \Lib\Net\Net::clientIP();
	echo "<br>";
	echo \Lib\Net\Net::pageURL();
?>
	</body>
</html>
