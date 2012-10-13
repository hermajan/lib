<?php
/**
 * Loading files from directories
 * 
 * @author DJohnny
 * @version 13.10.2012
 */

/**
 * Loads files from desired directory.
 * 
 * @param string $directory Directory, which will be loaded
 * @return text List of loaded files
 */
  function load($directory) {  
    $content = scandir($directory);  
    foreach($content as $file) {
        if($file=="." || $file==".." || $file==__FILE__) {
            continue;
        }
        else {
          if(preg_match("~js$~", $file)) {
            echo "<script src='$directory/$file' type='text/javascript'></script>";
          }
          if(preg_match("~php$~", $file)) {
            require_once $directory."/".$file;
          }
        }
    }    
  }
  
/**
 * Loads loader from desired directory.
 * 
 * @param string $directory Directory, which will be loaded
 * @return text Loaded loader
 */
  function loadLoader($directory) {  
        $content = scandir($directory);  
        foreach($content as $file) {
            if($file=="." || $file==".." || $file==__FILE__) {
                continue;
            }
            else {
              if(preg_match("~loader.php$~", $file)) {
                require_once $directory."/".$file;
              }
            }
        }    
  }
?>
