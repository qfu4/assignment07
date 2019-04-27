<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<div class="container">
    <?php
// connect to the database
include('connect-db.php');

<div style="float: right; margin-top: 30px;">
  <?php if(isset($_SESSION['username'])) { ?>
  <a href="logout.php">Logout of your User Account</a>
  <?php } else { ?>
  <a href="login.php">Login to your User Account</a>
  <?php } ?>
</div>
  <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
</div>
<?php

// get results from database
$result = mysqli_query($connection, "SELECT * FROM queens_table");
?>
   
s<table class="table table-striped table-hover table-bordered">
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Address</th>
    <th scope="col">Q1</th>
    <th scope="col">Q2</th>
    <th scope="col">Q3</th>
    <th scope="col">Q4</th>
    <th scope="col">Q5</th>
    <?php if(isset($_SESSION['username'])) { ?>
      <th scope="col" colspan="2"><em>functions</em></th>
    <?php } ?>
  </tr>
<?php
// loop through results of database query, displaying them in the table
while($row = mysqli_fetch_array( $result )) {
?>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['q1']; ?></td>
    <td><?php echo $row['q2']; ?></td>
    <td><?php echo $row['q3']; ?></td>
    <td><?php echo $row['q4']; ?></td>
    <td><?php echo $row['q5']; ?></td>
    <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["id"]; ?>?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
  </tr>
<?php
// close the loop
}
?>
</table>

<div>
  <br>
    <a href="new.php">Add a new record</a>
</div>
</body>
</html>
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>
</body>
</html>