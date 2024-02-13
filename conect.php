<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = $_POST ["username"];
  $email = $_POST ["email"];
  $number = $_POST ["number"];
  $password = $_POST ["password"];

  try {
    require_once "../dbconect.php";

    $query = "INSERT INTO users (username, email, number, password) VALUES
    (?,?,?,?)";

    $databaseConnection = new DatabaseConnection();
    $conn = $databaseConnection->startConnection();
    $stmt = $conn->prepare($query);

    $stmt ->execute([$username ,$email ,$number ,$password]);

    $pdo =null;
    $stmt =null;

    header("Location: index.php");
    exit;

  } catch (PDOException $e) {
     die("Query failed:" .$e->getMessage());
  }


}
else{
  header("location ../index.php");
}
?>