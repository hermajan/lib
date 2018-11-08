<?php
namespace Lib;

/**
 * Validation of strings.
 */
class Validation {
	/**
	 * Checks if string is a valid Czech phone number.
	 * @param string $number String with phone number.
	 * @return bool True if string is a phone number, false otherwise.
	 */
	public static function czechPhone($number) {
		$match = preg_match("/^((\+420|00420) ?)?\d{3}( |)?\d{3}( |)?\d{3}$/", $number);
		if($match === 1) {
			return true;
		}
		return false;
	}
}
