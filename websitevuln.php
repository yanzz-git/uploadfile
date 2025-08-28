<?php
if (isset($_FILES['file'])) {
    $uploadDir = "uploads/";
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo "File berhasil diupload: <a href='$uploadFile'>$uploadFile</a>";
    } else {
        echo "Upload gagal!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Vulnerable</title>
</head>
<body>
    <h2>Upload File (VULNERABLE)</h2>
    <form enctype="multipart/form-data" method="post">
        <input type="file" name="file" />
        <input type="submit" value="Upload" />
    </form>
</body>
</html>