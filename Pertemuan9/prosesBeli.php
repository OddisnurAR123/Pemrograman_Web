<?php
// Memeriksa apakah data "beliNovel" dan "beliBuku" dikirimkan melalui metode POST
if (isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])) {
    // Menetapkan nilai "beliNovel" dan "beliBuku" ke dalam cookie
    setcookie("beliNovel", $_POST["beliNovel"]);
    setcookie("beliBuku", $_POST["beliBuku"]);
    
    // Mengarahkan pengguna ke halaman keranjangBelanja.php
    header("location: keranjangBelanja.php");
}
?>