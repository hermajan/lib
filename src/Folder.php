<?php
namespace Lib;

/**
 * Class for working with folder.
 */
class Folder {
	/** @var string */
	private $path;
	
	/**
	 * Folder constructor.
	 * @param string $path
	 */
	public function __construct(string $path) {
		$this->path = $path;
	}
	
	/**
	 * Prints content of folder.
	 * @param bool $dots True if show dots, false otherwise.
	 */
	public function content(bool $dots = true): void {
		$content = scandir($this->path);
		if($content !== false) {
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
}
