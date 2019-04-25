<html>
<head>
	<title>welcome to restaurant</title>
</head>
<body>
 
 
  <div class="jumbotron" style="background-color:yellow" font color="black">
	<div class="container">
  <marquee>
  <h1 style="color:red"> welcome to food zone </h1>
  </marquee>
  
  
  </div>
 
   
  
  </div>
  
		<form method="post" action="login.php">
      <table>

<tr>
  		<td>enter name</td>
<td><input type="text"  name="name" ></br></td>
</tr>

<tr>
  		<td>enter number</td>
<td><input type="text" name="number"></br></td>
</tr>

<tr>
  		<td>enter email</td>
<td><input type="text" name="email"></br></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="submit"></br></td>
</tr>
			
</table>      
</form>
			 
			
			
</body>
</html>	

<?php



mysqli_connect("localhost","root","","restaurant");


if(isset($_REQUEST['submit']))

  {
        $name=$_POST['name'];
        $number=$_POST['number'];
        $email=$_POST['email'];
  
        $sql="INSERT INTO hotel (name,number,email) VALUES ('$name','$number','$email')";

        if(mysql_query($query))
        {
          echo "WELCOME";
        }
      }       
?>   