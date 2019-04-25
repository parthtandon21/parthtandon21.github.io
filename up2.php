<?php
$con=mysqli_connect("localhost","root","","restaurant");
$result=mysqli_query($con,"UPDATE menu SET type='$_POST[type]',name='$_POST[name]',price=$_POST[price] WHERE dish_id=$_POST[dish_id]");

if($result)
    header("refresh:1; url=up1.php");
  else
    echo "Not Update";
 ?>         