<?php
namespace Lib\Net;
use mysqli;

/**
 * Getting data from MySQL database.
 */
class Database {
    private $connection;
    
	public function __construct($configFile) {
		$ini = parse_ini_file($configFile);
		$this->connect($ini["server"], $ini["user"], $ini["password"], $ini["database"]);
	}
    public function __destruct() {
        $this->connection->close();
    }
    
    /**
     * Connects into database.
     * @param string $server Address of server, which have desired database
     * @param string $user Username, which can login into database 
     * @param string $password Password for username login
     * @param string $database Database, which we want to connect
     * @return mysqli Connection to desired database
     */
    public function connect($server,$user,$password,$database) {
        $this->connection = new mysqli($server,$user,$password,$database);
        
        if($this->connection->connect_errno) {
            return die("Can't connect into database:".$this->connection->connect_error);
        }
        
        $this->connection->query("SET NAMES UTF8") or die("Can't set charset UTF-8: ".$this->connection->error);
        return $this->connection;
    }
    
    /**
     * Closes a connection.
     * @param mysqli $connection Connection to close
     */
    public function closing($connection) {
        $connection->close();
    }
    
    /**
     * Returns one value from SELECT query.
     * @param string $query SELECT query, which can be run
     * @return string Value.
     */
    public function returning($query) {
       $result = $this->connection->prepare($query) or die("Bad query: ".$this->connection->error);
       $result->execute();
       $result->bind_result($note);
       $result->fetch();
       $result->free_result();
       return $note;
    }
    
    /**
     * Runs INSERT, UPDATE or DELETE query.
     * @param string $query INSERT, UPDATE or DELETE query, which can be run
     * @return int Number of affected rows by query
     */
    public function querySQL($query) {
      $result = $this->connection->prepare($query) or die("Bad query: ".$this->connection->error);
      
      $run = $result->execute();
      if($run == TRUE) { 
          $rows = $result->affected_rows;
      }
      
      $result->free_result();
      return $rows;
    }
}
?>
