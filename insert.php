
   <?php
include("connection.php");
if(isset($_POST['nextques']))
{
  $question=$_POST['question'];
$optionA=$_POST['optionA'];
$optionB=$_POST['optionB'];
$optionC=$_POST['optionC'];
$optionD=$_POST['optionD'];
$correctans=$_POST['correctans'];
  $insertquery= "insert into questions(question, optionA, optionB, optionC, optionD, correctans) values ('$question','$optionA','$optionB','$optionC','$optionD','$correctans')";
  mysqli_query($con,$insertquery);
}
?>