<?php include "server.php"; 
echo $id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="webPages.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap">
</head>
<body>
    <nav>
        <div class = "container nav_container">
            <a href="indexlog.php" class="nav_log"><img src="./images/logo.png" class="avatars" alt="">Financial Literacy 101</a>
            <ul class="nav_items">
                <li><a href="bloglog.php">blog</a></li>
                <li><a href="aboutlog.php">about</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="contactslog.log">contacts</a></li>
                <!--<li><a href="signin.html">sign in</a></li>-->
                <li class="nav_profile">
                <?php 
            $sql = "SELECT * FROM registered where id =$id ";
            $res = mysqli_query($connect,  $sql);

             if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) { 
                 
                $image = str_replace("[","",$images['images']);
                $image = str_replace("]","",$image);
                $_SESSION["image"] = $images['images'];
                if ($image =="") {
                    $image ="avatar2.jpg";
                }
              
            }
        }
                ?>
                    <div class="avatar">
                       
                        <img src="uploads/<?=$image?>">
                    </div>    
                    <ul>
                        <li><a href="view.php">Account</a></li>
                        <li><a href="index.html">Logout</a></li>
                    </ul> 
                </li>
            </ul>
            <button id="open_nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close_nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>





<section class="empty_page">
    <h1>Services Page</h1>
</section>






    <footer>
        <div class="footer_socials">
            <a href="htttps://youtube.com" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="htttps://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="htttps://facebook.com" target="_blank"><i class="uil uil-facebook"></i></a>
            <a href="htttps://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
            <a href="htttps://instagram.com" target="_blank"><i class="uil uil-instagram-alt"></i></a>
        </div>
        <div class="container footer_container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Personal Finances</a></li>
                    <li><a href="">Business Finances</a></li>
                    <li><a href="">Tax Matters</a></li>
                    <li><a href="">Credits</a></li>
                    <li><a href="">Rules&Regulations</a></li>
                    <li><a href="">SMMEs</a></li>
                    <li><a href="">Penny Tips</a></li>
                    <li><a href="">Tech&Trends</a></li>
                    <li><a href="">Markets</a></li>
                </ul>
            </article>

            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Personal Finances</a></li>
                    <li><a href="">Business Finances</a></li>
                    <li><a href="">Tax Matters</a></li>
                    <li><a href="">Credits</a></li>
                    <li><a href="">Rules&Regulations</a></li>
                    <li><a href="">SMMEs</a></li>
                    <li><a href="">Penny Tips</a></li>
                    <li><a href="">Tech&Trends</a></li>
                    <li><a href="">Markets</a></li>
                </ul>
            </article>

            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Personal Finances</a></li>
                    <li><a href="">Business Finances</a></li>
                    <li><a href="">Tax Matters</a></li>
                    <li><a href="">Credits</a></li>
                    <li><a href="">Rules&Regulations</a></li>
                    <li><a href="">SMMEs</a></li>
                    <li><a href="">Penny Tips</a></li>
                    <li><a href="">Tech&Trends</a></li>
                    <li><a href="">Markets</a></li>
                </ul>
            </article>
        </div>
        <div class="footer_copyright">
            <small>Copyright &copy; financial literacy 101</small>
        </div>
    </footer>
    <script src="./script.js/main.js"></script>
</body>
</html>