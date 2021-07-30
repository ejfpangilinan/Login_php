<?php
    extract($_POST);
    include("config.php");
    $sql=mysqli_query($link,"SELECT * FROM users where email='$email'");
    $sql1=mysqli_query($link,"SELECT * FROM users where username='$name'");



    if(mysqli_num_rows($sql)>0)

    {

        echo '<script>alert("Email Already Exists!")</script>';
        echo '<script>window.location.href="signup_page.php";</script>;';
        exit;
        
    }
    elseif(mysqli_num_rows($sql1)>0){

        
        echo '<script>alert("Username Already Exists!")</script>';
        echo '<script>window.location.href="signup_page.php";</script>;';
        exit;
    }

    else {


        try {
            
            $query="INSERT INTO users(email, username, password) VALUES ('$email', '$name', sha1('$pass'))";
            $nque = mysqli_query($link,$query) or die("Could Not Perform the Query");
            echo '<script>alert("Success!")</script>';
            echo '<script>window.location.href="login_page.php";</script>;';

        } catch (Exception $e) {
            echo $e;
            
        }
            
        

    }

    mysqli_close($link);

?>