<?php
include("config.php");
$sql="SELECT * FROM institutes";
$sql1="SELECT * FROM disciplines";
$result1 = mysqli_query($con,$sql1);
$result = mysqli_query($con,$sql);

echo "Select Institute Name :";

echo "<select>";
while($row = mysqli_fetch_array($result)) {
 
  
  echo "<option>" . $row['institute_name'] . "</option>";

}

  echo "</select>";echo "<br><br>";	

mysqli_close($con);
?> 
