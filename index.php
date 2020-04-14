<!-- Florist Shop demo application, Manita Pradhan manirpradhan@gmail.com , DBApps 2020          -->
<!-- This file represents the demo version of deafault page in application. The home page shows customers list and where you can add order, -->
<!-- others: flowers, categories, services and about us. -->

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
<li class ="active"><a href="#">Home</a></li>
<li ><a href="#">Flowers</a></li>
<li><a href="#">Categories</a></li>
<li><a href="#">Services</a></li>
<li><a href="https://docs.google.com/document/d/1zCKMQn-ICuO0UYTWsbXoTXi_xjc6kwRg7ChzHJy5VZk/edit?usp=sharing"></i>Help</a></li>
<li ><a href="#">About Us</a></li>
</ul>
<div class="search-container">
<form action="/action_page.php">
<input type="text" placeholder="Search.." name="search"><button type="submit">Submit</button>
</form></nav>';
    
    <?php
require('connect.php');
$result = $conn->query("select * from Customers");
?>

<h2>Customers</h2>
<table border="2" align="center">
<tr>
  <td><font color=gray><u>Customer_Name</u></font></td>
  <td><font color=gray><u>Flowers_Ordered</u></font></td>
  <td><font color=gray><u>Selling_price</u></font></td>
  <td><font color=gray><u>Customer_id</u></font></td>
  
</tr>

  <?php
var_dump($_POST);
   ?> 

<?php
$sql = "SELECT * from Customers";
$result = $conn->query($sql);
$return_arr = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo 
"<tr>
    <td>{$row['Customer_NAMe']}</td>
    <td>{$row['Flowers_Ordered']}</td>
    <td>{$row['Selling_price']}</td>
    <td>{$row['Customer_id']}</td>
  
</tr>\n";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
    
    


</script>
<table id="t1">
    <caption><font color="gray">Customer Table</font></caption>
    <colgroup>
        <col span="2" class="c2">
        <col>
        <col class="c1">
    </colgroup>
    <thead>
        <tr>
            <th>Customer Name</th>
            <th>Flowers Ordered</th>
            <th>Selling price</th>
            <th> Customer id</th>
        </tr>
    </thead>
    <tbody id="insertionPoint">
    
<h4><font color="gray">Add order</font></h4>
<style>
  table, td, th {border: 1px solid black; border-collapse: collapse;}
</style>

<div class="banner-info" align="center">
    <span><label>Customer Name </label></span>
    <span><input id="inputCustomerName" type="text" class="text-center" required="" placeholder="Enter Customer Name"></span><br>
    <span><label>Flowers Ordered </label></span>
    <span><input id="inputFlowersOrdered" type="text" class="text-center" required=""></span><br>
    <span><label>Selling price </label></span>
    <span><input id="inputSellingprice" type="text" class="text-center" required=""></span><br>
     <span><label>Customer id </label></span>
     <span><input id="inputCustomerid" type="text" class="text-center" required=""></span><br>
</div>
<div class="logo">
    <input type="button" onClick="insertData()" value="Add entry">
</div>
<script language="javascript">
    function insertData() {
        var name = document.getElementById("inputCustomerName").value;
        var orders = document.getElementById("inputFlowersOrdered").value;
        var price = document.getElementById("inputSellingprice").value;
        var id = document.getElementById("inputCustomerid").value;
        document.getElementById("insertionPoint").innerHTML += "<tr><td>" + name + "</td><td>" + orders + "</td><td>" + price + id + "</td></tr>";
      
        // The below part is to clear the values after the entry is added.
        document.getElementById("inputCustomerName").value = "";
        document.getElementById("inputFlowersOrdered").value = "";
        document.getElementById("inputSellingprice").value = "";
    }
      
    </tbody>
</table
</tbody></table>
</div>
