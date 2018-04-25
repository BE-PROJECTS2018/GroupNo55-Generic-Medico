<?php

require_once 'config.php';
 

$User_Name = $Password = "";
$User_Name_err = $Password_err = "";
 
			$query = "INSERT INTO login(User_Name,Password) VALUES ('$User_Name','$Password')";
	$data = mysqli_query ($query)or die(mysql_error());
	
	if($data)
	{
	echo "Successfull login...";
	}

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
    if(empty(trim($_POST["User_Name"]))){
        $User_Name_err = 'Please enter UserName.';
    } else{
        $User_Name = trim($_POST["User_Name"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['Password']))){
        $Password_err = 'Please enter your password.';
    } else{
        $Password = trim($_POST['Password']);
    }
    
    // Validate credentials
    if(empty($User_Name_err) && empty($Password_err)){
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_User_Name);
            
            // Set parameters
            $param_User_Name = $User_Name;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $User_Name, $hashed_Password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(Password_verify($Password, $hashed_Password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['User_Name'] = $User_Name;      
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $Password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $User_Name_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
		
	}
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    //mysqli_close($link);
?>