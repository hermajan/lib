<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Testing Lib</title>
    <?php require_once "_loader.php"; ?>
  </head>
  <body>
    <?php 
		folderContentWithoutDots("net"); echo "<br>";
	  
		$g=new Gravatar("MyEmailAddress@example.com");
		echo $g->createImgTag();
        $g->setDefault("mm");
		$g->useDefault();
        echo $g->createImgTag(); echo "<br>";
        
        $t=new Twitter();
        echo $t->tweetByID("539790403290271744");
        echo $t->tweetByURL("https://twitter.com/jack/status/20");
        echo $t->lastTweet("DJohnny");
    ?>
  </body>
</html>
