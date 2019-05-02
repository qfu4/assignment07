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

// check if the form (from renderform.php) has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit'])) {
	// confirm that the 'id' value is a valid integer before getting the form data
	if (is_numeric($_POST['id'])) {
		// get form data, making sure it is valid
		$id = $_POST['id'];
	$name = mysqli_real_escape_string($connection, htmlspecialchars($_POST['name']));
	$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
	$address = mysqli_real_escape_string($connection, htmlspecialchars($_POST['address']));
	$q1 = mysqli_real_escape_string($connection, htmlspecialchars($_POST['favorite1']));
	$q2 = mysqli_real_escape_string($connection, htmlspecialchars($_POST['favorite2']));
	$q3 = mysqli_real_escape_string($connection, htmlspecialchars($_POST['favorite3']));
	$q4 = mysqli_real_escape_string($connection, htmlspecialchars($_POST['favorite4']));
	$q5 = mysqli_real_escape_string($connection, htmlspecialchars($_POST['score']));


		// check that firstname/lastname fields are both filled in
		if ($name == '' || $email == '' || $address == '' || $q1 == '' || $q2 == '' || $q3 == '' || $q4 == '' || $q5 == '' ) {
			// generate error message
			$error = 'ERROR: Please fill in all required fields!';

			//error, display form
				renderForm($id, $name, $email, $address,$favorite1,$favorite2,$favorite3,$favorite4,$score,$error);

		} 	else {
		// save the data to the database
		$result = mysqli_query($connection, "UPDATE queens_table SET name='$name',email='$email',address='$address',q1='$q1',q2='$q2',q3='$q3',q4='$q4',q5='$q5' where id='$id'");

			// once saved, redirect back to the homepage page to view the results
			header("Location: welcome.php");
		}
	} else {
		// if the 'id' isn't valid, display an error
		echo 'Error!';
	}
} else {
	// if the form (from renderform.php) hasn't been submitted yet, get the data from the db and display the form
	// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {
		// query db
		$id = $_GET['id'];
		$result = mysqli_query($connection, "SELECT * FROM queens_table WHERE id=$id");
		$row = mysqli_fetch_array( $result );

		// check that the 'id' matches up with a row in the databse
		if($row) {
			// get data from db
			$name= $row['name'];
			$email = $row['email'];
			$address = $row['address'];
			$q1 = $row['q1'];
			$q2 = $row['q2'];
			$q3 = $row['q3'];
			$q4 = $row['q4'];
			$q5 = $row['q5'];



			// show form
			renderForm($id, $name, $email, $address,$q1,$q2,$q3,$q4,$q5,$error);
		} else {
			// if no match, display result
			echo "No results!";
		}
	} else {
		// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
		echo 'Error!';
	}
}
?>