<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">Florist Shop</a>
</div>
<ul class="nav navbar-nav">
<li ><a href="Home.php">Home</a></li>
<li ><a href="Flowers.php">Flowers</a></li>
<li class ="active"><a href="Categories.php">Categories</a></li>
<li><a href="Services.php">Services</a></li>
<li><a href="https://docs.google.com/document/d/1zCKMQn-ICuO0UYTWsbXoTXi_xjc6kwRg7ChzHJy5VZk/edit?usp=sharing"></i>Help</a></li>
<li ><a href="About Us.php">About Us</a></li>
</ul>
<div class="search-container">
<form action="/action_page.php">
<input type="text" placeholder="Search.." name="search"><button type="submit">Submit</button>
</form></nav>
    
<h3> Currently flower sells: </h3>
<?php
require('connect.php');
$result = $conn->query("select * from Sells");
?>

<table border="2" align="center">
<tr>
  <td><font color=gray><u>Flower_id</u></font></td>
  <td><font color=gray><u>SSN</u></font></td>
  
</tr>

<?php
$sql = "SELECT * from Sells";
$result = $conn->query($sql);
$return_arr = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo 
"<tr>
    <td>{$row['Flower_id']}</td>
    <td>{$row['SSN']}</td>
  
</tr>\n";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
?php
require('connect.php');
$result = $conn->query("select * from Sells");
?>

<table border="2" align="center">
<tr>
  <td><font color=gray><u>Flower_id</u></font></td>
  <td><font color=gray><u>Batch__id</u></font></td>
  
</tr>

<h3> Currently flowers have:</h3>

<?php
$sql = "SELECT * from Have";
$result = $conn->query($sql);
$return_arr = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo 
"<tr>
    <td>{$row['Flower_id']}</td>
    <td>{$row['Batch__id']}</td>
  
</tr>\n";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
?>
?php
require('connect.php');
$result = $conn->query("select * from Have");
?>
                                  
</body>

