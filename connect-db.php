<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'queens');
define('DB_PASSWORD', 'coffee');
define('DB_NAME', 'queens');
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<!--  
// // Connect to Database
// $connection = mysqli_connect($server,$user,$pass,$db);
// if (!$connection) {
//     echo "Error: Unable to connect to MySQL." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// }
// ?> -->