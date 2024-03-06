
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
  <h2>USERS</h2>

  <table class="table">
  <thead>
      <tr>
          <th name="id">ID</th>
          <th name="name">Name</th>
          <th name="surname">Surname</th>
          <th name="email">Email</th>
          <th name="message">Message</th>
          <th name="operations">Operations</th>
      </tr>
  </thead>
  <tbody>                   
          <?php

          $query = "SELECT * FROM contact ";
          $databaseConnection = new DatabaseConnection();
          $conn = $databaseConnection->startConnection();
          $stmt = $conn->prepare($query);
          $stmt->execute();


          $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

               foreach ($rows as $row) {
               $id = $row['id'];
               $name = $row['name'];
               $surname = $row['surname'];
               $email = $row['email'];
               $message = $row['message'];

               
               echo '<tr>
                  <td>'.$id.'</td>
                  <td>'.$name.'</td>
                  <td>'.$surname.'</td>
                  <td>'.$email.'</td>
                  <td>'.$message.'</td>
                  <td>
                   <button><a href="edit.php?editid='.$id.'">Edit</a></button>
                   <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                  </td>
                  </tr>';
               }

          ?>


  </tbody>
</table>
  </div>

</body>
</html>
