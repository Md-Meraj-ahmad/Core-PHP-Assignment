<?php
// Delete employee with ID = 4
$sql = "DELETE FROM employees WHERE employee_id = 4";
$pdo->exec($sql);
?>
