<?php
namespace Lib;

/**
 * Loading files from directories.
 */
class Loading {
	/**
	 * Loads Cascading style sheet file.
	 * @param string $file CSS file, which will be loaded.
	 * @param string $media CSS media attribute.
	 * @return string HTML <link> tag with loaded CSS file.
	 */
	public static function loadCSS($file, $media="all") {
		if(preg_match("~css$~", $file)) {
			return "<link rel='stylesheet' type='text/css' href='".$file."' media='".$media."'/>";
		}
	}
	
	/**
	 * Loads JavaScript file.
	 * @param string $file JavaScript file, which will be loaded.
	 * @return string HTML <script> tag with loaded file.
	 */
	public static function loadJS($file) {
		if(preg_match("~js$~", $file)) {
			return "<script type='text/javascript' src='".$file."'></script>";
		}
	}
	
	/**
	 * Loads loader from desired directory.
	 * @param string $directory Directory from which will be loader loaded.
	 * @return string Loaded loader.
	 */
	public static function loadLoader($directory) {
		$content = scandir($directory);
		foreach($content as $file) {
			if($file=="." || $file==".." || $file==__FILE__) {
				continue;
			} else {
				if(preg_match("~_loader.php$~", $file)) {
					require_once $directory."/".$file;
				}
			}
		}
	}
	
	/**
	 * Loads PHP file.
	 * @param $file PHP file, which will be loaded.
	 * @return string Loaded PHP file.
	 */
	public static function loadPHP($file) {
		require_once $file;
	}
	
	/**
	 * Loads PHP files from desired directory.
	 * @param string $directory Directory from which will be files loaded.
	 * @param array $skipped Array of files, which will be skipped from loading.
	 * @return string List of loaded files.
	 */
	public static function loadPHPfiles($directory, $skipped=[]) {
		$content = scandir($directory);
		foreach($content as $file) {
			$defaults = [".", ".."];
			if(in_array($file, $defaults) || in_array($file, $skipped)) {
				continue;
			} else {
				if(preg_match("~php$~", $file)) {
					require_once $directory."/".$file;
				}
			}
		}
	}
	
	/**
	 * Loads PHP files from desired directory and its subfolders.
	 * @param string $directory Directory from which will be files loaded.
	 * @param array $skipped Array of files, which will be skipped from loading.
	 * @return string List of loaded files.
	 */
	public static function loadPHPfolders($directory, $skipped=[]) {
		$loading = new \Lib\Loading();
		$loading->loadPHPfiles($directory, $skipped);
		
		$content = scandir($directory);
		foreach($content as $folder) {
			$defaults = [".", ".."];
			if(in_array($folder, $defaults) || in_array($folder, $skipped) || is_file($directory."/".$folder)) {
				continue;
			} else {
				$loading->loadPHPfiles($directory."/".$folder, $skipped);
			}
		}
	}
}
?>
