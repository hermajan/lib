<?php
use Lib\Services\Twitter;

require_once __DIR__."/../../../vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Getting tweet by URL</title>
</head>
<body>
<p>Usage:</p>
<pre><code class="language-php">$twitter = new \Lib\Services\Twitter();
echo $twitter->tweetByURL("https://twitter.com/TheEllenShow/status/440322224407314432");</code></pre>

<p>It renders this:</p>
<?php
$twitter = new Twitter();
echo $twitter->tweetByURL("https://twitter.com/TheEllenShow/status/440322224407314432");
?>
</body>
</html>
