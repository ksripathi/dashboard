<link rel="stylesheet" href="test.css" type="text/css">
<?php
include("config.php");
$sql="SELECT * FROM technologies";
$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
echo "<div class='info1'>Total number of technologies:  <font color='blue'>".$two."</font></div>";
echo "<br>";
echo "<table style='width:50%' border=1 id='tableID'>";

echo "<tr><th>TECHNOLOGY ID</th><th>TECHNOLOGY NAME</th><th>FOSS</th></tr>";
while($row = mysqli_fetch_array($result))
{

echo "<tr align='left'><td align='center' style='width:25%'>$row[id]</td><td><a href='test3.php?id=\"$row[technology_name]\"'  value=\"$row[technology_name]\">".$row[technology_name]."</a></td><td align='center'>".$row[foss]."</td></tr>";

}

  echo "</table>";

mysqli_close($con);
?> 
