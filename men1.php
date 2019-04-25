<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <link rel="icon" href="icon.png">
        <style>
            body {
                background-image: url("men2.jpg") ;
                background-size: cover;
                background-repeat:no-repeat;
                
            }
                .container {
                position: relative;
                width: 50%;
                top: 8px;
                left: 1270px;
                overflow: -moz-hidden-unscrollable;
                }

            .image {
            display: block;
            width: 10%;
            height: auto;
            }

            .overlay {
            position: absolute;
            bottom: 100%;
            left: 0;
            right: 0;
            background-color:  rgba(135, 226, 233, 0.445);
            overflow: hidden;
            width: 10%;
            height:0;
            transition: .5s ease;
            }

            .container:hover .overlay {
            bottom: 0;
            height: 100%;
            }

            .text {
            white-space: nowrap; 
            color: rgb(7, 12, 4);
            font-size: 20px;
            position: absolute;
            overflow: hidden;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            font-weight: bolder;
            }
            img { 
                width: 10%;
                height: auto;}
            p{
                font-family: "Brush Script MT", "Brush Script Std", cursive;
                font-size: 50px;
                text-shadow: 0 0 300px rgb(145, 205, 209),0 0 10px rgb(145, 205, 209);  
                display: block;
                margin-top: 0em;
                margin-bottom: 0.67em;
                margin-left: 10px;
                margin-right: 0;
                font-weight: bolder;
                color: rgba(17, 20, 19, 0.911);
                position: fixed;
                border: 5px double rgba(0, 0, 0, 0.521);
            }
            .button {
            background-color: rgba(3, 3, 3, 0.692); 
            border: none;
            color: white;
            padding: 16px 32px;
            text-align:  bottom;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: -50px 2px 10px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            font-weight: bolder;
            }

            .button2 {background-color: rgba(129, 221, 228, 0.521)0;
            color: white;}
            

            .button2:hover {background-color: rgba(135, 226, 233, 0.445); 
            color: black; 
            border: 2px double rgba(129, 221, 228, 0.555);
            }
            
                    
                    
                        
        </style>
    </head>
    <body>
    <a href="logout.php">   
    <p  align="Center"> Exit</p></a>
    <div class="container">
            
            <img src="cart.png" alt="Avatar" class="image" >
            <div class="overlay">
            <a href="order.php">
            <div class="text">CART</div></a>
            </div>
        </div>
        <center>
        <a href="">
        <button align="center" class="button button2">Menu</button></a>   
        <table>
        <tr>
            <th style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">Type</th>
            <th style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">Dish Name</th>
            <th style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">Price</th>
            <th style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">Quantity</th>
            <th style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">Action</th>
        </tr>
        <?php

        $con=mysqli_connect("localhost","root","","restaurant");
        $result=mysqli_query($con,"SELECT * FROM menu");
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
        ?>
        <tr>
            <form method="post" action="add-order.php">
            <td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm; padding: 20px 0px; "><?php echo $row['type']; ?></td>
            <td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm "><?php echo $row['name']; ?></td>
            <td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm "><?php echo $row['price']; ?></td>
            <input type="hidden" value="<?php echo $row['dish_id']; ?>" name="dish_id">
            <input type="hidden" value="<?php echo $row['price']; ?>" name="price">
            <td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm "><input type="number" name="quantity"></td>
              <td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm "><input type="submit" name="submit" value="ADDTOCART"></td>
            </form>
            </tr>
        <?php } ?>
        </table>
        </center>        
    </body>
</html>