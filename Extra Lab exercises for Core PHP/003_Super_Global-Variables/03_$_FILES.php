<form action="file_upload.php" method="post" enctype="multipart/form-data">
    Select file: <input type="file" name="fileToUpload">
    <input type="submit" value="Upload File">
</form>

<?php
if ($_FILES['fileToUpload']['error'] == 0) {
    echo "File uploaded successfully!"; 
    echo "File name: " . $_FILES['fileToUpload']['name'] . ""; 
    echo "File size: " . $_FILES['fileToUpload']['size'] . " bytes"; 
    } 
?>
