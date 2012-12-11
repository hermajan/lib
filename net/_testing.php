<?php 
/**
 * Testing file for methods in module Net.
 * 
 * @author DJohnny
 * @version 28.10.2012
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once '../loading.php'; loadLoader("."); ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Testing Net</title>
    </head>
    <body>
        <?php
            echo \lib\Net\Net::getIPv4();
            echo '<br>';
        ?>
    </body>
</html>
