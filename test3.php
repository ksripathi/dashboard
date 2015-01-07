<link rel="stylesheet" href="test.css" type="text/css">
<br>
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
$sql="SELECT * from labs WHERE id IN (SELECT lab_id FROM `technologies_used` WHERE tech_id IN( select id from technologies where technology_name ='$e'))";

$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
//echo "Total Number Of Institutes:".$two;
echo "<br><br>";
echo "<table border='1'>";
echo "<span class='tab'>Total Number of labs used <font color='blue'>$e </font> technology : " .$two."</span><br><br>";
echo "<tr><th>LAB ID</th><th>LAB NAME</th></tr>";

while($row = mysqli_fetch_array($result))
{
 echo "<tr align='left'><td>$row[lab_id]</td><td><a href='test1.php?id=\"$row[lab_name]\"'  value=\"$row[lab_name]\">".$row[lab_name]."</a></td></tr>";
  
}
echo "</table><br><br>";
mysqli_close($con);
?> 
