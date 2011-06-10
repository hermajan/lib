<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <?php require_once "loader.php"; ?>
  </head>
  <body>
    <?php echo faktorial(0)."<br>".faktorial(-1)."<hr>".mocnina(2,1.75); ?>
    <hr> 
    <?php svatek();
    echo "<hr><br>".poslaniEmailu("franta@seznam.cz", "ahoj");?>
    <hr>
    <?php 
      cas(1);
    ?>
    
    
  </body>
</html>
