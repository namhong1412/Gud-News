<?php
	/**
	 * login object
	 */
	Class Login extends Database {
		// databse connect and database name
		public $table_name = "admin";
		public $email;
		public $password;

		// function check number rows after query statement 
		function check() {
			// query 
			$query = "SELECT * FROM `".$this->table_name."` WHERE `username` = '".$this->email."'";
			$query_statement = mysqli_query($this->get_connection(), $query);
			$data = mysqli_fetch_array($query_statement);
			$password_db = $data['password'];
			if (password_verify($this->password, $password_db)) {
				return 1;
			} else {
				return 0;
			}
		}

		// function select profile user from database
		function read() {
			$query = "SELECT * FROM `".$this->table_name."` WHERE `username` = '".$this->email."'";
			$query_statement = mysqli_query($this->get_connection(), $query);
			return mysqli_fetch_array($query_statement);
		}
	}
?>