<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 17px sans-serif; }
        .wrapper{ width: 400px;
                 height:400px; 
                 border-radius: 10px; 
                 padding-left: 60px;
                 padding-top: 50px;  
                 padding-top: 50px; 
                 background: rgba(255,255,255,0.5); 
                 position: absolute; 
                 top: 50%; 
                 left: 50%; 
                 transform: translate(-50%,-50%);}
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
    </style>
</head>
<body>
    <div class="video-container">
        <video source src="Videos/3.mp4" type="video/mp4" autoplay loop muted>
        </video>
    </div>
    <video src="Samsung Smart Home.mp4" class="video-bg" autoplay loop muted></video>
    <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
               
                <input type="password" name="new_password" placeholder="New Password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                
                <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link ml-2" href="HomePage.php">Cancel</a>
            </div>
        </form>
    </div>    
</body>
</html>