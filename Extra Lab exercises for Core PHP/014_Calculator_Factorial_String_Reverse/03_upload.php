<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['fileToUpload'])) {
        $file_name = $_FILES['fileToUpload']['name'];
        $file_size = $_FILES['fileToUpload']['size'];
        $file_type = $_FILES['fileToUpload']['type'];

        echo "File Name: " . $file_name . "<br>";
        echo "File Size: " . $file_size . " bytes<br>";
        echo "File Type: " . $file_type . "<br>";

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($file_name);

        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
            echo "The file has been uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>