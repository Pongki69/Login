
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
 

</head>

<style>
	input{
	background-color: #243447;
	color:white;
	}
	.button {
  background-color: #36485E; 
  border: none;
  border-radius: 2px;
  color: white;
  padding: 5px 15px;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;

}


</style>


<body>
<div class="modal fade" id="delete_modal<?php echo $fetch['id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="delete.php">
				<div class="modal-header">
					<input type="hidden" name="id" value="<?php echo $fetch['id']?>"/>
					<h3 class="modal-title"><center>Are you sure you want to delete the data?</center></h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">

						<div class="form-group">
                          
							
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="delete" class="button">Yes</button>
					<button class="button" type="button" data-dismiss="modal">Close</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
 </body>

</html>
<!-- partial -->
  
</body>
</html>