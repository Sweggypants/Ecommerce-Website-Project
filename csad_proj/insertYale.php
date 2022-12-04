<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_error()) {
die("Database connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO shopping_cart ( product_model, color, quantity, price) values
('Yale YDM7116A','" .$_POST['color']. "','" .$_POST['quantity'] . "',' 999 ')";
if ($conn->query($sql) === TRUE) {
echo "";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>


<!DOCTYPE html>
<?php include 'delete.php'; ?>
<html>
 <head>
 <meta charset="UTF-8">
 <title>Shopping Cart</title>
 <link rel="stylesheet" type="text/css" href="stylecart.css">
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
     <br><br>
     <h1 style="text-align: center;"> Your Cart </h1>
 <?php if (isset($_SESSION['message'])): ?>
 <div class="msg">
 <?php
 echo $_SESSION['message'];
 unset($_SESSION['message']);
 ?>
 </div>
     <?php endif ?>
 <?php $results = mysqli_query($db, "SELECT * FROM shopping_cart"); ?>
 <table>
 <thead>
 <tr>
 <th>ID</th>
 <th>Product Model</th>
 <th>Color</th>
 <th>Quantity</th>
 <th>Price</th>
 <th>Action</th>
 </tr>
 </thead>
 <?php while ($row = mysqli_fetch_assoc($results)) { ?>
 <tr>
 <td><?php echo $row['product_id']; ?></td>
 <td><?php echo $row['product_model']; ?></td>
 <td><?php echo $row['color']; ?></td>
 <td><?php echo $row['quantity']; ?></td>
 <td><?php echo $row['price']; ?></td>
 <td>
 <a href="delete.php?del=<?php echo $row['product_id']; ?>" class="del_btn" style="transition-duration: 0.4s; background-color: #ff0000; color: white; padding: 5px; border-radius: 10px; text-decoration: none;">Delete</a>
 </td>
 </tr>
 <?php } ?>
 </table>
     <br><br>
     <input style="margin-left: 875px; transition-duration: 0.4s; background-color: #7600BC; color: white; padding: 5px; border-radius: 10px;" type="button" value="Place Order" name="Placeorder" onclick="Placeorder()">
            
     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
    
    <script>
        function Placeorder(){
            alert("Your order have been placed!");
        }
        </script>
 </body>
</html>