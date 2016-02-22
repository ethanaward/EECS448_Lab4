<?php

echo "<table>";

//Create the first row with each number and a blank at the start
echo "<tr>";
echo "<td>   </td>";
for($x = 1; $x <= 100; $x++) {
  echo "<td>$x</td>";
}
echo "</tr>";


//Create the rest of the rows
for($y = 1; $y <=100; $y++) {

  echo "<tr>";
  for($x = 1; $x <= 101; $x++) {

    //Create the first column with each number
    if($x == 1) {
      echo "<td>$y</td>";
    }

    //Create the rest of the table with the rows and columns multiplied
    else {
    echo "<td>".($x-1)*$y."</td>";
    }

  }
  echo "</tr>";

}


echo "</table>";

 ?>
