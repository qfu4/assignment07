<?php session_start(); ?>
<?php
// creates the edit record form
function renderForm($id, $name, $email, $address, $q1, $q2,$q3,$q4,$q5,$error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Record</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
<div class="container">
<div class="header-container">
	<h1>Add or Edit a Record</h1>
	<p>Don't worry, your info is secured.</p>
</div>
<?php
// if there are any errors, display them
if ($error != '') {
	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
<form action="" method="post">
	<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<label for="id">ID:</label> <?php echo $id; ?><br>
	</div>
	<div class="form-group">
		<label for="name"> Name: *</label> 
		<input class="form-control" id="firstname" type="text" name="name" placeholder="Enter Your First Name" value="<?php echo $name; ?>"/>
	</div>

	<div class="form-group">
		<label for="email">Email: *</label> 
		<input class="form-control" id="email" type="text" name="email" placeholder="Enter Your Email" value="<?php echo $email; ?>"/>
	</div>

	<div class="form-group">
		<label for="address">Address: *</label> 
		<input class="form-control" id="address" type="text" name="address" placeholder="Enter Your Address" value="<?php echo $address; ?>"/>
	</div>
	
	<div class="form-group">
		<label for="q1">q1: *</label> 
		<input class="form-control" id="q1" type="text" name="q1" value="<?php echo $q1; ?>"/>
	</div>

	<div class="form-group">
		<label for="q2">q2: *</label> 
		<input class="form-control" id="q2" type="text" name="q2" value="<?php echo $q2; ?>"/>
	</div>



	<div class="form-group">
		<label for="q3">q3: *</label> 
		<input class="form-control" id="q3" type="text" name="q3" value="<?php echo $q3; ?>"/>
	</div>



	<div class="form-group">
		<label for="q4">q4: *</label> 
		<input class="form-control" id="q4" type="text" name="q4" value="<?php echo $q4; ?>"/>
	</div>



	<div class="form-group">
		<label for="q5">q5: *</label> 
		<input class="form-control" id="q5" type="text" name="q5" value="<?php echo $q5; ?>"/>
	</div>

	<div class="form-group">* required</div>
	<input class="btn btn-primary" type="submit" id="submit" name="submit" value="Submit">
</form>

<div>
	<br>
	<a href=".">Cancel</a>
</div>

</div>
</body>
</html>
<?php
}
?>