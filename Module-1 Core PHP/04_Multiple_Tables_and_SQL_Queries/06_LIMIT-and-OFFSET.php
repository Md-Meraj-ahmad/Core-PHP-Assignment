<?php
// Fetch first 2 employees using LIMIT
$sql = "SELECT * FROM employees LIMIT 2";
$stmt = $pdo->query($sql);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
}

// Fetch employees starting from the 3rd record using OFFSET
$sql = "SELECT * FROM employees LIMIT 2 OFFSET 2";
$stmt = $pdo->query($sql);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
}
?>
