<?php 

include('../config.php');
if(isset($_POST['login']))
{
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $password= mysqli_real_escape_string($con,$_POST['password']);

    $login_query ="SELECT * FROM  users WHERE email='$email'AND  password='$password' LIMIT 1";
    $login_query_run = mysqli_query($con,$login_query);

    if(mysqli_num_rows($login_query_run)>0)
    {
        header("location:../index.php");
        exit(0);
    }
    else
    {
        echo 'err';
    }
}
?>