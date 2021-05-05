<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="faculty.css">

</head>
<body>
<nav class="navbar navbar-light bg-light" id="header">
    <h2 class="heading">Faculty Portal</h2>
</nav>
<div class="main">
<div class="question">
    <div class="question_header">
    <nav class="navbar navbar-light bg-light">
    <h2 class="heading_teacher">Welcome <?php session_start();echo $_SESSION['name'];?> Sir !</h2>
</nav>
    </div>
    <div class="question_body">
    <form action="redirect_question.php" method="post">
<div class="main_body">
 
<div class="card">
  <h5 class="card-header">New Quiz</h5>
  <div class="card-body">
    <h5 class="card-title">Create New Quiz</h5>
       <!-- <a href="#" class="btn btn-primary">Create</a>-->
       <button name="create" class="button button2">Create</button>
       
  </div>
</div>
<div class="card">
  <h5 class="card-header">PreviousLeaderboard</h5>
  <div class="card-body">
    <h5 class="card-title">Check the Leaderboard</h5>
       <!-- <a href="#" class="btn btn-primary">Create</a>-->
       <button class="button button2" name="leaderboard"><h6>Leaderboard</h6></button>
  </div>
</div>
</div>
</div>
</form>
</div>
</body>
</html>