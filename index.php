<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="https://kit.fontawesome.com/1cbee15c00.js" crossorigin="anonymous"></script>

    <title>Emergency Service</title>
</head>
<body>

    <header class="desktopnone">
        <i class="fas fa-bars desktopnone" id="bars"></i>
    </header>
    
    <nav class="desktopnone" id="navbar">
        <p id="cancel"><a href="#">Cancel</a></p>
        <li><a href="#">Profile</a></li>
        <li><a href="src/register.php">Register as an <br> emergency unit</a></li>
        <li><a href="src/emergency.php">Got an <br> emergency</a></li>
        <li><a href="src/tips.php">First aid tips</a></li>
        <li><a href="#">Share health <br> tips</a></li>
        <li><a href="src/feedback.php">Feedback</a></li>
    </nav>

    
    <nav class="mobilenone" id="desktopnav">
        <li><a href="src/login.php">Profile</a></li>
        <li><a href="src/register.php">Register as an <br> emergency unit</a></li>
        <li><a href="src/emergency.php">Got an <br> emergency</a></li>
        <li><a href="src/tips.php">First aid tips</a></li>
        <li><a href="#">Share health <br> tips</a></li>
        <li><a href="src/feedback.php">Feedback</a></li>
    </nav>

    <main>

        <section class="section--1">
            <h3><a href="src/tips.php"> emergency tips</a></h3>
        </section>

        <section class="section--2">
            <button type="button" class="btn">
                <a href="src/emergency.php">Got an Emergency</a>
            </button>
            <button type="button" class="btn">
                <a href="src/tips.php">Get Medical Tips</a>
            </button>
        </section>

        <section class="section--3">
            <h3>Posts</h3>
            <div class="sub-section--3">
                <h3><a href="#">blood test</a></h3>
            </div>
        </section>

    </main>

    <script src="index.js"></script>
    
</body>
</html>