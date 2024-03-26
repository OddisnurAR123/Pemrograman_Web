<?php
// Fungsi rekursif adalah fungsi yang memanggil dirinya sendiri. Fungsi ini biasanya
//digunakan untuk menyelesaikan masalah sepeti faktorial, bilangan fibbonaci, pemrograman dinamis.
// Soal 9
/*function tampilkanHaloDunia(){
    echo "Halo dunia! <br>";
    
    tampilkanHaloDunia();
    
}
    
tampilkanHaloDunia();*/

// Untuk menampilkan angka 1 sampai 25, bisa dengan mudah menggunakan perulangan for
/*for ($i=1; $i <= 25; $i++){
    echo "Perulangan ke-{$i} <br>";
}*/

// Soal 10
// Untuk menampilkan angka 1 sampai 20 dapat menggunakan konsep fungsi rekursif
function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    //panggil diri sendiri selama indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);
?>