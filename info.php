<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "generic_medico");
$output = '';
$name ='';
if(isset($_GET["GenericName"]))
{
  $name = $_GET["GenericName"];
 $search = mysqli_real_escape_string($connect, $_GET["GenericName"]);
 $query = "
  SELECT * FROM generic_medicines_price 
  WHERE Generic_Quantity LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM generic_medicines_price ORDER BY Generic_Quantity
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Generic Quantity</th>
     <th>Type</th>
     <th>Package Unit</th>
     <th>Price</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["Generic_Quantity"].'</td>
    <td>'.$row["Type"].'</td>
    <td>'.$row["Package_Unit"].'</td>
    <td>'.$row["Price_In_Rs"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
<!DOCTYPE html>
<html>
 <head>
  <div class="navbar navbar-inverse navbar-fixed-top navbar-custom">
    <div class="container">
         <a href="index1.php"><img class="img-responsive2"       
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

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo $name?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <body>
  <a href="searchsec.html">Back</a>
 <center> <img src="img/header-bg (2).jpg" alt="Mountain View" width="220" height="160">
</center>
  <div class="container">
   <br />
   <center><h1><?php echo $name?></h1></center>
   <center><h3>Available Variants</h3></center>
   <br />
   <div id="result"></div>
  </div>
 </body>
</html>

