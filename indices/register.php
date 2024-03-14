<?php 
include '../database/regdb.php';
include '../phpfunc/regfunc.php';
include '../CSS/style_register.css';

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
 

</head>

 
<body>

<!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title>Register</title> 

   

 </head> 

 <body> 
<form  method = "POST" >

  <section> 

   <div class="signin"> 

    <div class="content"> 

     <h2>Register</h2> 

     <div class="form" > 

      <div class="inputBox"> 

       <input type="text" name = "uname" placeholder="Username" required> 
      </div> 

      <div class="inputBox"> 

       <input type="text" name = "email" placeholder="Email Address" required> 
       
      </div>


      <div class="inputBox"> 

       <input type="text" name = "phone" placeholder="Contact Number"required> 

      </div>

       
      <div class="inputBox"> 

       <input type="password" name = "pass" placeholder="Password" required>  

      </div> 
<div></div>
 <label><b><font color="white">Subject:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b>        
<select name = "dd" class ="form-control">
<option value ="">Select Subject</option>
<option value ="ITEL 304"> ITEL 304 </option>
<option value ="ITEP 309"> ITEP 309 </option>
</select></label>
<div></div>

    <div class="radio">
      <label><b>Gender:</b></label>
      <input id="radio-1" name="radio" value="Male" type="radio" checked />
      <label for="radio-1" class="radio-label">Male</label>
      <input id="radio-2" name="radio" value="Female" type="radio" />
      <label for="radio-2" class="radio-label">Female</label>
    </div>
  
<div></div>
<div class = "checkbox">
<label><b>Interest:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox"  name="checkbox" value="Front End">
  <label for="Front End">Front End</label>&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="checkbox"  name="checkbox1" value="Back End">
  <label for="Back End">Back End</label>&nbsp;&nbsp;&nbsp;&nbsp;
  
  <input type="checkbox"  name="checkbox2" value="Web Design">
  <label for="Webdesign">Web Design</label><br><br>
  </div>
      
       
     <div class = "checkbox"><label><b>Comment:</b></label></div>
      <textarea name="comment" rows="5" cols="40" placeholder="Comment Section"></textarea>
      
      
    
 
   <div class="dropdown">
  <label class="dropbtn">Already have an account?</label>
  <div class="dropdown-content">
    <a href="Login E.php">Login using Email</a>
    <a href="Login P.php">Login using Phone Number</a>
    
  </div>
</div>
      
  
      <div class="inputBox"> 

       <input type="submit" name = "submit" value="Submit"> 

      </div> 

     </div> 

    </div> 

   </div> 

  </section> <!-- partial --> 

 </body>
</form>
</html>
<!-- partial -->
  
</body>
</html>
