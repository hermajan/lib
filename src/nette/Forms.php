<?php
namespace Lib\nette;

/**
 * Methods for Nette Forms.
 */
class Forms {
	/**
	 * Fixes empty string form values to null.
	 * @param array $values Submitted values from form.
	 */
	public static function fixFormValues(&$values) {
		foreach($values as $key => $val) {
			if($values[$key] === "") {
				$values[$key] = null;
			}
		}
	}
}
