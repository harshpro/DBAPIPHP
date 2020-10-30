<?php
class database
{
    private $host;
    private $username;
    private $password;
    private $dbname;
    
    public $conn;

    public function __construct() {
        $this->host = 'localhost';
        $this->dbname = 'id14870874_yoga';
        $this->username = 'id14870874_root';
        $this->password = 'Vakratund@123';
    }

    public function Connect(){
    
        $this->conn=mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
        if(mysqli_connect_error()){
            echo "error connecting to database";
        }
        else{
            return $this->conn; 
        }
         
    }
}

?>