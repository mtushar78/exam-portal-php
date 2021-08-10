<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
  </head>
  <style>
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
form{
  text-align: center;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
}
input{
  background: 0;
  width: 200px;
  outline: 0;
  border: 0;
  border-bottom: 2px solid rgba(255,255,255, 0.3);
  margin: 20px 0;
  padding-bottom: 10px;
  font-size: 18px;
  font-weight: bold;
  color: rgba(255,255,255, 0.8);
  text-align: center; 
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
</style>
     <body>
       <main>
          <div id="container">
             <a href="login.php"> </a> -->
            <form method="get" action="selection.php">
            
              <img src="quiz.jpg" alt="home page link" /><br>
              <div class="t1" >ENTER YOUR NAME</div><br>
              <input type="text" name="input_name" autocomplete="off"><br>
              <input type="submit" value='Start quiz!'>
            </form>
          </div>
       </main>
    </body>
</html>

<!-- <style>
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
form{
  text-align: center;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
}
input{
  background: 0;
  width: 200px;
  outline: 0;
  border: 0;
  border-bottom: 2px solid rgba(255,255,255, 0.3);
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
</style> -->

<!-- <main>
<div id="container">
  <form action="">
    <img src="quiz.jpg" alt="home page link" /><br>
    <input type="text" name="input_name" autocomplete="off"><br>
    
    <input type="submit" value="SIGN IN"><br>
  </form>
</div>
</main> -->
