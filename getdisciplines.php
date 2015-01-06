<link rel="stylesheet" href="test.css" type="text/css">
<?php
include("config.php");
$sql="SELECT * FROM disciplines";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
echo "<div class='info1'>Total number of disciplines: <font color='blue'>".$two."</font></div>";
echo "<br>";
echo "<table style='width:30%' border=1 id='tableID'>";

echo "<tr><th>DISCIPLINE NAME</th></tr>";
while($row = mysqli_fetch_array($result)) {
 
   echo "<tr align='left'><td><a href='test5.php?id=\"$row[discipline_name]\"'  value=\"$row[discipline_name]\">".$row[discipline_name]."</a></td></tr>";
  //echo "<tr align='left'><td>". $row['discipline_name'] . "</td></tr>";

}

  echo "</table>";

mysqli_close($con);
?> 
