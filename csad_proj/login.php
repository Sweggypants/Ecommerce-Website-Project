<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: HomePage.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
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
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 17px sans-serif; }
        .wrapper{ width: 450px;                  
                 height:450px; 
                 padding-left: 80px;
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
        <h2>Login</h2>       
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
              
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" placeholder="Username" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" placeholder="Password">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login" >
                
            </div>
            <p>Don't have an account?  <a href="register.php" style="border-radius: 60px;
          font-size: 15px;
          height: 45px;
          border: none;
          padding-left: 15px;
          width: 100px;
          padding-right: 15px;
          margin-bottom: 10px;
          background: rgba(0,0,0,0.8);
          color:#fff;">Sign up</a></p>
        </form>
    </div>
</body>
</html>