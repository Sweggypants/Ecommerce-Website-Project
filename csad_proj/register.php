<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 17px sans-serif; }
        .wrapper{ width: 450px;
                 height:450px; 
                 padding-left: 80px;
                 padding-top: 50px;  
                 padding-top: 50px; 
                 border-radius: 10px; 
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
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                
                <input type="text" name="username" placeholder="Username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                
                <input type="password" name="password" placeholder="Password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                
                <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">        
            </div>
            <p>Already have an account?  <a href="login.php" style="border-radius: 60px;
          font-size: 15px;
          height: 45px;
          border: none;
          padding-left: 15px;
          width: 100px;
          padding-right: 15px;
          margin-bottom: 10px;
          background: rgba(0,0,0,0.8);
          color:#fff;">Login here</a></p>
        </form>
    </div>    
</body>
</html>