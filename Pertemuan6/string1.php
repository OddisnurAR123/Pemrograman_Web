<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Voluptatem reprehenderit nobis veritatis commodi fugiat moletias
    impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum
    quisquam? Quos impedit eum nulla optio.";

// Menampilkan teks $loremIpsum di dalam tag <p>
echo "<p>{$loremIpsum}</p>";

// Menampilkan panjang karakter dari teks $loremIpsum
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";

// Menampilkan jumlah kata dalam teks $loremIpsum
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";

// Menampilkan teks $loremIpsum dalam huruf besar
echo "<p>" . strtoupper($loremIpsum) . "</p>";

// Menampilkan teks $loremIpsum dalam huruf kecil
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>