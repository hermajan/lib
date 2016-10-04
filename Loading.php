<?php
namespace Lib;

/**
 * Loading files from directories.
 */
class Loading {
/**
 * Loads cascading style sheet.
 * @param string $file CSS file, which will be loaded.
 * @param string $media CSS media attribute.
 * @return string HTML <link> tag with loaded CSS file.
 */
  function loadCSS($file, $media="all") {  
    if(preg_match("~css$~", $file)) {
        echo "<link rel='stylesheet' type='text/css' href='".$file."' media='".$media."'/>";
    }
  }
  
/**
 * Loads JavaScript file.
 * @param string $file JavaScript file, which will be loaded.
 * @return string HTML <script> tag with loaded file.
 */
  function loadJS($file) {      
    if(preg_match("~js$~", $file)) {
        echo "<script type='text/javascript' src='".$file."'></script>";
    }
  }
  
/**
 * Loads loader from desired directory.
 * @param string $directory Directory from which will be loader loaded.
 * @return string Loaded loader.
 */
  function loadLoader($directory) {  
    $content = scandir($directory);  
    foreach($content as $file) {
        if($file=="." || $file==".." || $file==__FILE__) {
            continue;
        }
        else {
            if(preg_match("~_loader.php$~", $file)) {
                require_once $directory."/".$file;
            }
        }
    }    
  }
  
/**
 * Loads PHP files from desired directory.
 * @param string $directory Directory, which will be loaded.
 * @param array $skipped Array of files, which will be skipped from loading.
 * @return string List of loaded files.
 */
  function loadPHPfiles($directory, $skipped=[]) {  
    $content = scandir($directory);  
    foreach($content as $file) {
		$defaults = [".", ".."];
        if(in_array($file, $defaults) || in_array($file, $skipped)) {
            continue;
        }
        else {
			if(preg_match("~php$~", $file)) {
				require_once $directory."/".$file;
			}
        }
    }    
  }
}
?>
