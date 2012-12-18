<?php 
/**
 * Testing file for methods in module Net.
 * 
 * @author DJohnny
 * @version 18.12.2012
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once '_loader.php'; ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Testing Net</title>
    </head>
    <body>
		<?php
            echo \lib\Net\Net::clientIP();            
            echo '<br>';
            echo \lib\Net\Net::pageURL();
        ?>
    </body>
</html>
