<?php
    // Memasukkan file koneksi.php untuk menghubungkan ke database
    include 'koneksi.php';

    // Mengambil nilai username dan password dari formulir login menggunakan metode POST
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Melakukan hashing password menggunakan md5

    // Query SQL untuk memeriksa kecocokan username dan password di database
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    // Menjalankan query SQL
    $result = mysqli_query($connect, $sql);

    // Menghitung jumlah baris yang ditemukan
    $cek = mysqli_num_rows($result);

    // Jika username dan password cocok, maka login berhasil
    if ($cek > 0) {
        // Memulai sesi
        session_start();
        // Menetapkan nilai variabel sesi
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        ?>
        <!-- Menampilkan pesan bahwa login berhasil dan memberikan tautan ke halaman Home -->
        Anda berhasil Login, silahkan menuju
        <a href="homeSession.php">Halaman Home</a>
        <?php
    } else {
        ?>
        <!-- Jika username dan password tidak cocok, menampilkan pesan bahwa login gagal dan memberikan tautan kembali ke halaman login -->
        Gagal login, silahkan login lagi
        <a href="sessionLoginForm.html">Halaman Login</a>
        <?php
        // Menampilkan pesan error jika terjadi kesalahan dalam query
        echo mysqli_error($connect);
    }
?>