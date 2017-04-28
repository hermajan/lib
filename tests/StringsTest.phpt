<?php
require __DIR__."/_testSetup.php";
use Tester\Assert;

/**
 * Tests class Strings.
 * @testCase
 */
class StringsTest extends Tester\TestCase {
	private $string;

	public function setUp() {
		$this->string = "hello";
	}

	public function testStartsWith() {
		Assert::true(\Lib\Strings::startsWith($this->string, "he"));
		Assert::false(\Lib\Strings::startsWith($this->string, "el"));
	}

	public function testEndsWith() {
		Assert::true(\Lib\Strings::endsWith($this->string, "lo"));
		Assert::false(\Lib\Strings::endsWith($this->string, "el"));
	}
	
	public function testIssetor() {
		Assert::equal(\Lib\Strings::issetor($this->string), "hello");
		$null = null;
		Assert::equal(\Lib\Strings::issetor($null), "");
	}
}

$testCase = new StringsTest;
$testCase->run();
