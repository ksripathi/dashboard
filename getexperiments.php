<?php
include("config.php");
$sql="SELECT * FROM experiments";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
//echo "Number Of Developers:".$two;
echo "<br><br>";
echo "<table border='1'>";

echo "<tr><th>EXPERIMENT NAME</th><th>CONTENT URL</th><th>SIMULATION URL</td></tr>";
while($row = mysqli_fetch_array($result)) {
 
  
//  echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] . "</td></tr>";

echo "<tr align='left'><td>$row[exp_name]</td><td><a href='\"$row[content_url]\"'  value=\"$row[content_url]\">".$row[content_url]."</a></td><td><a href='\"$row[simulation_url]\"'  value=\"$row[simulation_url]\">".$row[simulation_url]."</a></td></tr>";

}

  echo "</table>";

mysqli_close($con);
?> 
