<?php
    session_start();
    
    $email=$_POST["email"];
    $password=$_POST["password"];

    $mysqli = new mysqli('localhost', 'root', 'bsp@8055', 'myspacestation');

    if($mysqli -> connect_error){
        die('Error: ('. $mysqli -> connect_errno . ') ' . $mysqli->connect_error);
    }

    $query = "SELECT * FROM members WHERE email='$email' ";
    $result = mysqli_query($mysqli, $query);
    $num_row = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    if($num_row >= 1){
       
        if (password_verify($password, $row["password"])){

            $_SESSION['login'] = $row['id'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];

            echo 'true';

        }else{
            echo 'hello';
        }
    }else{
        echo 'false';
    }
?>