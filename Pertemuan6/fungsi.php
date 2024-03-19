<?php

// Soal 4
/*function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Oddis Nur Alifahur Razaaq<br/>"; //Tulis sesuai nama kalian
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan();
//mencetak sebanyak 2 kalu
echo "<br>"; // Disini saya membuat <br> agar memberikan 1 garis baru
perkenalan();*/

// Soal 5 Fungsi dengan Parameter
// Supaya intruksi yang di dalam fungsi lebih dinamis, dapat menggunakan parameter untuk
//memasukkan sebuah nilai ke dalam fungsi. Nilai tersebut akan diolah di dalam fungsi.
//membuat fungsi
/*function perkenalan($nama, $salam){
    echo $salam." , ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Oddis Nur Alifathur Razaaq","Hallo");

echo "<hr>";

$saya = "Oddis Nur Alifathur Razaaq";
$ucapanSalam = "Selamat Pagi";

//memanggil lagi
perkenalan($saya,$ucapanSalam);*/

// Soal 6 Parameter dengan Nilai Default
// Nilai default berfungsi untuk mengisi nilai sebuah parameter,
//kalau parameter tersebut tidak diisi nilainya. Misalnya: lupa mengisi parameter salam, maka program akan error.
//Oleh karena itu, perlu memberikan nilai default supaya tidak error.
//membuat fungsi
/*function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Oddis Nur Alifathur Razaaq","Hallo");

echo "<hr>";

$saya = "Oddis Nur Alifathur Razaaq";
$ucapanSalam = "Selamat pagi";

//memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);*/

// Soal 7 Fungsi yang Mengembalikan Nilai
//membuat fungsi
/*function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah ". hitungUmur(2004 , 2024) ."tahun"*/ //isi sesuai dengan tahun lahir kalian

// Soal 8 Memangil Fungsi di dalam fungsi
// Fungsi yang sudah di buat, dapat juga dipanggil di dalam fungsi lain.
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan ($nama, $salam="Assalamualaikum"){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2004, 2024) ." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi perkenalan
    perkenalan ("Oddis Nur Alifathur Razaaq");
?>