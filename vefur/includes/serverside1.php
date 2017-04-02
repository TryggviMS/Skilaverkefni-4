<?php 
$servername = "tsuts.tskoli.is";
$username = "1309932819";
$password = "mypassword";
$dbname = "1309932819_vsh4";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn === TRUE){
	die("Connection failed: " . $conn->connect_error);
}

?>