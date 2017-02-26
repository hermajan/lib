<?php
require __DIR__."/_testSetup.php";
use Tester\Assert;
use \Lib\Validation as V;

/**
 * Tests class Validation.
 * @testCase
 */
class ValidationTest extends Tester\TestCase {
	public function testCzechPhone() {
		Assert::true(V::czechPhone("+420123456789"));
		Assert::true(V::czechPhone("+420 123 456 789"));
		Assert::true(V::czechPhone("00420123456789"));
		Assert::true(V::czechPhone("00420 123 456 789"));
		Assert::true(V::czechPhone("123456789"));
		Assert::true(V::czechPhone("123 456 789"));
		
		Assert::false(V::czechPhone("hello"));
		Assert::false(V::czechPhone("123w456789"));
		Assert::false(V::czechPhone("123w56789"));
		Assert::false(V::czechPhone("123a456a789"));
	}
}

$testCase = new ValidationTest;
$testCase->run();
