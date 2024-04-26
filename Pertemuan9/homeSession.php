<html>
<head>
    
</head>
<body>
    <?php
    // Mulai sesi PHP
    session_start();

    // Periksa apakah pengguna sudah login
    if ($_SESSION['status'] == 'login') {
        // Jika pengguna sudah login, tampilkan pesan selamat datang dan nama pengguna
        echo "Selamat datang " . $_SESSION['username'];
        ?>
        <br>
        <!-- Tautan untuk logout -->
        <a href="sessionLogout.php">Log Out</a>
    <?php
    } else {
        // Jika pengguna belum login, tampilkan pesan dan tautan untuk login
        echo "Anda belum login. Silahkan ";
        ?>
        <!-- Tautan untuk login -->
        <a href="sessionLoginForm.html">Log In</a>
    <?php
    }
    ?>
</body>
</html>
