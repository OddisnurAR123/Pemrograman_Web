<?php
    // Memasukkan file koneksi.php yang berisi koneksi ke database
    include "koneksi.php";

    // Mengambil data username dan password yang dikirimkan melalui metode POST
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Melakukan hashing password menggunakan md5

    // Membuat query untuk memeriksa kecocokan username dan password di database
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query); // Menjalankan query
    $row = mysqli_fetch_assoc($result); // Mengambil hasil query dalam bentuk array asosiatif

    // Memeriksa level pengguna untuk menentukan tindakan selanjutnya
    if ($row['level'] == 1) { // Jika level pengguna adalah 1 (admin)
            echo "Anda berhasil login. silahkan menuju"; ?>
            <a href="homeAdmin.html">Halaman HOME</a>
            <?php
        } else if ($row['level'] == 2) { // Jika level pengguna adalah 2 (guest)
            echo "Anda berhasil login. silahkan menuju"; ?>
            <a href="homeGuest.html">Halaman HOME</a>
            <?php
        } else { // Jika tidak ditemukan kecocokan atau level tidak valid
            echo "Anda gagal login. silahkan "; ?>
            <a href="loginForm.html">Login Kembali</a>
            <?php
            echo mysqli_error($connect); // Menampilkan pesan error dari database jika terjadi
        }
?>