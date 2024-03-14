<?php
include '../database/regdb.php';
   

echo mysqli_query($conn,'alter table register Auto_Increment = 1');
	
    $id=$_POST['id'];			
	
	 mysqli_query($conn,"insert into `register` (id) values ('$id')");

	header('location:table.php');



?>