<?php
    require_once 'lib/functions.php';

    // superglobales php
    // $_GET
    // $_POST
    // $_REQUEST => $_GET, $_POST, $_COOKIES
    // $_SERVER
    // $_SESSION
    // $_FILES

    handleRequest($_FILES);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <h1>File Uploader</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <label for="file-upload">Choose file to upload</label>
    <input type="file" name="fileUpload" id="file-upload">
    <button type="submit" name="submit">Save</button>
    </form>
</body>
</html>

