<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="questions.css">

    <title>Questions</title>
</head>
<style>
#submit{
  width:20%;
  padding: 10px 16px;
}
#submit2{
  width:  30%;
    background-color: #4CAF50;
    color: white;
    
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left:20px;
}
.submit_container{
    display: flex;
    justify-content: center;

}
#submit {
    width:  30%;
    background-color:  rgb(116, 202, 252);
    color: white;
    border:2px solid white;
    margin: 8px 0;

    border-radius: 8px;
    cursor: pointer;
  }
  #submit:hover{
    border:2px solid  rgb(22, 158, 236);
  }

  #submit2{
    width:  30%;
    background-color:  rgb(204, 152, 253);
    color: white;
    border:2px solid white;
    margin: 8px 0;
margin-left:10px;
    border-radius: 8px;
    cursor: pointer;
  }
  #submit2:hover{
    border:2px solid rgb(137, 31, 236);
  }

</style>

<body>
<div class="alert alert-primary" id="header" role="alert">
  <h3 class="heading">Create Test<h3>
</div>
<div class="main">
  <form action="" method="post">
  <div class="input-group-prepend" id="question_number">
    <span class="input-group-text" name="question">Ques 1 :</span>
</div>
  <!--  <label  class="question" for="question">Enter the Question</label> -->
  <div id="question_input">
   <!-- <input type="text" id="question" name="question" placeholder="Your Question......">-->
   <div class="input-group mb-3">
   
  <input type="text" name="question" class="form-control" placeholder="Enter the Question...." aria-label="Username" aria-describedby="basic-addon1">
</div> 
</div>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">A:</span>
  </div>
  <input type="text" style="margin-right:600px;" name="optionA" placeholder="Option A" class="form-control" aria-label="Amount (to the nearest dollar)">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">B:</span>
  </div>
  <input type="text" placeholder="Option B" name="optionB" style="margin-right:600px;" class="form-control" aria-label="Amount (to the nearest dollar)">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">C:</span>
  </div>
  <input type="text" placeholder="Option C" name="optionC" style="margin-right:600px;" class="form-control" aria-label="Amount (to the nearest dollar)">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">D:</span>
  </div>
  <input type="text" placeholder="Option D" name="optionD" style="margin-right:600px;" class="form-control" aria-label="Amount (to the nearest dollar)">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Ans :</span>
  </div>
  <input type="text"  name="correctanswer" placeholder="Correct Answer..." style="margin-right:600px;" class="form-control" aria-label="Amount (to the nearest dollar)">
</div>
<div class="submit_container">
  
  <button type="submit" name="nextques" id="submit" value="Next Ques">next</button>
  <input type="submit" name="submit" onclick="myfunction()" id="submit2" class="submit2" value="Submit">
  <div>
</form>
   
</div>
</body>

</html>



<?php
 include("connection.php");
if(isset($_POST['nextques']))
{
  $question=$_POST['question'];
$optionA=$_POST['optionA'];
$optionB=$_POST['optionB'];
$optionC=$_POST['optionC'];
$optionD=$_POST['optionD'];
$correctans=$_POST['correctanswer'];
  $insertquery= /*'DELETE FROM questions WHERE optionA = "" ';*/
  "insert into questions(question, optionA, optionB, optionC, optionD, correctans) values ('$question','$optionA','$optionB','$optionC','$optionD','$correctans')"; 
  mysqli_query($con,$insertquery);
}
?>
<?php 
include("connection.php");
if(isset($_POST["submit"]))
{
   
  header("Location:faculty.php");
  
;
}
?>
<?php 
echo '<script type="text/JavaScript"> 
     function myfunction(){
      alert("Questions Submitted !!!!!!");

      }
      
     </script>'
;
?>

