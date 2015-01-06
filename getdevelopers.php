<link rel="stylesheet" href="test.css" type="text/css">
<?php
include("config.php");
$sql="SELECT * FROM developers";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
echo "<div class='info1'>Total number of developers: <font color='blue'>".$two."</font></div>";
echo "<br>";
echo "<table style='width:60%' border=1 id='tableID'>";
echo "<tr><th>INSTITUTE NAME</th><th>DEVELOPER NAME</th><th>EMAIL ID</td></tr>";
while($row = mysqli_fetch_array($result)) {
 
  
//  echo "<tr align='left'><td>".$row['lab_id']."</td><td>" . $row['lab_name'] . "</td></tr>";

echo "<tr align='left'><td >$row[institute_name]</td><td><a href='test2.php?id=\"$row[developer_name]\"'  value=\"$row[developer_name]\">".$row[developer_name]."</a></td><td>".$row[email_id]."</td></tr>";

}

  echo "</table>";

mysqli_close($con);
?> 
