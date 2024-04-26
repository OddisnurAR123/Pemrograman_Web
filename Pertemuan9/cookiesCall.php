<?php
    // Baris ini mencoba untuk menampilkan nilai dari cookie bernama 'user'.
    // Array superglobal $_COOKIE berisi semua nilai cookie yang dikirim oleh klien,
    // Jika cookie 'user' tidak diset, ini akan menghasilkan pemberitahuan "Undefined index".
    echo $_COOKIE['user'];
?>