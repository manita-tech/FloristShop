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

require("connect.php");
$result = $conn->query("select * from Customers");
while ($row = $result->fetch_assoc()) {
    echo  $row["Customer_Name"];
}
$conn->close();

<div class="container">
</table>
<table class="table">
<h2>Customers</h>
<thead>
<tr>
<th>Customer Name</th>
<th>  Flowers Ordered</th>
<th>Selling price</th>
<th>Customer id</th>
</tr>
</thead>
<tbody>
<tr>
<td>Talon</td>
<td> 24</td>
<td>289</td>
<td>14</td>
</tr>
</tbody>
</table
><h1>Add order</h1>
<form action="/action_page.php">
<label for="email">Enter your name:</label>
<input type="name" name="name"><br><br>
<label for="email">Enter your email:</label>
<input type="email" id="email" name="email"><br><br><label for="Flowers Order">Enter order number:</label><input type="Flowers Order" name="Flowers Order"><br><br>
<input type="submit" value="Submit">
</form>
</tbody></table>
</div>
