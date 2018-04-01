<?php
class User{
	function User(){
		$servername = "sql.njit.edu";
		$username = "eo65";
		$password = "bBQZFreNe";
		$dbname = "eo65";
		// Create connection
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully <br>";
		$this->connect = $conn;
		}
	

	function displayAllUser(){
		$sql = "SELECT * FROM accounts";
		$result = $this->connect->query($sql);
		echo '<table style="border-style: solid;">';
		echo '<tr>';
		echo '<th colspan="8" style="text-align: center;font-weight: bold">All Users Information</th></tr>';
		
		echo '<tr>';
		echo '<th style="text=align:center">Email</th>';
		echo '<th style="text=align:center">First Name</th>';
		echo '<th style="text=align:center">Last Name</th>';
		echo '<th style="text=align:center">Phone</th>';
		echo '<th style="text=align:center">Birthday</th>';
		echo '<th style="text=align:center">Gender</th>';
		echo '<th style="text=align:center">Password</th>';
		echo '</tr>';
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["phone"]."</td>";
			echo "<td>".$row["birthday"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "</tr>";
    	}
    	echo "</table>";
	}

	function deleteUser($email){
		$sql = "SELECT * FROM accounts where email = '$email'";
		$result = $this->connect->query($sql);
		echo "Deleted this record: <br>";
		echo '<table style="border-style: dashed;">';
		echo '<th style="text=align:center">Email</th>';
		echo '<th style="text=align:center">First Name</th>';
		echo '<th style="text=align:center">Last Name</th>';
		echo '<th style="text=align:center">Phone</th>';
		echo '<th style="text=align:center">Birthday</th>';
		echo '<th style="text=align:center">Gender</th>';
		echo '<th style="text=align:center">Password</th>';
		echo '</tr>';
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["phone"]."</td>";
			echo "<td>".$row["birthday"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "</tr>";
    	}
    	echo "</table>";
		$sql = "DELETE FROM accounts where email = '$email'";
		$result = $this->connect->query($sql);
	}


	function insertUser($email, $fname, $lname, $phone, $birthday, $gender, $password){
		$sql = "INSERT into accounts values('$id', '$email', '$fname', '$lname', '$phone', '$birthday', '$gender', '$password')";
		$result = $this->connection->query($sql);
		$sql = "SELECT * FROM accounts where email = '$email'";
		$result = $this->connection->query($sql);
		echo "Inserted this record: <br>";
		echo '<table style="border-style: solid;">';
		echo '<th style="text=align:center">Email</th>';
		echo '<th style="text=align:center">First Name</th>';
		echo '<th style="text=align:center">Last Name</th>';
		echo '<th style="text=align:center">Phone</th>';
		echo '<th style="text=align:center">Birthday</th>';
		echo '<th style="text=align:center">Gender</th>';
		echo '<th style="text=align:center">Password</th>';
		echo '</tr>';
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["phone"]."</td>";
			echo "<td>".$row["birthday"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "</tr>";
    	}
    	echo "</table>";
	}
	
	function updatePassword($id, $newPassword){
		$sql = "update accounts set password = '$newPassword' where email = '$email'";
		$result = $this->connect->query($sql);
		$sql = "SELECT * FROM accounts where email = '$email'";
		$result = $this->connect->query($sql);
		echo "Updated this record: <br>";
		echo '<table style="border-style: double;">';
		echo '<th style="text=align:center">Email</th>';
		echo '<th style="text=align:center">First Name</th>';
		echo '<th style="text=align:center">Last Name</th>';
		echo '<th style="text=align:center">Phone</th>';
		echo '<th style="text=align:center">Birthday</th>';
		echo '<th style="text=align:center">Gender</th>';
		echo '<th style="text=align:center">Password</th>';
		echo '</tr>';
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["phone"]."</td>";
			echo "<td>".$row["birthday"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "</tr>";
    	}
    	echo "</table>";
	}

}


$user = new User();
$user->displayAllUser();
$user->deleteUser('js829');
$user->insertUser('CW45@gmail.com', 'Caleb', 'William', '906-555-3432', '07/04/1970', 'male', 'take3');
$user->updatePassword('ho90@njit.edu', 'copy');

?>