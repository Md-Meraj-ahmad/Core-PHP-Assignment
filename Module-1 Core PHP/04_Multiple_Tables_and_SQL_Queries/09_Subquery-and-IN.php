<?php
$sql = "SELECT * FROM employees WHERE employee_id IN (SELECT employee_id FROM salaries WHERE salary > 50000)";
$stmt = $pdo->query($sql);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
}
?>
