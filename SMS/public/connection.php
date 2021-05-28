<?php
	//////////Establishing Database connection
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Db_Schoolcore_Capstone2021_By_RS";
	
	$connection = mysqli_connect($server, $username, $password, $dbname);
	
	if(!$connection){
		die("Awaiting Resources");
	}
?>