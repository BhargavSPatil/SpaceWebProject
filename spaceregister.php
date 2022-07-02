<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="js/jquery.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){
            $("#register").click(function(){
                fname=$("#fname").val();
                lname=$("#lname").val();
                email=$("#email").val();
                password=$("#password").val();

                $.ajax({
                    type: "POST",
                    url: "adduser.php",
                    data: "fname="+fname+"&lname="+lname+"&email="+email+"&password="+password,
                    success: function(html){
                        if(html == 'true'){
                            $("#add_err2").html('<div class="alert alert-success"> \
                                                Registered Successfully. \ \
                                                </div>');

                            window.location.href = "Spaceweb-htmlcss.php";
                        }else if(html == 'false'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                Email address already in system.  \ \
                                                </div>');
                        }else if(html == 'fname'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                <strong>First Name</strong> is required.  \ \
                                                </div>');
                        }else if(html == 'lname'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                <strong>Last Name</strong> is required.  \ \
                                                </div>');
                        }else if(html == 'eshort'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                <strong>Email Address</strong> is required.  \ \
                                                </div>');
                        }else if(html == 'eformat'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                <strong>Email Address</strong> format is invalid.  \ \
                                                </div>');
                        }else if(html == 'pshort'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                <strong>Password</strong> must be atleast 4 characters.  \ \
                                                </div>');
                        }
                        else{
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                <strong>Error</strong> processing request. Please try again. \ \
                                                </div>');
                        }
                    },
                    beforeSend: function(){
                        $("#add_err2").html("Loading....");
                    }
                });
                return false;
            });
        });

    </script>
</head>
<body>

    <style>

        body{
            background-color: black;
        }
        .container{
            margin-top: 10rem;
            color: white;
        }
        .regtitle{
            font-size: 5rem;
            text-align: center;
            margin-bottom: 3rem;
        }
        label{
            font-size: 2.5rem;
        }
        input{
            margin-bottom: 2rem;
        }
        #register{
            font-size: large;
        }
        .footer{
            margin-top: 7rem;
            width: 100%;
            background-color: grey;
            text-align: center;
            padding: 1.5px;
        }
        #follow{
            display: inline;
            font-size: 3rem;
        }
        .medialink{
            margin-left: 5rem;
        }
    </style>

    <?php require "spacenavbar.php"; ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <p class="regtitle">Indian Space Research</p>
                    <p class="regtitle">Register</p>

                    <div id="add_err2"></div>
                    <form role="form">
                        <label>First name:</label>
                        <input type="text" id="fname" name="fname" maxlength="20" class="form-control">
                        <label>Last name</label>
                        <input type="text" id="lname" name="lname" maxlength="20" class="form-control">
                        <label>Email Address</label>
                        <input type="email" id="email" name="email" maxlength="30" class="form-control">
                        <label>Password</label>
                        <input type="password" id="password" name="password" maxlength="50" class="form-control">
                        <button type="submit" class="btn btn-default" id="register">Register</button>
                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p id="follow">Follow Us On:</p>
        <a href="#"><img src="images-space/iconf.png" class="medialink"></a>
        <a href="#"><img src="images-space/icong.png" class="medialink"></a>   
        <a href="#"><img src="images-space/iconp.png" class="medialink"></a>
        <a href="#"><img src="images-space/icont.png" class="medialink"></a> 
            
        
        <br>
        <h3>Copyright &copy; All Rights Reserved</h>
    </div>

</body>
</html>