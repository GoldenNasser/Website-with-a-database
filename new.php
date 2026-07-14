<?php
$servername = "sql305.infinityfree.com";
$username = "if0_42408195";
$password = "TUf0nvvL1uonn0";
$dbname = "if0_42408195_firstdb";

// 1. Matches the lowercase HTML form names
$name = $_GET["name"];
$age = $_GET["age"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Added backticks around `user` and removed the blank ID insert
$sql = "INSERT INTO `user` (name, age) VALUES ('$name', '$age')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// 3. Fixed the closing function
$conn->close();
?>