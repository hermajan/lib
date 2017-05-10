<?php
require __DIR__."/_testSetup.php";
use Tester\Assert;

/**
 * Tests class Adminer.
 * @testCase
 */
class AdminerTest extends Tester\TestCase {
	private $folder;
	
	public function __construct() {
		$folder = __DIR__."/../.temp";
		if(!is_dir($folder)) {
			mkdir($folder, 0777, true);
		}
		Tester\Environment::lock("adminer", $folder);
	}

	public function setUp() {
		$this->folder = __DIR__."/../.temp/";
	}

	public function testDownloadFull() {
		\Lib\Adminer::download(__DIR__);
		Assert::true(file_exists("adminer.php"));
		unlink("adminer.php");
	}
	
	public function testDownloadMySQL() {
		\Lib\Adminer::download($this->folder, true);
		Assert::true(file_exists($this->folder."adminer.php"));
		unlink($this->folder."adminer.php");
	}
	
	public function testDownloadMySQLczech() {
		\Lib\Adminer::download($this->folder, true, true);
		Assert::true(file_exists($this->folder."adminer.php"));
		unlink($this->folder."adminer.php");
	}
	
	public function testDownloadVerbose() {
		\Lib\Adminer::download($this->folder, false, false, true);
		Assert::true(file_exists($this->folder."adminer.php"));
		unlink($this->folder."adminer.php");
	}
}

$testCase = new AdminerTest;
$testCase->run();
