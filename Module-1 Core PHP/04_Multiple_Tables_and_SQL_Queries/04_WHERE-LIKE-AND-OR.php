<?php
// SELECT employees where department is 'Sales'
$sql = "SELECT * FROM employees WHERE department_id = (SELECT department_id FROM departments WHERE department_name = 'Sales')";
$stmt = $pdo->query($sql);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
}

// SELECT employees with a name like 'J%'
$sql = "SELECT * FROM employees WHERE first_name LIKE 'J%'";
$stmt = $pdo->query($sql);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
}
?>
