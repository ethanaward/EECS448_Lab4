<?php

$username = $_POST["username"];
$password = $_POST["password"];
$apples = $_POST["apple"];
$oranges = $_POST["orange"];
$pears = $_POST["pear"];
$shipping = $_POST["shipping"];
$shipcost = 0;
$applecost = (1*$apples);
$orangecost = (3*$oranges);
$pearcost =( 2*$pears);


if($shipping == "Overnight") {
	$shipcost = 50;
}

else if ($shipping == "3 day") {
	$shipcost = 5;
}

echo "<link href = 'style.css'
	rel = 'stylesheet'
	type = 'text/css'>";


echo "<p>Welcome, $username. Your password is:  $password</p> ";

echo "<table>";
echo "<tr>
	<th></th>
	<th><b>Quantity</b></th>
	<th><b>Cost Per Item<b></th>
	<th><b>Sub Total</b></th>
	</tr>";
echo "<tr>
	<th><b>Apples</b></th>
	<td>$apples</td>
	<td>$1.00</td>
	<td>$". $applecost ."</td>
	</tr>";
echo "<tr>
	<th><b>Oranges</b></th>
	<td>$oranges</td>
	<td>$3.00</td>
	<td>$" . $orangecost. "</td>
	</tr>";
echo "<tr>
	<th><b>Pears</b></th>
	<td>$pears</td>
	<td>$2.00</td>
	<td>$" . $pearcost . "</td>
	</tr>";
echo "<tr>
	<th><b>Shipping</b></th>
	<td colspan = '2'>$shipping</td>
	<td>$".$shipcost."</td>
	</tr>";
echo "<tr>
	<th colspan = '3'><b>Total Cost</b></th>
	<td>$".($applecost + $orangecost + $pearcost + $shipcost).  "</td>
	</tr>"; 

echo "</table>";

echo "<br><a href = 'http://people.eecs.ku.edu/~eward/EECS448/Lab4/customerFrontend.html'>Back to Shop</a>";
echo "<br><a href = 'http://people.eecs.ku.edu/~eward/index.html'>Back to Main Page</a>";

?>
