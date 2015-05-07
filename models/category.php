<?php

class CategoryModel extends BaseModel{

    // database connection and table name
    private $conn;
    private $table_name = "categories";

    // object properties
    public $id;
    public $name;


public function __construct($db){
        $database = new BaseModel();
        $db = $database->getConnection();
        $this->conn = $db;
    }

    // used by select drop-down list
    function read(){

        //select all data
        $query = "SELECT id, name FROM " . $this->table_name . " ORDER BY name";
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        return $stmt;
    }

    // used to read category name by its ID
    function readName(){

        $query = "SELECT name FROM " . $this->table_name . " WHERE id = ? limit 0,1";

        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $row['name'];

    }

    function update(){

        $query = "UPDATE
                " . $this->table_name . "
            SET
                name = :name,
                created = :created,
                modified = :modified,
            WHERE
                id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':created', $this->created);
        $stmt->bindParam(':modified', $this->modified);
        $stmt->bindParam(':id', $this->id);

        // execute the query
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

// delete the product
    function delete(){

        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        if($result = $stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

}

    ?>