<!-- Florist Shop demo application, Manita Pradhan manirpradhan@gmail.com , DBApps 2020          -->
<!-- This file represents the entire application as functions. The home page shows customers list and where you can add order, -->
<!-- others: flowers, categories, services and about us. -->
<? php
echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
echo '</head>';
echo '<body>';
echo '<nav nav class="navbar navbar-default">';
echo '<div class="container-fluid">';
echo '<div class="navbar-header">';
echo '<a class="navbar-brand" href="#">Florist Shop</a>';
echo '</div>';
echo '<ul class="nav navbar-nav">';
echo '<li class ="active"><a href="#">Home</a></li>';
echo '<li ><a href="#">Flowers</a></li>';
echo '<li><a href="#">Categories</a></li>';
echo '<li><a href="#">Services</a></li>';
echo '<li ><a href="#">About Us</a></li>';
echo '</ul>';
echo '';
echo '<div class="search-container">';
echo '<form action="/action_page.php">';
echo '<input type="text" placeholder="Search.." name="search">';
echo '<button type="submit">Submit</button>';
echo '</form>';
echo '';
echo '</nav>';
echo '<div class="container">';
echo '';
echo '</table>';
echo '<table class="table">';
echo '<h2>Customers</h>';
echo '<thead>';
echo '<tr>';
echo '<th>Customer Name</th>';
echo '<th>  Flowers Ordered</th>';
echo '<th>Selling price</th>';
echo '<th>Customer id</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
echo '<tr>';
echo '<td>Talon</td>';
echo '<td> 24</td>';
echo '<td>289</td>';
echo '<td>14</td>';
echo '</tr>';
echo '</tbody>';
echo '</table>';
echo '<h1>Add order</h1>';
echo '';
echo '<form action="/action_page.php">';
echo '<label for="email">Enter your name:</label>';
echo '<input type="name" name="name"><br><br>';
echo '<label for="email">Enter your email:</label>';
echo '<input type="email" id="email" name="email"><br><br>';
echo '<label for="Flowers Order">Enter order number:</label>';
echo '<input type="Flowers Order" name="Flowers Order"><br><br>';
echo '<input type="submit" value="Submit">';
echo '';
echo '</form>';
echo '';
echo '</tbody>';
echo '';
echo '</table>';
echo '</div>';
echo '';
echo '</body>';
echo '</html>';
echo '';
?>
