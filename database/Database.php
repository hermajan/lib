<?php
namespace Lib\Database;

/**
 * Database.
 */
abstract class Database {
	/**
	 * Parses configuration file.
	 * @param string $configFile Configuration file.
	 * @return array Array of parameters.
	 */
	public function configParser($configFile) {
		$ini = parse_ini_file($configFile, true);
		
		switch($_SERVER['SERVER_NAME']) {
			case "localhost":
				$params = $ini["Localhost"];
				break;
			default:
				$params = $ini["Production"];
				break;
		}
		
		$parameters = array(
			"host" => $params["server"], "dbname" => $params["database"],
			"user" => $params["user"], "password" => $params["password"]
		);
		
		return $parameters;
	}
}
