<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'demo');
if (!$db) {
 die("Connection failed: " . mysqli_connect_error());
}
// initialize variables
$product_model = "";
$color = "";
$quantity = "";
$price = "";
$product_id = 0;
$update = false;
if (isset($_GET['del'])) {
 $product_id = $_GET['del'];
 $sql = "DELETE FROM shopping_cart WHERE product_id=$product_id";
 if (mysqli_query($db, $sql)) {
 $_SESSION['message'] = "Item Deleted";
 } else {
 $_SESSION['message'] = "Address Delete Failed!";
 }
 header('location: shoppingcart.php');
}
?>