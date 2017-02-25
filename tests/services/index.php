<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Testing services</title>
		<?php require_once __DIR__."/../_loader.php"; ?>
	</head>
	<body>
<?php
	$g=new \Lib\services\Gravatar("MyEmailAddress@example.com");
	echo $g->createImgTag();
	$g->setDefault("mm");
	$g->useDefault();
	echo $g->createImgTag(); echo "<br>";
	
	$t=new \Lib\services\Twitter();
	echo $t->tweetByID("539790403290271744");
	echo $t->tweetByURL("https://twitter.com/jack/status/20");
	echo $t->lastTweet("DJohnny");
?>
	</body>
</html>
