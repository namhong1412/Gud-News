<?php
	/**
	 * post object
	 */
	Class Post extends Database {
		// databse connect and database name
		public $table_name = "post";
		public $title;
		public $image;
		public $link;
		public $date;

		// function check number rows after query statement 
		function create() {
			$query = "INSERT INTO `".$this->table_name."` (`title`, `image`, `link_base`, `date`) VALUES ('".$this->title."', '".$this->image."', '".$this->link."', '".$this->date."')";
			mysqli_query($this->get_connection(), $query);
		}

		// function get post
		function read() {
			$query = "SELECT * FROM `".$this->table_name."` ORDER BY id DESC";
			return mysqli_query($this->get_connection(), $query);
		}
	}
?>