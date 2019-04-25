<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

mysql_select_db("restaurant");

if(isset($_POST['submit']))

  {
        $name=$_POST['name'];
        $number=$_POST['number'];
        $email=$_POST['email'];

        $query="insert into table (name,number,email) values ('$name','$number','$email')";

        if(mysql_query($query))
        {
          echo "WELCOME";
        }
      }       
?>
