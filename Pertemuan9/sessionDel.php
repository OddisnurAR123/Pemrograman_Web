<?php
// Memulai sesi
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    // Menghapus semua variabel sesi
    session_unset();
    // Menghancurkan sesi
    session_destroy();

    // Menampilkan pesan bahwa semua variabel sesi telah dihapus dan sesi telah dihancurkan
    echo "All session variables are now removed, and the session is destroyed.";
    ?>
</body>

</html>