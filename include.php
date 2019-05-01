 <?php

// connect to the database
     include_once'connect-db.php';


	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $address = $_POST['address'];
	 $q1 = $_POST['favorite1'];
	 $q2 = $_POST['favorite2'];
	 $q3 = $_POST['favorite3'];
	 $q4 = $_POST['favorite4'];
	 $q5 = $_POST['score'];

     // save the data to the database
		$result = mysqli_query($connection, "INSERT INTO queens_table (name,email,address,q1,q2,q3,q4,q5) VALUES ('$name','$email','$address', '$q1', '$q2', '$q3', '$q4', '$q5')");

		// header("Location: welcome.php");
       // header("Location: welcome.php submit=success");

    ?>

