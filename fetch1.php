<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "live");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM generic_medicine 
  WHERE Name LIKE '%".$search."%'
  OR Indications LIKE '%".$search."%' 
  OR Contraindications LIKE '%".$search."%' 
  OR Price LIKE '%".$search."%' 
  OR Side LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM generic ORDER BY Name
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Name</th>
     <th>Indications</th>
     <th>Contraindications</th>
     <th>Price</th>
     <th>Side</th>
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["Name"].'</td>
    <td>'.$row["Indications"].'</td>
    <td>'.$row["Contraindications"].'</td>
    <td>'.$row["Price"].'</td>
    <td>'.$row["Side"].'</td>
    
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
