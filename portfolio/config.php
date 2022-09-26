<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="details";
// Create connection
$con = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (mysqli_connect_error()) {
    echo "Connection failed: " .mysqli_connect_error();
}
 
?>