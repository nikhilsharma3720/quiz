 <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charsets="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        
        </style>
</head>
<body>
    <div class="main_div">
        <div class="quiz">
            <div class="quiz_header">
               <div class="quiz_user">
               <?php include 'redirect_students.php'?>
                <h3 class="heading">Welcome ! <?php session_start();echo $_SESSION['name'];?></h3>
               </div>
               <div class="quiz_timer">
                   <span class="timer"></span>
               </div>
            </div>
            <div class="quiz_body">
            <?php
            include 'connection.php';
            /*  $sql = "SELECT question, optionA, optionB,optionC,optionD FROM questions limit 1 offset 0";
              $result = $con->query($sql);
              if ($result->num_rows >0) {
                while($row = $result->fetch_assoc()) {
                   echo'<ul class="options" id="options">';
                    echo '<li class="question">'.$row["question"].'</li>';
                    echo'<li class="option active"  id="option1">'.$row['optionA'].'</li>';
                    echo '<li class="option"  id="option2">'.$row["optionB"].'</li>';
                    echo'<li class="option"  id="option3">'.$row["optionC"].'</li>';
                    echo'<li class="option"  id="option4">'.$row["optionD"].'</li>';
                echo '</ul>';
                }

            } 
            ?>
            */
            
            $q=mysql_query("select * from questions") or die(mysql_error());
            $sql = "SELECT * from empInfo WHERE id='1'";
            $result = mysqli_query($con,$sql);
            while($row =mysqli_fetch_row($result)) {
                echo'<ul class="options" id="options">';
                 echo '<li class="question">'.$row["question"].'</li>';
                 echo'<li class="option active"  id="option1">'.$row['optionA'].'</li>';
                 echo '<li class="option"  id="option2">'.$row["optionB"].'</li>';
                 echo'<li class="option"  id="option3">'.$row["optionC"].'</li>';
                 echo'<li class="option"  id="option4">'.$row["optionD"].'</li>';
             echo '</ul>';
             }
            ?>

                <button class="button" onclick="repeat()" id="submit">Next Question</button>
            </div>
        </div>
    </div>
    <script src="indexjs.php"></script>
    <script src="timer.js"></script>
    <style>


<ul class="options" id="options">
                    <li class="option active"  id="option1">$row['optionA']</li>
                    <li class="option"  id="option2">option 2</li>
                    <li class="option"  id="option3">option 3</li>
                    <li class="option"  id="option4">option 4</li>
                </ul>

</style>
</body>
</html>
