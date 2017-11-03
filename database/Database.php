<?php

class Database{

	private $conn;

	static function create(){
		return new Database();
	}

	function __construct(){
		$servername = "localhost";
		$username = "root";
		$password = "root1234";
                $dbname = "myisproj_warehouse";
		// Create connection
		$this->conn = mysqli_connect($servername, $username, $password,$dbname);
	}

	function read($sql){

		$arr = [];

		$result = mysqli_query($this->conn, $sql);
		if ($result && mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				$arr[] = $row;
			}
		}

		return $arr;
	}

	function write($sql){
		mysqli_query($this->conn, $sql);
		return mysqli_affected_rows($this->conn);
	}
        
        function insertId(){
            return intval(mysqli_insert_id($this->conn));
        }

}
