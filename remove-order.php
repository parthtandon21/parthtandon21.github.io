<?php
// check for required fields
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $order_id = $_POST['order_id'];

    // include db connect class
    require_once __DIR__ . '/db_connect.php';
    $result = mysqli_query($db,"DELETE FROM order_table WHERE order_id = $order_id");
    if($result == TRUE){
        header("Location:order.php");
    }
    else{
        echo "Error";
    }
}
?>