<?php
$con = mysqli_connect('localhost','root','root','vlabs_database');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"vlabs_database");
$sql="SELECT * FROM developers";

$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
echo "Number Of Developers:".$two;
echo "<br><br>";
echo "<table border='1'>";

echo "<tr><td>INSTITUTE NAME</td><td>DEVELOPER NAME</td><td>EMAIL ID</td></tr>";
while($row = mysqli_fetch_array($result)) {
 
  
//  echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] . "</td></tr>";

echo "<tr align='left'><td>$row[institute_name]</td><td><a href='test2.php?id=\"$row[developer_name]\"'  value=\"$row[developer_name]\">".$row[developer_name]."</a></td><td>".$row[email_id]."</td></tr>";

}

  echo "</table>";

mysqli_close($con);
?> 
