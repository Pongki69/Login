<?php 
include '../CSS/style_homepage.css';

?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Form</title>
</head>

<body>
<form  action="Add.php">
<a class ="back" href="Login P.php">Back</button></a>

<button type = "submit" class = "add" name = "add">Add</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<table class="styled-table">
<thead>	
  <tr>
	<th>Name</th>
	<th>Email</th>
  <th>Phone</th>
	<th>Password</th>
	<th>Subject</th>
	<th>Gender</th>
	<th>Interest</th>
	<th>Comment</th>
	<th>Action</th>
  </tr>
</thead>
<tbody>  
<?php
require '../database/regdb.php';
$query = mysqli_query($conn, "SELECT * FROM `register`") or die(mysqli_error());
while($fetch = mysqli_fetch_array($query)){
?>
<tr>
  <td><?php echo $fetch['uname'];?></td>
  <td><?php echo $fetch['email'];?></td>
  <td><?php echo $fetch['phone'];?></td>
  <td><?php echo $fetch['pass'];?></td>
  <td><?php echo $fetch['dropdown'];?></td>
  <td><?php echo $fetch['gender'];?></td>
  <td><?php echo $fetch['checkbox'];?></td>
  <td><?php echo $fetch['comment'];?></td>
  <td><button id = "edit" class = "button" data-toggle="modal" type="button" data-target="#edit_modal<?php echo $fetch['id']?>"
    >Edit</button>
    <button class = "button" data-toggle="modal" type="button" data-target="#delete_modal<?php echo $fetch['id']?>">Delete</button>
  </td>
</tr>

<?php  
include '../indices/edit.php';
include '../indices/delete_modal.php';


?>






<?php }?>

</tbody>
</table>






</body>

</html>