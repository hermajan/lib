<?php 
/**
 * Testing file for methods in module Math.
 * 
 * @author DJohnny
 * @version 29.03.2012
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once '_loader.php'; ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Testing Math</title>
    </head>
    <body>
		<?php
            echo \lib\Math\Math::factorial(5);            
            echo '<br>';
            $qua=\lib\Math\Math::quadratic(1,4,2);
            for($i=0;$i<count($qua);++$i){
                echo $qua[$i]." ";
            }
            echo '<br>';
            for($i=0;$i<=10;$i++) {
                echo \lib\Math\Math::fibonacci($i).' ';
            }
        ?>
    </body>
</html>
