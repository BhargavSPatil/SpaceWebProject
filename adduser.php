<?php
    session_start();

    $mysqli = new mysqli('localhost', 'root', 'bsp@8055', 'myspacestation');

    if($mysqli -> connect_error){
        die('Error: ('. $mysqli -> connect_errno . ') ' . $mysqli->connect_error);
    }

    $fname=mysqli_real_escape_string($mysqli, $_POST['fname']);                     //mysqli_real_escape_string removes/escapes any special characters entered by the user
    $lname=mysqli_real_escape_string($mysqli, $_POST['lname']);
    $email=mysqli_real_escape_string($mysqli, $_POST['email']);
    $password=mysqli_real_escape_string($mysqli, $_POST['password']);

    //Validation

    if(strlen($fname)<2){
        echo 'fname';
    }elseif(strlen($lname)<2){
        echo 'lname';
    }elseif(strlen($email)<=4){
        echo 'eshort';
    }elseif(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        echo 'eformat';
    }elseif(strlen($password)<=4){
        echo 'pshort';
    }else{
        //password encryption

        $spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));                 //higher the cost value stronger the encryption. But if cost value is very high it slows down the website

        $query = "SELECT * FROM members WHERE email='$email'";
        $result= mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        $num_row=mysqli_num_rows($result);
        $row=mysqli_fetch_row($result);

            if($num_row<1){
                $insert_row=$mysqli->query("INSERT INTO members (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$spassword')");

                if($insert_row){
                    $_SESSION['login'] = $mysqli->insert_id;                //user info after login is stores in session variables as follows
                    $_SESSION['fname'] = $fname;
                    $_SESSION['lname'] = $lname;

                    echo 'true';
                }
            }else{
                echo 'false';
            }

    }
?>