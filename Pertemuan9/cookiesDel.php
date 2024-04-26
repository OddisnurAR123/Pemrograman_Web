<?php
// Baris ini menghapus cookie dengan nama 'user' dengan mengatur waktu kadaluarsa ke masa lalu,
    // Fungsi setcookie() digunakan untuk mengirim perintah penghapusan cookie ke browser,
    // Waktu kadaluarsa diatur ke waktu saat ini dikurangi 3600 detik (1 jam yang lalu).
    setcookie("user","Polinema", time() - 3600);
?>