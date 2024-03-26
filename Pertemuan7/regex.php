<?php
$pattern1 = '/[a-z]/'; // Cocokkan huruf kecil.
$text1 = 'This is a Sample Text. '; // String input yang akan diperiksa.
if (preg_match($pattern1, $text1)) {
    echo "Huruf kecil ditemukan!<br>"; // Pesan yang akan ditampilkan jika ada huruf kecil dalam teks.
} else {
    echo "Tidak ada huruf kecil!<br>"; // Pesan yang akan ditampilkan jika tidak ada huruf kecil dalam teks.
}

// Soal 5.2
$pattern2 = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text2 = 'There are 123 apples.'; // String input yang akan diperiksa.
if (preg_match($pattern2, $text2, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>" ; // Pesan yang akan ditampilkan jika ada kecocokan, dengan menampilkan digit yang cocok.
} else {
    echo "Tidak ada yang cocok!<br>"; // Pesan yang akan ditampilkan jika tidak ada kecocokan dengan pola yang diberikan.
}

// Soal 5.3
$pattern = '/apple/'; // Pola regex yang akan diganti.
$replacement = 'banana'; // Teks pengganti.
$text = 'I Like apple pie.'; // Teks input.
$new_text = preg_replace($pattern, $replacement, $text); // Mengganti teks yang cocok dengan pola regex.
echo $new_text . "<br>"; // Menampilkan teks hasil penggantian. Output: "I Like banana pie."

// Soal 5.4
$pattern = '/go*d/'; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good.'; // String input yang akan diperiksa.
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>"; // Pesan yang akan ditampilkan jika ada kecocokan, dengan menampilkan teks yang cocok.
} else {
    echo "Tidak ada yang cocok! <br>"; // Pesan yang akan ditampilkan jika tidak ada kecocokan dengan pola yang diberikan.
}

// Soal 5.5
$pattern = '/go?d/'; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good.'; // String input yang akan diperiksa.
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>"; // Pesan yang akan ditampilkan jika ada kecocokan, dengan menampilkan teks yang cocok.
} else {
    echo "Tidak ada yang cocok!"; // Pesan yang akan ditampilkan jika tidak ada kecocokan dengan pola yang diberikan.
}

// Soal 5.6
$pattern = '/go{2,2}d/'; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good.'; // String input yang akan diperiksa.
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0]; // Pesan yang akan ditampilkan jika ada kecocokan, dengan menampilkan teks yang cocok.
} else {
    echo "Tidak ada yang cocok!"; // Pesan yang akan ditampilkan jika tidak ada kecocokan dengan pola yang diberikan.
}

?>