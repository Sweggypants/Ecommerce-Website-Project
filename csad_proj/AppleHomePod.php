<html
    
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Apple HomePod Mini</title>
        <link rel="stylesheet" href="css(Smart Speakers)/AppleHomePod.css">
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
  <source src="Videos/Apple HomePod.mp4" type="video/mp4">
  
</video>
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="img/applehomepodwhite.jpg" width="100%"
                     id="ProductImg">
                    <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="img/applehomepodwhite.jpg" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/applehomepodblue.jpg" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/applehomepodorange.jpg" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/applehomepodyellow.jpg" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/applehomepodspacegrey.jpg" 
                             width="100%" class="small-img">
                    </div>
                    </div>
                </div>
            </div>
            
        
            <div class="col-2">
                <p>Smart Speakers/Apple HomePod Mini</p>
                <h1> Apple HomePod Mini</h1>
                
                <form action="insertApple.php" method="post"> 
                
                <h4> $99.00 </h4>
                
                <input style="width: 20px; height:20px;" type="radio" name="color" value="blue" id="blue">Blue<br>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="white" id="white">White<br>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="orange" id="orange">Orange<br>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="yellow" id="yellow">Yellow<br>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="grey" id="grey">Grey
                <br>
                
                <input type="number" name="quantity" value="1">
                <input type="submit" value="Add To Cart" class="btn" style="width: 145px;">
                </form>
                <h3>Product Details<i class="fa fa-indent"></i></h3>
                <br>
                <p>With multiple HomePod mini speakers placed around the house, you can have a connected sound system for your whole home. Ask Siri to play one song everywhere or, just as easily, a different song in each room. Stereo pair
                   Having powerful audio everywhere in the house couldn‘t be simpler and each HomePod mini gives you total control, no matter where you are. HomePod mini also works with your Apple devices for features like Intercom, letting you quickly communicate by voice.<br><br>

                    
                    <br>


                    [ Dimensions & weight ]<br><br>
                    - Diameter: 97.9 mm <br>
                    - Height: 84.3 mm <br>
                    - Device weight: 345 g <br>
                    <br>
                    <br><br>

                    [ What's in the box ]<br><br>
                    - HomePod mini<br>
                    - 20W power adapter<br>
                    - Documentation bundle<br>
                    <br>
                    <br><br>
                    
                    [ Accessibility ]<br><br>
                    - Touch Accommodations<br>
                    - Siri<br>
                    - VoiceOver<br>
                    - Home app and HomeKit<br>
                    - Intercom transcriptions<br>
                    <br>
                    <br><br>
                 
                    [ Connectivity ]<br><br>
                    - 802.11n Wi-Fi<br>
                    - Direct guess access<br>
                    - Bluetooth 5.0<br>
                    - Thread<br>
                    - Ultra Wideband chip for device proximity<br>
                    <br>
                    <br><br>
                
                    [ Audio ]<br><br>
                    - Full-range driver and dual passive radiators for deep bass and crisp high frequencies<br>
                    - Custom acoustic waveguide for a 360º sound field <br>
                    - Acoustically transparent fabric<br>
                    - Computational audio for real-time tuning<br>
                    - Four-microphone design for far-field Siri<br>
                    - Multiroom audio with AirPlay 22<br>
                    - Stereo pair capable<br></p>
                
                
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