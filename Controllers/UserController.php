<?php

require_once '../dbconect.php';

class UserController {
    private $postData;
    private $getData;

    public function __construct()
    {
        session_start();
        $this->postData = $_POST;
        $this->getData = $_GET;
    }

    public function login(){
        $email = $this->postData["email"];
        $password = $this->postData["password"];      
      
        $query = "SELECT * FROM users WHERE email = '".$email."'";
    
        $databaseConnection = new DatabaseConnection();
        $conn = $databaseConnection->startConnection();
        $stmt = $conn->prepare($query);
        $stmt->execute();
    
        $databaseUser = $stmt->fetch();
        
        if($databaseUser && $databaseUser['password'] !== $password){
            header("Location: login.php?loginError=Te dhenat jane gabim");
            die();
        } else {
            session_start();  
            $_SESSION['user'] = $databaseUser;
            header("Location: ../index.php");
        }
    }

    public function register(){

    }

    public function logout(){
        $_SESSION['user'] = null;
        header("Location: ../index.php");
    }
    
    
}
