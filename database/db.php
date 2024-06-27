<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "todo_app";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
	die("DB connect error: " . $conn->connect_error);
}

// echo "DB Connected\n";