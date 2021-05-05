<?php
  $username="root";
  $password="";
  $server="localhost";
  $db="quiz";
  $con=mysqli_connect($server,$username,$password,$db);
  if($con)
  {
    echo "connection successfull";
  }
  else{
    echo "not connect";
  }
  
 
    
    ?>
