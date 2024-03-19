<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        /* Soal no 2 menggunakan style internal yaitu dengan CSS untuk style tabel */
        table {
            float: left;
            border-collapse: collapse;
            width: 50%;
            margin: 10px auto;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php
    // Data dosen disimpan dalam array asosiatif $Dosen
    $Dosen = [
        'Nama' => 'Elok Nur Hamdana',
        'Domisili' => 'Malang',
        'Jenis_kelamin' => 'Perempuan'
    ];
    // Menampilkan judul "Data Dosen"
    echo "<h2>Data Dosen</h2>";
    // Membuat tabel untuk menampilkan data dosen
    echo "<table>";
    // Melakukan iterasi melalui setiap elemen dalam array $Dosen
    foreach ($Dosen as $key => $value) {
        echo "<tr>"; // Membuka baris baru pada tabel
        echo "<th>$key</th>"; // Output nama kolom
        echo "<td>$value</td>"; // Output nilai dari kolom
        echo "</tr>"; // Menutup baris pada tabel
    }
    echo "</table>"; // Menutup tabel
    
    /*
    // Komentar: Kode di bawah ini adalah bagian yang akan dijelaskan pada Soal 1
    echo "Nama: {$Dosen['Nama']} <br>";
    echo "Domisili: {$Dosen['Domisili']} <br>";
    echo "Jenis Kelamin: {$Dosen['Jenis_kelamin']} <br>";
    */
    ?>
</body>
</html>