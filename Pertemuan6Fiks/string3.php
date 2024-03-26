<?php

$pesan = "Saya arek malang"; // Mendefinisikan string $pesan
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan); // Memisahkan kata-kata dalam string $pesan menjadi elemen-elemen array, dengan " " (spasi) sebagai pemisah
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn ($pesan) => strrev($pesan), $pesanPerKata); // Mengaplikasikan fungsi strrev() pada setiap elemen array $pesanPerKata untuk membalikkan urutan karakter dalam setiap kata
# gabungkan kembali menjadi array menjadi string
$pesan = implode(" ", $pesanPerKata); // Menggabungkan kembali elemen-elemen array $pesanPerKata menjadi satu string, dengan " " (spasi) sebagai penghubung antar kata

echo $pesan . "<br>"; // Mencetak hasil dari proses tersebut
?>