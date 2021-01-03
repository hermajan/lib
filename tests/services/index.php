<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testing services</title>
	<?php require_once __DIR__."/../bootstrap.php"; ?>
</head>
<body>
<?php
$g = new \Lib\Services\Gravatar("MyEmailAddress@example.com");
echo $g->createImgTag();
$g->setDefault("mm");
$g->useDefault();
echo $g->createImgTag();
echo "<br>";

$t = new \Lib\Services\Twitter();
echo $t->tweetByID("539790403290271744");
echo $t->tweetByURL("https://twitter.com/jack/status/20");
echo $t->lastTweet("DJohnny");
?>
</body>
</html>
