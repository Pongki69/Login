
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
.radio {
  margin: 0.1rem;

  color:white;
}



.radio input[type="radio"] {
  position: relative;
  opacity: 0;
}
.radio input[type="radio"] + .radio-label:before {
  content: '';
  background: #f4f4f4;
  border-radius: 100%;
  border: 1px solid #b4b4b4;
  display: inline-block;
  width: 0.9em;
  height: 0.9em;
  position: relative;
  /* position */
  margin-right: 1em;
  margin-top: -2px;
  vertical-align: middle;
  cursor: pointer;
  text-align: center;
  transition: all 250ms ease;

}
.radio input[type="radio"]:checked + .radio-label:before {
  background-color: #3197EE;
  box-shadow: inset 0 0 0 4px #f4f4f4;
}
.radio input[type="radio"]:focus + .radio-label:before {
  outline: none;
  border-color: #3197EE;
}
.radio input[type="radio"]:disabled + .radio-label:before {
  box-shadow: inset 0 0 0 4px #f4f4f4;
  border-color: #b4b4b4;
  background: #b4b4b4;
}
.radio input[type="radio"] + .radio-label:empty:before {
  margin-right: 0;
}





</style>


<body>
<div class="modal fade" id="edit_modal<?php echo $fetch['id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="Save.php">
				<div class="modal-header">
					<h3 class="modal-title"><center>Edit User</center></h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">

						<div class="form-group">
                          
							<label>Name</label>
							<input type="hidden" name="id" value="<?php echo $fetch['id']?>"/>
							<input type="text" name="name" value="<?php echo $fetch['uname']?>" class="form-control" />
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" value="<?php echo $fetch['email']?>" class="form-control"  />
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" name="phone" value="<?php echo $fetch['phone']?>" class="form-control" />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" name="pass" value="<?php echo $fetch['pass']?>" class="form-control" />
						</div>
						<div class="form-group">
							<label>Subject</label>
							<select name = "dropdown" value ="<?php echo $fetch['dropdown']?>">
              <option value ="ITEL 304"> ITEL 304 </option>
              <option value ="ITEP 309"> ITEP 309 </option></select>
						</div>
						<div class="form-group">
							<label><b>Gender:</b></label>
              <input id="radio-1" name="radio" value="Male" type="radio" checked />
              <label for="radio-1" class="radio-label">Male</label>
              <input id="radio-2" name="radio" value="Female" type="radio" />
             <label for="radio-2" class="radio-label">Female</label>
						</div>
						<div class="form-group">
							<label>Interest</label>
							<input type="checkbox"  name="checkbox[]" value="Front End" checked>
              <label for="Front End">Front End</label>&nbsp;&nbsp;&nbsp;&nbsp;

             <input type="checkbox"  name="checkbox[]" value="Back End">
            <label for="Back End">Back End</label>&nbsp;&nbsp;&nbsp;&nbsp;
  
            <input type="checkbox"  name="checkbox[]" value="Web Design">
            <label for="Webdesign">Web Design</label><br><br>
						</div>
						<div class="form-group">
							<label>Comment</label>
							<input type="text" name="comment" value="<?php echo $fetch['comment']?>" class="form-control" />
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="Save" class="button">Save</button>
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