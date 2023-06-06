
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
            <a href="index.html" class="nav_log"><img src="./images/logo.png" class="avatars" alt="">Financial Literacy 101</a>
            <ul class="nav_items">
                <li><a href="blogad.html">blog</a></li>
                <li><a href="aboutad.html">about</a></li>
                <li><a href="resourcesad.php">Services</a></li>
                <li><a href="contactad.html">contacts</a></li>
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
                        <li><a href="logout.html">Logout</a></li>
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
                    <h5></h5>
                    <a href="dashboard.php"><i class="uil uil-create-dashboard"></i></a>
                    
                </li>
                <li>
                <li>
                <h5>Manage Users</h5>
                    <a href="manage_users.php" class="active"><i class="uil uil-users-alt"></i></a>
                    
                </li>
            </ul>
        </aside>
        <main>
    
         



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
         #filtering{
            background: rgb(35, 169, 179);
        }
   input::placeholder{
    color: white;
   }
        #searchbar{
            background: transparent;
            color: lightgrey;
            border:2px solid lightgrey;
            padding-right: 450px;
            
        

        }
        </style>
</head>
<body>


    <div id="filtering">
    <input type="text" class="form-control" placeholder="Search" id="searchbar">
<?php

if ($connect->connect_error) {
    die("Connection failed: " .$connect->connect_error);
}

if (isset($_GET['delete_id'])) {
   
    $deleteID = $_GET['delete_id'];
 
    $deleteSQL = "DELETE FROM registered WHERE `id` = '$deleteID'";
    if ($connect->query($deleteSQL) === TRUE) {
        echo "Event deleted successfully.";
    } else {
        echo "Error deleting event: " . $connect->connect_error;
    }
} 


$sql = "SELECT * FROM registered";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
    echo "<table id='myTable'>";
    echo "<tr><th id='head'>ID</th><th>Name</th><th>Surname</th> </th><th>Email</th> </th><th>LoginTime</th><th>Delete</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["surname"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["LoginTime"] . "</td>";
        echo "<td><a class='delete' href='manage_users.php?delete_id=". $row["id"] . "'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data found.";
}
    ?>
   
</div>
</body>
</html>
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
<script>

  $(document).ready(function(){
  $("#searchbar").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable td").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script src="./script.js/main.js"></script>
</body>
</html>