<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Testing Net</title>
		<?php require_once __DIR__."/../_loader.php"; ?>
	</head>
	<body>
<?php
	echo \lib\net\Net::clientIP();
	echo "<br>";
	echo \lib\net\Net::pageURL();
?>
	</body>
</html>
