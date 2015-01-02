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
$sql="SELECT * FROM labs a, disciplines b, institutes c WHERE a.institute_id=c.id and a.discipline_id=b.id and lab_name='$e'";

$result = mysqli_query($con,$sql);
$two = mysqli_num_rows($result);
//echo "Total Number Of Institutes:".$two;
echo "<br><br>";
echo "<table border='1'>";
echo "<h4>Details About <font color='blue'>$e</font> Lab :</h4>";

//echo "<tr><td>INSTITUTE NAME</td></tr>";
while($row = mysqli_fetch_array($result)) {
 
  
echo "<tr align='left'><td>LAB ID</td><td>". $row['lab_id'] ."</td></tr>";
echo "<tr><td>LAB NAME</td><td>" . $row['lab_name'] ."</td></tr>";
echo "<tr><td>DISCIPLINE NAME</td><td>" . $row['discipline_name'] ."</td></tr>";
echo "<tr><td>INSTITUTE NAME</td><td>" . $row['institute_name'] ."</td></tr>";
echo "<tr><td>DEVELOPER EMAIL-ID</td><td>" . $row['developer'] ."</td></tr>";
echo "<tr><td>INTEGRATION LEVEL</td><td align='center'>" . $row['integration_level'] ."</td></tr>";
echo "<tr><td>BITBUCKET REPOSITORY URL</td><td align='left'><a href=$row[repo_url] target='_blank'>" . $row['repo_url'] ."</a></td></tr>";
echo "<tr><td> IS SOURCES AVAILABLE</td><td align='center'>" . $row['sources_available'] ."</td></tr>";
echo "<tr><td>HOSTED URL</td><td align='left'><a href=$row[hosted_url] target='_blank'>" . $row['hosted_url'] ."</a></td></tr>";
echo "<tr><td>IS LAB DEPLOYED</td><td align='center'>" . $row['lab_deployed'] ."</td></tr>";
echo "<tr><td>NUMBER OF EXPERIMENTS</td><td align='center'>" . $row['number_of_experiments'] ."</td></tr>";
echo "<tr><td>IS CONTENT AVAILABLE</td><td align='center'>" . $row['content'] ."</td></tr>";
echo "<tr><td>IS SIMULATIONS AVAILABLE</td><td align='center'>" . $row['simulation'] ."</td></tr>";
echo "<tr><td>IS WEB2.0 COMPLIANCE</td><td align='center'>" . $row['web2.0_compliance'] ."</td></tr>";
echo "<tr><td>TYPE OF LAB</td><td align='left'>" . $row['type_of_lab'] ."</td></tr>";
echo "<tr><td>IS AUTOHOSTABLE</td><td align='center'>" . $row['auto_hostable'] ."</td></tr>";
echo "<tr><td>REMARKS</td><td align='left'>" . $row['remarks'] ."</td></tr>";
echo "<tr><td>STATUS</td><td>" . $row['status'] ."</td></tr>";
 
//  echo "<tr align='left'><td>". $row['lab_id'] . "</td></tr>";

}

  echo "</table><br><br>";
//echo "<a href='dashboard.html' style='text-decoration:none'><input type='button' value='Go Back'></input></a>";

mysqli_close($con);
?> 
