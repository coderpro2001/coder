<?php
require_once 'lib/functions.php';
$pdo = getConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Project</title>
</head>
<body>
    <h1>File Upload</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="file-upload"></label>
        <input type="file" name="fileUpload" id="file-upload">
        <button type="submit" name="submit">Save</button>
    </form>
</body>
</html>