<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php

include('connect-db.php');

include('welcome.php');

if (isset($_GET['edit'])){
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
			$q5 = $row['q5']
		}
	}
?>
