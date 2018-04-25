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
form {border: 40px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 62%;
    padding: 10px 20px;
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
	width :20%;
	padding: 14px 20px;
}
.cancelbtn {
    width: 20%;
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
<center><H2>PLEASE LOGIN OR SIGNUP TO ACCESS THIS SERVICE</H2></center>
  
<h2><center>Signup Form</h2></center>

<form action="sign.php" method="POST">

  <div class="Scontainer">
     <center> <label for="User_Name"><b>UserName</b></label>
     <center> <input type="text" placeholder="Enter Username" name="usr_name" required></center>

      <label for="email"><b>Email</b></label>
     <center> <input type="text" placeholder="Enter Emails (eg: abc@xyz.com)" name="usr_email" required></center>

      <label for="psw"><b>Password</b></label>
     <center> <input type="password" padding="20px" placeholder="Enter Password(Should contain atleast one number)" name="usr_password" required></center>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <center><input type="password" placeholder="Repeat Password(Should contain atleast one number)" name="psw-repeat" required></center>

            <label for="Mobile_Number"><b>Mobile Number</b></label>
      <center><input type="text" placeholder="Enter your 10 digit Mobile number" name="usr_mnumber" required></center>
      <label>
     <center> <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p></center>

    <center><button type="submit" name="submit" class="loginbtn">Signup</button></label>
    <label>
    <button  type="button" class="cancelbtn" align="center"  href="index.html">Cancel</button></center>
    <p><center><a href="login1.php">or Login</a></center></p></center>

  </div>
</form>

	<?php 
		if (isset($_POST['submit'])) {
		$usr_name=$_POST['usr_name'];
		$usr_email=$_POST['usr_email'];
		$usr_password=$_POST['usr_password'];
		$usr_mnumber=$_POST['usr_mnumber'];
		$result=mysqli_query($con,"INSERT INTO account (usr_name, usr_email, usr_password, usr_mnumber) VALUES ('$usr_name','$usr_email', '$usr_password', '$usr_mnumber')")or die (mysqli_error());
		 if($result){
		  	echo "Successfully Registered! You can now "?> <a href="login1.php">Log In</a>  
		<?php }		
		
		}
	?>

</body>
</html>
