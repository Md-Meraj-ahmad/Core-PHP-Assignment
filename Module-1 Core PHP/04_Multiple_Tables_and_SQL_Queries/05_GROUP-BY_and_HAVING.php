<?php
$sql = "SELECT d.department_name, COUNT(e.employee_id) AS employee_count 
        FROM employees e
        JOIN departments d ON e.department_id = d.department_id
        GROUP BY d.department_name
        HAVING employee_count > 1";
$stmt = $pdo->query($sql);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['department_name'] . " - " . $row['employee_count'] . " employees<br>";
}
?>
