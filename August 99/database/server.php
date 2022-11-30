<?php 
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'books';

$mysqli =  new mysqli($server, $user, $password , $database); 
// if ($mysqli->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
//   echo "Connected successfully";
?>
