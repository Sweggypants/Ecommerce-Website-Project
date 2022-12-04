<html
    
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Google Home</title>
        <link rel="stylesheet" href="css(Smart Speakers)/GoogleHome.css">
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
        <source src="Videos/Google Home.mp4" type="video/mp4">
  
        </video>
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="img/googleHome.jpeg" width="100%"
                     id="ProductImg">
                    <div class="small-img-row">
                    <div class="small-img-col">
                        
                    </div>
                </div>
            </div>
            
        
            <div class="col-2">
                <p>Smart Speakers/Google Home</p>
                <h1> Google Home  </h1>
                <form action="insertHome.php" method="post">
                <h4> $149.00 </h4>
                
                <input style="width: 20px; height:20px;" type="radio" name="color" value="mango" id="mango">Mango<br>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="marine" id="marine">Marine<br>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="violet" id="violet">Violet<br>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="carbon" id="carbon">Carbon<br>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="snow" id="snow">Snow<br>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="copper" id="coppper">Copper
                <br>
                
                <input type="number" name="quantity" value="1">
                <input type="submit" value="Add To Cart" class="btn" style="width: 145px;">
                </form>
                <h3>Product Details<i class="fa fa-indent"></i></h3>
                <br>
                <p>

                    [ Meet your Google Assistant. ]<br><br>
                    Google Home is powered by the Google Assistant. Ask it questions. Tell it to do things. It’s your own Google, always ready to help. Just start by saying, “Ok Google”.<br><br>
                    <br>
[ Key Features ]<br><br>

Get answers from Google.<br>
Get real-time answers including the latest on weather, traffic, sports, finance, local businesses and more. Ask for things like translations, calculations, nutritional information and unit conversions hands-free. Or search for other information that you’re curious about with the power of Google Search.<br><br>

Enjoy your music.<br>
With a simple voice command, play tunes from your favourite services like YouTube Music, Google Play Music, Spotify and more. Enjoy even more compatible audio services by streaming directly from your phone to Google Home.<br>
    <br><br>

Manage your everyday tasks.<br>
Easily hear your travel itinerary, daily schedule, and more. Just ask “how long will it take to get to work?” to find out about your commute and get the real-time answers you need, right away. Google Home even curates daily information specific to you. Just start by saying, “Tell me about my day” and get up to speed on everything you need to know.<br><br>

Control your smart home.<br>
Simply ask Google Home to stream videos to your TV with Chromecast, or to turn on your compatible smart light bulbs.<br>
<br><br>

A speaker designed for any room.<br>
Google Home’s high excursion speaker delivers Hi-Fi sound quality. It can also hear you reliably, thanks to far-field microphones.<br><br>

                    
                    

<br>
                    [ Dimensions & weight ]<br><br>
                    - Diameter: 96.4 mm<br>
                    - Height: 142.8 mm<br>
                    - Power cable: 1.8 m<br>
                    - Device weight: 0.49kg <br>
                    <br>
                    <br><br>

                    [ What's in the box ]<br><br>
                    - Google Home<br>
                    - Power adapter and cable<br>
                    - Documentation bundle<br>
                    <br>
                    <br><br>
                 
                    [ Power ]<br><br>
                    - Required 16.5V, 2A included<br>
                    <br>
                    <br><br>
                
                    </p>
                
            </div>
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
