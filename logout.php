<?php
    session_start();
    $table = $_SESSION['table'];
    require_once __DIR__ . '/db_connect.php';
    $result = mysqli_query($db, "SELECT * FROM order_table WHERE table_id = $table");
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $sql = mysqli_query($db, "INSERT INTO order_history VALUES (null, $row[dish_id], $row[quantity], NOW(), $row[price])");
    }
    $result = mysqli_query($db, "DELETE FROM order_table WHERE table_id = $table");
    $result = mysqli_query($db, "DELETE FROM hotel WHERE table_id = $table");
    session_destroy();
    header("Location: page1.php");
?>