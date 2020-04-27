<!DOCTYPE html>
<html lang="en">
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
$result = $conn->query("select * from Flower_for_sale");
?>
}
$conn->close();

<div class="container">
<table>
    <caption>Flowers currently available for sale.</caption>
 <table border="2" align="center">
<tr>
  <td><font color=gray><u>Type_of_flower</u></font></td>
  <td><font color=grayy><u>Flower_id</u></font></td>
  <td><font color=gray><u>Price</u></font></td>
 
</tr>

<?php
$sql = "SELECT *from Flower_for_sale ";
$result = $conn->query($sql);
$return_arr = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo 
"<tr>
    <td>{$row['Type_of_flower']}</td>
    <td>{$row['Flower_id']}</td>
    <td>{$row['Price']}</td>
</tr>\n";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
      
    </tbody>
</table
</tbody></table>
</div>
