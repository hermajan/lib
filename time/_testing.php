<?php 
/**
 * Testing file for methods in module Time
 * 
 * @author DJohnny
 * @version 12.12.2012
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once '_loader.php'; ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Testing Time</title>
    </head>
    <body>
        <?php
            \lib\Time\Time::dateJS();    
            echo '<br>';
            \lib\Time\Czech::timeWords();
            echo '<br>';
            \lib\Time\English::dayOfWeek();
            echo '<br>';
            \lib\Time\Czech::nameDay();
        ?>
    </body>
</html>
