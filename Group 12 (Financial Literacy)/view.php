
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
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap">
</head>
<body>
<style>
        aside{
                margin:35% 0px;
            }
		.file{

            display: flex;
        }
        input{
            margin-bottom: 20px;
            border:1px solid white;
            font-size:15px;
            background: transparent;
        }
.alb {
    
			width: 350px;
			height:350px;
			padding: 5px;
}
.alb img {
    border-radius: 45%;
			width: 100%;
			height: 100%;
}
a {
	text-decoration: none;
	color: black;
}
.error{
    margin: -80% 14%;
    display: inline;
    color: red;
}
.profile{
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    margin: 10% 15%;
    border: 2px solid black;
    width: 350px;
    background: black;
}
.ubtn{
    background:black;
}

</style>
    <nav>
        <div class = "container nav_container">
        <a href="indexlog.php" class="nav_log"><img src="./images/logo.png" class="avatars" alt="">Financial Literacy 101</a>
            <ul class="nav_items">
            <li><a href="bloglog.php">Blog</a></li>
                <li><a href="aboutlog.php">About</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="contactslog.php">Contacts</a></li>
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
            }
        }
                ?>
                    <div class="avatar">
                       
                        <img src="uploads/<?=$image?>">
                    </div>     
                    <ul>
                        <li><a href="view.php">account</a></li>
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
                <h5>Update username</h5>
                    <form action="" method="POST">
                    <div>
                    <input type="text" name="newusername" class="file" >
                    <input class="ubtn" type="submit" 
                    name="update"
                    value="Update">
                    </div>
                    </form>
                    
                    <?php
                    if (isset($_POST["update"])) {
                        $name = $_POST["newusername"];
                        if ($name != null) {
                            $sql = "UPDATE `registered` SET`username`='[$name]' WHERE id= $id";
                            # code...
                           $_SESSION["name"] = $name;
                        }
                        else {
                            echo "couldnt update name check if information was entered!";
                        }
                    }
      
         ?>

                </li>
                
                <li>
                <h5>Update Picture</h5>
                </li>
                <!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	
</head>

	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form class="file" action=""
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input class="ubtn" type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
             
            </ul>
        </aside>
        <main>
            
            <h2 >My Profile</h2>
            <div class="prholder">
            <?php 
            $sql = "SELECT * FROM registered where id =$id ";
            $res = mysqli_query($connect,  $sql);

             if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) { 
                 
                $image = str_replace("[","",$images['images']);
                $image = str_replace("]","",$image);
                $_SESSION["image"] = $images['images'];
                ?>
            
             <div class="profile">
            <div class="alb">

           
             	<img src="uploads/<?=$image?>">
             </div>
             <div>
             <h3><?php echo $_SESSION["name"] ?></h3>
             <h3><?php echo $_SESSION["email"] ?></h3>
             </div>
                    
                  
            
             </div>
          		
    <?php } }?>

    <?php 
$id = $_SESSION['id'];


if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	


	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 2500000) {
			echo "Sorry, your file is too large.";
		    
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "UPDATE `registered` SET `images`='$new_img_name' WHERE `id` = $id ";
				mysqli_query($connect, $sql);
			}else {
                "<h3 class='error'>You can't upload files of this type </h3>";
			}
		}
	}else {
		echo "<h3 class='error'>unknown error occurred!</h3>";
	}

}else {
	
}?>
</body>
</html>