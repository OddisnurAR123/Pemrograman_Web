<?php
// koneksi ke database
$koneksi = mysqli_connect("localhost","root","","praktikumdb");

// periksa koneksi
if(mysqli_connect_error()){
    die("Koneksi database gagal: ". mysqli_connect_error());
}
?>