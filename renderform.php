<?php session_start(); ?>
<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $phone, $email, $error) {
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
		<label for="firstname">First Name: *</label> 
		<input class="form-control" id="firstname" type="text" name="firstname" placeholder="Enter Your First Name" value="<?php echo $firstname; ?>"/>
	</div>
	<div class="form-group">
		<label for="lastname">Last Name: *</label> 
		<input class="form-control" id="lastname" type="text" name="lastname" placeholder="Enter Your Last Name" value="<?php echo $lastname; ?>"/>
	</div>
	<div class="form-group">
		<label for="phone">Phone: *</label> 
		<input class="form-control" id="phone" type="text" name="phone" placeholder="Enter Your Phone" value="<?php echo $phone; ?>"/>
	</div>
	<div class="form-group">
		<label for="email">Email: *</label> 
		<input class="form-control" id="email" type="text" name="email" placeholder="Enter Your Email" value="<?php echo $email; ?>"/>
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