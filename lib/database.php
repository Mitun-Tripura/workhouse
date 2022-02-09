<?php
$servername = "localhost";
$username = "mituntripura";
$password = "";
$dbname = "workhouse";

$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if($conn == false){
		
		echo "<h1> Error establishing database connection</h1>";
	}


?> 