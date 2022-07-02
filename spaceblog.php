<?php
    session_start();

    if(isset($_SESSION['login'])){
        $fname=$_SESSION['fname'];
        $lname=$_SESSION['lname'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>ISR | Blog</title>
</head>
<body>

    <style>
        body{
            background-color: black;
        }
        .container{
            margin-top: 12rem;
        }
        .blogging{
            font-size: 50px;
            color: white;
            text-align: center;
        }
        .blog-info{
            margin-top: 7rem;
            color: white;
        }
        .blog-head{
            font-size: xx-large;
        }
        .blog-body{
            font-size: large;
        }
        .blog-btn{
            margin-top: 2rem;
            margin-bottom: 3rem;
        }
        .blog-body-info{
            margin-top: -1rem;
            font-size: medium;
            text-align: justify;
        }
        #body-info2{
            margin-bottom: 5rem;
        }
        .blog-posts{
            margin-top: -2rem;
            font-size: 45px;
            text-align: center;
        }
        .sub-head{
            display: inline;
            font-size: x-large;
            margin-left: 1rem;
        }
        .sub-body{
            padding-top: .5em;
            margin-top: -3rem;
            margin-left: 9.5rem;
            font-size: small;
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
        <p class="blogging">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="spacelogout.php">Logout</a></p>
        <p class="blogging">ISR | Blog</p>
        <div class="row blog-info">
            <div class="col-lg-7">
                <img src="images-space/astronaut.jpg">
                <p class="blog-head">This is the Heading of Blog-1</p>
                <p class="blog-body">This is the information regarding Blog-1. <br>
                    <button class="btn btn-info blog-btn" data-toggle="collapse" data-target="#body-info1">Read More</button>
                    <div class="collapse blog-body-info" id="body-info1">
                        Following the docking of the Multipurpose Laboratory Module (MLM), named Nauka, to the International Space Station at 9:29 am EDT, Russian cosmonauts 
                        aboard the space station conducted leak checks between Nauka and the service module. At 12:45 pm, the flight control team noticed the unplanned firing 
                        of MLM thrusters that caused the station to move out of orientation. Ground teams have regained attitude control and the motion of the space station 
                        is stable.

                        The crew was never and is not in any danger, and flight controllers in Mission Control Houston are monitoring the status of the space station. Teams 
                        are also monitoring the impact to tomorrow’s launch of the Boeing Starliner spacecraft. Updates on the space station will be provided on NASA.gov 
                        and the agency’s social media pages.                        
                    </div>
                </p>
                <hr>
                <img src="images-space/martianrover-journey.jpg">
                <p class="blog-head">This is Heading of Blog-2</p>
                <p class="blog-body">This is the information regarding Blog-2 <br>
                    <button class="btn btn-info blog-btn" data-toggle="collapse" data-target="#body-info2">Read More</button>
                    <div class="collapse blog-body-info" id="body-info2">
                        The uncrewed Dragon spacecraft has separated from the second stage of the Falcon 9 rocket, continuing on its solo journey to the International Space 
                        Station to deliver crew supplies, vehicle hardware, and critical materials to support multiple science and research investigations that will take 
                        place aboard the orbiting laboratory.

                        Dragon is scheduled to arrive at the space station on Saturday, June 5. The spacecraft will autonomously dock to the station’s Harmony module, while 
                        Expedition 65 Flight Engineers Shane Kimbrough and Megan McArthur of NASA monitor its arrival. Dragon is expected to spend more than a month attached 
                        to the space station before autonomously undocking and returning to Earth, splashing down in the Atlantic Ocean with research and return cargo.
                    </div>
                </p>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <p class="blog-posts">Featured Posts</p>
                <a href="spaceblog-info.php"><img src="images-space/moon-satellite.jpg"></a>
                <p class="blog-head" align="center">Chandrayaan 2</p>
                <br><hr>
                <p class="blog-posts">Recent Posts</p>
                <a href="spaceblog-info.php"><img src="images-space/alien-life.jpg"></a>
                <p class="sub-head">Alien Life</p>
                <p class="sub-body">March 8,2021</p>
                <a href="spaceblog-info.php"><img src="images-space/galaxy.jpg"></a>
                <p class="sub-head">The Galaxy</p>
                <p class="sub-body">January 1,2021</p>
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

<?php

    }else{
        header("location:spacelogin.php");
    }
        
?>