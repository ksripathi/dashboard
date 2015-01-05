<link rel="stylesheet" href="test.css" type="text/css">
<?php
include("config.php");
$sql="SELECT * FROM institutes";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
echo "<br>Total Number Of Institutes:".$two;
echo "<br><br>";
echo "<table border='1'>";

echo "<tr><th>INSTITUTE NAME</th></tr>";
while($row = mysqli_fetch_array($result)) {
 
  
  echo "<tr align='left'><td><a href='test4.php?id=\"$row[institute_name]\"'  value=\"$row[institute_name]\">".$row[institute_name]."</a></td></tr>";

}

  echo "</table>";

mysqli_close($con);
?> 
