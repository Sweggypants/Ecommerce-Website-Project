<html
    
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Roomba s9+</title>
        <link rel="stylesheet" href="css(Robot Vacuums)/Roombas9+.css">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        
        <div id ="header">
            <div class="container">
                <nav>
                    <img src="img/logo.png" class="logo">
                    <ul>
                        <li><a href="HomePage.php">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="cctv.php">CCTV</a></li>
                        <li><a href="SmartDoorlocks.php">Smart Doorlocks</a></li>
                        <li><a href="RobotVacuums.php">Robot Vacuums</a></li>
                        <li><a href="SmartSpeakers.php">Smart Speakers </a></li>
                        <li><a href="Login.php">Login/Logout </a></li>   
                        <li><a href="shoppingcart.php">Cart</a>
                    </ul>
                                        
                </nav>                                
                
            </div>
        </div>
      
        <video autoplay muted loop id="myVideo">
        <source src="Videos/Roomba s9+.mp4" type="video/mp4">
  
        </video>
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="img/Roombas9+.jpg" width="100%"
                     id="ProductImg">
                    <div class="small-img-row">
                        <div class="small-img-col">
                        <img src="img/Roombas9+.jpg" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/Roomba s9+.webp" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/Roomba s9+ side.webp" 
                             width="100%" class="small-img">
                    </div> 
                        <div class="small-img-col">
                        <img src="img/Roomba s9+ side1.webp" 
                             width="100%" class="small-img">
                    </div> 
                    </div>
                </div>
            </div>
            
        
            <div class="col-2">
                <p>Robot Vacuums/Roomba s9+</p>
                <h1> Roomba s9+ </h1>
                <form action="insertRoomba.php" method="post"> 
                <h4> $999.00 </h4>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="black" id="black">Black
                <br>
                
                <input type="number" name="quantity" value="1">
                <input type="submit" value="Add To Cart" class="btn" style="width: 145px;">
                </form>
                <h3>Product Details<i class="fa fa-indent"></i></h3>
                <br>
                <p>PerfectEdge® Technology with advanced 
                    sensors, a specially designed 
                    Corner Brush and 30% wider* Dual Multi-Surface Rubber 
                    Brushes optimize cleaning deep into corners and along edges. And with 40x the suction power*, 
                    the superior 3-Stage Cleaning System lifts, loosens and then eliminates debris and pet hair from deep 
                    within your carpets for a clean you won’t believe – with no effort from you.
                    <br><br>                                       
                    <br>


                    [ Dimensions & weight ]<br><br>
                    - Width: 16.52 cm <br>
                    - Height: 19.63 cm <br>
                    - Length: 15.75 cm <br>                
                    - Battery Type: Lithium Ion <br>
                    - Device weight: 3.70 kg <br>
                    <br>
                    <br><br>

                    [ What's in the box ]<br><br>
                    - iRobot® Roomba® s9+ Robot Vacuum<br>
                    - 1 Clean Base® Automatic Dirt Disposal<br>
                    - 2 Dirt Disposal Bags<br>
                    - 1 North American Line Cord<br>
                    - 1 Extra High-Efficiency Filter <br>
                    - 1 Extra Corner Brush<br>
                    <br>
                    <br><br>
                 
                    [ Functions ]<br><br>
                    - App compatible <br>
                    - Receives constant updates through the software <br>
                    - Program the roomba to clean anytime <br>
                    <br>
                    <br><br>
                
                    [ Box Specs ]<br><br>
                    - Height: 48.26 cm <br>
                    - Length: 38.4 cm <br>
                    - Width: 30.99 cm <br>
                    - Box Weight: 26.5 lbs <br>
            </div>
        </div>
            <script>
                var ProductImg =  document.getElementById("ProductImg");
                var SmallImg = document.getElementsByClassName("small-img");
                
                SmallImg[0].onclick = function()
                {
                    ProductImg.src= SmallImg[0].src;
                };
                SmallImg[1].onclick = function(){
                    
                    ProductImg.src= SmallImg[1].src;
                };
                SmallImg[2].onclick = function(){
                    
                    ProductImg.src= SmallImg[2].src;
                };   
                SmallImg[3].onclick = function(){
                    
                    ProductImg.src= SmallImg[3].src;
                }; 
            </script>
            
            <!-- Footer -->
    <section class="footer container" style="background-color:black; padding-top: 35px;">
        
        <div class="footer-box">
            <!-- Logo -->
            <a href="#" class="logo">
                <img src="img/logo.png" alt="" style="width: 200px;">
            </a>
            <div class="social" style="color: white;">
                <a href="https://www.facebook.com/"><i class='bx bxl-facebook' ></i></a>
                <a href="https://twitter.com/?lang=en"><i class='bx bxl-twitter' ></i></a>
                <a href="https://www.instagram.com/?hl=en"><i class='bx bxl-instagram' ></i></a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class='bx bxl-youtube' ></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>Pages</h3>
            <a href="HomePage.php">Home</a>
            <a href="HomePage.php">About Us</a>
            <a href="cctv.php">CCTV</a>
            <a href="SmartDoorlocks.php">Smart Doorlocks</a>
            <a href="RobotVacuums.php">Robot Vacuums</a>
            <a href="SmartSpeakers.php">Smart Speakers</a>
        </div>
        <div class="footer-box">
            <h3>Legal</h3>
            <a href="#">Privacy Policy</a>
            <a href="#">Refund Policy</a>
            <a href="#">Terms Of Use</a>
            <a href="#">Disclaimer</a>
           
        </div>
        <div class="footer-box">
            <h3>Branches</h3>
            <p>Singapore</p>
            <p>Malaysia</p>
            <p>Japan</p>
            <p>United States</p>
        </div>
    </section>
    <!-- Copyright -->
    <div class="copyright">
        <p style="background-color: #7600BC; color: white;">&#169; HomeSmart All Rights Reserved.</p>
        
    </div>
    </body>
</html>