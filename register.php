<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<img src="css/imgs/rtu_logo.png" alt="" >
    <div class="container">  

        <h1>Online Registration</h1>

        <form action="register.php" method="POST">

            <?php
                @include 'db.php';
                session_start();

                if (isset($_POST['register'])) {
                    $name = $_POST['name'];
                    $birthday = $_POST['birthday'];
                    $course = $_POST['course'];
                    $email = $_POST['email'];

                    $select = "SELECT * FROM users WHERE Name = '$name' && Birthday = '$birthday' && Course = '$course' && Email = '$email' ";

                    $result = mysqli_query($conn, $select);

                    if(mysqli_num_rows($result) > 0){
                        $error = 'user already exist';
                        echo '<span class= "error-msg">'.$error.'</span>';                    
                    }
                    else{
                        $insert = "INSERT INTO users(Name,Birthday,Course,Email) values('$name','$birthday','$course','$email')";
                        mysqli_query($conn, $insert);
                        header('location:login.php');
                    }
                }
            
            ?>
            <label for="Fullname">Enter Fullname</label>
            <input type="text" name="name" placeholder="Name" required>
        
            <label for="birthday">Enter Birthday</label>
            <input type="date" name="birthday" placeholder="Birthday" required>

            <label for="course">Enter Course</label>
<br>
            <select name="course" placeholder="Course" required>
                <option value="Bachelor of Science in Mechanical Engineering">Bachelor of Science in Mechanical Engineering</option>
                <option value="Bachelor of Science in Architecture">Bachelor of Science in Architecture</option>
                <option value="Bachelor of Science in Civil Engineering">Bachelor of Science in Civil Engineering</option>
                <option value="Bachelor of Science in Electrical Engineering">Bachelor of Science in Electrical Engineering</option>
                <option value="Bachelor of Science in Electronics Engineering">Bachelor of Science in Electronics Engineering</option>
                <option value="Bachelor of Science in Computer Engineering">Bachelor of Science in Computer Engineering</option>
                <option value="Bachelor of Science in Industrial Engineering">Bachelor of Science in Industrial Engineering</option>
                <option value="Bachelor of Science in Information Technology (Boni Campus)">Bachelor of Science in Information Technology (Boni Campus)</option>
                <option value="Bachelor of Science in Instrumentation and Control Engineering (Boni Campus)">Bachelor of Science in Instrumentation and Control Engineering (Boni Campus) </option>
                <option value="Bachelor of Science in Mechatronics">Bachelor of Science in Mechatronics</option>
                <option value="Bachelor of Science in Accountancy">Bachelor of Science in Accountancy</option>
                <option value="Bachelor of Science in Entrepreneurship">Bachelor of Science in Entrepreneurship</option>
                <option value="Bachelor of Science in Office Administration">Bachelor of Science in Office Administration</option>
                <option value="Bachelor of Science in Business Administration major in Operations Management">Bachelor of Science in Business Administration major in Operations Management</option>
                <option value="Bachelor of Science in Business Administration major in Marketing Management">Bachelor of Science in Business Administration major in Marketing Management</option>
                <option value="Bachelor of Science in Business Administration major in Financial Management">Bachelor of Science in Business Administration major in Financial Management</option>
                <option value="Bachelor of Science in Business Administration major in Human Resource Management">Bachelor of Science in Business Administration major in Human Resource Management</option>
                <option value="Bachelor of Secondary Education major in English">Bachelor of Secondary Education major in English</option>
                <option value="Bachelor of Secondary Education major in Math">Bachelor of Secondary Education major in Math</option>
                <option value="Bachelor of  Secondary Education major in Science (Boni Campus)">Bachelor of  Secondary Education major in Science (Boni Campus)</option>
                <option value="Bachelor of Secondary Education major in Social Studies">Bachelor of Secondary Education major in Social Studies</option>
                <option value="Bachelor of Secondary Education Major in Filipino">Bachelor of Secondary Education Major in Filipino</option>
                <option value="Bachelor of Technical-Vocational Teacher Education major in Animation">Bachelor of Technical-Vocational Teacher Education major in Animation</option>
                <option value="Bachelor of Technical-Vocational Teacher Education major in Computer Hardware Servicing">Bachelor of Technical-Vocational Teacher Education major in Computer Hardware Servicing</option>
                <option value="Bachelor or Technical-Vocational Teacher Education Major in Garments Fashion and Design">Bachelor or Technical-Vocational Teacher Education Major in Garments Fashion and Design</option>
                <option value="Bachelor or Technical-Vocational Teacher Education Major in Electronics Technology">Bachelor or Technical-Vocational Teacher Education Major in Electronics Technology</option>
                <option value="Bachelor or Technical-Vocational Teacher Education Major in Welding and Fabrications Technology">Bachelor or Technical-Vocational Teacher Education Major in Welding and Fabrications Technology</option>
                <option value="Bachelor of Science in Psychology">Bachelor of Science in Psychology</option>
                <option value="Bachelor of Arts in Political Science">Bachelor of Arts in Political Science</option>
                <option value="Bachelor of Science in Statistics (Boni Campus)">Bachelor of Science in Statistics (Boni Campus)</option>
                <option value="Bachelor of Science in Biology (Boni Campus)">Bachelor of Science in Biology (Boni Campus)</option>
                <option value="Bachelor of Science in Astronomy">Bachelor of Science in Astronomy</option>
                <option value="Bachelor of Science in Physical Education (Boni Campus)">Bachelor of Science in Physical Education (Boni Campus)</option>
            </select>
        

        
            <label for="email">Enter Email</label>
            <input type="email" name="email" placeholder="Email" required>

            <input type="reset" name="reset" placeholder="Clear" class="buttun">
        
            <input type="submit" name="register" value="Register" class="buttun" required>

            <p>Already have an account click? <a href="login.php">Log in</a></p>
           
        </form>
    </div>
</body>
</html>