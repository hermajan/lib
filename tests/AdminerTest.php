<?php
require __DIR__."/bootstrap.php";

use Lib\Adminer;
use Tester\{Assert, Environment, TestCase};

/**
 * Tests class Adminer.
 * @testCase
 */
class AdminerTest extends TestCase {
	private $folder;
	
	public function __construct() {
		$folder = __DIR__."/../.temp";
		if(!is_dir($folder)) {
			mkdir($folder, 0777, true);
		}
		Environment::lock("adminer", $folder);
	}
	
	public function setUp() {
		$this->folder = __DIR__."/../.temp/";
	}
	
	public function testDownloadFull() {
		Adminer::download(__DIR__);
		Assert::true(file_exists("adminer.php"));
		unlink("adminer.php");
	}
	
	public function testDownloadMySQL() {
		Adminer::download($this->folder, true);
		Assert::true(file_exists($this->folder."adminer.php"));
		unlink($this->folder."adminer.php");
	}
	
	public function testDownloadMySQLczech() {
		Adminer::download($this->folder, true, true);
		Assert::true(file_exists($this->folder."adminer.php"));
		unlink($this->folder."adminer.php");
	}
	
	public function testDownloadVerbose() {
		Adminer::download($this->folder, false, false, true);
		Assert::true(file_exists($this->folder."adminer.php"));
		unlink($this->folder."adminer.php");
	}
}

$testCase = new AdminerTest;
$testCase->run();
