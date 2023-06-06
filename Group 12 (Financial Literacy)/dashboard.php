
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
    <link rel="stylesheet" href="profile.css">
   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap">
</head>
<body>
    <nav>
        <div class = "container nav_container">
        <a href="indexad.php" class="nav_log"><img src="./images/logo.png" class="avatars" alt="">Financial Literacy 101</a>
            <ul class="nav_items">
                <li><a href="blogad.php">blog</a></li>
                <li><a href="aboutad.php">about</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="contactad.php">contacts</a></li>
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
                            $image ="loginuser.png";
                        }
                      
                    }
                }
                        ?>
                            <div class="avatar">
                               
                                <img src="uploads/<?=$image?>">
                            </div>    
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="index.html">Logout</a></li>
                    </ul> 
                </li>
            </ul>
            <button id="open_nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close_nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>




<section class="dashboard">
    <div class="container dashboard_container">
        <button id="show_sidebar-btn" class="sidebar_toggle"><i class="uil uil-angle-right-b"></i></button>
        <button id="hide_sidebar-btn" class="sidebar_toggle"><i class="uil uil-angle-left-b"></i></button>
        <aside>
            <ul>
                <li>    
                    <h5>View Users</h5>
                    <a href="manage_users.php"><i class="uil uil-user-plus"></i></a>
                    
                </li>
            </ul>
        </aside>
        <main>
            
            <h2>Dashboard</h2>
            <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">


    <div class="carousel-item active">


   <div class="swiper mySwiper container" id="second">
                <div class="swiper-wrapper content">
                    <div class="swiper-slide card">
                        <div class="cardcontent">
                            <h5>Logged in Admin</h5>
                            <div class="image">
                            <?php 
            $sql = "SELECT * FROM registered where id =$id ";
            $res = mysqli_query($connect,  $sql);

             if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) { 
                 
                $image = str_replace("[","",$images['images']);
                $image = str_replace("]","",$image);
                $_SESSION["image"] = $images['images'];
                if ($image =="") {
                    $image ="loginuser.png";
                }
              
            }
        }
                ?>
                    <div class="image">
                       
                        <img src="uploads/<?=$image?>">
                    </div>  
                            </div>
                            <div class="cardinformatin">
                                <span class="name"><?php
                               

                                $name = str_replace('[',"", $_SESSION["name"]);
                                echo "<b>Name: </b>"  .str_replace(']','', $name ) ."  ". "  " ;

                               $surname = str_replace('[',"",$_SESSION["surname"]);
                               echo " ".str_replace(']',"", $surname); ?></span>
                                 <span class="name"><?php
                                 $email = str_replace('[',"", $_SESSION["email"]);
                                 echo str_replace(']',"", $email );
                                ?></span>
                                <p>
                                   </p>
                            </div>
                            <div class="view">
                            <button class="button">Learn More</button>
    
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
    </div>




    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
        </main>
    </div>
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