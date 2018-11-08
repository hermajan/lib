<?php
namespace Lib;

/**
 * Class for working with folder.
 */
class Folder {
	private $path;
	
	public function __construct($path) {
		$this->path = $path;
	}
	
	/**
	 * Prints content of folder.
	 * @param bool $dots True if show dots, false otherwise.
	 */
	public function content($dots = true) {
		$content = scandir($this->path);
		foreach($content as $file) {
			if($dots == false) {
				if((strcmp($file, ".") == 0) or (strcmp($file, "..") == 0)) {
					continue;
				}
			}
			echo "<a href='".$this->path."/".$file."'>".$file."</a><br>";
		}
	}
}
