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
    // Menetapkan nilai untuk variabel sesi "favcolor" dan "favanimal"
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    
    // Menampilkan pesan bahwa variabel sesi telah ditetapkan
    echo "Session variables are set.";
    ?>
</body>
</html>