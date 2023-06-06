<?php
session_start();
$connect = new mysqli("localhost","root","","users");
if ($connect->connect_error) {
    # code...
    die("connection failed".$connect->connect_error);
}
else {
    echo "connected";
   
}
if (isset($_POST['login'])) {
    $email=$_POST["email"];
    $password=$_POST["password"];



$hash ="SELECT * FROM `registered` `password` where `email`='[$email]' ";

$sql = "SELECT * FROM `registered` where `email`='[$email]' AND  `password` ='[$password]' ";
$hash = $connect->query($hash);


$result = $connect->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['Admin'] == 1) {
            # code...
            echo "successful login";
            //print($hash);
            $_SESSION["id"] = $row["id"];
            $_SESSION["name"] = $row["username"];
            $_SESSION["surname"] = $row["surname"];
            $_SESSION["email"] = $row["email"];
            header("location:indexad.php");

        }
        else{
            $_SESSION["id"] = $row["id"];
            $_SESSION["name"] = $row["username"];
            $_SESSION["surname"] = $row["surname"];
            $_SESSION["email"] = $row["email"];
            echo "successful login";
            //print($hash);
            header("location:indexlog.php");
        }
    }
   
} else {
    echo "<h3 class='error'>Password or Email is incorrect</h3>";
}
   
   
  

}



if (isset($_POST["signup"])) {
    # code...
    //$check=$_POST["remember"];
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $password2=$_POST["password2"];
    $time = date('Format String',time());


    if (empty($name) || empty($surname) || empty($email) || empty($password)) {
        # code...
        
        echo "<p class='error'>All fields required<p>";
    }
    else {
        # code...
        if ($password==$password2) {
            # code...
        
                # code...
                
   $sql = "SELECT * FROM `registered` where `email`='[$email]'";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
    echo "<h4 class='error'>Email already exists</h4>";
}
else {
        # code...
        $encrypted = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `registered`(`username`, `surname`, `email`, `password`,`LoginTime`) VALUES ('[$name]','[$surname]','[$email]','[$password]','[$time]')";
        $result = $connect->query($sql);
        if (!$result) {
           echo "not inserted";
        }
        else {
            $_SESSION["id"] = $row["id"];
            $_SESSION["name"] = $row["username"];
            $_SESSION["surname"] = $row["surname"];
            $_SESSION["email"] = $row["email"];
            echo "inserted";
            header("location:indexlog.php");
        }
    }   
          
        }
        else{
            echo "<p class='error'>passwords do not match<p>";
        }
    
    }
   
}
?>