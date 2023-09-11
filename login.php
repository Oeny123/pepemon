<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<img src="css/imgs/rtu_logo.png" alt="" >
    <div class="container">

        <h1>LOG IN FORM</h1>

            <form action="login.php" method="POST">

                <?php
                    @include 'db.php';
                    session_start();

                    if (isset($_POST['login'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];

                    $select = "SELECT * FROM users WHERE Name = '$name' && Email = '$email'";

                    $result = mysqli_query($conn, $select);
                    
                    if(mysqli_num_rows($result) > 0){
                        $_SESSION['Email'] = $email;
                        $_SESSION['Name'] = $name;
                        header('location: Homepage.php');
                    }else{
                        $error = 'Incorrect Inputs !';
                        echo '<span class= "error-msg">'.$error.'</span>'; 
                    }
                    }

                ?>
            
                <label for="Fullname">Enter Fullname</label>
                <input type="text" name="name" placeholder="Name" required>
            
                <label for="email">Enter Email</label>
                <input type="email" name="email" placeholder="Email" required>
            
                <input type="submit" name="login" value="Log In" class="buttun" required>

                <p>Dont have an account click?<a href="register.php">Register</a></p>

            
            </form>
    </div>
</body>
</html>