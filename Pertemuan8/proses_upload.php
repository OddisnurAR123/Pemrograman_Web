<?php
// // Lokasi penyimpanan file yang diunggah
// $targetDirectory = "documents/";

// // Periksa apakah direktori penyimpanan ada, jika tidak maka buat
// if (!file_exists($targetDirectory)) {
//     mkdir($targetDirectory, 0777, true); // Buat direktori baru dengan izin 0777 (read, write, execute) jika belum ada
// }

// // Periksa apakah ada file yang diunggah
// if ($_FILES['files']['name'][0]) {
//     $totalFiles = count($_FILES['files']['name']); // Hitung total file yang diunggah

//     // Loop melalui semua file yang diunggah
//     for ($i = 0; $i < $totalFiles; $i++) {
//         $fileName = $_FILES['files']['name'][$i]; // Nama file yang diunggah
//         $targetFile = $targetDirectory . $fileName; // Path lengkap untuk menyimpan file di direktori tujuan

//         // Pindahkan file yang diunggah ke direktori penyimpanan
//         if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
//             echo "File $fileName berhasil diunggah.<br>"; // Tampilkan pesan sukses jika file berhasil diunggah
//         } else {
//             echo "Gagal mengunggah file $fileName.<br>"; // Tampilkan pesan kesalahan jika file gagal diunggah
//         }
//     }
// } else {
//     echo "Tidak ada file yang diunggah."; // Tampilkan pesan jika tidak ada file yang diunggah
// }

// Soal 2.2
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "images/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true); // Buat direktori baru dengan izin 0777 (read, write, execute) jika belum ada
}

// Periksa apakah ada file gambar yang diunggah
if ($_FILES['images']['name'][0]) {
    $totalImages = count($_FILES['images']['name']); // Hitung total file gambar yang diunggah

    // Loop melalui semua file gambar yang diunggah
    for ($i = 0; $i < $totalImages; $i++) {
        $imageName = $_FILES['images']['name'][$i]; // Nama file gambar yang diunggah
        $targetImage = $targetDirectory . $imageName; // Path lengkap untuk menyimpan file gambar di direktori tujuan

        // Pindahkan file gambar yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetImage)) {
            echo "Gambar $imageName berhasil diunggah.<br>"; // Tampilkan pesan sukses jika file gambar berhasil diunggah
        } else {
            echo "Gagal mengunggah gambar $imageName.<br>"; // Tampilkan pesan kesalahan jika file gambar gagal diunggah
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah."; // Tampilkan pesan jika tidak ada gambar yang diunggah
}
?>