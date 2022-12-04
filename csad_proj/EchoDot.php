<html
    
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Echo Dot</title>
        <link rel="stylesheet" href="css(Smart Speakers)/EchoDot(3rd Gen).css">
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
  <source src="Videos/Echo Dot(3rd Gen).mp4" type="video/mp4">
  
</video>
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="img/echoDotGen3Black.png" width="100%"
                     id="ProductImg">
                    <div class="small-img-row">
                        <div class="small-img-col">
                        <img src="img/echoDotGen3Black.png" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/echoDotGen3White.png" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/echoDotGen3Grey.png" 
                             width="100%" class="small-img">
                    </div>                                      
                    </div>
                </div>
            </div>
            
        
            <div class="col-2">
                <p>Smart Speakers/Echo Dot Gen 3</p>
                <h1> Echo Dot Gen 3 </h1>
                <form action="insertEchodot.php" method="post"> 
                <h4> $99.00 </h4>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="black" id="black">Black<br>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="white" id="white">White<br>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="grey" id="grey">Grey
                
                <br>
                
                <input type="number" name="quantity" value="1">
                <input type="submit" value="Add To Cart" class="btn" style="width: 145px;">
                </form>
                <h3>Product Details<i class="fa fa-indent"></i></h3>
                <br>
                <p>Echo Dot is a smart speaker that can be operated by voice, is compact and can fit in your favorite places. 
                    You can use Echo Dot as a Bluetooth speaker by pairing your phone to it. Or you can connect it to other speakers / headphones through Bluetooth/3.5mm jack.
                    Stream millions of songs from Amazon Prime Music, Spotify, JioSaavn, Gaana, and Apple Music.
                    Access songs in Hindi, English, Telugu, Tamil, Punjabi, Marathi, Bengali, Bhojpuri, Kannada and more.
                    Just ask Alexa for music, news, trivia, scores, weather, alarms, kids rhymes and stories.
                    New features are automatically added to Alexa, the brain of Echo Dot.
                    Alexa can speak in both English & Hindi.
                    Make your home smart with Alexa and use voice to control lights, ACs, TVs, geysers, water motors and more.
                    You can purchase smart lights, plugs and other accessories separately.
                    <br><br>

                    
                    <br>


                    [ Dimensions & weight ]<br><br>
                    - Diameter: 99 mm <br>
                    - Height: 43 mm <br>
                    - Power cable: 1.5 m<br>
                    - Device weight: 299 g <br>
                    <br>
                    <br><br>

                    [ What's in the box ]<br><br>
                    - Echo Dot Gen 3<br>
                    - Power adapter and cable<br>
                    - Quick Start Guide<br>
                    <br>
                    <br><br>
                 
                    [ Connectivity ]<br><br>
                    - Dual-band Wi-Fi supports 802.11 a/b/g/n (2.4 and 5 GHz) networks. Does not support connecting to ad-hoc (or peer-to-peer) Wi-Fi networks.<br>
                    <br>
                    <br><br>
                
                    [ Sound ]<br><br>
                    - Built-in speaker for voice feedback when not connected to external speakers. 3.5 mm stereo audio output for use with external speakers (audio cable not included).</p>
                
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