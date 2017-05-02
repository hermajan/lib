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

	/**
	 * Returns element for form label with Font Awesome icon.
	 * @param string $text Text of the label.
	 * @param string $icon Name of the Font Awesome icon.
	 * @return \Nette\Utils\Html HTML element for label.
	 */
	public static function label($text, $icon=null) {
		$content = "";
		if(isset($icon)) {
			$content .= '<i class="fa fa-'.$icon.'" aria-hidden="true"></i> ';
		}
		$content .= $text;
		return \Nette\Utils\Html::el()->setHtml($content);
	}
}
