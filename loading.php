<?php
/**
 * Loading files from directories.
 * 
 * @author DJohnny
 * @version 11.12.2012
 */
namespace lib;

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
          if(preg_match("~css$~", $file)) {
            echo "<link href='$directory/$file' rel='stylesheet'/>";
          }
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
  
/**
 * Loads cascading style sheets from desired directory.
 * 
 * @param string $directory Directory, which will be loaded
 * @return text List of loaded files
 */
  function loadCSS($directory) {  
    $content = scandir($directory);  
    foreach($content as $file) {
        if($file=="." || $file==".." || $file==__FILE__) {
            continue;
        }
        else {
          if(preg_match("~css$~", $file)) {
            echo "<link href='$directory/$file' rel='stylesheet'/>";
          }
        }
    }    
  }
  
/**
 * Loads javascript files from desired directory.
 * 
 * @param string $directory Directory, which will be loaded
 * @return text List of loaded files
 */
  function loadJS($directory) {  
    $content = scandir($directory);  
    foreach($content as $file) {
        if($file=="." || $file==".." || $file==__FILE__) {
            continue;
        }
        else {
          if(preg_match("~js$~", $file)) {
            echo "<script src='$directory/$file' type='text/javascript'></script>";
          }
        }
    }    
  }
  
/**
 * Loads PHP files from desired directory.
 * 
 * @param string $directory Directory, which will be loaded
 * @return text List of loaded files
 */
  function loadPHP($directory) {  
    $content = scandir($directory);  
    foreach($content as $file) {
        if($file=="." || $file==".." || $file==__FILE__) {
            continue;
        }
        else {
          if(preg_match("~php$~", $file)) {
            require_once $directory."/".$file;
          }
        }
    }    
  }
?>
