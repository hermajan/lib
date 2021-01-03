<?php
require __DIR__."/bootstrap.php";

use Lib\Strings;
use Tester\{Assert, TestCase};

/**
 * Tests class Strings.
 * @testCase
 */
class StringsTest extends TestCase {
	private $string;
	
	public function setUp() {
		$this->string = "hello";
	}
	
	public function testStartsWith() {
		Assert::true(Strings::startsWith($this->string, "he"));
		Assert::false(Strings::startsWith($this->string, "el"));
	}
	
	public function testEndsWith() {
		Assert::true(Strings::endsWith($this->string, "lo"));
		Assert::false(Strings::endsWith($this->string, "el"));
	}
	
	public function testIssetor() {
		Assert::equal(Strings::issetor($this->string), "hello");
		$null = null;
		Assert::equal(Strings::issetor($null), "");
	}
}

$testCase = new StringsTest;
$testCase->run();
