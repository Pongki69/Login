<?php
	include '../database/regdb.php';
	
	if(ISSET($_POST['Save'])){

		$id = $_POST['id'];
		$uname = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$pass = $_POST['pass'];
		$subject = $_POST['dropdown'];
		$gender = $_POST['radio'];
		$interest = $_POST['checkbox'];
		$comment = $_POST['comment'];

        $interests = implode(", ",$interest);
        
        
		
		mysqli_query($conn, "UPDATE `register` SET `uname` = '$uname',`email` = '$email',`phone` = '$phone',`pass` = '$pass',`dropdown` = '$subject',`gender` = '$gender',`checkbox` = '$interests',`comment` = '$comment' WHERE `id` = '$id'") or die(mysqli_error());
        
echo '<script>
window.location.href = "table.php";
alert("Update Successfully");
</script>';
	}
?>