<?php
    // Baris ini menetapkan cookie dengan nama 'user' dan nilai 'Polinema',
    // Cookie ini akan kadaluarsa dalam waktu 1 jam (3600 detik) dari sekarang,
    // Fungsi setcookie() digunakan untuk mengirim cookie ke browser.
    setcookie("user","Polinema", time()+3600);
?>