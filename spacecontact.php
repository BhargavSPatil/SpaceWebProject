<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="js/jquery.js"></script>

    <title>ISR | Contact</title>

    <script type="text/javascript">

        $(document).ready(function(){
            $("#submit").click(function(){
                var fname=$("#fname").val();
                var email=$("#email").val();
                var message=$("#message").val();

                $.ajax({
                    type: "POST",
                    url: "sendmsg.php",
                    data: "fname="+fname+"&email="+email+"&message="+message,
                    success: function(html){
                        if(html == 'true'){
                            $("#add_err2").html('<div class="alert alert-success"> \
                                                Message Sent!. \ \
                                                </div>');

                            window.location.href = "Spaceweb-htmlcss.php";
                            
                        }else if(html == 'fname_long'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                Name must not exceed <b>50</b> characters.  \ \
                                                </div>');
                        }else if(html == 'fname_short'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                Name must exceed <strong>2</strong> characters.  \ \
                                                </div>');
                        }else if(html == 'email_long'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                Email must not exceed <strong>60</strong> characters.  \ \
                                                </div>');
                        }else if(html == 'email_short'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                Email must exceed <strong>2</strong> characters.  \ \
                                                </div>');
                        }else if(html == 'eformat'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                <strong>Email Address</strong> format is invalid.  \ \
                                                </div>');
                        }else if(html == 'message_long'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                Message must not exceed <strong>500</strong> characters.  \ \
                                                </div>');
                        }else if(html == 'message_short'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                Message must exceed <strong>2</strong> characters.  \ \
                                                </div>');
                        }else if(html == 'false'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                Message not delivered.  \ \
                                                </div>');
                        }else{
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
            display: block;
            align-items: center;
            justify-content: center;
        }
        .container{
            margin-top: 10rem;
            color: white;
            align-items: center;
        }
        #maphold{
            display: block;
            text-align: center;
            background-color: rgb(207, 199, 198);
            width: 800px;
            margin-left: 17rem;
            padding: 1rem;
        }
        #map{
            margin-top: 2rem;
            padding-bottom: 2rem;
        }
        .info{
            text-align: left;
            color: black;
            margin-left: 2rem;
            margin-bottom: -1px;
            font-size: medium;
        }
        #contact{
            margin-top: 5rem;
            font-size: 50px;
            text-align: center;
        }
        #contact-info{
            width: 40%;
            margin-top: 5rem;
            margin-left: 35rem;
        }
        .contact-details{
            font-size: 2.6rem;
        }
        .data{
            color: black;
        }
        .btn{
            margin-left: 18rem;
            margin-bottom: 5rem;
        }

        .footer{
            background-color: gray;
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
    
    <?php require_once 'spacenavbar.php'; ?>

    <div class="container">

        <div id="maphold">
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.497292780528!2d77.56524017841791!3d12.939999039474099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!
            4f13.1!3m3!1m2!1s0x3bae158b11e34d2f%3A0x5f4adbdbab8bd80f!2sBMS%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1630410735231!5m2!1sen!2sin" width="95%" 
            height="400" style="border:0;" allowfullscreen="" loading="lazy" align="middle"></iframe>
            <p class="info">Phone: 123.456.7890</p>
            <p class="info">Email: <a href="#">isr@isr.com</a></p>
            <p class="info">Address: #10 Antariksh Bhavan <br> Bangalore, Karnataka 560064</p>
        </div>

        <p id="contact">Contact</p>
        <div id="add_err2"></div>
        <div id="contact-info">
            <form role="form">
                <div class="form-group">
                    <label class="contact-details">Name:</label>
                    <input type="text" id="fname" class="form-control" placeholder="Name" maxlength="50">
                </div>
                <div class="form-group">
                    <label class="contact-details">Email Address</label>
                    <input type="email" id="email" class="form-control" placeholder="Email" maxlength="60">
                </div>
                <div class="form-group">
                    <label class="contact-details">Comment</label><br>
                    <textarea class="form-control" id="message" cols="66" rows="6" maxlength="500"></textarea>
                </div>

                <button type="submit" id="submit" class="btn btn-primary btn-lg">Submit</button>
            </form>
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