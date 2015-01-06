<link rel="stylesheet" href="test.css" type="text/css">
<?php
include("config.php");
$sql="SELECT * FROM institutes";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
echo "<div class='info1'>Total number of institutes: <font color='blue'>".$two."</font></div>";
echo "<br>";
echo "<table style='width:20%' border=1 id='tableID'>";

echo "<tr><th>INSTITUTE NAME</th></tr>";
while($row = mysqli_fetch_array($result)) {
 
  
  echo "<tr align='left'><td><a href='test4.php?id=\"$row[institute_name]\"'  value=\"$row[institute_name]\">".$row[institute_name]."</a></td></tr>";

}

  echo "</table>";

mysqli_close($con);
?> 
