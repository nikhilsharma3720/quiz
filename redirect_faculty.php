
<?php
include("connection.php");
if(isset($_POST["submitforteacher"])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  session_start();
$_SESSION['name']=$username;
    $insertquery= /*'DELETE FROM questions WHERE optionA = "" ';*/
    "insert into teachers(username,email) values ('$username','$email')"; 
    mysqli_query($con,$insertquery);
    header("Location:faculty.php");
}

?>
