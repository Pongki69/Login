<?php
    include('../database/regdb.php');
if (isset($_POST['submit'])) {
        $pnum = $_POST['pnum'];
        $pass = $_POST['pass'];

        $sql = "select * from register where phone = '$pnum' and pass = '$pass'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
           header("Location:table.php");
           
        }

 
          
        else{  
            echo  '<script>
                        window.location.href = "Login P.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>'; 
            
        }     
    }

  ?>