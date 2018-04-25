<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "generic_medico");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM brand_medicines
  WHERE GENERIC_CONTENTS LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM brand_medicines ORDER BY GENERIC_CONTENTS
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>GENERIC CONTENTS</th>
     <th>INTERNATIONAL BRAND</th>
     <th>PACK SIZE</th>
     <th>Price Exclusive of VAT</th>
     <th>Price Inclusive of VAT</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["GENERIC_CONTENTS"].'</td>
    <td>'.$row["INTERNATIONAL_BRAND_NAME"].'</td>
    <td>'.$row["PACKSIZE"].'</td>
    <td>'.$row["PRICE_excl_VAT"].'</td>
    <td>'.$row["PRICE_incl_VAT"].'</td>
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
