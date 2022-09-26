<?php
include('./db.php');
if(isset($_POST['add']))
{
    $Cname= mysqli_real_escape_string($con, $_POST['Cname']);
    $Ccode= mysqli_real_escape_string($con, $_POST['Ccode']);
    $dis= mysqli_real_escape_string($con, $_POST['dis']);
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