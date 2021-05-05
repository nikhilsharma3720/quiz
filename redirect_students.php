<?php
include("connection.php");
if(isset($_POST["submit"])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  session_start();
  $_SESSION['name']=$username;
    $insertquery= /*'DELETE FROM questions WHERE optionA = "" ';*/
    "insert into students(username,email) values ('$username','$email')"; 
    mysqli_query($con,$insertquery);
    header("Location:index.php");
}
