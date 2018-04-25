<?php 
define('DB_HOST', 'den1.mysql2.gear.host'); 
define('DB_NAME', 'test129'); 
define('DB_USER','test129'); 
define('DB_PASSWORD','satish.1');
$connect = mysqli_connect("den1.mysql2.gear.host", "test129", "satish.1", "test129");
 if (mysqli_connect_errno($connect))
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
 }
 else
 { 
 echo "connected"; 
 }
 ?>