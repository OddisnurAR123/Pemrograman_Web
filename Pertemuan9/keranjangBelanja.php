<html>

<head>
    <!-- Bagian head digunakan untuk menambahkan metadata dan link ke stylesheet CSS -->
</head>

<body>
    <!-- Judul halaman -->
    <h2>Keranjang Belanja</h2>

    <?php
    // Ambil nilai jumlah novel dan buku dari cookie
    $beliNovel = $_COOKIE['beliNovel'];
    $beliBuku = $_COOKIE['beliBuku'];

    // Tampilkan jumlah novel dan buku yang dibeli
    echo "Jumlah Novel: " . $beliNovel . "<br>";
    echo "Jumlah Buku: " . $beliBuku;
    ?>
</body>

</html>
