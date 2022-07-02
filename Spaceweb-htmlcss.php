<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>ISR | Home</title>
</head>
<body data-spy="scroll" data-target=".navbar">   

    <style>
        .navbar{
            height: 7rem;
        }

        #carousel{
            height: 75rem;
        }
        #img1, #img2, #img3, #img4{
            height: 75rem;
        }
        
        #carousel{
                position: relative;
        }
        #item{
            position: absolute;
            z-index: -1;
        }
        #bg{
            position: absolute;
            z-index: 1;
            margin-top: 15rem;
            margin-left: 35rem;
        }
        #tagline{
            position: absolute;
            margin-top: 30rem;
            margin-left: 80rem;
            z-index: 1;
            color: white;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        #btn-home{
            position: absolute;
            z-index: 1;
            color: white;
            margin-top: 45rem;
            margin-left: 80rem;
            font-size: 2rem;
        }
        #btn-home:hover{
            background-color:rgb(6, 32, 117);
        }
        #tag-title{
            font-size: 5rem;
        }
        #tag-body{
            font-size: 3rem;
        }
        #projects{            
            background-color: #630031;
            width: 100%;
            padding-bottom: 2rem;
            margin-top: 0;
        }
        #projecth1{
            padding-top: 1.5rem;
            text-align: center;
            color: white;
        }
        .projtitle{
            color: white;
            text-align: center;
        }
        #blog{
            background-color: rgb(0, 0, 0);
            /* position: relative; */
            color: white;
            font-size: xx-large;
            /* z-index: -1; */
            padding-bottom: 3rem;
        }
        #blogvid{
            text-align: right;
        }
        
        #video1{
            position: relative;
            z-index: 1;
        }
        #play{
            position: absolute;
            z-index: 2;
            margin-top: 9rem;
            margin-left: -27rem;
        }
        #findplanet{
            width: auto;
        }
        #blogbtn1{
            margin-top: -11rem;
            margin-left: 22rem;
        }
        #newsat{
            width: auto;
        }
        #blogbtn2{
            margin-top: -2rem;
            margin-left: 16.5rem;
        }
        .footer{
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

    <div class="carousel slide" id="carousel" data-ride="carousel">
        <div class="container-fluid">
            <img src="images-space/satellite.png" id="bg">
            <div id="tagline">
                <p id="tag-title">Indian Space Research</p>
                <p id="tag-body">Sky is not the limit</p>
            </div>
            <a href="spaceabout.html" class="btn btn-primary" id="btn-home">Read More</a>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slite-to="0" class="active"></li>
            <li data-target="#carousel" data-slite-to="1"></li>
            <li data-target="#carousel" data-slite-to="2"></li>
            <li data-target="#carousel" data-slite-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images-space/bg-home.jpg" id="img1">
            </div>
            <div class="item">
                <img src="images-space/bg-home2.jpg" id="img2">
            </div>
            <div class="item">
                <img src="images-space/bg-home3.jpg" id="img3">
            </div>
            <div class="item">
                <img src="images-space/bg-home4.jpg" id="img4">
            </div>
        </div>

        <a href="#carousel" class="left carousel-control" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>

        <a href="#carousel" class="right carousel-control" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
    </div>

    <div id="projects">
        <h1 id="projecth1">Featured Projects</h1>
        <div class="row" id="projimg">
            <div class="col-lg-2"></div>
            <div class="col-lg-2">
                <a href="spaceproject.html"><img src="images-space/project-image1.jpg">
                <h3 class="projtitle">Mars Orbiter Mission(MOM)</h3></a>
            </div>
            <div class="col-lg-2">
                <a href="spaceproject.html"><img src="images-space/project-image2.jpg">
                <h3 class="projtitle">Chandrayaan-2</h3></a>
            </div>
            <div class="col-lg-2">
                <a href="spaceproject.html"><img src="images-space/project-image3.jpg">
                <h3 class="projtitle">AstroSat</h3></a>
            </div>
            <div class="col-lg-2">
                <a href="spaceproject.html"><img src="images-space/project-image4.jpg">
                    <h3 class="projtitle">LVM3-X/CARE</h3></a>                
            </div>
            <div class="col-lg-2"></div>
                        
        </div>
    </div>

    <div class="row" id="blog">

        <div class="col-lg-6" id="blogvid">
            <p>Featured Video</p>
            <a href="spaceblog.html"><img src="images-space/mars-rover.jpg" id="video1">
                <img src="images-space/play.png" id="play">
            </a>
            
                                       
        </div>

        <div class="col-lg-6">
            <p>Latest Blog</p>

            <div class="row">
        
                <div class="col-lg-2" id="bloglatest">                
                    <a href="spaceblog-info.html"><img src="images-space/finding-planet.jpg"></a>            
                </div>
                <div class="col-lg-4" id="findplanet">
                    <p>Finding Planet &nbsp; X-123</p><br>
                    <a href="spaceblog-info.html" class="btn btn-primary" id="blogbtn1">Read more</a>            
                </div> 
            </div>

            <div class="row">
                <div class="col-lg-2">
                    <a href="spaceblog-info.html"><img src="images-space/new-satellitedish.jpg"></a>
                </div>
                <div class="col-lg-4" id="newsat">
                    <p>New Satellite Dish</p>
                    <a href="spaceblog-info.html" class="btn btn-primary" id="blogbtn2">Read more</a>
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