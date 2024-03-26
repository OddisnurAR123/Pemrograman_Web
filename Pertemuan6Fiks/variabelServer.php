<?php
// SOAL 21
// echo json_encode($_SERVER); // Baris ini digunakan untuk menampilkan seluruh informasi dari array $_SERVER dalam format JSON.

// Menampilkan nilai dari beberapa kunci tertentu dalam array $_SERVER
// SOAL 22
echo $_SERVER['PHP_SELF']; // Menampilkan nama file script yang sedang dieksekusi.
echo "<br>";
echo $_SERVER['SERVER_NAME']; // Menampilkan nama server host yang menjalankan skrip PHP.
echo "<br>";
echo $_SERVER['HTTP_HOST']; // Menampilkan host header yang dikirimkan oleh klien dalam permintaan HTTP.
echo "<br>";
echo $_SERVER['HTTP_REFERER']; // Menampilkan URL dari halaman web yang mengarahkan pengguna ke halaman saat ini.
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT']; // Menampilkan string identifikasi agen pengguna dari browser yang sedang digunakan.
echo "<br>";
echo $_SERVER['SCRIPT_NAME']; // Menampilkan jalur relatif dari skrip yang sedang dieksekusi.
echo "<br>";
?>