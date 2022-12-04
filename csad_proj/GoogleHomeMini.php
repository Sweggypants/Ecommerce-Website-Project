

<html
    
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Google Home Mini</title>
        <link rel="stylesheet" href="css(Smart Speakers)/GoogleHomeMini.css">
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
        <source src="Videos/Google Home Mini.mp4" type="video/mp4">
  
        </video>
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="img/googlenestmini_white.png" width="100%"
                     id="ProductImg">
                    <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="img/googlenestmini_white.png" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/googlenestmini_black.png" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/pink_replacement.png" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/google nest mini blue.jpg" 
                             width="100%" class="small-img">
                    </div>
                    </div>
                </div>
            </div>
            
        
            <div class="col-2">
                <p>Smart Speakers/Google Nest Mini</p>
                <h1> Google Home Mini </h1>
                <form action="insertHomemini.php" method="post">
                <h4> $79.00 </h4>
                
                <input style="width: 20px; height:20px;" type="radio" name="color" value="chalk" id="chalk">Chalk<br>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="black" id="black">Black<br>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="coral" id="coral">Coral<br>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="sky" id="sky">Sky
                <br>
                
                <input type="number" name="quantity" value="1">
                 <input type="submit" value="Add To Cart" class="btn" style="width: 145px;">
                </form>
                <h3>Product Details<i class="fa fa-indent"></i></h3>
                <br>
                <p>The 2nd generation Home Mini lets you control your speaker with your voice. Just say "Hey Google" to play songs from Spotify, YouTube Music, and more. Music sounds bigger and richer. Ask your Google Assistant about the weather, news, or almost anything. Hear your personalised schedule, commute, and reminders. Set timers and alarms. And control your compatible smart devices.<br><br>

                    
                    <br>


                    [ Dimensions & weight ]<br><br>
                    - Diameter: 98 mm <br>
                    - Height: 42 mm <br>
                    - Power cable: 1.5 m<br>
                    - Device weight: 181 g <br>
                    <br>
                    <br><br>

                    [ What's in the box ]<br><br>
                    - Google Nest Mini<br>
                    - Power adapter and cable<br>
                    - Documentation bundle<br>
                    <br>
                    <br><br>
                 
                    [ Connectivity ]<br><br>
                    - 802.11b/g/n/ac (2.4 GHz/5 GHz) Wi-Fi, Bluetooth 5.0<br>
                    <br>
                    <br><br>
                
                    [ Sound ]<br><br>
                    - 360-degree sound with 40 mm driver</p>
                
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


