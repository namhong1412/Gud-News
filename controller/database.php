<?php
class Database {
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "news";
    private $username = "root";
    private $password = "";
    public $connection;
 
    // get the database connectionection
    public function get_connection(){
        $this->connection = new mysqli($this->host,$this->username,$this->password,$this->db_name) or die("Not Found.");
        mysqli_set_charset($this->connection, "utf8");
        return $this->connection;
    }
}
?>