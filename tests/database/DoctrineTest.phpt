<?php
require __DIR__."/../_testSetup.php";
use Tester\Assert;
use \Lib\database\Doctrine as DB;

/**
 * Tests class Doctrine.
 * @testCase
 */
class DoctrineTest extends Tester\TestCase {
	private $connection;

	public function setUp() {
		$_SERVER["SERVER_NAME"] = "127.0.0.1";
		$db = new DB(__DIR__."/database.ini");
		$this->connection = $db->getConnection();
	}

	public function testIronMan() {
		$statement = $this->connection->executeQuery("SELECT name FROM heroes WHERE id=?", array(1));
		while($row = $statement->fetch()) {
			Assert::equal("Tony Stark", $row["name"]);
		}
	}
}

$testCase = new DoctrineTest;
$testCase->run();
