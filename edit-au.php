<?php
require_once "../dbconect.php";

if (isset($_POST['submit'])) {
    $id = $_GET['editid'];
    $teksi = $_POST["teksti"];
    print_r($_FILES['foto']);
    $img_loc = $_FILES['foto']['tmp_name'];
    $img_name = $_FILES['foto']['name'];
    $img_des = $img_name;


    $query = "UPDATE aboutus SET teksti = '$teksti', image = '$foto'  WHERE id = $id";

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
        textarea{
            width: 100%;
            height: 180px;
        }
        
    </style>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">

        <label for="teksti">Teksti:</label>
        <textarea name="teksti"></textarea>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" required>
        <button type="submit">Upload</button>
        
    </form>
</body>
</html>
