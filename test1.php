<link rel="stylesheet" href="test.css" type="text/css">
<!--<link rel="stylesheet" href="dashboard.css" type="text/css">-->
<br>
<a href="javascript:goBack()" class="myButton"><blink>Back</blink></a>

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

$sql="SELECT * FROM labs a, disciplines b, institutes c WHERE a.institute_id=c.id and a.discipline_id=b.id and lab_name='$e'";

$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
if($two==0)
{
echo "<font color='red'>No Details Found</font>";
exit();
}

echo "<br><br>";

echo "<span class='tab'>Details About <font color='blue'>$e</font> </span><br><br><br>";

//echo "<table border='1'>";
echo "<table style='width:60%' border=1 id='tableID1'>";
echo "<tr><th>PROPERTIES</th><th>VALUES</th></tr>";
while($row = mysqli_fetch_array($result)) {
echo "<tr align='left'><td>LAB ID</td><td>". $row['lab_id'] ."</td></tr>";
echo "<tr><td align='left'>LAB NAME</td><td>" . $row['lab_name'] ."</td></tr>";
echo "<tr><td>DISCIPLINE NAME</td><td>" . $row['discipline_name'] ."</td></tr>";
echo "<tr><td>INSTITUTE NAME</td><td>" . $row['institute_name'] ."</td></tr>";
echo "<tr><td>DEVELOPER EMAIL-ID</td><td>" . $row['developer'] ."</td></tr>";
echo "<tr><td>INTEGRATION LEVEL</td><td>" . $row['integration_level'] ."</td></tr>";
echo "<tr><td>BITBUCKET REPOSITORY URL</td><td><a href=$row[repo_url] target='_blank'>" . $row['repo_url'] ."</a></td></tr>";
echo "<tr><td> IS SOURCES AVAILABLE</td><td>" . $row['sources_available'] ."</td></tr>";
echo "<tr><td>HOSTED URL</td><td><a href=$row[hosted_url] target='_blank'>" . $row['hosted_url'] ."</a></td></tr>";
echo "<tr><td>IS LAB DEPLOYED</td><td>" . $row['lab_deployed'] ."</td></tr>";
echo "<tr><td>NUMBER OF EXPERIMENTS</td><td>" . $row['number_of_experiments'] ."</td></tr>";
echo "<tr><td>IS CONTENT AVAILABLE</td><td>" . $row['content'] ."</td></tr>";
echo "<tr><td>IS SIMULATIONS AVAILABLE</td><td>" . $row['simulation'] ."</td></tr>";
echo "<tr><td>IS WEB2.0 COMPLIANCE</td><td>" . $row['web2.0_compliance'] ."</td></tr>";
echo "<tr><td>TYPE OF LAB</td><td>" . $row['type_of_lab'] ."</td></tr>";
echo "<tr><td>IS AUTOHOSTABLE</td><td>" . $row['auto_hostable'] ."</td></tr>";
echo "<tr><td>REMARKS</td><td>" . $row['remarks'] ."</td></tr>";
echo "<tr><td>STATUS</td><td>" . $row['status'] ."</td></tr>";

}
echo "</table><br>";

$sql="SELECT * FROM experiments where id IN (select id from labs where lab_name='$e')";

$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
if($two==0)
{
echo "<span class='tab'><font color='red'>No Experiments Found</font></span>";
exit();
}

echo "<br><span class='tab'>Total Experiments : <font color='blue'>$two</font></span>";

echo "<br><br>";
echo "<table style='width:80%' border=1 id='tableID1'>";

echo "<tr><th>EXPERIMENT NAME</th><th>CONTENT URL</th><th>SIMULATION URL</th></tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr align='left'><td>$row[exp_name]</td><td><a href=$row[content_url] value=\"$row[content_url]\">".$row[content_url]."</a></td><td><a href=$row[simulation_url]  value=\"$row[simulation_url]\">".$row[simulation_url]."</a></td></tr>";

}
echo "</table>";
mysqli_close($con);


?> 
