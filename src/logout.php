<?php
    session_start();
    $_SESSION['user']=null;
    session_destroy($_SESSION['user']);
    session_destroy();
    header("Location: ../index.php");
?>