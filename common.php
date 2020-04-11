<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tuts_rest";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) {
	echo "connection failed";
}
?>