<?php
require_once '../dbconect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $query = "DELETE from  users  where id= $id ";
    $databaseConnection = new DatabaseConnection();
    $conn = $databaseConnection->startConnection();
    $stmt = $conn->prepare($query);
    $stmt->execute();

            if($stmt){
                header("Location: users.php");
            }else{
                die();
            }

}

?>
