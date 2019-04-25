<html>
<head>
	<title>welcome to restaurant</title>
     <link rel="icon" href="1.png">
  <style>
            h1{
            text-align: center;
            text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);
            font-family: verdana;
            -ms-text-justify: auto;
            }
            h3{
            text-decoration: underline;
            text-align: center;
            text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224); 
            font-family: verdana;   
            }
               
                                                            
        </style>
</head>
</head>
<body background="men2.jpg">
 
 <h3> ADMIN LOGIN </h3>
 
  
		<form method="post" >
      <table align="center">

<tr>
<td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">USER NAME</td>
<td><input type="text"  name="user" ></br></td>
</tr>

<tr>
<td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">PASSWORD</td>
<td><input type="password" name="password"></br></td>
</tr>

<tr>
<td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm "><input type="submit" name="submit" value="submit"></br></td>
</tr>
			
</table>      
</form>
			 
			
</body>
</html>	

<?php


if(isset($_REQUEST['submit']))

    {
        $user=$_POST['user'];
        $password=$_POST['password'];
        if($user == "parth" && $password == "123"){
            header("Location:adash.php");
        }
    }       
?>   