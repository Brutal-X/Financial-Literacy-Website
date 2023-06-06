

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
            <a href="indexad.php" class="nav_log"><img src="./images/logo.png" class="avatars" alt="">Financial Literacy 101</a>
            <ul class="nav_items">
                <li><a href="blogad.php">Blog</a></li>
                <li><a href="aboutad.php">About</a></li>
                <li><a href="resourcesad.php">Resources</a></li>
                <li><a href="contactsad.php">Contacts</a></li>
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

    <section class="featured">
        

       
    <DIV class="home">
            <img src="./images/background.jpg"  id="homepic"alt="">
            <div class="fine">
                    <h1>Financial Literacy 101</h1>
            </div>
            <div class="slogan">
                    <h2>
                        Your Guide To Financial Freedom
                    </h2>

            </div>

        <div class="container featured_container">
        
        </div>
    </section>


    <section class="posts">
        <div class="container posts_container">
            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/budget.webp"  class="picture"alt="">
                </div>
                <div class="post_info">
                    
                    <h3 class="post_title"><a href="budget.html"> BUDGETING 101</a></h3>
                    <p class="post_body">
                        Budgeting is the process of creating a plan for how to allocate financial resources over a certain period of time.It involves setting financial goals, estimating income and expenses, and allocating funds to specific categories such as food...<br>
                        
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/nhlanhla.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Nhlanhla Msomi</h5>
                            <small>March 3, 2023 - 10:34 </small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/investment.jpg" class="picture"alt="">
                </div>
                <div class="post_info">
                    
                    <h3 class="post_title"><a href="invest.html">INVESTMENT</a></h3>
                    <p class="post_body">
                        Investing means putting your money or other resources toward something you expect to earn income, turn a profit or create some other positive benefit. 
                        When you invest, you buy assets that you expect to increase in value over time... 
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/edward.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Edward Mofokeng</h5>
                            <small>March 11, 2023 - 23:07 </small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/piggy.jpg" class="picture"alt="">
                </div>
                <div class="post_info">
                    
                    <h3 class="post_title"><a href="savings.html">SAVINGS AND RETIREMENT</a></h3>
                    <p class="post_body">
                        There are various investment solutions that can be used to save money for retirement.
                        Saving for retirement is important for your peace of mind, but how do you find the right solution for you? Don't worry we've got it all under control...
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/ronica.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Mpho Kuntlepano</h5>
                            <small>March 25, 2023 - 14:34 </small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/Rand-Getty.jpg" class="picture" alt="">
                </div>
                <div class="post_info">
                    
                    <h3 class="post_title"><a href="moneyMatters.html">MONEY MATTERS</a></h3>
                    <p class="post_body">
                        Access to finance is one of the most significant barriers to small business growth in South Africa. Many small business owners struggle to access funding from traditional banking institutions due to a lack of collateral, credit history, or financial records. 
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/credit.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Minenhle Nkosi</h5>
                            <small>April 10, 2023 - 07:30 </small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/moneyexchange-1200x675-cropped.jpg" class="picture" alt="">
                </div>
                <div class="post_info">
                    
                    <h3 class="post_title"><a href="technology.html">TECH AND TRENDS</a></h3>
                    <p class="post_body">
                        Our dependence on technology for quick responses and solutions has increased as our environment becomes more technologically advanced every day. Research further reveals more frightening financial stability numbers.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/lerato.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Lerato Nama</h5>
                            <small>April 15, 2023 - 16:38 </small>
                        </div>
                    </div>
                </div>
            </article>

            

            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/loanyy.jpg" class="picture" alt="">
                </div>
                <div class="post_info">
                    
                    <h3 class="post_title"><a href="loan.html">LEND A LOAN</a></h3>
                    <p class="post_body">
                        Before taking out a loan, it's crucial to carefully analyze the conditions, interest rates, and payback requirements involved. To prevent potential financial issues or adverse effects on credit, borrowers should make sure they have the means to...
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/lindelani.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Lindelani Xaba</h5>
                            <small>April 30, 2023 - 10:40 </small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/credityyyyy.jpg" class="picture" alt="">
                </div>
                <div class="post_info">
                    
                    <h3 class="post_title"><a href="creditscore.html">CREDIT SCORE</a></h3>
                    <p class="post_body">
                        Credit is the ability to borrow money or obtain goods and services before payment is made
                        with the promise to repay the amount borrowed or the value of the goods or services provided at a later time,
                        often with interest or fees.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/credit.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Minenhle Nkosi</h5>
                            <small>April 10, 2023 - 07:30 </small>
                        </div>
                    </div>
                </div>
            </article>

            <div class="post_info">
                <div class="post_thumbnail">
                    <img src="./images/tax.jpg"  class="picture" alt="">
                </div>
                <div class="post_info">
                    
                </div>
                    
                <h3 class="post_title"><a href="policy.html">TAXATION</a></h3>
                <p class="post_body">
                    It's worth noting that tax systems can be complex, and individuals and businesses often seek professional advice or use tax software to navigate the various tax obligations and maximize tax benefits or deductions available to them.
                </p>
                <div class="post_author">
                    <div class="post_author-avatar">
                        <img src="./images/nhlanhla.jpg" alt="">
                    </div>
                    <div class="post_author-info">
                        <h5>By: Nhlanhla Msomi</h5>
                        <small>March 3, 2023 - 10:34 </small>
                    </div>
                </div>
            </div>
        </article>

            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/smme-community-platform-header.webp" class="picture" alt="">
                </div>
                <div class="post_info">
                    
                    <h3 class="post_title"><a href="smme.html">WHAT ARE SMMEs ?</a></h3>
                    <p class="post_body">
                        In South Africa, SMMEs (Small, Medium, and Micro Enterprises) are defined as organizations having a yearly revenue of less than R20 million. These companies are essential to the South African economy because they help to reduce poverty, create...
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/lerato.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Lerato Nama</h5>
                            <small>April 15, 2023 - 16:38 </small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="category_buttons">
        <div class="container category_buttons-container">
            <a href="" class="category_button">Personal Finances</a>
            <a href="" class="category_button">Business Finances</a>
            <a href="" class="category_button">Tax Matters</a>
            <a href="" class="category_button">Credits</a>
            <a href="" class="category_button">Rules&Regulations</a>
            <a href="" class="category_button">SMMEs</a>
            <a href="" class="category_button">Penny Tips</a>
            <a href="" class="category_button">Tech&Trends</a>
            <a href="" class="category_button">Markets</a>          
        </div>
    </section>

    <section class="category_buttons">
    <div class="container category_buttons-container">
        
        <a href="" class="category_button">FAQ's</a>
        <a href="feedback.html"target="_blank" class="category_button">Feedback</a>
                  
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