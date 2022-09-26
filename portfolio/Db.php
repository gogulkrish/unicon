<!--<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
$db="details";
// Create connection
$con = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (mysqli_connect_error()) {
    echo "Connection failed: " .mysqli_connect_error();
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Without_Form</title>
</head>
<body>
    <h1 align="center">Without Form Sum</h1>
    <br />
    <form method="post">
    <h4><b>College Name:</b></h4>
    
    <input type="text" name="onee" id="onee" class="form-control" placeholder="Enter College Name">
    <br >
    <h4><b>College Code:</b></h4>
    
    <input type="text" name="code" id="code" class="form-control" placeholder="Enter College Code">
    <br >
    <h4><b>District:</b></h4>
    
    <input type="text" name="dis" id="dis" class="form-control" placeholder="Enter College District">
    <br >
    <h4><b>Placement:</b></h4>
    
       <input type="text" name="one" id="one" class="form-control" placeholder="Rating">
       <br >
    <h4><b>Infrastructure:</b></h4>
    
       <input type="text" name="two" id="two" class="form-control" placeholder="Rating">
       <br />
       <h4><b>Faculty & Course:</b></h4>
    
    <input type="text" name="three"  class="form-control" placeholder="Rating">
    <br /><br />
       <input type="submit" name="submit" value=" Save">
    </form>
      <br /><br /><br /><br />
      <h4><b>Result:</b></h4>  
      <br >
        <?php 
        if(isset($_POST['submit'])){
            $onee=$_POST['onee'];
            $code=$_POST['code'];
            $dis=$_POST['dis'];
            $sum=0;
            $one=$_POST['one'];
            $two=$_POST['two'];
            $three=$_POST['three'];
              //echo $one;
            $sum=$one+$two+$three;
            echo $sum;
            mysqli_select_db($con,"addition");
            $insert="INSERT INTO sum_tablee (Name,value1,value2,value,result) VALUES ('$onee','$code','$dis','$one','$two','$three','$sum')";
            if (mysqli_query($con,$insert)){
               echo "<br />";
               echo "<br />";
              
               echo "DATA IS INERTED ALSO SUCCESSFULLY."; 
                
            }
            else{
                echo "SOME ERROR".mysqli_error($con);
            }
            //exit;
            }
      
            ?>   
</body>
</html>-->