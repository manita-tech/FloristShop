
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
body {
  background-color: mistyrose;
  opacity: 0.8;
}
<nav nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">Florist Shop</a>
</div>
<ul class="nav navbar-nav">
<li class ="active"><a href="#">Home</a></li>
<li ><a href="Flowers.php">Flowers</a></li>
<li><a href="Categories.php">Categories</a></li>
<li><a href="https://docs.google.com/document/d/1zCKMQn-ICuO0UYTWsbXoTXi_xjc6kwRg7ChzHJy5VZk/edit?usp=sharing"></i>Help</a></li>
<li ><a href="About Us.php">About Us</a></li>
</ul>
<div class="search-container">
<form action="/action_page.php">
<input type="text" placeholder="Search.." name="search"><button type="submit">Submit</button>
</form></nav>';
 <?php
require('connect.php');
$result = $conn->query("select * from Customers");
?>

<h2>Employee</h2>
<table border="2" align="center">
<tr>
  <td><font color=gray><u>Employee_Name</u></font></td>
  <td><font color=gray><u>DOB</u></font></td>
  <td><font color=gray><u>SSN</u></font></td>
  <td><font color=gray><u>Check_in_time</u></font></td>
  <td><font color=gray><u>Check_out_time</u></font></td>
  
</tr>

  <?php
var_dump($_POST);
   ?> 

<?php
$sql = "SELECT * from Employee";
$result = $conn->query($sql);
$return_arr = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo 
"<tr>
    <td>{$row['Employee_Name']}</td>
    <td>{$row['DOB']}</td>
    <td>{$row['SSN']}</td>
    <td>{$row['Check_in_time']}</td>
    <td>{$row['Check_out_time']}</td>
</tr>\n";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
