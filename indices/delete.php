<?php
include '../database/regdb.php';
if(ISSET($_POST['delete'])){
	$id=$_POST['id'];
	mysqli_query($conn,"delete from `register` where id='$id'");
	echo '<script>
window.location.href = "table.php";
alert("Delete Successfully");
</script>';

}
?>