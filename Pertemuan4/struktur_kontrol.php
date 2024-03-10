<?php
// Soal no 4.1
// Meng-Inisialisasi variabel dengan nilai numerik
$nilaiNumerik = 92;
// Menentukan nilai huruf berdasarkan nilai numerik
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A<br><br>";  // Jika nilai numerik antara lebih besar dari atau sama dengan 90 dan kurang dari atau sama dengan 100, mencetak "A"
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B<br><br>"; // Jika nilai numerik antara lebih besar dari atau sama dengan 80 dan kurang dari 90, mencetak "B"
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C<br><br>"; // Jika nilai numerik antara lebih besar dari atau sama dengan 70 dan kurang dari 80, mencetak "C"
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D<br><br>"; // Jika nilai numerik kurang dari 70, mencetak "D"
}

// Soal no 4.2
// Meng-Inisialisasi variabel untuk jarak saat ini, jarak target, peningkatan harian, dan jumlah hari
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

// Menghitung berapa hari atlet mencapai jarak 500 kilometer
while ($jarakSaatIni < $jarakTarget) { // Selama jarak saat ini kurang dari jarak target, proses akan terus berlangsung
    $jarakSaatIni += $peningkatanHarian; // Menambahkan peningkatan harian ke jarak saat ini
    $hari++; // Menginkremenkan jumlah hari
}

// Mencetak hasil jumlah hari yang dibutuhkan untuk mencapai target jarak
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br><br>";

// Soal no 4.3
// Meng-Inisialisasi variabel untuk jumlah lahan, tanaman per lahan, buah per tanaman, dan jumlah buah
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

// Menghitung total buah yang akan dipanen
// Inisialisasi variabel penghitung $i dengan nilai awal 1
// Loop akan berlanjut selama nilai $i kurang dari atau sama dengan jumlah lahan
// Setiap iterasi, nilai $i akan ditambah 1
for ($i = 1; $i <= $jumlahLahan; $i++) {
    // Di setiap iterasi, jumlah buah dari setiap lahan akan ditambahkan ke total jumlah buah yang akan dipanen
    // Jumlah buah per lahan didapatkan dengan mengalikan jumlah tanaman per lahan dengan jumlah buah per tanaman
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

// Mencetak jumlah buah yang akan dipanen
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah<br><br>";

// Soal no 4.4
// Array skor ujian
$skorUjian = [85, 92, 78, 96, 88];
// Variabel untuk menyimpan total skor
$totalSkor = 0;

// Menghitung total skor ujian
// Looping akan berjalan untuk setiap elemen dalam array $skorUjian
// Variabel $skor akan mengambil nilai dari setiap elemen dalam array $skorUjian pada setiap iterasi
foreach ($skorUjian as $skor) {
    // Di setiap iterasi, nilai skor akan ditambahkan ke totalSkor
    $totalSkor += $skor;
}

// Menampilkan total skor ujian
echo "Total skor ujian adalah: $totalSkor<br><br>";

// Soal no 4.5
// Array berisi nilai-nilai siswa
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

// Menampilkan status lulus/tidak lulus untuk setiap nilai siswa
// Melakukan iterasi melalui setiap nilai dalam array $nilaiSiswa
// Variabel $nilai akan mengambil nilai dari setiap elemen dalam array $nilaiSiswa pada setiap iterasi
foreach ($nilaiSiswa as $nilai) {
    // Memeriksa apakah nilai siswa kurang dari 60
    if ($nilai < 60) {
        // Jika nilai kurang dari 60, menampilkan "Tidak lulus"
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue; // Menggunakan pernyataan 'continue' untuk melanjutkan ke iterasi berikutnya tanpa menjalankan kode di bawahnya
    }
    // Jika nilai lebih dari atau sama dengan 60, menampilkan "Lulus"
    echo "Nilai: $nilai (Lulus) <br>";
}

// Soal no 4.6
echo "<br><br><center>====================================================================================</center><br>";
echo "<center>Soal Cerita 4.6</center><br>";
echo "<center>====================================================================================</center><br>";
// Array berisi nilai-nilai siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Mengurutkan nilai siswa dari terendah ke tertinggi
sort($nilaiSiswa);

// Menghapus dua nilai terendah
array_shift($nilaiSiswa);
array_shift($nilaiSiswa);

// Menghapus dua nilai tertinggi
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

// Menghitung total nilai siswa setelah mengabaikan dua nilai tertinggi dan dua nilai terendah
$totalNilai = array_sum($nilaiSiswa);

// Menampilkan total nilai siswa setelah mengabaikan dua nilai tertinggi dan dua nilai terendah
echo "<center>Total nilai siswa setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai</center>";

// Soal no 4.7
echo "<br><br><br><center>====================================================================================</center><br>";
echo "<center>Soal Cerita 4.7</center><br>";
echo "<center>====================================================================================</center><br>";

$hargaProduk = 120000; // Harga awal produk
$diskon = 20; // Diskon
$batasDiskon = 100000; // Batas pembelian untuk mendapatkan diskon

// Menentukan harga setelah diskon, jika harga lebih dari batas diskon
if ($hargaProduk > $batasDiskon) {
    // Menghitung harga setelah diskon
    $hargaSetelahDiskon = $hargaProduk - ($hargaProduk * ($diskon/100));
    // Menampilkan informasi harga awal produk
    echo "<center>Harga awal produk: Rp " . number_format($hargaProduk, 2, ',', '.') . "</center><br>";
    // Menampilkan informasi diskon
    echo "<center>Diskon: " . ($diskon) . "%</center><br>";
    // Menampilkan informasi harga yang harus dibayar setelah mendapatkan diskon
    echo "<center>Harga yang harus dibayar setelah mendapatkan diskon: Rp " . number_format($hargaSetelahDiskon, 2, ',', '.') . "</center>";
} else {
    // Jika harga produk kurang dari batas diskon, menampilkan informasi harga awal produk tanpa diskon
    echo "<center>Harga awal produk: Rp " . number_format($hargaProduk, 2, ',', '.') . "</center><br>";
    // Menampilkan informasi bahwa tidak ada diskon yang diberikan
    echo "<center>Tidak ada diskon yang diberikan</center><br>";
    // Menampilkan informasi harga yang harus dibayar tanpa diskon
    echo "<center>Harga yang harus dibayar tanpa diskon: Rp " . number_format($hargaProduk, 2, ',', '.') . "</center>";
}

// Soal no 4.8
echo "<br><br><br><center>====================================================================================</center><br>";
echo "<center>Soal Cerita 4.8</center><br>";
echo "<center>====================================================================================</center><br>";
$skorPemain = 900; // Ganti dengan nilai skor sesuai dengan permainan atau yang sesuai dengan yang diinginkan kita

// Menentukan total skor pemain dan apakah mendapatkan hadiah tambahan menggunakan operator ternary
$totalSkorPemain = "Total skor pemain adalah: $skorPemain<br>";
$hadiahTambahan = ($skorPemain > 500) ? "Apakah pemain mendapatkan hadiah tambahan? YA" : "Apakah pemain mendapatkan hadiah tambahan? TIDAK";

// Menampilkan total skor pemain dan apakah mendapatkan hadiah tambahan
echo "<center>$totalSkorPemain</center>";
echo "<center>$hadiahTambahan</center>";
?>