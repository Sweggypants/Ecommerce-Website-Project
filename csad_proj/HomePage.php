<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>HomeSmart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <script src="main.js"></script> 
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
                        <li><a href="login.php">Login/Logout </a></li>
                        <li><a href="shoppingcart.php">Cart</a>
                        
                       
                        
                    
                    </ul>
                    
                    
                </nav>
                <br><br><br>
                <h2 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to HomeSmart.</h2>
                
                <div class="header-text">
                    
                    <h1><span>HomeSmart,</span>  the leading ecommerce website for <span>Smart home</span> appliances.</h1>
                    
                </div>
            </div>
        </div>
        
        <!-- Best Products -->
        
        <div id="portfolio">
             <div class="container1">
                 <h1 class="sub-title" style="margin-left: 30px">Best Products</h1>  
                 <div class="work-list">
                     <div class="work">
                         <img src="img/work-1.png" >
                         <div class="layer" <a href="AqaraA100.php" target="csad_proj"onclick="document.location.href='AqaraA100.php';return false;">
                             <h3>Aqara A100 Doorlock</h3>
                             <h3>$429</h3>
                             <p>The Aqara Smart N100 Doorlock was developed to provide maximum security. It includes a Damage Sensor, Auto-Lock, Anti-Peephole design, Master lock knob and Electromagnetic Protection.
                                 It also includes a Smart Integrated Doorbell.</p>
                                 
                         </div>
                     </div>
                     <div class="work">
                         <img src="img/work-2.png">
                         <div class="layer" <a href="EcovacsDeebot500.php" target="csad_proj"onclick="document.location.href='EcovacsDeebot500.php';return false;">
                             <h3>Ecovacs DEEBOT 500</h3>
                             <h3>$404</h3>
                             <p>The DEEBOT 500 offers an all-purpose cleaning solution. The DEEBOT 500 effectively cleans your floor and has a cleaning mode for every task thanks to its numerous cleaning modes. You may supervise DEEBOT 500 while it cleans for you using the ECOVACS Home App, a standard remote, or a smart home system.</p>
                                 
                         </div>
                     </div>
                     <div class="work">
                         <img src="img/work-3.png" >
                         <div class="layer" <a href="AppleHomePod.php" target="csad_proj"onclick="document.location.href='AppleHomePod.php';return false;">
                             <h3>Apple Homepod</h3>
                             <h3>$99</h3>
                             <p>Jam-packed with innovation, HomePod mini delivers unexpectedly big sound for a speaker of its size. At just 3.3 inches tall, it takes up almost no space but fills the entire room with rich 360‑degree audio that sounds amazing from every angle. Add more than one HomePod mini for truly expansive sound.</p>
                                 
                         </div>
                     </div>
                 </div>
             </div>  
        </div>
        
         <!-------about----- -->
         
        <div id ="about">
            <div class="container">
                <div class="row">
                    <div class="about-col-1">
                        <img src="img/smart.png">
                    </div>
                    <div class="about-col-2">
                        <h1 class="sub-title"> About Us </h1>
                        <p>HomeSmart is an ecommerce platform that aims to help increase the intelligence of your home.<br>
                            We sell many smart devices such as speakers, doorlocks, ai assistants, Roombas and CCTVs.</p>
                        
                        <div class="tab-titles">
                            <p class="tab-links active-link" onclick="opentab('founded')">Founded</p>
                            <p class="tab-links" onclick="opentab('products')">Products</p>
                            <p class="tab-links" onclick="opentab('locations')">Locations</p>
                       </div>
                        <div class="tab-contents active-tab" id="founded">
                            <ul>
                                <li><span>Founded in 2022</span><br>Founded in 2022 by the members of group 3 consisting of: <br><br>Manoj Sai<br> Daven Wong<br> Raffael Harjanto<br> Avius Lee<br> Gio Alfonso<br></li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="products">
                            <ul>
                                <li><span>CCTVs</span><br>Wyze, Arlo, Google, Ring </li>
                                <li><span>Smart Doorlocks</span><br>Samsung, Yale, Aqara, Philips</li>
                               
                                <li><span>Robot Vacuums</span><br>XiaoMI, iRobot, Ecovacs, Roborock</li>
                                <li><span>Smart Speakers</span><br>Google, Echo, Apple</li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="locations">
                            <ul>
                                <li><span>Orchard</span><br>Orchard GateWay #100-200</li>
                                <li><span>Suntec</span><br>Suntec City #200-100</li>
                                <li><span>Marina Bay</span><br>The Shoppes #300-#200</li>
                                
                            </ul>
                        </div>
                        
                </div>
            </div>
            
        </div>
        </div>        
            <script>
                var tablinks = document.getElementsByClassName("tab-links");
                var tabcontents = document.getElementsByClassName("tab-contents");
                function opentab(tabname){
                     for(tablink of tablinks){
                         tablink.classList.remove("active-link"); 
                     }
                      for(tabcontent of tabcontents){
                         tabcontent.classList.remove("active-tab"); 
                     }
                     event.currentTarget.classList.add("active-link");
                     document.getElementById(tabname).classList.add("active-tab");
                }
             </script>
             
        
    <!-- Newsletter -->
    <section class="newsletter container">
        <div class="heading">
            <h2>Subscribe To Our<span> Newsletter!</span></h2>
        </div>
        <form action="">
            <input type="email" name="" id="" placeholder="Enter your email..." class="email-box" required style="color:black;">
            <input type="submit" value="Subscribe" class="btn" style="background-color:black; width: 100px; border-radius: 7px;">
        </form>
    </section>
    <!-- Footer -->
    <section class="footer container">
        <div class="footer-box">
            <!-- Logo -->
            <a href="#" class="logo">
                <img src="img/logo.png" alt="" style="width: 200px;">
            </a>
            <div class="social">
                <a href="https://www.facebook.com/"><i class='bx bxl-facebook' ></i></a>
                <a href="https://twitter.com/?lang=en"><i class='bx bxl-twitter' ></i></a>
                <a href="https://www.instagram.com/?hl=en"><i class='bx bxl-instagram' ></i></a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class='bx bxl-youtube' ></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>Pages</h3>
            <a href="#">Home</a>
            <a href="#about">About Us</a>
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
        <p>&#169; HomeSmart All Rights Reserved.</p>
        
    </div>     
             
            
    </body>
</html>
