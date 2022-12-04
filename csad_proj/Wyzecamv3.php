




<html
    
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wyze Cam V3</title>
        <link rel="stylesheet" href="css(CCTV)/Wyzecamv3.css">
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
                        <li><a href="HomePage.php">About</a></li>
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
  <source src="Videos/Wyze cam v3.mp4" type="video/mp4">
  
</video>
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="img/Wyze main.png" width="100%"
                     id="ProductImg">
                    <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="img/Wyze main.png" 
                             width="100%" class="small-img">
                    </div>
                    
                    <div class="small-img-col">
                        <img src="img/wyze side.png" 
                             width="100%" class="small-img">
                    </div>
                    
                    </div>
                </div>
            </div>
            
        
            <div class="col-2">
                <p>CCTV/Wyze Cam V3</p>
                <h1> Wyze Cam v3 </h1>
                <form action="insertWyze.php" method="post"> 
                <h4> $59.99 </h4>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="white" id="white">White
                <br>
                <input type="number" name="quantity" value="1">                
                <input type="submit" value="Add To Cart" class="btn" style="width: 145px;">
                </form>
                
                <h3>Product Details<i class="fa fa-indent"></i></h3>
                <br>
                <p>Color night vision: An all-new Starlight Sensor records night time video in full, vivid color. The Starlight Sensor can see full color in environments up to 25x darker than traditional video cameras and the new f/1.6 aperture captures 2x more light.<br>
                    Indoor/Outdoor: Wyze Cam v3 is a wired video camera with an IP65 rating so you can confidently install it outside in the rain or inside in the kids’ room. Wyze Outdoor Power Adapter (sold separately) required for outdoor use. Phone Compatibility - Android 5.0+, iOS 9.0+.<br>
                    Motion & Sound detection: Wyze Cam records video when motion or sound is detected and sends an alert straight to your phone. Motion Detection Zones and custom settings allow you to adjust the sensitivity of detection or turn it off completely.<br>
                    24/7 Continuous Recording: Continuous video recording with a 32GB MicroSD card (sold separately). Just insert the MicroSD into the base of the Wyze Cam and you’re all set.<br>
                    IFTTT certified connect all of your different apps and devices. When you sign up for a free account, you can enable your apps and devices to work together.<br><br>

                    
                    <br>

                    [ Phone Compatibility]<br>
                    - Android 7.0+<br>
                    - iOS 12.0+<br><br>
                   
                    [ Dimensions & weight ]<br><br>
                    - Camera Dimensions: 2.05 in x 2.01 in x 2.3 in (52 mm x 51 mm x 58.5)<br>
                    - Camera Weight: 3.5 oz (98.8 g
                    <br><br>

                    [ What's in the box ]<br>
                    - Wyze Cam V3<br>
                    - Six-foot USB extension power cable<br>
                    - USB power adapter<br>
                    - Wall mounting plate<br>
                    - Mounting screws<br>
                    - Quick start guide
                    <br><br>
                    
                    [ Sensor ]<br>
                    - CMOS Starlight Sensor<br>
                    - Resolution: Full HD 1920 x 1080p<br>
                    - Field of View: 130º diagonal<br>
                     <br>
                     <br><br>
                 
                    
                
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
                SmallImg[4].onclick = function(){
                    
                    ProductImg.src= SmallImg[4].src;
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