<html>
<head>
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

        .btn {
          box-sizing: border-box;
          -webkit-appearance: none;
            -moz-appearance: none;
                  appearance: none;
          background-color: transparent;
          border: 2px solid #e74c3c;
          border-radius: 0.6em;
          color: #e74c3c;
          cursor: pointer;
          display: flex;
          align-self: center;
          font-size: 1rem;
          font-weight: 400;
          line-height: 1;
          margin: 20px;
          padding: 1.2em 2.8em;
          text-decoration: none;
          text-align: center;
          text-transform: uppercase;
          font-family: "Montserrat", sans-serif;
          font-weight: 700;
        }
        .btn:hover, .btn:focus {
          color: #fff;
          outline: 0;
        }
        .fourth {
          border-color: #f1c40f;
          color: #fff;
          background-image: linear-gradient(45deg, #f1c40f 50%, transparent 50%);
          background-position: 100%;
          background-size: 400%;
          transition: background 300ms ease-in-out;
        }
        .fourth:hover {
          background-position: 0;
        }
        .fifth {
          border-color: #8e44ad;
          border-radius: 0;
          color: #8e44ad;
          position: relative;
          overflow: hidden;
          z-index: 1;
          transition: color 150ms ease-in-out;
          margin-left: 65px; 
        }
        .fifth:after {
          content: "";
          position: absolute;
          display: block;
          top: 0;
          left: 50%;
          -webkit-transform: translateX(-50%);
                  transform: translateX(-50%);
          width: 0;
          height: 100%;
          background: #8e44ad;
          z-index: -1;
          transition: width 150ms ease-in-out;
        }
        .fifth:hover {
          color: #fff;
        }
        .fifth:hover:after {
          width: 110%;
        }
        </style>
  </head>      
<body>
<h1> Order History </h1>
<center>
<form method="get" action="">
    <input type="date" name="start">
    <input type="date" name="end">
    <input type="submit" name="submit" value="submit">
</form>
<?php
require_once __DIR__ . '/db_connect.php';
if(isset($_GET['start']) && isset($_GET['end'])){
    ?>

<table border="1">
  <tr>
    <th>Type</th>
    <th>Dish Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Date</th>
  </tr>
  <?php
    $result=mysqli_query($db,"SELECT type, name, o.price as price, quantity, date FROM order_history o, menu m WHERE o.dish_id = m.dish_id AND date BETWEEN '$_GET[start]' AND '$_GET[end]'");
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
  ?>
<tr>
      <td><?php echo $row['type']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td><?php echo $row['quantity']; ?></td>
      <td><?php echo $row['date']; ?></td>
    </tr>
<?php } ?>
</table>

    <?php
}

?>
</center>
</body>
</html>