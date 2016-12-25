<?php
 function upload($where) {
    if(!is_string($where)) {
        $where="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF'])."/upload/";
    }
    echo "<form action='' method='post' enctype='multipart/form-data'>
	    File: <input type='file' name='ffile' value=''>
		  <input type='submit' name='send' value='Upload'>
	  </form>";
	 
    if(isset($_FILES["ffile"])) {
      if(file_exists($where.$_FILES["ffile"]["name"])) {
        echo "File exists!";
      }
      else {
        if(move_uploaded_file($_FILES["ffile"]["tmp_name"],$where.$_FILES["ffile"]["name"])) {
            echo "File has been uploaded to <a href='".$where.$_FILES["ffile"]["name"]."'>".$where.$_FILES["ffile"]["name"]."</a><br>";
        }
        else {
          echo $_FILES["ffile"]["error"];
        }
      }
    }
 }

 function folderContent($folder) {  
    $content = scandir($folder);  
    foreach($content as $file) { echo "<a href='".$folder."/".$file."'>".$file."</a><br>"; }    
 }
 function folderContentWithoutDots($folder) {  
    $content = scandir($folder);  
	foreach($content as $file) { 
		if(strcmp($file,".")!=0 AND strcmp($file,"..")!=0) {
			echo "<a href='".$folder."/".$file."'>".$file."</a><br>"; 
		}
	}
 }
?>
