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
</head>
<body>

<!DOCTYPE html>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Generic search</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <body>
 <center> <img src="img/header-bg (2).jpg" alt="Mountain View" width="220" height="160">
</center>
  <div class="container">
   <h2 align="center">General Search</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Enter Medicine Name" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch2.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
