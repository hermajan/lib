<?php
use Lib\Services\Gravatar;

require_once __DIR__."/../../vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gravatar</title>
</head>
<body>
<p>Usage:</p>
<pre><code class="language-php">$gravatar = new \Lib\Services\Gravatar("MyEmailAddress@example.com");
echo $gravatar->createImgTag();</code></pre>

<p>It renders this:</p>
<?php
$gravatar = new Gravatar("MyEmailAddress@example.com");
echo $gravatar->createImgTag();
?>
</body>
</html>
