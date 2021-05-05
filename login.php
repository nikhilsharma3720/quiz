<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel='stylesheet' type='text/css' href='css/login.cssS' />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>

    <style>
    .para{
        color:red;
    }
    </style>
</head>
<body>
   
    <div class="container" id="olddiv" style="display:block;">
      <div class="inner1">
      <div class="row">
        <h2 id="heading" style="text-align:center">Login with Quiz App</h2>
        
    <div class="col" id="form1">
      <form id="student"name="form" action="redirect_students.php" method="post">
      <div id="placebtn">
    <button class="button button2" type="button" onclick="newdiv()" name="teacher" class="topbtn1">Teacher</button>
<button class="button button3 active " name="student" class="topbtn2">Student</button>
  </div>
      <input type="text" name="username" placeholder="Username" required>
      <input type="email" name="email" placeholder="email" required>
  
      <button class="button" id="submit" name="submit" type="submit">Continue</button>
   
</form>
    </div>
  </div>
  </div>
  </div>



  <div class="container" id="newdiv" style="display:none;">
      <div class="inner1">
      <div class="row">
        <h2 id="heading" style="text-align:center">Login with Quiz App</h2>
        
    <div class="col" id="form1">
      <form name="form" action="redirect_faculty.php"   method="post">
      <div id="placebtn">
    <button class="button button2 active"  name="teacher" class="topbtn1">Teacher</button>
<button class="button button3 " name="student" class="topbtn2">Student</button>
  </div>
      <input type="text" name="username" placeholder="Username" required>
      <input type="email" name="email" placeholder="email" required>
  
      <button class="button" id="submit" name="submitforteacher" type="submit">Continue for teacher</button>
   
</form>
    </div>

  </div>
  </div>
  </div>
 

  <?php 
echo '<script type="text/JavaScript"> 
    function newdiv()
    {
      alert("Nikhil");
      document.getElementById("olddiv").style.display="none";
document.getElementById("newdiv").style.display="block";
    }
     </script>'
;
?>

   




  <?php include 'CSS/style.css'; 
?>
 















</style>
<script>
  var header = document.getElementById("placebtn");
var btns = header.getElementsByClassName("button");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}
</script>
</body>
</html>