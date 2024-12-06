<form method="get" action="process_get.php">
    <input type="text" name="name">
    <input type="submit">
</form>

<?php
echo "Hello, " . $_GET['name'];
?>
