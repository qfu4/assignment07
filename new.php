<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include('renderform.php');

// connect to the database
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit'])) {
	// get form data, making sure it is valid
	$name = mysqli_real_escape_string($connection, htmlspecialchars($_POST['name']));
	$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
	$address = mysqli_real_escape_string($connection, htmlspecialchars($_POST['address']));
	$q1 = mysqli_real_escape_string($connection, htmlspecialchars($_POST['favorite1']));
	$q2 = mysqli_real_escape_string($connection, htmlspecialchars($_POST['favorite2']));
	$q3 = mysqli_real_escape_string($connection, htmlspecialchars($_POST['favorite3']));
	$q4 = mysqli_real_escape_string($connection, htmlspecialchars($_POST['favorite4']));
	$q5 = mysqli_real_escape_string($connection, htmlspecialchars($_POST['score']));

	// check to make sure both fields are entered
	if ($name == '' || $email == '' || $address == '' || $q1 == '' || $q2 == '' || $q3 == '' || $q4 == '' || $q5 == '' ) {
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';

		// if either field is blank, display the form again
		renderForm($id, $name, $email, $address,$favorite1,$favorite2,$favorite3,$favorite4,$score,$error);

	}  else {
		// save the data to the database
		$result = mysqli_query($connection, "INSERT INTO queens_table (name,email,address,q1,q2,q3,q4,q5) VALUES ('$name', '$email', '$address', '$q1', '$q2', '$q3', '$q4', '$q5')");

		// once saved, redirect back to the view page
		header("Location: welcome.php");
	} 
} else {
	// if the form hasn't been submitted, display the form
	renderForm('','','','','','','','','','');
}
?>
