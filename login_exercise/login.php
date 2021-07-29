<?php

session_start();

extract($_POST);

include("config.php");

$sql=mysqli_query($link,"SELECT * FROM users where username='$name'");

$row  = mysqli_fetch_array($sql);

if(is_array($row) and password_verify($pass, $row['password']))
{
    
    $_SESSION["id"] = $row['id'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["username"] = $row['username'];


    echo '<script>alert("Logged |  email: ' . $_SESSION['email'].' username: '. $_SESSION['username'].'")</script>';
    echo '<script>window.location.href="login_page.php";</script>;';
}

else
{
    echo '<script>alert("Invalid username/password")</script>';
    echo '<script>window.location.href="login_page.php";</script>;';
}


?>