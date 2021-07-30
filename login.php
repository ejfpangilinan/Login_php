<?php

session_start();

extract($_POST);

include("config.php");

$sql=mysqli_query($link,"SELECT * FROM users where username='$name' and password = sha1('$pass')");

$row  = mysqli_fetch_array($sql);

if(is_array($row))
{

    $_SESSION["id"] = $row['id'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["username"] = $row['username'];

    echo '<script>window.location.href="landing.php";</script>;';
}

else
{
    echo '<script>alert("Invalid username/password")</script>';
    echo '<script>window.location.href="login_page.php";</script>;';
}


?>