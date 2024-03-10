<?php
// Saol No 1
// Mendefinisikan variabel-variabel angka (nilai numerik)
$angka1 = 10;
$angka2 = 5;

// Melakukan penjumlahan angka1 dan angka2
$hasil = $angka1 + $angka2;
// Menampilkan hasil penjumlahan
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.<br><br>";

// Mendefinisikan variabel-variabel boolean
$benar = true;
$salah = false;
// Menampilkan nilai variabel benar dan salah
echo "Variabel benar: $benar ,<br>";
echo "Variabel salah: $salah<br><br>";

// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

// Menampilkan informasi situs dengan menggunakan konstanta
echo "Selamat datang di " . NAMA_SITUS. " , <br>";
echo "situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".<br>";
?>