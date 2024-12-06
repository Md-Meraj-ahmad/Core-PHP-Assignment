<?php
$filename = '02_criticalfile.php';

if (file_exists($filename)) {
    require $filename;
} else {
    echo "Error: The critical file '$filename' was not found!";
    exit();
}
?>
