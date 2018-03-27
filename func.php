<?php
	
	class User {

		$servername = "sql.njit.edu";
		$username = "eo65";
		$password = "bBQZFreNe"
		$dbname = "eo65";

		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) die($conn->connect_error);

		echo "Connection Successful!! <br>";

	}

?>