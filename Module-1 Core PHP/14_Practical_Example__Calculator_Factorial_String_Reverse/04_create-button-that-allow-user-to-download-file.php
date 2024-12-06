<?php
if (isset($_POST['download'])) {
    $file = 'path/to/your/file.txt';  // specify file path
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }
}
?>

<form method="post">
    <button type="submit" name="download">Download File</button>
</form>
