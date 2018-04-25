<?php 
define('DB_HOST', '192.168.43.49'); 
define('DB_NAME', 'generic_medico'); 
define('DB_USER','meenu'); 
define('DB_PASSWORD','meenu');
$connect = mysqli_connect("localhost", "root", "", "generic_medico");
 if (mysqli_connect_errno($connect))
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
 }
 else
 { 
 echo " Successfully connected to your database "; 
 }
 ?>