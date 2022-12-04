<html
    
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Samsung SHP-DR708</title>
        <link rel="stylesheet" href="css(SmartDoorlocks)/SamsungSHP-DR708.css">
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
  <source src="Videos/Samsung SHP-DR708.mp4" type="video/mp4">
  
</video>
        <!-- need to change -->
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="img/samsungdoorlock1.jpg" width="100%"
                     id="ProductImg">
                    <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="img/samsungdoorlock1.jpg" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/samsungdoorlock2.jpg" 
                             width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/samsungdoorlock3.jpg" 
                             width="100%" class="small-img">
                    </div>
                    
                    </div>
                </div>
            </div>
            
        
            <div class="col-2">
                <p>Smart Speakers/Samsung SHP-DR708</p>
                <h1> Samsung SHP-DR708</h1>
                <form action="insertSamsung.php" method="post"> 
                <h4> $888.00 </h4>
                <input style="width: 20px; height:20px;" type="radio" name="color" value="black" id="black">Black
                <br>
                
                <input type="number" name="quantity" value="1">
                <input type="submit" value="Add To Cart" class="btn" style="width: 145px;">
                </form>
                <h3>Product Details<i class="fa fa-indent"></i></h3>
                <br>
                <p>Elegant with a touch of class, the Samsung Push/Pull Lock SHP-DR708 has an ergonomic design that is both functional and efficient. With fingerprint recognition you can apply a soft touch on the copper colored square handle and easily open your doors. It allows you to view access logs in real time.
                    3 different user data protection technology using White-Box Cryptography, Secure Encapsulation for Application Layer and App Hardening. Important information like access codes and app data is protected by state of the art security technology. If you lose your smartphone, you can erase your access codes easily.
                    <br><br><br>    


                    [ Dimensions & weight ]<br><br>
                    - Diameter: 57 mm <br>
                    - Height: 400 mm <br>
                    - Width: 88 mm<br>
                    
                    <br>
                    <br><br>

                    
                    
                    
                    [ Accessibility ]<br><br>
                    - Mobile App<br>
                    - NFC(Android only)<br>
                    - PIN<br>
                    - Fingerprint<br>
                    - Mechanical key<br>
                    <br>
                    <br><br>
                 
                    [ Features ]<br><br>
                    - Wi-fi door lock<br>
                    - Push pull door lock<br>
                    - 100 fingerprint template<br>
                    - Smart bell<br>
                    - One time password<br>
                    - Voice guide<br>
                    - Anti-theft set-up<br>
                    - Intrusion alarm<br>
                    - High temperature alarm<br>
                    
                    <br>
                    <br><br>
                
                    </p>
                
                
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
