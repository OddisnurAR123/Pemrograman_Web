<?php
// Variabel-variabel untuk informasi koneksi database
$namaHost = "localhost";
$username = "root";
$password = "";
$database = "praktikumdb";

try {
    // Mencoba membuat koneksi ke database MySQL
    $connect = mysqli_connect($namaHost, $username, $password, $database);
} catch (Exception $e) {
    // Menangani pengecualian jika koneksi gagal dan menampilkan pesan pengecualian
    echo $e->getMessage();
}
?>