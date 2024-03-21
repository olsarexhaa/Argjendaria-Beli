<?php
  require_once '../dbconect.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argjendaria Beli Admin</title>
</head>
<body>
    <header>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        #sidebar {
            width: 250px;
            height: 100%;
            background-color: rgb(9,75,67);
            color: rgb(240, 222, 180);
            padding-top: 20px;
            position: fixed;
        }

        #sidebar a {
            padding: 10px;
            text-decoration: none;
            color: #fff;
            display: block;
            transition: 0.3s;
        }

        #sidebar a:hover {
            background-color: rgb(240, 222, 180);
        }

        #content {
            margin-left: 250px;
            padding: 16px;
        }

        h2 {
            color: rgb(9,75,67);
            text-align: center;
        }
        table {
             width: 100%;
             border-collapse: collapse;
             margin-top: 20px;
            } 

        th, td {
             border: 1px solid #dddddd;
             text-align: left;
             padding: 12px;
            }

        th {
            background-color: rgba(9, 75, 67, 0.142);
            }

        tbody tr:hover {
             background-color: #f5f5f5;
            }
        p{
            color: whitesmoke;
            text-align: center;
            display: flex;
            position: absolute;
            bottom: 0;
            left: 0;
            margin-bottom: 90px;
            padding: 10px;
        }   
        .back{
            position: absolute;
            bottom: 0;
            left: 0;
            margin-bottom: 40px; 
            margin-left: 70px; 
        } 
        a{
            text-decoration: none;
            color: black;
        }  
        button{
           justify-content: flex-start;
           cursor:grab;
           font-size: 15px;


           padding:10px 30px;
           border-radius: 10px;
           text-decoration: none;
           background-color:rgba(9, 75, 67, 0.142);
           align-items: center;
        }
        button:hover{
         background: rgb(228,199,129); 
        }  
        img{
            width: 100px;
            height: auto;
        } 

    </style>
</header>
<body>

<div id="sidebar">
        <a href="dashboard.php">Dashboard</a>
        <a href="users.php">Users</a>
        <a href="products.php">Products</a>
        <a href="earings.php">Earings</a>
        <a href="aboutus.php">About Us</a>
        <a href="findus.php">Find us</a>
        <a href="contact.php">Contact</a>
        <p>Return to your web adventure from the dashboard!</p>
         <a href="../index.php" class="back">Back to Web</a>
    </div>

    <div id="content">
    <h2>Earings</h2>

    <table class="table">
    <thead>
        <tr>
            <th name="id">ID</th>
            <th name="emri">Name</th>
            <th name="qmimi">Price</th>
            <th name="foto" class="img">Picture</th>
            <th name="opeartions">Operations</th>
        </tr>
    </thead>
    <tbody>           
            <?php

            $query = "SELECT * FROM earings ";
            $databaseConnection = new DatabaseConnection();
            $conn = $databaseConnection->startConnection();
            $stmt = $conn->prepare($query);
            $stmt->execute();

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($rows as $row) {
            $id = $row['id'];
            $emri = $row['emri'];
            $qmimi = $row['qmimi'];
            $image = $row['foto'];
            
      
            
            echo '<tr>
               <td>'.$id.'</td>
               <td>'.$emri.'</td>
               <td>'.$qmimi.'</td>
               <td><img src="data:image/jpeg;base64,'.base64_encode($row['foto']).'"/></td>
               <td>
                <button><a href="edit-e.php?editid='.$id.'">Edit</a></button>
                <button><a href="delete-e.php?deleteid='.$id.'">Delete</a></button>
               </td>
               </tr>';
            }

            ?>

    </tbody>
</table>
    </div>

</body>
</html>