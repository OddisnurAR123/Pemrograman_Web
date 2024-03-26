<html>
    <head></head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
        $Listdosen=["Elok Nur Hamdana","Unggul Pamenang","Bagas Nugraha"];

        // echo $Listdosen[2]."<br>";
        // echo $Listdosen[0]."<br>";
        // echo $Listdosen[1]."<br>";

        // Soal 1
        // foreach loop digunakan untuk mengakses setiap elemen dalam array $Listdosen
        foreach ($Listdosen as $dosen) {
            // Setiap elemen disimpan dalam variabel $dosen dan ditampilkan
            // diikuti oleh tag <br> untuk membuat baris baru setelah setiap nama
            echo $dosen . "<br>";
        }
        ?>
    </body>
</html>