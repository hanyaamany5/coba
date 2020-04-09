<?php
/**
 * 
 */
class Database
{
	private $host = "localhost";
	private $db_name = "api_db";
	private $username = "root";
	private $password = "";
	public $conn;

	public function getConnection(){
		$this->conn = null;
		try{
			$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->username, $this->password);
			$this->conn->exec("setNames utf8");
		}catch(PDOExcpetion $excption){
			echo "Connection error: ". $excption->getMessage();
		}
		return $this->conn;
	}
}
?>