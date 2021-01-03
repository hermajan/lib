<?php
require __DIR__."/bootstrap.php";

use Lib\Validation;
use Tester\{Assert, TestCase};

/**
 * Tests class Validation.
 * @testCase
 */
class ValidationTest extends TestCase {
	public function testCzechPhone() {
		Assert::true(Validation::czechPhone("+420123456789"));
		Assert::true(Validation::czechPhone("+420 123 456 789"));
		Assert::true(Validation::czechPhone("00420123456789"));
		Assert::true(Validation::czechPhone("00420 123 456 789"));
		Assert::true(Validation::czechPhone("123456789"));
		Assert::true(Validation::czechPhone("123 456 789"));
		
		Assert::false(Validation::czechPhone("hello"));
		Assert::false(Validation::czechPhone("123w456789"));
		Assert::false(Validation::czechPhone("123w56789"));
		Assert::false(Validation::czechPhone("123a456a789"));
	}
}

$testCase = new ValidationTest;
$testCase->run();
