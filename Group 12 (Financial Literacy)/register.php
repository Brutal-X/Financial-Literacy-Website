<?php
require("server.php");

?>
</html><!DOCTYPE html>
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
    
       
      
    <div class="maincontainer">
    <section class="loginsection">
    <div class="icondiv">
            <img src="./images/loginuser.png" id="logoUser">
        </div>
    <form method="post">
        <div class="login" id="Scontainer">
            <table>

                <tr>
              
                    <td>

                        <input type="text" class="inputs" placeholder="FirstName" name="name"></td>
                </tr>
          
                <tr>
                    <td>
                        <input type="text" class="inputs" placeholder="Surname" name="surname">
                    </td>
                </tr>
            
                <tr>
              
                    <td>
                        <input type="email" class="inputs" placeholder="Email address" name="email"></td>
                </tr>
                <tr>
                    <td>
                        <i class="fa-solid fa-lock" style="color: #ffffff;"></i>
                        <input type="password" class="inputs" placeholder="Password" name="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" class="inputs" placeholder="Confirm Password" name="password2">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5><input type="checkbox" name="remember" id="checkbox">Accept T&C's</h5>
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="logbtn" id="signup" name="signup">Sign up</button>
                    </td>
                </tr>
                <tr>
                    <td><a href="login.php" id="create"> already have an account</a></td>
                </tr>
           
            </table>
        </div>
        </form>
    </section>
    <section class="sect2">
        <div class="secondDiv">
            <h1 id="title">Financial Literacy 101</h1>

            <h3>THANK YOU FOR VISITING <BR>OUR WEBSITE</BR></h3>

            <p><B>Please Signup for a more personalised and better experience</B> </p>
            <div>
                <img src="./images/logo.png" id="logo">
            </div>
            <div>
                <h4 id="back"><a href="blog.html">Return to Homepage</a></h4>
            </div>
        </div>
        
      

    </section>
    </div>
    <script src="login.js"></script>
</body>
</html>