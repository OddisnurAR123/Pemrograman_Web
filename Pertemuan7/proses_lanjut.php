<?php
// Memeriksa apakah request yang diterima adalah POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil nilai yang dipilih untuk buah
    $selectedBuah = $_POST['buah'];

    // Memeriksa apakah ada warna yang dipilih
    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = []; // Inisialisasi array kosong jika tidak ada warna yang dipilih
    }

    // Mengambil nilai yang dipilih untuk jenis kelamin
    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    // Menampilkan hasil pilihan
    echo "Anda memilih buah: " . $selectedBuah . "<br>";

    // Menampilkan warna favorit yang dipilih, jika ada
    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }

    // Menampilkan jenis kelamin yang dipilih
    echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
}
?>