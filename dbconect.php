<?php

class DatabaseConnection{
   private $servername = "localhost";
   private $username = "root";
   private $password = "";
   private $db = "projekti";

    function startConnection(){
        try{
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->db", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            
            if(!$conn){
                return null;
            }else{
                return $conn;
            }


        }catch(PDOException $e){
            echo "Connection failed ". $e->getMessage();
            die();
        }
    }
}
?>