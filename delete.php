<?php
$con=mysqli_connect("localhost","root","","restaurant");
$result=mysqli_query($con,"DELETE FROM menu WHERE dish_id=$_GET[id]");

if($result)
    header("refresh:1; url=up1.php");
  else
    echo "Not Update";
 ?>         