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
            
            $("#login").click(function(){
                email=$("#email").val();
                password=$("#password").val();

                $.ajax({
                    type: "POST",
                    url: "pcheck.php",
                    data: "email=" + email + "&password=" + password,
                    success: function(html){
                        if(html == 'true'){
                            $("#add_err2").html('<div class="alert alert-success"> \
                                                Authenticated. \ \
                                                </div>');

                            window.location.href = "spaceblog.php";
                            
                        }else if(html == 'hello'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                <b>Password</b> wrong.  \ \
                                                </div>');
                        }else if(html == 'false'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                <b>Authentication</b> failure.  \ \
                                                </div>');
                        }else{
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                <strong>Error</strong> processing request. Please try again. \ \
                                                </div>');
                        }
                    },
                    beforeSend: function(){
                        $("#add_err2").html('<div class="alert alert-success"> \
                                                Loading.... \ \
                                                </div>');

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
        #reglink{
            margin-top: 2rem;
        }
        #regbutton{
            font-size: medium;
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
                    <p class="regtitle">Login</p>

                    <div class="alert alert-danger"><b>You must be logged in to view the blog</b></div>

                    <div id="add_err2"></div>
                    <form role="form" method="POST">
                        <label>Email Address</label>
                        <input type="email" id="email" name="email" maxlength="30" class="form-control">
                        <label>Password</label>
                        <input type="password" id="password" name="password" maxlength="50" class="form-control">
                        <button type="submit" class="btn btn-default" id="login">Login</button>
                    </form>
                    <div id="reglink"><a href="spaceregister.php" class="btn btn-default" id="regbutton">Not a Member? Register here</a></div>
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