<?php
session_start();
  if(isset($_GET) && !empty($_GET)){
      // echo "<br>";
      // print_r($_GET["input_name"]);
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
  *{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}
main{
  height: 100vh;
  background: url('https://images.unsplash.com/photo-1477346611705-65d1883cee1e?dpr=0.800000011920929&auto=format&fit=crop&w=1199&h=800&q=80&cs=tinysrgb&crop=') fixed no-repeat;
  background-size: cover;
}
#container{
  width: 350px;
  height: 500px;
  background: inherit;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  margin-left: -175px;
  margin-top: -250px;
  border-radius: 8px;
}
#container:before{
  width: 400px;
  height: 550px;
  content: "";
  position: absolute;
  top: -25px;
  left: -25px;
  bottom: 0;
  right: 0;
  background: inherit;
  box-shadow: inset 0 0 0 200px rgba(255,255,255,0.2);
  filter: blur(10px);
}
form img{
  width: 120px;
  height: 120px;
  border-radius: 100%;
}
form {
  text-align: center;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
}
form {
  text-align: center;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
}
input [type="submit"] [class="1"]{
  background: 0;
  width: 200px;
  outline: 0;
  border: 0;
  margin: 20px 0;
  padding-bottom: 10px;
  font-size: 18px;
  font-weight: bold;
  color: rgba(255,255,255, 0.8);
}
input[type="submit"]{
  border: 0;
  border-radius: 8px;
  padding-bottom: 0;
  height: 60px;
  background: #df2359;
  color: white;
  cursor: pointer;
  transition: all 600ms ease-in-out;
}
input[type="submit"]{
  background: 0;
  width: 200px;
  outline: 0;
  border: 0;
  margin: 20px 0;
  padding-bottom: 10px;
  font-size: 18px;
  font-weight: bold;
  color: rgba(255,255,255, 0.8);
}
input[type="submit"]{
  border: 0;
  border-radius: 8px;
  padding-bottom: 0;
  height: 60px;
  background: #df2359;
  color: white;
  cursor: pointer;
  transition: all 600ms ease-in-out;
}



input[type="submit"]:hover{
  background: #C0392B;
}
span a{
  color: rgba(255,255,255, 0.8);
}
.lit {
    margin-top: 250px;
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
    <main>

    <div id="container">
    <form action="literature.php" class="lit1">
      <div class="lit">
  		<input type="submit" class="1" value='Literature'>
    </div>
  	</form>
  		<br><br>
  	<form action="maths.php" class="mat1">
      <div class="mat">
  		<input type="submit" class="2" value='Mathematics'>
    </div>
  	</form>
    </div>
    </main>

  </body>
</html>


