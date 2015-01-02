<?php
$p = $_POST["p"];//institute
$q = $_POST["q"];//discipline
$r = $_POST["r"];//status
$s = $_POST["s"];//integration-level
$con = mysqli_connect('localhost','root','root','vlabs_database');
mysqli_select_db($con,"vlabs_database");

if (!$con) 
{
  die('Could not connect: ' . mysqli_error($con));
  exit(0);
}


if($p!=0 && $q==0 && $r=='None' && $s=='None')//disply only institutes
{

$sql="SELECT * FROM labs WHERE institute_id='$p'";

}
else if($p==0 && $q!=0 && $r=='None' && $s=='None')//only disciplines 
{

$sql="SELECT * FROM labs WHERE discipline_id='$q'";

}
else if($p==0 && $q==0 && $r!='None' && $s=='None') //only status
{
$sql="SELECT * FROM labs WHERE status='$r'";

}

else if($p==0 && $q==0 && $r=='None' && $s!='None') //only integrations
{
$sql="SELECT * FROM labs a WHERE a.integration_level='$s'";

}

else if($p!=0 && $q!=0 && $r=='None' && $s=='None') //institute with integrations
{
$sql="SELECT * FROM labs a WHERE a.institute_id='$p' and a.discipline_id='$q'";

}

else if($p!=0 && $q!=0 && $r!='None' && $s=='None')//institute with discipline with status
{

$sql="SELECT * FROM labs a WHERE a.institute_id='$p' and a.discipline_id='$q' and a.status='$r'";

}

else if($p!=0 && $q==0 && $r!='None' && $s=='None')//institute with status
{
$sql="SELECT * FROM labs a WHERE a.institute_id='$p' and a.status='$r'";

}

else if($p==0 && $q!=0 && $r!='None' && $s=='None')//discipline with status
{
$sql="SELECT * FROM labs a WHERE a.discipline_id='$q' and a.status='$r'";

}

else if($p!=0 && $q==0 && $r=='None' && $s!='None')//institute with integrations
{

$sql="SELECT * FROM labs a WHERE a.integration_level='$s' and a.institute_id='$p'";

}

else if($p==0 && $q!=0 && $r=='None' && $s!='None')//discipline with integrations
{
$sql="SELECT * FROM labs a WHERE a.integration_level='$s' and a.discipline_id='$q'";

}

else if($p==0 && $q==0 && $r!='None' && $s!='None')//status with integration
{

$sql="SELECT * FROM labs a WHERE a.integration_level='$s' and a.status='$r'";

}

else if($p!=0 && $q!=0 && $r=='None' && $s!='None')//institute with discipline with integration
{
$sql="SELECT * FROM labs a WHERE a.integration_level='$s' and a.institute_id='$p' and a.discipline_id='$q'";

}

else if($p!=0 && $q!=0 && $r!='None' && $s!='None')//institute with discipline with integration with status
{
$sql="SELECT * FROM labs a WHERE a.integration_level='$s' and a.institute_id='$p' and a.discipline_id='$q' and a.status='$r'";

}

else if($p!=0 && $q==0 && $r!='None' && $s!='None')//institute with integration with status
{
$sql="SELECT * FROM labs a WHERE a.integration_level='$s' and a.institute_id='$p' and a.status='$r'";

}

else if($p==0 && $q!=0 && $r!='None' && $s!='None')//expect institute with others
{
$sql="SELECT * FROM labs a WHERE a.integration_level='$s' and a.discipline_id='$q' and a.status='$r'";
}

else
{
echo "<br><br>";
echo "<font color='red'> Please Select Atleast One Value..!!</font>";
exit();
}
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);    
echo "<br><br>";

if($two==0)
{

echo "No Labs Found For This Query";
exit();
}

else
{
echo "<h4>Total Number Of Labs: ".$two."</h4>";
}
echo "<br><br>";
echo "<table border='2' align='center'>";
echo "<tr align='center'><td>LAB ID</td><td>LAB NAME</td><td>INTEGRATION LEVEL</td><td>STATUS</td></tr>";
while($row = mysqli_fetch_array($result)) 
 {  
    echo "<tr align='left'><td>$row[lab_id]</td>";
    echo "<td><a href='test1.php?id=\"$row[lab_name]\"'  value=\"$row[lab_name]\">".$row[lab_name]."</a></td>";
    echo "<td>".$row[integration_level]."</td>";
    echo "<td>".$row[status]. "</td></tr>";
 }
echo "</table>";
mysqli_close($con);

?> 
