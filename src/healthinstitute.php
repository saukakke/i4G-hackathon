<?php
        $conn = mysqli_connect('localhost', 'root', '', 'db_health') or die("Can't connect");
            if (isset($_POST['submit'])){
                $name = $_POST['name'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $email = $_POST['email'];

                $location = "../upload/";
                if(isset($_FILES['file']))
                {
                    $image = $_FILES['file']['name'];
                    $file = move_uploaded_file($_FILES['file']['tmp_name'], $location.$image);
                    
                    if($file){
                        $new_address = mysqli_real_escape_string($conn, $address);
                        $new_city = mysqli_real_escape_string($conn, $city);
                        $new_state = mysqli_real_escape_string($conn, $state);
                        $new_email = mysqli_real_escape_string($conn, $email);
                        $new_name = mysqli_real_escape_string($conn, $name);
                        $new_image_name = $location.$image;
                        
                        $sql = "INSERT INTO tbl_hospital(name, address, city, state, email, image) values ('$new_name', '$new_address', '$new_city', '$new_state', '$new_email', '$new_image_name')";


                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            echo "<script>alert('Submition Successful')</script>";
                        }
                        else
                        {
                            echo "<script>alert('Submition Unsuccessful')</script>";
                        }
                    }else{
                        echo "<script>alert('Can\'t Submit')</script>";
                    }
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
    <title>health institute</title>
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

        <h3>Emergency Unit</h3>

        <input type="text" name="name" placeholder="Name or Hospital name"> <br><br>
        <input type="text" name="address" placeholder="Address"> <br><br>
        <input type="text" name="city" placeholder="City"> <br><br>
        <input type="text" name="state" placeholder="State"> <br><br>
        <input type="email" name="email" placeholder="Email"> <br><br>
        <input type="file" name="file" placeholder="Profession Certificate (Upload)"> <br><br>
        
        <input type="submit" name="submit" value="Submit for review" />
        

    </form>
    
    <script src="../index.js"></script>
    
</body>
</html>