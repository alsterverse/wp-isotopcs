<?php
/**
 * Squiz_Sniffs_XSS_EscapeOutputSniff.
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @author   Weston Ruter <weston@x-team.com>
 */

/**
 * Verifies that all outputted strings are escaped.
 *
 * @link     http://codex.wordpress.org/Data_Validation Data Validation on WordPress Codex
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @author   Weston Ruter <weston@x-team.com>
 */
class Isotop_Sniffs_XSS_EscapeOutputSniff extends WordPress_Sniffs_XSS_EscapeOutputSniff {

	/**
	 * Custom list of functions whose return values are pre-escaped for output.
	 *
	 * @since 0.3.0
	 *
	 * @var string[]
	 */
	public $customAutoEscapedFunctions = [ '__', '_e', '_n', '_nx' ];

	public function __construct() {
		self::$unsafePrintingFunctions = [];
	}

} // end class
