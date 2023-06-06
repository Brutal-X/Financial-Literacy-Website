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
    <style>
        .about{
            padding: 40px;
            position: relative;
            left: 70%;
        }
        h2{
            color: black;
        }
    </style>
    <nav>
        <div class = "container nav_container">
            <a href="index.html" class="nav_log"><img src="./images/logo.png" class="avatars" alt="">Financial Literacy 101</a>
            <ul class="nav_items">
                <li><a href="bloglog.php">Blog</a></li>
                <li><a href="aboutlog.php">About</a></li>
                <li><a href="contactslog.php">Contacts</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="faq.html">FAQ</a></li>
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


    <section class="singlepost_container">
           
        <div class="about">
            <h2>WHO ARE WE ?</h2>
            <p>
                Financial Literacy 101 is the platform to give you  knowledge, skills, and confidence to make effective and informed decisions with your money.
                How are we different from thousands of financail literacy
                website and web applications ? I hear you ask....We do not only offer personal financial literacy like most of the platforms, but focus on <strong>business</strong>
                financial Literacy as well so we may have a self- sufficient society. 
            </p>
            
                <h2>OUR MISSION</h2>
            <p>
                According  to the statics released by Veri Cred Credit Bureau (VCCB) in 2021 about 717 495 South Africans were 
                under debt  which in total amounted to about R2.077 trillion these results shows that on average South Africans spend about 75% of their  income on debt repayments.
                Generally a good debt to income ratio is 36% or anything less. VCCB stated that the household debt to income ration in South Africa stands at 67% and it is expected to rise.
                The exponential rising number of household debt drove us into estabishing this platform. After intense analysis on the existing financial literacy platforms we are confident will make a difference because we focus on business financial litercy.
            </p>
        
            <p>
                There has been an increasing number of failing <abbr style="color: orangered;" title="Small Medium Micro Enterprises">SMMes</abbr> and there are dire consequences of this as small businesses contribute 30% of country’s <abbr style="color: orangered;" title="Gross Domestic Product">GDP</abbr>. 
                <a href="https://www.researchgate.net/figure/Definition-of-small-medium-and-micro-enterprises-SMMEs-according-to-the-National_tbl1_340649736">SMMes</a> are a driving force in a country’s social and economic stability.
                We will restore financial order in this country by educating people on how to manage there personal and business finances, as a result we will drop the 32.7% unemployment rate and put a stop to small businesses doom. As research shows that poor management, lack of 
                planning, one-person-show and failure to manage personal and business accounts result to small businesses failure.
            </p>
            
                <h2>IMPLEMENTATION</h2>
            <p>
                Most of South Africans lack financial literacy due to Financial Education not being incorporated into the education system. We intend to reach and be reachabe to eveyone hence our website will be available in all 8 Official South African languages.
                Financial concepts or jargon will be explained in simple plain language.  We will keep our customers informed at all times with regards to startups, new trends and new technologies in the market which they need to 
                implement in their businesses and we will also educate them about e-commerce.
            </p>


        </div>    
                
    </section>




    <section class="category_buttons">
        <div class="container category_buttons-container">
            
            <a href="faq.html" class="category_button">FAQ's</a>
            <a href="feedback.html"target="_blank" class="category_button">Feedback</a>
                      
        </div>
    </section>

    <footer>
        <div class="footer_socials">
            <a href="https://youtube.com" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100092726551629" target="_blank"><i class="uil uil-facebook"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram-alt"></i></a>
        </div>
        <div class="container footer_container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="budget.html">Budgeting</a></li>
                    <li><a href="creditscore.html">Credit Score</a></li>
                    <li><a href="smme.html">Small Businesses</a></li>
                    <li><a href="savings.html">Savings&Retirement</a></li>
                    <li><a href="moneyMatters.html">Penny Tips</a></li>
                    <li><a href="technology.html">Tech&Trends</a></li>
                    <li><a href="invest.html">Future Plans</a></li>
                    <li><a href="loan.html">Loans</a></li>

                    
                </ul>
            </article>

            <article>
                <h4>Resources</h4>
                <ul>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="loanquiz.html">Loan Quiz</a></li>
                    <li><a href="retirementquiz.html">Retirement Quiz</a></li>
                    <li><a href="smmesquiz.html">SMMEs Quiz</a></li>
                    <li><a href="techquiz.html">Tech Quiz</a></li>
                    <li><a href="budget.html">Budget Quiz</a></li>
                    <li><a href="savings.html">Savings</a></li>
                </ul>
            </article>

            <article>
                <h4>Site Information</h4>
                <ul>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="about.html">Our Mission</a></li>
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