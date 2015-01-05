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
echo "Select Discipline Name : ";
echo "<select>";
while($row = mysqli_fetch_array($result1)) {
 
  
  echo "<option>" . $row['discipline_name'] . "</option>";

}
  echo "</select>";

mysqli_close($con);
?> 
