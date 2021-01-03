<?php
use Lib\Net\Addresses;

require_once __DIR__."/../bootstrap.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testing Net</title>
</head>
<body>
<?php
	echo "Your IP address: ".Addresses::clientIP();
	echo "<br>";
	echo "This page URL: ".Addresses::pageURL();
?>
</body>
</html>
