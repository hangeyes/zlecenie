<?php
class Connection {
	private $login;
	private $password;
	private $host;
	private $db;
	private $link;
	
	public function __construct() {
		$this->login = 'root';
		$this->password = '';
		$this->host = 'localhost';
		$this->db = 'data';
	}
	
	function connect() {
		$link = new mysqli($this->host, $this->login, $this->password, $this->db);
		if($link->connect_error) {
			return null;
		}
		else {
			return $link;
		}
	}
	
	function displayLogin() {
		echo $this->login;
	}
}
?>