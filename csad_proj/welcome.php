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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        body{ font: 17px sans-serif; text-align: center;}
        .wrapper{ width: 400px;                  
                 height:400px; 
                 
                 padding-top: 50px;   
                 border-radius: 10px; 
                 background: rgba(255,255,255,0.5); 
                 position: absolute; 
                 top: 50%; 
                 left: 50%; 
                 transform: translate(-50%,-50%);
                 text-align: center;}
      .video-container {
          position: absolute;
          top: 0;
          bottom: 0;
          width: 100%;
          height: 100%; 
          overflow: hidden;
      }
      .video-container video {
          /* Make video to at least 100% wide and tall */
          min-width: 100%; 
          min-height: 100%; 

          /* Setting width & height to auto prevents the browser from stretching or squishing the video */
          width: auto;
          height: auto;

          /* Center the video */
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);}
      .form-group{
        
      }
      .btn-primary {
          height: 45px;
          width: 60%;  
          background-color:black;
          border-radius: 45px;
          text-align: center;
          margin-left: auto;
          margin-right: auto;
          font-weight: bold;
          color: white;
          margin-top: 10px;
          cursor: pointer;         
      }
      .wrapper input {
          border-radius: 50px;
          font-size: 15px;
          height: 45px;          
          border: none;
          padding-left: 15px;
          width: 75%;
          margin-bottom: 10px;
          background: rgba(0,0,0,0.8);
          color:#fff;
      }
      p{
          margin-top: 60px;
      }
      
    </style>
</head>
<body>
    <div class="video-container">
        <video source src="Videos/3.mp4" type="video/mp4" autoplay loop muted>
        </video>
    </div>
    <div class="wrapper">
    <h2>What do you want to do?</h2>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <br><br><br>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        <br><br><br>
        <a href="HomePage.php" class="btn btn-secondary" style="background-color: green">Back</a>
    </p>
    
    </div>
</body>
</html>