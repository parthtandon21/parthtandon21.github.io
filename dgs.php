<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
</head>
<body>
 <table>
 <tr>
  <th>bi</th> 
  <th>bn</th> 
  <th>bc</th>
 </tr>
 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "student";
 
 
 if(isset($_REQUEST['submit']))
 
   {
    $bi=$_POST['bi'];
    $bn=$_POST['bn'];
    $bc=$_POST['bc'];


$conn = mysqli_connect("localhost", "root", "", "student");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT bi, bn, bc FROM stud";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["bi"]. "</td><td>" . $row["bn"] . "</td><td>"
. $row["bc"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
   }
$conn->close();
?>
</table>
</body>
</html>