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
<li ><a href="Home.php">Home</a></li>
<li ><a href="Flowers.php">Flowers</a></li>
<li ><a href="Categories.php<">Categories</a></li>
<li><class ="active"a href=">Services.php">Services</a></li>
<li><a href="https://docs.google.com/document/d/1zCKMQn-ICuO0UYTWsbXoTXi_xjc6kwRg7ChzHJy5VZk/edit?usp=sharing"></i>Help</a></li>
<li ><a href="About Us.php">About Us</a></li>
</ul>
<div class="search-container">
<form action="/action_page.php">
<input type="text" placeholder="Search.." name="search"><button type="submit">Submit</button>
</form></nav>';

<?php
require('connect.php');
$result = $conn->query("select * from Suppliers");
?>

<h2>Suppliers</h2>
<table border="2" align="center">
<tr>
  <td><font color=gray><u>Shop_name</u></font></td>
  <td><font color=gray><u>Supplier_Id </u></font></td>
  <td><font color=gray><u>Address</u></font></td>
  <td><font color=gray><u>Telephone__No</u></font></td>
     <td><font color=gray><u>Email_Address</u></font></td>
     <td><font color=gray><u>Bulk_Price</u></font></td>
  
</tr>

  <?php
var_dump($_POST);
   ?> 

<?php
$sql = "SELECT * from Suppliers";
$result = $conn->query($sql);
$return_arr = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo 
"<tr>
    <td>{$row['Shop_Name']}</td>
    <td>{$row['Supplier_Id']}</td>
    <td>{$row['Address']}</td>
    <td>{$row['Telephone__No']}</td>
        <td>{$row['Email_Address']}</td>
    <td>{$row['Bulk_Price']}</td>
  
</tr>\n";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
    
    <?php
require('connect.php');
$result = $conn->query("select * from Batches");
?>

<h2>Batches</h2>
<table border="2" align="center">
<tr>
  <td><font color=gray><u>Delivered_time</u></font></td>
  <td><font color=gray><u>Delivered_date</u></font></td>
  <td><font color=gray><u>No_of_flowers </u></font></td>
  <td><font color=gray><u> Batch__id</u></font></td>
  <td><font color=gray><u>Type_of_flower</u></font></td>
  <td><font color=gray><u>Supplier_Id</u></font></td>
  
</tr>

  <?php
var_dump($_POST);
   ?> 

<?php
$sql = "SELECT * from Batches";
$result = $conn->query($sql);
$return_arr = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo 
"<tr>
    <td>{$row['Delivered_time']}</td>
    <td>{$row['Delivered_date']}</td>
    <td>{$row['No_of_flowers']}</td>
    <td>{$row[' Batch__id']}</td>
    <td>{$row['Type_of_flower']}</td>
    <td>{$row['Supplier_Id']}</td>
  
</tr>\n";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
    
    

    
    

    
