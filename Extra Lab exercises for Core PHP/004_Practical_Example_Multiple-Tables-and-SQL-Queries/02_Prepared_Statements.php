<?php
$conn = new mysqli("localhost", "root", "", "mydatabase");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);

$name = "Md Meraj Ahmad";
$email = "hattorihanjo123@gmail.com";

$stmt->execute();
echo "New record inserted successfully";

$stmt->close();
$conn->close();
?>
