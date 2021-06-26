<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect('localhost','root','','db_health') or die('can\'t connect');
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $location = mysqli_real_escape_string($conn, $_POST['location']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $issue = mysqli_real_escape_string($conn, $_POST['issue']);

        $sql = "INSERT into tbl_location(address,city,state,email,postal_code,name) values('$name','$gender','$location','$state','$email','$issue')";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>alert('Profile uploaded successfully')</script>";
        }else{
            echo "<script>alert('Profile upload unsuccessfully')</script>";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="https://kit.fontawesome.com/1cbee15c00.js" crossorigin="anonymous"></script>
   
    <title>location</title>
</head>
<body>

    <header>
        <i class="fas fa-bars desktopnone" id="bars"></i>
        <p><a href="../index.php">Go back</a></p>
    </header>

    <nav class="desktopnone" id="navbar">
        <p id="cancel"><a href="#">Cancel</a></p>
        <li><a href="login.php">Profile</a></li>
        <li><a href="register.php">Register as an <br> emergency unit</a></li>
        <li><a href="emergency.php">Got an <br> emergency</a></li>
        <li><a href="tips.php">First aid tips</a></li>
        <li><a href="#">Share health <br> tips</a></li>
        <li><a href="feedback.php">Feedback</a></li>
    </nav>

    <form action="<?php $_PHP_SELF; ?>" method="POST" enctype="multipart/form-data">

        <h3>My Details</h3>

        <input type="text" name="name" placeholder="Address"> <br><br>
        <input type="text" name="gender" placeholder="City"> <br><br>
        <input type="text" name="location" placeholder="State"> <br><br>
        <input type="email" name="state" placeholder="Email"> <br><br>
        <input type="number" name="email" placeholder="Postal Code (optional)"> <br><br>
        <input type="text" name="issue" placeholder="Full Name (optional)"> <br><br>
        <input type="submit" name="submit" value="Submit for review" />

        </form>
    
    <script src="../index.js"></script>

</body>
</html>