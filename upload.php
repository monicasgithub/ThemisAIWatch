<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded
    if (isset($_FILES["photo"])) {
        $uploadDirectory = dirname(__FILE__) . "/";
        $newFileName = "checkphoto.jpg"; // New file name
        alert("Upload Directory: " . $uploadDirectory);

        // Move the uploaded file to the desired directory and rename it
        $targetFile = $uploadDirectory . $newFileName;
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            echo "File has been uploaded and renamed to checkphoto.jpg successfully!";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "No file uploaded.";
    }
}
?>
