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
	<form method="post"> 

  <div class="container">
     <center> <label for="usr_name"><b>UserName</b></label>
     <center> <input type="text" placeholder="Enter Username" name="usr_name" required></center>

      <label for="usr_password"><b>Password</b></label>
     <center> <input type="Password" padding="20px" placeholder="Enter your Password" name="usr_password" required></center>

      <center><button type="submit" name="submit" value="submit" class="loginbtn">Login</button></label>
    <label>
  <button  type="button" class="cancelbtn" align="center"  href="index.html">Cancel</button></center>
    <p><center><a href="sign.php">or Signup</a></center></p></center>

  </div>
</form>

	<?php 
		if (isset($_POST['submit'])) {
		$usr_name=$_POST['usr_name'];
		$usr_password=$_POST['usr_password'];
		$result=mysqli_query($con,"SELECT * FROM account WHERE usr_name='$usr_name' AND usr_password='$usr_password'")or die (mysqli_error());
		 if(!$result){
		 	header('location:index.html');
		 }else{
		 	$data=mysqli_fetch_assoc($result);				
				session_start();
				$_SESSION['user_id']=$data['usr_id'];
				header('location:index1.php');
		 }		
		
		}
	?>
 
</body>
</html>
