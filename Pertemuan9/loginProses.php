<?php
// Memasukkan file koneksi.php
include "koneksi.php";

// Mengambil data dari form login
$username = $_POST['username']; // Mengambil nilai username dari formulir login
$password = md5($_POST['password']); // Mengambil nilai password dari formulir login dan melakukan hashing menggunakan md5

// Query untuk memeriksa kecocokan username dan password di database
$query = "SELECT * FROM user WHERE username ='$username' AND password ='$password'";

// Melakukan Query ke database
$result = mysqli_query($connect, $query);

// Memeriksa jumlah baris yang ditemukan oleh query
$cek = mysqli_num_rows($result);

// Memeriksa apakah login berhasil atau tidak berdasarkan jumlah baris yang ditemukan
if ($cek) { // Jika jumlah baris lebih dari 0, login berhasil
    echo "Anda berhasil login. Silahkan menuju "; ?>
    <a href="homeAdmin.html">Halaman HOME</a> <!-- Tautan menuju halaman HOME untuk admin -->
<?php
} else { // Jika jumlah baris tidak ditemukan, login gagal
    echo "Anda gagal login. Silahkan "; ?>
    <a href="loginForm.html">Login Kembali</a> <!-- Tautan untuk kembali ke halaman login -->
<?php
    echo mysqli_error($connect); // Menampilkan pesan error dari database jika terjadi kesalahan
}
?>