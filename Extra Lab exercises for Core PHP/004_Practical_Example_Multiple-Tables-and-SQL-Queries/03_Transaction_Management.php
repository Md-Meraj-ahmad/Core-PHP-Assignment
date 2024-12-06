<?php
// Create a connection
$conn = new mysqli("localhost", "root", "", "mydatabase");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->begin_transaction();

try {
    // Insert into users table
    $stmt1 = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt1->bind_param("ss", $name, $email);
    
    $name = "Alice";
    $email = "alice@example.com";
    $stmt1->execute();
    
    // Insert into orders table
    $stmt2 = $conn->prepare("INSERT INTO orders (user_id, total_amount) VALUES (?, ?)");
    $stmt2->bind_param("id", $user_id, $total_amount);
    
    $user_id = $conn->insert_id;
    $total_amount = 150;
    $stmt2->execute();
    
    // Commit transaction
    $conn->commit();
    echo "Transaction completed successfully.";
} catch (Exception $e) {
    $conn->rollback();
    echo "Transaction failed: " . $e->getMessage();
}

$conn->close();
?>
