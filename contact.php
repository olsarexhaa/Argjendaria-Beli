<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST ["name"];
  $surname = $_POST ["surname"];
  $email = $_POST ["email"];
  $message = $_POST ["message"];

  try {
    require_once "dbconect.php";

    $query = "INSERT INTO contact (name, surname, email, message) VALUES
    (?,?,?,?);";

    $databaseConnection = new DatabaseConnection();
    $conn = $databaseConnection->startConnection();
    $stmt = $conn->prepare($query);

    $stmt ->execute([$name ,$surname ,$email ,$message]);

    $pdo =null;
    $stmt =null;

    header("Location: index.php");
    exit;

  } catch (PDOException $e) {
     die("Query failed:" .$e->getMessage());
  }


}else{
  header("Location:index.php");
}
?>