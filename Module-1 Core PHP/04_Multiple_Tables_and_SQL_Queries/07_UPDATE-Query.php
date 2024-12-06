<?php
// Update salary for employee with ID = 1
$sql = "UPDATE salaries SET salary = 55000 WHERE employee_id = 1";
$pdo->exec($sql);
?>
