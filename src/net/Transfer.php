<?php
namespace Lib\net;

/**
 * Transfering files.
 */
class Transfer {
	/**
	 * Downloads file from internet.
	 * @param string $url URL of the file.
	 * @param string $output Output file.
	 * @param boolean $verbose True for verbose output, false otherwise.
	 */
	public static function download($url, $output, $verbose=false) {
		$curl = curl_init($url);
		
		$folder = dirname($output);
		if(!is_dir($folder)) {
			mkdir($folder, 0755, true);
		}
		$file = fopen($output, "w");

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
