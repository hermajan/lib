<?php
namespace Lib;

use Lib\Net\Transfer;

/**
 * Methods for working with Adminer.
 * @see https://www.adminer.org
 */
class Adminer {
	/**
	 * Downloads latest version of Adminer.
	 * @param string $folder Folder where to download Adminer.
	 * @param bool $mysql If true download only MySQL version, false otherwise.
	 * @param bool $czech If true download only Czech version, false otherwise.
	 * @param bool $verbose If true show verbose output, false otherwise.
	 */
	public static function download($folder = "", $mysql = false, $czech = false, $verbose = false): void {
		$url = "https://www.adminer.org/latest";
		if($mysql == true) {
			$url .= "-mysql";
		}
		if($czech == true) {
			$url .= "-cs";
		}
		$url .= ".php";
		
		Transfer::download($url, $folder."/adminer-location.html", $verbose);
		
		$dom = new \DOMDocument;
		$dom->loadHTMLFile($folder."/adminer-location.html");
		$links = $dom->getElementsByTagName("a");
		$location = $links[0]->getAttribute("href");
		$url = "https://www.adminer.org/".$location;
		
		Transfer::download($url, $folder."/adminer.php", $verbose);
		unlink($folder."/adminer-location.html");
	}
}
