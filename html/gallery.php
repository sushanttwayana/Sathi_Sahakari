<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Gallery</title>
<link rel="stylesheet" href="../css/gallery.css">
<link rel="stylesheet" href="../css/home.css">
<!-- favicon  -->
<link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
<style>
    /* styling for footer */

    footer {
        width:100%;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: -1;
        height:70px;
        padding-top:20px ;
    }

    .copy{
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    #copyright {
        /* color: rgba(0, 0, 0, 0.792); */
        color: rgb(0, 0, 0);
        font-size: 14px;
    }
</style>
</head>
<body>
    <header class="header">

        <section class="theme">
            
           <img src="../images/sathi sahakari.png" width="100%" height="140px" alt="theme">
        
        <div class="theme">
    
            <ul class="icons">
                <li>
                    <a href="https://www.facebook.com">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
    
        </div>
        
    
    </section>
    
            <nav>
                <div class="center">
        
                    <!-- <h2 class="text">Navbar</h2> -->
                    
                    <div class="nav-header">
                        <button id="btn" class="nav-toggle">
                            <i class="fas fa-bars" ></i></button>
                    </div>
                
        
                <ul class="links">
        
                    <li>
                        <a href="home.php" target="_self">HOME</a>
                    </li>
        
                    <li>
                        <a href="about.php" target="_self">ABOUT US</a>
                    </li>
        
                    <li>
                        <a href="services.php" target="_self">SERVICES</a>
                    </li>
        
                    <li>
                        <a href="#" target="_self">NEWS & ACTIVITES</a>
                    </li>
    
                    <li>
                        <a href="../html/gallery.php" target="_self">GALLERY</a>
                    </li>
    
                    <li>
                        <a href="../html/login.php" target="_self">LOGIN</a>
                    </li>
    
                    <li>
                        <a href="../html/registration.php" target="_self">REGISTER</a>
                    </li>
    
                    <li>
                        <a href="../html/contact.php" target="_self">CONATCT US</a>
                    </li>
    
                </ul>
        
               
            </div>
        </nav>
     </header>
    
        <!-- header close -->

    <div class="gallery">
        <div class="title">
            <h3>OUR GALLERY</h3>
        </div>
        <div class="scope">
            <span style="--i:1;"><img src="../images/gallery/firstimg.jpg" alt="not found"></span>
            <span style="--i:2;"><img src="../images/gallery/secondimg.jpg" alt="not found"></span>
            <span style="--i:3;"><img src="../images/gallery/thirdimg.jpg" alt="not found"></span>
            <span style="--i:4;"><img src="../images/gallery/fourthimg.jpg" alt="not found"></span>
            <span style="--i:5;"><img src="../images/gallery/fifthimg.jpg" alt="not found"></span>
            <span style="--i:6;"><img src="../images/gallery/sixthimg.jpg" alt="not found"></span>
            <span style="--i:7;"><img src="../images/gallery/seventhimg.jpg" alt="not found"></span>
            <span style="--i:8;"><img src="../images/gallery/eighthimg.jpg" alt="not found"></span>
            <span style="--i:8;"><img src="../images/gallery/ninthimg.jpg" alt="not found"></span>
        </div>
        </div>
        <!-- footer -->
        <div id="footer">
            <footer>
                <div class="copy">
                    <div id="copyright">
                        <hr style="height:1px;border-width:0;background-color:rgba(255, 255, 255, 0.171)">
                        <br>
                        <i class="fa fa-copyright"></i> &nbsp; Sathi Sahakari - 2022 All rights reserved 
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
