<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>ISR | Posts</title>
</head>
<body>

    <style>
        body{
            background-color: black;
        }
        .container{
            margin-top: 12rem;
        }
        #blogging{
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
        #blog-date{
            margin-top: -1rem;
            margin-bottom: 3rem;
        }
        .blog-body{
            font-size: large;
        }
        .blog-body-info{
            font-size: medium;
            text-align: justify;
        }
        .blog-posts{
            margin-top: -2rem;
            font-size: 45px;
            text-align: center;
        }
        .images{
            height: 25em;
            width: 53em;
        }
        .img-thumbnail{
            display: inline-block;
        }
        .fig{
            margin-left: 1rem;
            display: inline;
        }
        .fig-caption{
            font-size: large;
            margin-bottom: -.5rem;
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
        <p id="blogging">Blog</p>
        <div class="row blog-info">
            <div class="col-lg-7">
                <p class="blog-posts">All Posts</p>                
                <div class="row images">
                    <div class="col-lg-4">
                        <figure>
                            <img class="img-thumbnail" src="images-space/alien-life6.jpg">
                            <figcaption class="fig">
                                <p class="fig-caption">Alien Life</p> 
                                <p>Mar 8, 2021</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-lg-4">
                        <figure>
                            <img class="img-thumbnail" src="images-space/galaxy3.jpg">
                            <figcaption class="fig">    
                                <p class="fig-caption">The Galaxy</p> 
                                <p>Jan 1, 2021</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-lg-4">
                        <figure>
                            <img class="img-thumbnail" src="images-space/gslv-liftoff.jpg">
                            <figcaption class="fig">    
                                <p class="fig-caption">GSLV-F08 Liftoff</p> 
                                <p>Sep 1, 2020</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="row images">
                    <div class="col-lg-4">
                        <figure>
                            <img class="img-thumbnail" src="images-space/gslv-prep.jpg">
                            <figcaption class="fig">    
                                <p class="fig-caption">GSLV-F08 Preparation</p> 
                                <p>Mar 20, 2020</p>
                            </figcaption>                            
                        </figure>
                    </div>

                    <div class="col-lg-4">
                        <figure>
                            <img class="img-thumbnail" src="images-space/gslv-sat.jpg">
                            <figcaption class="fig">    
                                <p class="fig-caption">GSLV Satellite Integration</p> 
                                <p>Nov 20, 2019</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-lg-4">
                        <figure>
                            <img class="img-thumbnail" src="images-space/vikramsarabhai.jpg">
                            <figcaption class="fig">
                                <p class="fig-caption">Vikram Sarabhai Day</p> 
                                <p>Aug 12, 2019</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="row images">
                    <div class="col-lg-4">
                        <figure>                            
                            <img class="img-thumbnail" src="images-space/moon-satellite1.jpg">
                            <figcaption class="fig">
                                <p class="fig-caption">Chandrayaan 2</p> 
                                <p>Jul 22, 2019</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-lg-4">
                        <figure>
                            <img class="img-thumbnail" src="images-space/isro-meet.jpg">
                            <figcaption class="fig">    
                                <p class="fig-caption">National Meet Gallery</p> 
                                <p>Jun 24, 2019</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-lg-4">
                        <figure>
                            <img class="img-thumbnail" src="images-space/isro-members.jpg">
                            <figcaption class="fig">    
                                <p class="fig-caption">National Meet Gallery</p> 
                                <p>Jun 23, 2019</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="row images">
                    <div class="col-lg-4">
                        <figure>
                            <img class="img-thumbnail" src="images-space/mars-img.jpg">
                            <figcaption class="fig">
                                <p class="fig-caption">Mars Image from Mom</p> 
                                <p>May 17, 2017</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-lg-4">
                        <figure>
                            <img class="img-thumbnail" src="images-space/wswcamp.jpg">
                            <figcaption class="fig">    
                                <p class="fig-caption">WSW Celebration at ISAC</p> 
                                <p>Feb 28, 2017</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-lg-4">
                        <figure>
                            <img class="img-thumbnail" src="images-space/pslv.jpg">
                            <figcaption class="fig">    
                                <p class="fig-caption">PSLV C21 Liftoff</p> 
                                <p>Oct 18, 2016</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <p class="blog-posts">Featured Posts</p>
                <img src="images-space/moon-satellite.jpg">
                <p class="blog-head" align="center">Chandrayaan 2</p>
                <br><hr>
                <p class="blog-posts">Recent Posts</p>
                <img src="images-space/alien-life.jpg">
                <p class="sub-head">Alien Life</p>
                <p class="sub-body">March 8,2021</p>
                <img src="images-space/galaxy.jpg">
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