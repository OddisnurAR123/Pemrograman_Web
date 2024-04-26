<?php
// Memulai sesi PHP
session_start();
// Menghancurkan sesi, yang menghapus semua data sesi yang terkait
session_destroy();

// Menampilkan pesan kepada pengguna bahwa mereka telah berhasil logout
echo "Anda berhasil logout";
?>