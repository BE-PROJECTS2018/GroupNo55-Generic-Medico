<?php
include('conn.php'); ?>

<!DOCTYPE html>
<html>
<head>

          
<div class="navbar navbar-inverse navbar-fixed-top navbar-custom">
	  <div class="container">
	         <a href="index.html"><img class="img-responsive2"       
           src="img/header-bg (2).jpg" alt="Mountain View" width="120" height="120"></a>
       
	  </div>
	  </div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.navbar-custom {
    color: black;
    background-color: black;
}

.container {
  max-width: 100%;
  margin: 0 auto;
  padding: 40px;
}

</style>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 60px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 20%;
    padding: 10px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}
.loginbtn{
	width :10%;
	padding: 14px 20px;
}
.cancelbtn {
    width: 10%;
    background-color: #f44336

}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}
.Scontainer {
  max-width: 600px;
  margin: 0 auto;
  padding: 80px 0;
  height: 450px;;
}


span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
  
<h2><center>Login Form</h2></center>

<form action="satish_login.php" method="POST">

  <div class="container">
     <center> <label for="User_Name"><b>User Name</b></label>
     <center> <input type="text" placeholder="Enter Username" name="User_Name" required></center>

      <label for="Password"><b>Password</b></label>
     <center> <input type="Password" padding="20px" placeholder="Enter your Password" name="Password" required></center>

    <center><button type="submit" class="loginbtn">Login</button></label>
    <label>
    <button  type="button" class="cancelbtn" align="center"  href="index.html">Cancel</button></center>
    <p><center><a href="newsign.html">or Signup</a></center></p></center>

  </div>
</form>
<?php
// Include config file
require_once 'conn.php';
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if username is empty
    if(empty(trim($_POST["usr_name"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["usr_name"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['Password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['Password']);
	}
    $connect = mysqli_connect("localhost", "root", "","accounts");
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, pass FROM user_profile WHERE username = ?";
        if($stmt = mysqli_prepare($connect, $sql)){
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
                    mysqli_stmt_bind_result($stmt, $usr_name, $hashed_password);
					if(mysqli_stmt_fetch($stmt)){
						if(strcmp($password,$hashed_password)==0){
                            /* Password is correct, so start a new session and
                            save the username to the session */
							session_start();
							$_SESSION['username'] = $username;      
                            header("location:index1.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
      
    }
    
    // Close connection
    mysqli_close($connect);
}
?>
 
</body>
</html>
