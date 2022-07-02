<?php

    include_once "spacecontact.php";

    $fname=mysqli_real_escape_string($mysqli, $_POST['fname']);
    $email=mysqli_real_escape_string($mysqli, $_POST['email']);
    $message=mysqli_real_escape_string($mysqli, $_POST['message']);

    $email2="bhargavspatil8055@gmail.com";
    $subject="Test Message";

    if(strlen($fname)>50){
        echo 'fname_long';
    }elseif(strlen($fname)<3){
        echo 'fname_short';
    }elseif(strlen($email)>60){
        echo 'email_long';
    }elseif(strlen($email)<2){
        echo 'email_short';
    }elseif(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        echo 'eformat';
    }elseif(strlen($message)>500){
        echo 'pshort';
    }elseif(strlen($message)<3){
        echo 'pshort';
    }else{

        $headers = "From: $email \n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";

        if( mail($email2, $subject, $message, $headers) ){
            echo "true";
        }else{
            echo 'false';
        }

    }

?>