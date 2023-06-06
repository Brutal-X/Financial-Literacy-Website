<?php

require("server.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css/login.css">
    <script src="https://kit.fontawesome.com/4718e76971.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
    
        <div class="icondiv">
            <img src="./images/loginuser.png" id="logoUser">
        </div>
        
    </div>
    <section class="loginsection">
        <form  method="post">
        <div class="login" id="Lcontainer">
            <table>
                <tr>
              
                    <td>
                        <i class="fa-solid fa-envelope" style="color: #fafafa;"></i>
                        <input type="email" class="inputs" placeholder="Email address" name="email"></td>
                </tr>
            
                <tr>
                    <td>
                        <i class="fa-solid fa-lock" style="color: #ffffff;"></i>
                        <input type="password" class="inputs" placeholder="Password" name="password">
                    </td>
                </tr>
                <tr>
                
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="logbtn"  class="ghost" id="signin" name=login>Login</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="register.php" class="ghost" id="create"> Create account</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="index.html"  id="returnhome">Return to Homepage</a>
                    </td>
                </tr>
            </table>
        </div>
        </form>
    </section>
    <section class="sect2">
        <div class="secondDiv">
            <h1 id="title">Financial Literacy 101</h1>

            <h3>THANK YOU FOR VISITING <BR>OUR WEBSITE</BR></h3>

            <p><B>Please login for a more personalised and better experience</B> </p>
            <div>
                <img src="./images/logo.png" id="logo">
            </div>
        </div>
      

    </section>
    <script src="login.js"></script>
</body>
</html>