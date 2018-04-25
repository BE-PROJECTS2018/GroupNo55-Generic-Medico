<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "generic_medico");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM generic_medicines 
  WHERE Name LIKE '%".$search."%'
  
 ";
}
else
{
 $query = "
  SELECT * FROM generic_medicines ORDER BY Name
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
     <th>Side Effects</th>
     <th>Details</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["Name"].'</td>
    <td>'.$row["Indication"].'</td>
    <td>'.$row["Contra_Indication"].'</td>
    <td>'.$row["Side_Effect"].'</td>
    <td><a href="info.php?GenericName='.$row["Name"].'">View More</a></td>
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
