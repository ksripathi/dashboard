<link rel="stylesheet" href="test.css" type="text/css">
<?php
include("config.php");
$sql="SELECT * FROM technologies";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
echo "<br><div class='info1'>Number Of Developers:".$two."</div>";
echo "<br><br>";
echo "<table border='1'>";

echo "<tr><th>TECHNOLOGY ID</th><th>TECHNOLOGY NAME</th><th>FOSS</th></tr>";
while($row = mysqli_fetch_array($result))
{

echo "<tr align='left'><td>$row[id]</td><td><a href='test3.php?id=\"$row[technology_name]\"'  value=\"$row[technology_name]\">".$row[technology_name]."</a></td><td>".$row[foss]."</td></tr>";

}

  echo "</table>";

mysqli_close($con);
?> 
