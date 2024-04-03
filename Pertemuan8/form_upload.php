<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title> <!-- Judul halaman -->
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data"> <!-- Form untuk mengunggah file -->
        <input type="file" name="documentToUpload" id="documentToUpload"> <!-- Input untuk memilih file -->
        <input type="submit" value="Upload File" name="submit"> <!-- Tombol untuk mengunggah file -->
    </form>
</body>
</html>