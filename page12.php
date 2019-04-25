<html>
    <head>
        <title>welcome to restaurant</title>
        <link rel="icon" href="icon.png">
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
            input[type=text] {
                                    width: 100%;
                                    padding: 12px 20px;
                                    margin: 4px 0;
                                    box-sizing: border-box;
                                    }
            input[type=email] {
                                    width: 100%;
                                    padding: 12px 20px;
                                    margin: 4px 0;
                                    box-sizing: border-box;
                                    }    
            input[type=submit]{     
                                    background-color: rgb(0, 0, 0);
                                    border: none;
                                    color: white;
                                    padding: 16px 32px;
                                    margin: 4px 20px;
                                    cursor: pointer;
                                    position: relative;

                                         }                  
                                                            
        </style>
    </head>
    <body background="banner.jpg" >
        <h1>Welcome to Food zone </h1>
        <h3>Fill in these details</h3>
        <form method="post" action="tablecon.php">
            <table align="center">

                <tr>
                    <td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">Select Table</td>
                    <td><select name="table"><option value="1">1</option><option value="2">2</option>
                    </select></br></td>
                </tr>

                <tr>
                    <td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm ">Name</td>
                    <td><input type="text"  name="name" required focus></br></td>
                </tr>

                <tr>
                    <td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm">Number</td>
                    <td><input type="text" name="number" required></br></td>
                </tr>

                <tr>
                    <td style="text-shadow: 0 0 3px rgb(16, 17, 17),0 0 4px rgb(216, 226, 224);font-family: verdana;font-size:0.8cm">Email</td>
                    <td><input type="email" name="email" required></br></td>
                </tr>

                <tr>
                    <a href="Menu.html">
                    <td align="center"><input type="submit" name="Submit" value="SUBMIT" ></br></td></a>
                </tr>
                            
            </table>      
        </form>
    </body>
</html>			






