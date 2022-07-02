<?php
    session_start();

    unset($_SESSION['login']);
    unset($_SESSION['lname']);
    unset($_SESSION['fname']);

    header("location:spacelogin.php?logout=true");
?>