<?php

class AdminGuard {
    private $adminType;

    public function __construct($adminType){
        $this->adminType = $adminType; 
    }

    public function guard(){
        session_start();
          if(!isset($_SESSION['user'])){
            echo "Ku je ka shkon pa user";
             die();
         }
        
         if($_SESSION['user']['usertype'] !== $this->adminType){
           echo "Ku je ka shkon user i thjesht";
             die();
         }
    }
}