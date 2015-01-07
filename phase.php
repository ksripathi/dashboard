<link rel="stylesheet" href="test.css" type="text/css">


<a href="javascript:goBack()" class="myButton">Back</a>
<script>
function goBack()
{
    window.history.back()
}
</script>

<?php
include("config.php");
$a=$_GET['id'];
$b=substr($a,1);
$c=strrev($b);
$d=substr($c,1);
$e=strrev($d);
mysqli_select_db($con,"vlabs_database");
$sql="SELECT * FROM labs where phase_2_lab=1 and institute_id in (select id from institutes where institute_name='$e')";

$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
if($two==0)
{
echo "<br><br><div class='info'>No phase-II labs found in <font color='blue'>$e</div><br><br>";
exit();
}
//echo "<br>Total Number Of Institutes:".$two;
echo "<br><br>";
echo "<table border='1'>";
echo "<div class='info'>Number of phase-II labs in <font color='blue'>$e</font> are <font color='blue'>$two </div><br><br>";
echo "<tr><th>LAB ID</th><th>LAB NAME</th></tr>";

while($row = mysqli_fetch_array($result))
{
 echo "<tr align='left'><td>$row[lab_id]</td><td><a href='test1.php?id=\"$row[lab_name]\"'  value=\"$row[lab_name]\">".$row[lab_name]."</a></td></tr>";
  
}
echo "</table><br><br>";
mysqli_close($con);
?> 
