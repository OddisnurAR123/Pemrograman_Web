<?php
// Soal no 5.1
// Daftar nilai siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

// Array kosong untuk menyimpan nilai siswa yang lulus
$nilaiLulus = [];


// Iterasi melalui setiap nilai siswa dalam array $nilaiSiswa
// Variabel $nilai berfungsi sebagai variabel iterasi yang akan mengambil nilai dari setiap elemen dalam array $nilaiSiswa pada setiap iterasi.
foreach ($nilaiSiswa as $nilai) {
    // Memeriksa apakah nilai siswa memenuhi syarat untuk lulus (≥ 70)
    if ($nilai >= 70) {
        // Menambahkan nilai siswa yang lulus ke dalam array $nilaiLulus
        $nilaiLulus[] = $nilai; // Menambahkan nilai siswa yang lulus ke dalam array $nilaiLulus
    }
}

// Mencetak daftar nilai siswa yang lulus
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus). "<br><br>";

// Soal no 5.2
// Daftar karyawan beserta pengalaman kerja (dalam tahun)
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

// Array kosong untuk menyimpan nama karyawan dengan pengalaman kerja lebih dari 5 tahun
$karyawanPengalamanLimaTahun = [];

// Iterasi melalui setiap data karyawan dalam array $daftarKaryawan
// Variabel $karyawan berfungsi sebagai variabel iterasi yang akan mengambil setiap data karyawan (berupa array) dari array $daftarKaryawan pada setiap iterasi.
// Indeks 0 dari setiap array karyawan berisi nama karyawan, sedangkan indeks 1 berisi pengalaman kerja karyawan.
foreach ($daftarKaryawan as $karyawan) {
    // Memeriksa apakah pengalaman kerja karyawan lebih dari 5 tahun
    if ($karyawan[1] > 5) {
        // Jika pengalaman kerja karyawan lebih dari 5 tahun, nama karyawan akan ditambahkan ke dalam array $karyawanPengalamanLimaTahun.
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

// Mencetak daftar karyawan dengan pengalaman kerja lebih dari 5 tahun
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ',
$karyawanPengalamanLimaTahun) . "<br><br>";

// Soal no 5.3
// Daftar nilai mahasiswa untuk setiap mata kuliah
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

// Mata kuliah yang ingin ditampilkan daftar nilainya
$mataKuliah = 'Fisika';

// Mencetak daftar nilai mahasiswa dalam mata kuliah yang dipilih
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

// Iterasi melalui setiap data nilai mahasiswa dalam mata kuliah yang dipilih
// Variabel $nilai berfungsi sebagai variabel iterasi yang akan mengambil setiap data nilai mahasiswa (berupa array) dari array $daftarNilai pada mata kuliah yang dipilih pada setiap iterasi.
// Indeks 0 dari setiap array nilai berisi nama mahasiswa, sedangkan indeks 1 berisi nilai mahasiswa.
foreach ($daftarNilai[$mataKuliah] as $nilai) {
    // Mencetak nama dan nilai mahasiswa dalam format yang ditentukan
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

// Soal no 5.4
echo "<br><br><br><center>====================================================================================</center><br>";
echo "<center>Soal Cerita 5.4</center><br>";
echo "<center>====================================================================================</center><br>";
// Daftar nilai siswa
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

// Menghitung rata-rata nilai kelas
$totalNilai = 0;
foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai[1];
}
$rataRataKelas = $totalNilai / count($daftarNilai);

// Mencetak rata-rata nilai kelas
echo "<center>Rata-rata nilai kelas: $rataRataKelas <br></center>";

// Mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas
echo "<center>Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas: <br></center>";
// Iterasi melalui setiap data nilai siswa dalam $daftarNilai
// Variabel $nilai berfungsi sebagai variabel iterasi yang akan mengambil setiap data nilai (berupa array) dari array $daftarNilai pada setiap iterasi.
// Indeks 0 dari setiap array nilai berisi nama siswa, sedangkan indeks 1 berisi nilai siswa.
foreach ($daftarNilai as $nilai) {
     // Memeriksa apakah nilai siswa lebih besar dari rata-rata kelas
    if ($nilai[1] > $rataRataKelas) {
        // Jika iya, mencetak nama dan nilai siswa dalam format yang ditentukan
        echo "<center>Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br></center>";
    }
}
?>