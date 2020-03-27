<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE pertanyaan (
		id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nama VARCHAR(200) NOT NULL,
		email VARCHAR(50) NOT NULL,
		pertanyaan TEXT )";
	if (mysqli_query($conn, $sql)) {
	echo "Table created succesfully";
	}
	else {
	echo "Error creating database: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>