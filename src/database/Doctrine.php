<?php
namespace Lib\database;
use Doctrine\DBAL as dbal;
use Doctrine\DBAL\Connection;

/**
 * Getting data from MySQL database via Doctrine.
 */
class Doctrine extends Database {
	private $connection, $parameters;
	
	public function getConnection() {
		return $this->connection;
	}
	
	public function __construct($configFile) {
		$this->parameters = $this->configParser($configFile);
		$this->parameters += array(
			"driver" => "pdo_mysql", "charset" => "utf8",
			"driverOptions" => array(1002 => "SET NAMES UTF8")
		);
		
		$this->connect($this->parameters);
	}
	public function __destruct() {
		$this->connection->close();
	}
	
	/**
	 * Connects into database.
	 * @param array $parameters Array of parameters.
	 * @return Connection Connection to desired database.
	 */
	public function connect($parameters = null) {
		if(is_null($parameters)) {
			$parameters = $this->parameters;
		}
		$config = new dbal\Configuration();
		
		$this->connection = dbal\DriverManager::getConnection($parameters, $config);
		return $this->connection;
	}
	
	/**
	 * Closes a connection.
	 * @param Connection $connection Connection to close.
	 */
	public function closing($connection) {
		$connection->close();
	}
}
?>
