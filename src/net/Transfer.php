<?php
namespace Lib\Net;

/**
 * Transfering files.
 */
class Transfer {
	/**
	 * Downloads file from internet.
	 * @param string $url URL of the file.
	 * @param string $output Output file.
	 * @param bool $verbose True for verbose output, false otherwise.
	 */
	public static function download(string $url, string $output, bool $verbose = false): void {
		$curl = curl_init($url);
		if($curl !== false) {
			$folder = dirname($output);
			if(!is_dir($folder)) {
				mkdir($folder, 0755, true);
			}
			
			$file = fopen($output, "w");
			if($file !== false) {
				if($verbose == true) {
					curl_setopt($curl, CURLOPT_VERBOSE, true);
				}
				curl_setopt($curl, CURLINFO_HEADER_OUT, true);
				curl_setopt($curl, CURLOPT_FAILONERROR, true);
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($curl, CURLOPT_FRESH_CONNECT, true);
				curl_setopt($curl, CURLOPT_FILE, $file);
				
				curl_exec($curl);
				if($verbose == true) {
					echo curl_getinfo($curl, CURLINFO_HEADER_OUT);
					echo "Saved to ".$output.".\n";
				}
				curl_close($curl);
				fclose($file);
			}
		}
	}
}
