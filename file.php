<?php
 function upload() {
    echo "<form action='' method='post' enctype='multipart/form-data'>
	    Soubor: <input type='file' name='soubor' value=''>
		  <input type='submit' name='odeslat' value='Nahrát soubor'>
	  </form>";
	 
    if(isset($_FILES["soubor"])) {
      if(file_exists("upload/".$_FILES["soubor"]["name"])) {
        echo "Soubor existuje!";
      }
      else {
        if(move_uploaded_file($_FILES["soubor"]["tmp_name"],"upload/".$_FILES["soubor"]["name"])) {
            echo "Soubor byl nahrán do <a href='http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["PHP_SELF"])."/upload/".$_FILES["soubor"]["name"]."'>".
             "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["PHP_SELF"])."/upload/".$_FILES["soubor"]["name"]."</a><br>";
        }
        else {
          echo $_FILES["soubor"]["error"];
        }
      }
    }
 }
 function obsahSlozky($slozka) {  
    $obsah = scandir($slozka);  
    foreach($obsah as $soubor) {  
      echo "<a href='".$slozka."/".$soubor."'>".$soubor."</a><br>";  
    }    
 }
?>
