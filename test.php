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
$sql="SELECT * FROM labs WHERE lab_name='$e'";

$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
//echo "Total Number Of Institutes:".$two;
echo "<br><br>";
echo "<table border='1'>";
echo "<h4>Details About <font color='blue'>$e</font> Lab :</h4>";

//echo "<tr><td>INSTITUTE NAME</td></tr>";
while($row = mysqli_fetch_array($result)) {
 
  
  echo "<tr align='left'><td>LAB ID</td><td>". $row['lab_id'] ."</td></tr><tr><td>LAB NAME</td><td>" . $row['lab_name'] ."</td></tr><td>INTEGRATION LEVEL</td><td align='center'>" . $row['integration_level'] ."</td></tr><tr><td>STATUS</td><td>" . $row['status'] ."</td></tr>";
 
//  echo "<tr align='left'><td>". $row['lab_id'] . "</td></tr>";

}

  echo "</table><br><br>";
echo "<a href='dashboard.html' style='text-decoration:none'><input type='button' value='Go Back'></input></a>";

mysqli_close($con);
?> 
