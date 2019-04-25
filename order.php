<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cart</title>
        <link rel="icon" href="icon.png">
        <style>
            body {
                background-image: url("men2.jpg") ;
                background-size: cover;
                background-repeat:no-repeat;
                
            }

       
</style>
</head>
<center>
<body>
   
<table>
  <tr>
    <th style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">Type</th>
    <th style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">Dish Name</th>
    <th style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">Price</th>
    <th style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">Quantity</th>
    <th style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">Action</th>
  </tr>
  <?php
    $total = 0;
    session_start();
    $table = $_SESSION['table'];
    require_once __DIR__ . '/db_connect.php';
    $result=mysqli_query($db,"SELECT order_id, type, name, o.price as price, quantity FROM order_table o, menu m WHERE o.dish_id = m.dish_id AND table_id = $table");
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
      $total += $row['price'];
  ?>
<tr>
<form method="post" action="remove-order.php">
<td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm; padding: 20px 0px; "><?php echo $row['type']; ?></td>
 <td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm "><?php echo $row['name']; ?></td>
    <td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm "><?php echo $row['price']; ?></td>
    <td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm "><?php echo $row['quantity']; ?></td>
    <input type="hidden" value="<?php echo $row['order_id']; ?>" name="order_id">
    <td ><input type="submit" name="submit" value="Remove"></td>
</form>
</tr>
<?php } ?>
</table>
<label style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">Total Price: <?php echo $total; ?></label> 
</body>
</center>
</html>
