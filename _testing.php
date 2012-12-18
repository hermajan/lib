<?php
/**
 * Testing file for methods in Lib.
 * 
 * @author DJohnny
 * @version 18.12.2012
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Testing Lib</title>
    <?php require_once '_loader.php'; ?>
  </head>
  <body>
    <?php echo factorial(4)."<br>".factorial(-1)."<hr>".mocnina(2,1.75); ?>
    <hr> 
    <?php echo \lib\Time\Czech::timeWords();
    echo "<hr><br>".poslaniEmailu("franta@seznam.cz", "ahoj");?>
    <hr>
    <?php 
      folderContentWithoutDots("time");echo "<hr>";
     
      echo \lib\Net\Net::clientIP();
    ?>
  </body>
</html>
