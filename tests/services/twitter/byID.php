<?php
use Lib\Services\Twitter;

require_once __DIR__."/../../../vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Getting tweet by ID</title>
</head>
<body>
<p>Usage:</p>
<pre><code class="language-php">$twitter = new \Lib\Services\Twitter();
echo $twitter->tweetByID("20");</code></pre>

<p>It renders this:</p>
<?php
$twitter = new Twitter();
echo $twitter->tweetByID("20");
?>
</body>
</html>
