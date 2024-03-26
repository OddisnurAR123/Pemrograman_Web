<?php
$x = 75; // Mendefinisikan variabel $x dengan nilai 75
$y = 25; // Mendefinisikan variabel $y dengan nilai 25

function addition()
{
    // Menggunakan variabel superglobal $GLOBALS untuk mengakses variabel di luar lingkup fungsi
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; // Menambahkan nilai $x dan $y, dan menyimpan hasilnya dalam variabel $z
}
addition(); // Memanggil fungsi addition untuk menjalankan operasi penjumlahan
echo $z; // Menampilkan nilai dari variabel $z, yang merupakan hasil penjumlahan dari variabel $x dan $y
?>