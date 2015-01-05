<?php
$con = mysqli_connect('localhost','root','root','vlabs_database');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
?>
<button onclick="goBack()">Go Back</button>

<script>
function goBack()
{
    window.history.back()
}
</script>

<?php

$a=$_GET['id'];
$b=substr($a,1);
$c=strrev($b);
$d=substr($c,1);
$e=strrev($d);
mysqli_select_db($con,"vlabs_database");
//$sql="SELECT * FROM labs a, disciplines b, institutes c WHERE a.institute_id=c.id and a.discipline_id=b.id and lab_name='$e'";
$sql= "SELECT * from labs where developer IN (SELECT email_id FROM developers WHERE developer_name ='$e')";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
//echo "Total Number Of Institutes:".$two;
echo "<br><br>";
echo "<table border='1'>";
echo "<h4>Labs Developed by <font color='blue'>$e</font> : " .$two."</h4>";
echo "<tr><td>LAB ID</td><td>LAB NAME</td></tr>";

while($row = mysqli_fetch_array($result))
{
 echo "<tr align='left'><td>$row[lab_id]</td><td><a href='test1.php?id=\"$row[lab_name]\"'  value=\"$row[lab_name]\">".$row[lab_name]."</a></td></tr>";
  
}
echo "</table><br><br>";
mysqli_close($con);
?> 
