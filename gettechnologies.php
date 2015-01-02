<?php
$con = mysqli_connect('localhost','root','root','vlabs_database');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"vlabs_database");
$sql="SELECT * FROM technologies";

$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
echo "Number Of Developers:".$two;
echo "<br><br>";
echo "<table border='1'>";

echo "<tr><td>TECHNOLOGY ID</td><td>TECHNOLOGY NAME</td><td>FOSS</td></tr>";
while($row = mysqli_fetch_array($result)) {
 
  
//  echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] . "</td></tr>";

echo "<tr align='left'><td>$row[id]</td><td><a href='test3.php?id=\"$row[technology_name]\"'  value=\"$row[technology_name]\">".$row[technology_name]."</a></td><td>".$row[foss]."</td></tr>";

}

  echo "</table>";

mysqli_close($con);
?> 
