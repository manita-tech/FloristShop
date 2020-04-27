
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
  background-color: lavenderblush;
  opacity: 0.7;
}
</style>
<nav nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">Florist Shop</a>
</div>
<ul class="nav navbar-nav">
<li ><a href="#">Home</a></li>
<li class ="active"><a href="Flowers.php">Flowers</a></li>
<li><a href="Categories.php">Categories</a></li>
<li><a href="https://docs.google.com/document/d/1zCKMQn-ICuO0UYTWsbXoTXi_xjc6kwRg7ChzHJy5VZk/edit?usp=sharing"></i>Help</a></li>
<li ><a href="About Us.php">About Us</a></li>
</ul>
<div class="search-container">
<form action="/action_page.php">
<input type="text" placeholder="Search.." name="search"><button type="submit">Submit</button>
</form></nav>
  
</head>
<body>

<style>
  table, td, th {border: 1px solid black; border-collapse: collapse;}
</style>

<div class="banner-info" align="center">
    <span><label>Type of Flower</label></span>
    <span><input id="inputTypeofflower" type="text" class="text-center" required="" placeholder="Enter Type of flower"></span><br>
    <span><label>Flower Id</label></span>
    <span><input id="inputFlowerId" type="text" class="text-center" required=""></span><br>
    <span><label>Flower Price </label></span>
    <span><input id="inputFlowerPrice" type="text" class="text-center" required=""></span><br>
</div>
<div class="logo">
    <input type="button" onClick="insertData()" value="Add entry">
</div>
<script language="javascript">
    function insertData() {
        var flower = document.getElementById("inputTypeofflower").value;
        var id = document.getElementById("inputFlowerId").value;
        var price = document.getElementById("inputFlowerPrice").value;
        document.getElementById("insertionPoint").innerHTML += "<tr><td>" + flower + "</td><td>" + id + "</td><td>" + price + "</td></tr>";
      
        // The below part is to clear the values after the entry is added.
        document.getElementById("inputTypeofflower").value = "";
        document.getElementById("inputFlowerId").value = "";
        document.getElementById("inputFlowerPrice").value = "";
    }
</script>
<table id="t1">
    <caption>Flower Table</caption>
    <colgroup>
        <col span="2" class="c2">
        <col>
        <col class="c1">
    </colgroup>
    <thead>
        <tr>
            <th>Type of Flower</th>
            <th>Flower Id</th>
            <th>Flower Price</th>
        </tr>
    </thead>
    <tbody id="insertionPoint">
      
    </tbody>
</table>
  
    </tbody>
  </table>
</div>

</body>
</html>
