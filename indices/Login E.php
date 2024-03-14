<?php 
include '../database/regdb.php';
include '../phpfunc/logEfunc.php';
include '../CSS/style_login.css';

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  


</head>

  
<body>

<!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title>Login Form</title> 

   

 </head> 

 <body> 
<form  method = "POST" >
  <section> 

   <div class="signin"> 

    <div class="content"> 

     <h2>Login</h2> 
     
     <div class="form" > 

      <div class="inputBox"> 

       <input type="text" name = "email"  id = "user"required> <i>Email</i> 

      </div> 

      <div class="inputBox"> 

       <input type="password" name = "pass" id = "pass" required> <i>Password</i> 

      </div> 
      </form>

      <div class="links"><a href="Login P.php">Use phone number instead</a> <a href="register.php">Register</a> 

      </div> 

      <div class="inputBox"> 

       <input type="submit" name="submit" id="submit" value="Submit">

      </div> 


     </div> 

    </div> 

   </div> 

  </section> <!-- partial --> 

 </body>

</html>
<!-- partial -->
  
</body>
</html>
