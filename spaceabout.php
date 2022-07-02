<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>ISR | About</title>
</head>
<body>

    <style>
        #bg-about{
            position: relative;
        }
        #bg-about-img{
            width: 100%;
            height: 55rem;
            position: absolute;
            z-index: -1;
        }
        .about-body{
            position: absolute;
            z-index: 1;
            color: white;
            font-size: 2rem;
            margin-top: 15rem;
            width: 55%;
            text-align: center;
            margin-left: 30rem;
        }
        #about-h1{
            font-size: 5rem;
            margin-top: 9rem;            
        }
        #margin-bdy{
            margin-top: 23rem;
        }
        #launches{
            position: absolute;
            margin-top: 55rem;
            width: 100%;
        }
        .row{
            text-align: center;
        }
        #legends{
            position: absolute;
            margin-top: 70rem;
            background-color: black;
            width: 100%;
            padding-left: 2rem;
            padding-right: 2rem;
            padding-bottom: 3rem;
            color: white;
        }
        #legend-img{
            margin-top: 2rem;
        }
        #legend-info{
            padding-top: 2rem;
            font-size: large;
        }
        #spaceship{
            position: absolute;
            margin-top: 111.5rem;
            color: white;
            background-color: #630031;
            padding-right: 2rem;
            padding-bottom: 2rem;
        }
        #ship-info{
            margin-top: 2rem;
            font-size: large;
        }
        .footer{
            position: absolute;
            margin-top: 140rem;
            width: 100%;
            background-color: rgb(10, 10, 10, .5);
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

    <div id="bg-about">
        <img src="images-space/bg-about.jpg" id="bg-about-img">
        <p class="about-body" id="about-h1">About Us</p>
        <p class="about-body" id="margin-bdy">India decided to go to space when Indian National Committee for Space Research was set up by the Government of India in 1962. 
            With the visionary Dr Vikram Sarabhai at its helm, INCOSPAR set up the Thumba Equatorial Rocket Launching Station (TERLS) in Thiruvananthapuram for 
            upper atmospheric research. <br><br>
            Indian Space Research Organisation, formed in 1969, superseded the erstwhile INCOSPAR. Our vision is Harness space technology for national development, 
            while pursuing space science research and planetary exploration.
        </p>
    </div>
    <div id="launches">
        <div class="row">
            <div class="col-lg-1 info"></div>
            <div class="col-lg-2 info"><font size="10">101</font> <br> Spacecraft Missions</div>  
            <div class="col-lg-2 info"><font size="10">72</font> <br> Launch Missions</div>
            <div class="col-lg-2 info"><font size="10">9</font> <br> Student Satellites</div>
            <div class="col-lg-2 info"><font size="10">2</font> <br> Re-entry Missions</div>
            <div class="col-lg-2 info"><font size="10">269</font> <br> Foreign Satellites</div>
            <div class="col-lg-1"></div>
        </div>
              
    </div>

    <div id="legends">
        <h2 align="center">More Info</h2>
        <div class="row">
            <div class="col-lg-5">
                <img src="images-space/legendsofisro.jpg" id="legend-img">
            </div>
            <div class="col-lg-7" id="legend-info">The space research activities were initiated in our country during the early 1960’s, when applications using satellites were in experimental 
                stages even in the United States. With the live transmission of Tokyo Olympic Games across the Pacific by the American Satellite ‘Syncom-3’ demonstrating 
                the power of communication satellites, Dr. Vikram Sarabhai, the founding father of Indian space programme, quickly recognized the benefits of space 
                technologies for India. <br>
                Dr. Sarabhai was convinced and envisioned that the resources in space have the potential to address the real problems of man and society. As Director, Physical Research 
                Laboratory (PRL) located in Ahmedabad, Dr. Sarabhai convened an army of able and brilliant scientists, anthropologists, communicators and social scientists from all corners 
                of the country to spearhead the Indian space programme.The development and operationalisation of Polar Satellite Launch Vehicle (PSLV) and development of Geo-synchronous 
                Satellite Launch Vehicle (GSLV) were significant achievements
            </div>
        </div>
        
    </div>


    <div id="spaceship">
        <h2 align="center">Space Shuttles</h2>
        <div class="row">
            <div class="col-lg-5">
                <img src="images-space/space-shuttle.png" id="shuttle">
            </div>
            <div class="col-lg-7" id="ship-info">
                The first Indian spacecraft ‘Aryabhata’ was developed and was launched using a Soviet Launcher. Another major landmark was the development of the first launch vehicle SLV-3 with 
                a capability to place 40 kg in Low Earth Orbit (LEO), which had its first successful flight in 1980. Through the SLV-3 programme, competence was built up for the overall vehicle 
                design, mission design, material, hardware fabrication, solid propulsion technology, control power plants, avionics, vehicle integration checkout and launch operations. 
                Development of mult-istage rocket systems with appropriate control and guidance systems to orbit a satellite was a major landmark in our space programme.
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