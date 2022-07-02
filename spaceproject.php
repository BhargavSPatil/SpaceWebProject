<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>ISR | Projects</title>
</head>
<body>

    <style>

        body{
            background-color: black;
            align-items: center;
        }
                
        .video{
            position: relative;
            margin-top: -5rem;
            margin-left: 40rem;
            height: 400px;
        } 
        .video iframe{ 
            position: absolute; 
            width: 50%;
            height: 100%;
        }

        #projects{
            margin-top: 15rem;
            padding: 3rem;
        }
        #projhead{
            padding-top: 5rem;
            font-size: 50px;
            text-align: center;
            color: white;
        }
        #proj1{
            margin-top: 8rem;
        }
        .subprojhead{
            font-size: 3rem;
            color: white;
        }
        #rover-img{
            text-align: center;
        }
        .proj-info{
            font-size: large;
            color: white;
        }
        #proj2{
            margin-top: 7rem;
        }
        #moon-landing{
            text-align: center;
        }
        #proj3{
            margin-top: 7rem;
        }
        #astrosat{
            text-align: center;
        }
        #proj4{
            margin-top: 7rem;
        }
        #LVM3-X{
            text-align: center;
        }
        .footer{
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

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">          
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#nav1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="Spaceweb-htmlcss.php" class="navbar-brand" id="nav-title"><h4>MySpaceStation</h4></a>
            </div>

            <div class="collapse navbar-collapse" id="nav1">
                <ul class="nav navbar-nav" id="nav2">
                    <li><a href="Spaceweb-htmlcss.php"><h4>Home</h4></a></li>
                    <li><a href="spaceabout.php"><h4>About</h4></a></li>
                    <li><a href="spaceproject.php" class="dropdown-toggle" data-toggle="dropdown"><h4>Projects <span class="caret"></span></h4></a>
                        <ul class="dropdown-menu">
                            <li><a href="#proj1">MOM</a></li>
                            <li><a href="#proj2">Chandrayaan-2</a></li>
                            <li><a href="#proj3">AstroSat</a></li>
                            <li><a href="#proj4">LVM3-X</a></li>
                        </ul>
                    </li>
                    <li><a href="spaceblog.php"><h4>Blog</h4></a></li>
                    <li><a href="spacecontact.php"><h4>Contact</h4></a></li>
                </ul>
            </div>            
        </div>
    </nav>
    
    <div class="video col-lg-12">
        <iframe src='https://www.youtube.com/embed/uyftA1qnB_0' frameborder='0' allowfullscreen></iframe>
    </div>

    <div id="projects">
        <p id="projhead">Projects</p>
        <div class="row" id="proj1">            
            <div class="col-lg-4" id="rover-img">
                <img src="images-space/curious-rover.jpg" id="marsrover">
            </div>
            <div class="col-lg-8">
                <p class="subprojhead">Mars Orbiter Mission (MOM)</p>
                <div class="proj-info">
                    Marking India's first venture into the interplanetary space, MOM will explore and observe Mars surface features, morphology, mineralogy 
                    and the Martian atmosphere. Further, a specific search for methane in the Martian atmosphere will provide information about the possibility 
                    or the past existence of life on the planet. <br>
                    Once India decided to go to Mars, ISRO had no time to lose as the nearest launch window was only a few months away and it could not afford 
                    to lose the chance, given the next launch would present itself after over 780 days, in 2016. Thus, mission planning, manufacturing the 
                    spacecraft and the launch vehicle and readying the support systems took place swiftly.
                </div>
            </div>
        </div>

        <div class="row" id="proj2">
            <div class="col-lg-4" id="moon-landing">
                <img src="images-space/chandrayaan2.jpg">
            </div>
            <div class="col-lg-8">
                <p class="subprojhead">Chandrayaan 2</p>
                <div class="proj-info">
                    Chandrayaan-2 mission is a highly complex mission, which represents a significant technological leap compared to the previous missions of ISRO, 
                    which brought together an Orbiter, Lander and Rover with the goal of exploring south pole of the Moon. This is a unique mission which aims 
                    at studying not just one area of the Moon but all the areas combining the exosphere, the surface as well as the sub-surface of the moon in 
                    a single mission. <br>
                    Moon is a promising test bed to demonstrate technologies required for deep-space missions. Chandrayaan-2 aims for enhancing our understanding 
                    of the Moon, stimulate the advancement of technology, and inspire a future generation of explorers and scientists.
                </div>
            </div>
        </div>

        <div class="row" id="proj3">
            <div class="col-lg-4" id="astrosat">
                <img src="images-space/astrosat.jpg">
            </div>
            <div class="col-lg-8">
                <p class="subprojhead">AstroSat</p>
                <div class="proj-info">
                    AstroSat is the first dedicated Indian astronomy mission aimed at studying celestial sources in X-ray, optical and UV spectral bands simultaneously. 
                    The payloads cover the energy bands of Ultraviolet (Near and Far), limited optical and X-ray regime (0.3 keV to 100keV). This mission enables the 
                    simultaneous multi-wavelength observations of various astronomical objects with a single satellite. <br>
                    AstroSat with a lift-off mass of 1515 kg was launched on September 28, 2015 into a 650 km orbit inclined at an angle of 6 deg to the equator by 
                    PSLV-C30 from Satish Dhawan Space Centre, Sriharikota. The minimum useful life of the AstroSat mission is expected to be 5 years.
                </div>
            </div>
        </div>

        <div class="row" id="proj4">
            <div class="col-lg-4" id="LVM3-X">
                <img src="images-space/lvm3-x.jpg">
            </div>
            <div class="col-lg-8">
                <p class="subprojhead">LVM3-X/CARE Mission</p>
                <div class="proj-info">
                    LVM3-X/CARE Mission, the first experimental suborbital flight of India's latest generation Launch Vehicle- LVM3, lifted off from Satish Dhawan 
                    Space Centre SHAR, Sriharikota, on December 18, 2014 and injected the Crew Module CARE at an altitude of 126km. The Crew Module splashed down near 
                    Andaman and Nicobar Islands in the Bay of Bengal about twenty minutes after lift off. The Crew Module was recovered by the Indian Coast Guard. 
                    This flight of LVM3 had a passive cryogenic stage.
                </div>
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