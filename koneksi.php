<?php
	function bukaData()
	{
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		
		$conn = new mysqli($dbhost, $dbuser, $dbpass) or die("Connect failed: %s\n". $conn -> error);
		return $conn;
	}
	
	function tutupData($conn)
	{
		$conn -> close();
	}
?>