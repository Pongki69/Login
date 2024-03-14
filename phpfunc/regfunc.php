<?php
    include('../database/regdb.php');
if (isset($_POST['submit'])) {
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dd = $_POST['dd'];
        $pass = $_POST['pass'];
        $radio = $_POST['radio'];
        
 

       if(isset($_POST['checkbox']) && isset($_POST['checkbox1']) && isset($_POST['checkbox2'])) {
        $checkbox = "Front End, Back End and Web Design";
       }else if(isset($_POST['checkbox']) && isset($_POST['checkbox1'])) {
        $checkbox = "Front End and Back End";
       }else if(isset($_POST['checkbox1']) && isset($_POST['checkbox2'])) {
        $checkbox = "Back End and Web Design";
       }else if(isset($_POST['checkbox']) && isset($_POST['checkbox2'])) {
        $checkbox = "Front End and Web Design";
       }else if(isset($_POST['checkbox'])) {
        $checkbox = "Front End";
       }else if(isset($_POST['checkbox1'])) {
        $checkbox = " Back End";
       }else if(isset($_POST['checkbox2'])) {
        $checkbox = "Web Design";
       }else{
        $checkbox = " ";
        }



        $pattern = "/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/";
        $pattern1 = "/09+\d{9}$/";
        if(!(preg_match($pattern, $email) || preg_match($pattern1,$phone))){
                echo '<script>
                        window.location.href = "register.php";
                        alert("Registration failed. Invalid email and phone number !!")
                    </script>';
              

        }else if(!(preg_match($pattern, $email))){
                
                  echo '<script>
                        window.location.href = "register.php";
                        alert("Registration failed. Invalid email !!")
                    </script>';
        }else if(!(preg_match($pattern1,$phone))){
                
                 echo '<script>
                        window.location.href = "register.php";
                        alert("Registration failed. Invalid phone number!!")
                    </script>';
         }else{
        

        $comment = mysqli_real_escape_string($conn,$_POST['comment']);
        $sql = "insert into register (uname,email,phone,pass,dropdown,gender,checkbox,comment) values ('$uname','$email','$phone','$pass','$dd','$radio','$checkbox','$comment')";
        $result = mysqli_query($conn, $sql) or die("Bad Query"); 
        echo  '<script>
                        window.location.href = "Login E.php";
                        alert("Registered Successfully")
                    </script>'; 
        
       }
          
       }
           
           
        

 
          
         
    

  ?>