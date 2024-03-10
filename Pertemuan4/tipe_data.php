<?php
// Soal no 2
// Meng-Inisialisasi variabel
$a = 10;
$b = 5;

// Operasi matematika untuk mendefinisikan nilai variabel c, d, dan e
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

// Menampilkan nilai variabel a, b, c, d, dan e
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br><br>";

// Menampilkan tipe data dan nilai dari variabel e menggunakan var_dump
var_dump($e);
echo "<br><br>";

// Meng-Inisialisasi nilai-nilai untuk mata pelajaran
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

// Menghitung rata-rata nilai
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

// Menampilkan nilai-nilai mata pelajaran dan rata-rata
echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br><br>";

// Menampilkan tipe data dan nilai dari rata-rata menggunakan var_dump
var_dump($rataRata);
echo "<br><br>";

// Meng-Inisialisasi variabel boolean
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

// Menampilkan nilai dari variabel boolean menggunakan var_dump
var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);
echo "<br><br>";

// Meng-Inisialisasi variabel string
$namaDepan = "Ibnu";
$namaBelakang = "Jakaria";

// Menggabungkan nama depan dan belakang menjadi satu string
$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

// Menampilkan nama depan, nama belakang, dan nama lengkap
echo "Nama Depan: {$namaDepan} <br>";
echo "Nama Belakang: {$namaBelakang} <br>";
echo "Nama Lengkap: {$namaLengkap} <br>";
echo "Nama Lengkap 2: {$namaLengkap2} <br><br>";

// Meng-Inisialisasi array
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
// Menampilkan nama mahasiswa pertama dari array
echo "Mahasiswa Pertama: {$listMahasiswa[0]}";
?>