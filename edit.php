<?php
require_once "../dbconect.php";

if (isset($_POST['submit'])) {
    $id = $_GET['editid'];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    $usertype = $_POST['usertype'];

    $query = "UPDATE users SET username = '$username', email = '$email', number = '$number', password = '$password', usertype = '$usertype' WHERE id = $id";

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 100px 0;
        }

        form {
            max-width: 400px;
            height: 550px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 30px;
            border: solid 2px rgb(9,75,67);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            padding-bottom: 10px;
            padding-top: 10px;
            font-size: 20px;
            color: rgb(9,75,67);
            
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            justify-content: center;
        }

        button {
            background-color: rgb(9,75,67);
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
            font-size: 20px;
        }

        button:hover {
            background-color:  rgba(228, 198, 129, 0.372);
        }
    </style>
</head>
<body>
    <form action="" method="post">

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="number">Phone Number:</label>
        <input type="text" id="number" name="number" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="usertype">Usertype:</label>
        <input type="text" id="usertype" name="usertype" required>

        
    </form>
</body>
</html>
