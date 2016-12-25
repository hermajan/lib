<?php
namespace Lib;

/**
 * Methods for strings.
 */
class Strings {
	/**
	 * Checks if some string starts with a substring.
	 * @param string $haystack String where to search.
	 * @param string $needle Substring for searching.
	 * @return bool True if string starts with a substring, false otherwise.
	 */
	public static function startsWith($haystack, $needle) {
		return (substr($haystack, 0, strlen($needle)) === $needle);
	}

	/**
	 * Checks if some string ends with a substring.
	 * @param string $haystack String where to search.
	 * @param string $needle Substring for searching.
	 * @return bool True if string ends with a substring, false otherwise.
	 */
	public static function endsWith($haystack, $needle) {
		return (substr($haystack, -strlen($needle)) === $needle);
	}
}
