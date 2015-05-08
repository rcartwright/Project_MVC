<?php
class BaseModel{
protected $viewModel;
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "pondrin_productDB";
    private $username = "pondrin_p-admin";
    private $password = "B_HeJ@ln3TT^";
    private $conn;

    // get the database connection
    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;

             if ( $this->conn === false ) {
            echo "Could not connect.\n";
            die;
        }
    }

    function getTimestamp(){
    date_default_timezone_set('US/Arizona');
    $this->timestamp = date('Y-m-d H:i:s');
}
}
?>