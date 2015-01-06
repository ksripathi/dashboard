<link rel="stylesheet" href="test.css" type="text/css">
<?php
include("config.php");
$sql="SELECT * FROM labs";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
echo "<br><div class='info1'>Total Number Of Labs:".$two."</div>";
echo "<br><br>";
echo "<table border='1'>";

echo "<tr><th>LAB ID</th><th>LAB NAME</th></tr>";
while($row = mysqli_fetch_array($result)) {
 
  
//  echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] . "</td></tr>";

echo "<tr align='left'><td>$row[lab_id]</td><td><a href='test1.php?id=\"$row[lab_name]\"'  value=\"$row[lab_name]\">".$row[lab_name]."</a></td></tr>";

}

  echo "</table>";

mysqli_close($con);
?> 
