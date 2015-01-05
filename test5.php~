<?php
$con = mysqli_connect('localhost','root','root','vlabs_database');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
$a=$_GET['id'];
$b=substr($a,1);
$c=strrev($b);
$d=substr($c,1);
$e=strrev($d);
mysqli_select_db($con,"vlabs_database");
$sql="SELECT * from labs WHERE id IN (SELECT lab_id FROM `technologies_used` WHERE tech_id IN( select id from technologies where technology_name ='$e'))";

$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
//echo "Total Number Of Institutes:".$two;
echo "<br><br>";
echo "<table border='1'>";
echo "<h4>Number of Labs used <font color='blue'>$e </font> Technology : " .$two."</h4>";
echo "<tr><td>LAB ID</td><td>LAB NAME</td></tr>";

while($row = mysqli_fetch_array($result))
{
 echo "<tr align='left'><td>$row[lab_id]</td><td><a href='test1.php?id=\"$row[lab_name]\"'  value=\"$row[lab_name]\">".$row[lab_name]."</a></td></tr>";
  
}
echo "</table><br><br>";
mysqli_close($con);
?> 
