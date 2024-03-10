<?php
// Soal no 3.1
// Meng-Inisialisasi variabel $a dan $b
$a = 10;
$b = 5;

// Operasi aritmatika
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Menampilkan hasil operasi aritmatika
echo "====================<br>";
echo "Diketahui:<br>";
echo "====================<br>";
echo "Nilai a: " . $a . "<br>";
echo "Nilai b: " . $b . "<br>";
echo "====================<br>";
echo "Hasil Penjumlahan: " . $hasilTambah . "<br>";
echo "Hasil Pengurangan: " . $hasilKurang . "<br>";
echo "Hasil Perkalian: " . $hasilKali . "<br>";
echo "Hasil Pembagian: " . $hasilBagi . "<br>";
echo "Sisa Bagi: " . $sisaBagi . "<br>";
echo "Pangkat: " . $pangkat . "<br>";

// Soal no 3.2
// Operasi perbandingan
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// Menampilkan hasil operasi perbandingan
echo "====================<br>";
echo "Hasil $a == $b yaitu " . ($hasilSama ? "true" : "false") . "<br>"; 
echo "Hasil $a != $b yaitu " . ($hasilTidakSama ? "true" : "false") . "<br>"; 
echo "Hasil $a < $b yaitu " . ($hasilLebihKecil ? "true" : "false") . "<br>"; 
echo "Hasil $a > $b yaitu " . ($hasilLebihBesar ? "true" : "false") . "<br>"; 
echo "Hasil $a <= $b yaitu " . ($hasilLebihKecilSama ? "true" : "false") . "<br>"; 
echo "Hasil $a >= $b yaitu " . ($hasilLebihBesarSama ? "true" : "false") . "<br>";

// Soal no 3.3
// Operasi logika
$hasilAnd = $a && $b; 
$hasilOr = $a || $b;
$hasilNotA = !$a; 
$hasilNotB = !$b;

// Menampilkan hasil operasi logika
echo "====================<br>";
echo "Hasil $a && $b yaitu " . ($hasilAnd ? "true" : "false") . "<br>"; 
echo "Hasil $a || $b yaitu " . ($hasilOr ? "true" : "false") . "<br>"; 
echo "Hasil !$a yaitu " . ($hasilNotA ? "true" : "false") . "<br>"; 
echo "Hasil !$b yaitu " . ($hasilNotB ? "true" : "false") . "<br>";

// Soal no 3.4
// Operasi penugasan
$operator1 = $a + $b;
$operator2 = $a - $b;
$operator3 = $a * $b;
$operator4 = $a / $b;
$operator5 = $a % $b;

// Menampilkan hasil operasi penugasan
echo "====================<br>";
echo "Hasil dari $a += $b adalah " . $operator1. "<br>";
echo "Hasil dari  $a -= $b adalah " . $operator2 . "<br>";
echo "Hasil dari $a *= $b adalah " . $operator3 . "<br>";
echo "Hasil dari $a /= $b adalah " . $operator4 . "<br>";
echo "Hasil dari $a %= $b adalah " . $operator5 . "<br>";

// Soal no 3.5
// Operasi identitas
$hasilIdektik = $a === $b;
$hasilTidakIdekntik = $a !== $b;

// Menampilkan hasil operasi identitas
echo "====================<br>";
echo "$a apakah identik dengan $b ? " . ($hasilIdektik ? "true" : "false") . "<br>"; 
echo "$a apakah tidak identik dengan $b ? " . ($hasilTidakIdekntik ? "true" : "false") . "<br><br>";

// Soal no 3.6
echo "<br><br><center>====================================================================================</center><br>";
echo "<center>Soal Cerita 3.6</center><br>";
echo "<center>====================================================================================</center><br>";
// Data kursi di dalam sebuah restoran
$totalKursi = 45;
$kursiTerisi = 28;

// Hitung jumlah kursi kosong
$kursiKosong = $totalKursi - $kursiTerisi;

// Hitung persentase kursi kosong
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

// Tampilkan hasil
echo "Jika total kursi yang ada direstoran: " . $totalKursi . ", dan kursi yang terisi sudah: " . $kursiTerisi ."<br>";
echo "Maka jumlah kursi kosong: " . $kursiKosong . "<br>";
echo "Dan persentase kursi kosong: " . $persentaseKosong . "%";
?>