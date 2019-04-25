<!DOCTYPE html>
<html>
<head>
<title>MEnu </title>
<style>
 html,
        body {
          margin: 0;
          padding: 0;
          width: 100%;
          height: 100%;
          background: #2c3e50;
          font-family: "Montserrat", sans-serif;
          font-size: 16px;
        }

        body {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-around;
          align-items: center;
          align-content: center;
        }

        h1 {
          color: #f1c40f;
          font-size: 4rem;
          text-transform: uppercase;
          display: block;
          width: 100%;
          text-align: center;
        }
        @media screen and (max-width: 600px) {
          h1 {
            font-size: 3rem;
          }
        }

        
 td {
             
            border-width:3px; 
            border-color:#000000; 
            padding: 10px;
 }
</style>
</head>

<body style="font-family: 'Courier New', Monospace">
<center>
<h1> UPDATE MENU</h1>
<table>
  <tr>
    <th>Type</th>
    <th>Dish Name</th>
    <th>Price</th>
    <th>Action</th>
  </tr>
  <?php

    $con=mysqli_connect("localhost","root","","restaurant");
    $result=mysqli_query($con,"SELECT * FROM menu");
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
  ?>
<tr>
    <form method="post" action="up2.php">
    <td style="font-family: 'verdana', cursive,padding: 30px 10px;" ><input type="text" name="type" value="<?php echo $row['type'];?>"></td>
      <td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
      <td><input type="number" name="price" value="<?php echo $row['price'];?>"></td>
      <input type="hidden" value="<?php echo $row['dish_id']; ?>" name="dish_id">
      <td><input type="submit" name="submit" value="submit" /></td>
    </form>
      <td><a href="delete.php?id=<?php echo $row['dish_id'] ?>"><button >Delete</button></a></td>
    </tr>
<?php } ?>
  <tr>
    <form method="post" action="up3.php">
    
    <td style="padding: 30px 10px;" ><input type="text" name="type"></td>
      <td><input type="text" name="name"></td>
      <td><input type="number" name="price"></td>
      <td><input type="submit" name="submit" value="submit"></td>
      <td> Add dish to Menu </td>
    </form>
    </tr>
</table>
</body>
</center>
</html>
