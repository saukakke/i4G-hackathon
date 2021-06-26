<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="https://kit.fontawesome.com/1cbee15c00.js" crossorigin="anonymous"></script>
   
    <title>profile</title>
</head>
<body>

    <header>
        <i class="fas fa-bars desktopnone" id="bars"></i>
        <p><a href="../index.php">Go back</a>  <a href="logout.php">Logout</a></p>
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

        <h3>Profile Details</h3>
        <?php
        session_start();
            $conn = mysqli_connect('localhost','root','','db_health');
            $_SESSION['user']=$_GET['id'];
            $sql = "SELECT * from tbl_profile where email = '".$_SESSION['user']."'";

            $result = mysqli_query($conn, $sql);

            $num = mysqli_num_rows($result);
            if($num){
                while($row = mysqli_fetch_assoc($result)){
                echo '<input type="text" name="name" value="'.$row['name'].'" placeholder="Full Name"> <br><br>
                <input type="text" name="gender" value="'.$row['gender'].'" placeholder="Gender"> <br><br>
                <input type="text" name="location" value="'.$row['location'].'" placeholder="Location"> <br><br>
                <input type="text" name="state" value="'.$row['state'].'" placeholder="State"> <br><br>
                <input type="email" name="email"  value="'.$row['email'].'" placeholder="Email"> <br><br>
                <input type="text" name="issue" value="'.$row['issue'].'" placeholder="Health issues?"> <br><br>
                <input type="submit" class="btn" name="submit" value="Submit for review">';
            }}
        ?>
        </form>
    
    <script src="../index.js"></script>

</body>
</html>