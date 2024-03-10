<?php
// Data Mahasiswa Malang

echo "<center><h1>Tugas Membuat Array Multidimensi</center></h1><br><br>";
echo "<h2>Nama  : Oddis Nur Alifathur Razaaq</h2>";
echo "<h2>No    : 20</h2>";
echo "<h2>Kelas : SIB-2C</h2><br>";
echo "<hr>";
echo "<br>";

// Array multidimensi berisi data mahasiswa
$data = array(
    array("foto" => "img/profil1.jpg", "nama" => "Oddis Nur Alifathur Razaaq",
    "alamat" => "Dsn. Mojoyanti Rt.001/Rw.001, Ds. Jatibanjar, Kec. Ploso, Kab. Jombang", "no_hp" => "085843130250",
    "jurusan" => "Sistem Informasi Bisnis", "kampus" => "Politeknik Negeri Malang"),

    array("foto" => "img/profil2.jpg", "nama" => "Arya Bima Putra Dewangga",
    "alamat" => "Dsn. Cipir Dondong Rt.003/Rw.005, Ds. Banjardowo, Kec. Kabuh, Kab. Jombang", "no_hp" => "082131767184",
    "jurusan" => "Kedokteran", "kampus" => "Universitas Brawijaya"),
);

echo "<h2>Daftar Mahasiswa Jombang Yang Ada Dimalang</h2>";
echo "<br>";

// Menampilkan data atau melihat isi data menggunakan looping
// Melakukan iterasi melalui setiap elemen dalam array $data
// dan menyimpan nilai dari setiap elemen tersebut ke dalam variabel $informasi
foreach ($data as $informasi) {
    echo "<br>";
    echo "<img src='{$informasi['foto']}' alt='Foto {$informasi['nama']}' width='300' height='400'><br>";
    echo "<br>";
    echo "Nama: {$informasi['nama']}<br>";
    echo "Alamat: {$informasi['alamat']}<br>";
    echo "No. HP: {$informasi['no_hp']}<br>";
    echo "Jurusan: {$informasi['jurusan']}<br>";
    echo "Kampus: {$informasi['kampus']}<br>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";
}
?>