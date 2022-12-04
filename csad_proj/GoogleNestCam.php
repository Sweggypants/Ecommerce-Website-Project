<html
    
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Google Nest Cam</title>
        <link rel="stylesheet" href="css(CCTV)/Googlenestcam.css">
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
  <source src="Videos/Google nest cam.mp4" type="video/mp4">
  
</video>
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="img/googlenestcampic1.jpg" width="100%"
                     id="ProductImg">
                    <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="img/googlenestcampic1.jpg" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/googlenestcampic2.jpg" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/googlenestcampic3.jpg" 
                             width="100%" class="small-img">
                    </div>                                      
                    </div>
                </div>
            </div>
            
        
            <div class="col-2">
                <p>Robot Vacuums/Google Nest Cam</p>
                <h1> Google Nest Cam </h1>
                <form action="insertNestcam.php" method="post"> 
                <h4> $129.99 </h4>
                
                <input style="width: 20px; height:20px;" type="radio" name="color" value="white" id="white">White
                <br>
                
                <input type="number" name="quantity" value="1">
                 <input type="submit" value="Add To Cart" class="btn" style="width: 145px;">
                </form>
                <h3>Product Details<i class="fa fa-indent"></i></h3>
                <br>
                <p>Nest started out as a smart thermostat brand, but ever since it acquired Dropcam in 2014, it evolved into one of the leading home security companies. Over the years, Nest has released a number of security cameras, including the Nest Cam Outdoor, that propelled the brand into the spotlight thanks to their superior technology and premium features.<br>
                    <br>
Now, the Nest Cam Outdoor is no longer in Nest’s lineup, but the camera still works and it still has all its top-notch features. It’s also still available from some brick-and-mortar stores and third-party online sellers. So the question we should be asking now is, is it still a good camera to buy in 2022?
                    <br><br>                                       
                    <br>


                    [ Dimensions & Weight ]<br><br>
                    - 71.1mm(W) x71.1mm(H) x89.9mm(D)<br>
                    - 312.98g<br>
  

                    <br>
                    <br><br>

                    [ What's in the box ]<br><br>
                    - Nest Cam Output Security<br>
                    - Power Adapted<br>
                    - Wall Mount<br>
                    - Wall Adapter Plate<br>
                    - Quick Start Guide<br>
                    - Wall Mounting Magnet<br>

                    <br>
                    <br><br>
                 
                    [ Features ]<br><br>
                    - 1080p HD video quality <br>
                    - 130 degree view with night vision<br>
                    - Mobile alerts and notifications <br>
                    - 2-year warranty<br>
                    
              
                    
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