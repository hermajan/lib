<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <?php require_once 'loading.php'; loadLoader("."); ?>
  </head>
  <body>
    <?php echo factorial(4)."<br>".factorial(-1)."<hr>".mocnina(2,1.75); ?>
    <hr> 
    <?php echo svatek();
    echo "<hr><br>".poslaniEmailu("franta@seznam.cz", "ahoj");?>
    <hr>
    <?php 
      folderContentWithoutDots("time");echo "<hr>";
     
      echo getIPv4();
    ?>
    
    
  </body>
</html>
