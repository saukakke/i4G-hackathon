<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="https://kit.fontawesome.com/1cbee15c00.js" crossorigin="anonymous"></script>
   
    <title>Document</title>
</head>
<body>

    <header>
        <i class="fas fa-bars desktopnone" id="bars"></i>
        <p><a href="../index.php">Go back</a></p>
    </header>

    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'db_health') or mysqli_error("Can't Connect to database.");
        if(isset($_POST['submit'])){
            $name = $_POST['text'];
            $sql = "INSERT into tbl_feedback (message) values('$name')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<script>alert('Feedback submitted!')</script>";
            }
            else{
                echo "<script>alert('Feedback not submitted!')</script>";
            }
        }
    ?>

    <nav class="desktopnone" id="navbar">
        <p id="cancel"><a href="#">Cancel</a></p>
        <li><a href="login.php">Profile</a></li>
        <li><a href="register.php">Register as an <br> emergency unit</a></li>
        <li><a href="emergency.php">Got an <br> emergency</a></li>
        <li><a href="tips.php">First aid tips</a></li>
        <li><a href="#">Share health <br> tips</a></li>
        <li><a href="#">Feedback</a></li>
    </nav>

    <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipar/form-data">
    <section class="section--7">
        <h3>Feedback</h3>
        <textarea name="text" placeholder="Let us know how we can improve">
        </textarea>
        
        <input type="submit" value="Send Feedback" name="submit"/>
        
    </section>
    </form>
    

    <script src="../index.js"></script>

</body>
</htlm>