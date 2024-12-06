<?php
// Connection to database
$pdo = new PDO("mysql:host=localhost; dbname=company", "username", "password");

// SELECT all employees
$sql = "SELECT * FROM employees";
$stmt = $pdo->query($sql);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
}
?>
