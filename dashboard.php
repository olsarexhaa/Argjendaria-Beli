
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

        .content {
            margin-left: 250px;
            padding: 16px;
        }

        h2 {
            color: rgb(9,75,67);
            text-align: center;
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

    <div class="content">
        <h2>Welcome to the Admin Dashboard</h2>
        
    </div>

</body>
</html>