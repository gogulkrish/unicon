<?php 

 include('./config.php');

        if(isset($_POST['submit']))
        {
            $cname=$_POST['cname'];
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
            $insert="INSERT INTO sum_tablee (collegename,collegecode,district,overall) VALUES ('$cname','$code','$dis','$sum')";
            if (mysqli_query($con,$insert)){
               echo "<br />";
               echo "<br />";
              
               echo "DATA IS INERTED ALSO SUCCESSFULLY."; 
                
            }
            else{
                echo "".mysqli_error($con);
            }
            //exit;
            }
      
            ?>   