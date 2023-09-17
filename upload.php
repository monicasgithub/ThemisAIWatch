<?php
echo 'hello';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded
    if (isset($_FILES["photo"])) {
        $uploadDirectory = "/checkphoto";
        $newFileName = "checkphoto.jpg"; // New file name
        echo 'hello';
        // Move the uploaded file to the desired directory and rename it
        $targetFile = $uploadDirectory . $newFileName;
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            // Redirect to 'themis_verdict.html'
            $redirectUrl = $_POST['redirect_url'];
            header("Location: $redirectUrl");
            exit;
        } else {
            die("Sorry, there was an error uploading your file.");
        }
    } else {
        echo "No file uploaded.";
    }
}
?>
