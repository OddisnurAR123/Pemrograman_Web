<?php
// Soal 2.1
$myArray = array(); // Array kosong
if (empty($myArray) ) {
    echo "Array tidak terdefinisi atau kosong. <br>"; // menambahkan <br> agar hasil tidak menjadi 1 baris
} else {
    echo "Array terdefinisi dan tidak kosong. <br>"; // menambahkan <br> agar hasil tidak menjadi 1 baris
}

// Soal 2.2
//menambahkan kode lagi
if (empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisi atau kosong.";
} else {
    echo "Variabel terdefinisi dan tidak kosong.";
}
?>