<?php
session_start();
  if(isset($_GET) && !empty($_GET)){
      echo "<br>";
      print_r($_GET["input_name"]);
          $_SESSION["user_name"] = $_GET["input_name"];
          // echo "session added"; 
  }
  ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <style>
  img {
    width:100px;
    height:75px;
  }
  </style>
  <body>
    
    
    <a href="login.php"> <img src="quiz.jpg" alt="Restart Quiz" /> </a>
    <?php
      if(!empty($_SESSION)){
          ?>
           <h1><?php echo "Welcome ".$_SESSION["user_name"]  ?></h1>
           <?php
      }
       
    ?>
    <h1> Select your quiz </h1>

    <form action="literature.php">
  		<div class="a">Literature!</div>
  		<br>
  		<input type="submit" value='Click here to try a quiz on Movies!'>
  	</form>
  		<br><br>
  	<form action="maths.php">
  		<div class="a">Maths!</div>
  		<br>
  		<input type="submit" value='Click here to try a quiz on Sports!'>
  	</form>
  </body>
</html>
