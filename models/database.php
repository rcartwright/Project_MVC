<?php
class Database{

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "pondrin_productDB";
    private $username = "pondrin_p-admin";
    private $password = "B_HeJ@ln3TT^";
    public $conn;
    public $started;

    // get the database connection
    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $started = "database started";
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
            $started = "database not started";
        }

        return $this->conn;
    }
}
?>