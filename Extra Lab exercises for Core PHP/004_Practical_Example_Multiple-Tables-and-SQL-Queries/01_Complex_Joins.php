<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT users.name, orders.order_date, orders.total_amount 
        FROM users 
        INNER JOIN orders ON users.id = orders.user_id 
        WHERE orders.total_amount > 100";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row['name'] . " - Order Date: " . $row['order_date'] . " - Total: " . $row['total_amount'] . "<br>";
    }
} else {
    echo "No records found";
}

$conn->close();
?>
