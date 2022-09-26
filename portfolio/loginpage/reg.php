<?php

include('../config.php');


if(isset($_POST['signup_post']))
{
    $name= mysqli_real_escape_string($con, $_POST['name']);
    $email= mysqli_real_escape_string($con, $_POST['email']);
    $password= mysqli_real_escape_string($con, $_POST['password']);

                $user_query = "INSERT INTO users (name,email,password) VALUES('$name','$email','$password')";
                $user_query_run =mysqli_query($con,$user_query);

                if($user_query_run)
                {
                    header("location:login.php");
                    exit(0);
                }
                else
                {
                    echo 'err0';
                }


        
    
}
else
{
    echo'err';
}
?>