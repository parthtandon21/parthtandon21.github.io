<?php
// check for required fields
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $table = $_POST['table'];
    $dish_id = $_POST['dish_id'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // include db connect class
    require_once __DIR__ . '/db_connect.php';

    $updated_price = $price * $quantity;
    session_start();
    $table = $_SESSION['table'];
    $result = mysqli_query($db,"INSERT INTO order_table VALUES(null, $table, $dish_id, $quantity, $updated_price)");
    if($result == TRUE){
        header("Location:men1.php?added=true");
    }
    else{
        echo "Error";
    }
}
?>