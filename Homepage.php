<?php
@include 'db.php';

session_start();

if(!isset($_SESSION['Email'])){
   header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<img src="css/imgs/rtu_logo.png" alt="" >
    <div class="container">
        <h1>Homepage</h1>
        <div class="con1">
            
            <h2>Welcome! 
                <br> Name: <?php echo $_SESSION['Name']; ?>
                <br> Email: <?php echo $_SESSION['Email']; ?> 
            </h2>

            <p>Login Another Account? <a href="logout.php" class="logout">Logout</a></p>
        </div>
    </div>
    
</body>
</html>