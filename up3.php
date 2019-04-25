<?php
$con=mysqli_connect("localhost","root","","restaurant");
$result=mysqli_query($con,"INSERT INTO menu values(null,'$_POST[name]',$_POST[price],'$_POST[type]')");

if($result)
    header("refresh:1; url=up1.php");
  else
    echo "Not Update";
 ?>         