<?php
// if (isset($_POST["submit"])) {
//     $targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan file
//     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    
//     // if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
//     //     echo "File berhasil diunggah.";
//     // } else {
//     //     echo "Gagal mengunggah file.";
//     // }

//     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    
//     $maxFileSize = 5 * 1024 * 1024;
    
//     if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
//         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
//             echo "File berhasil diunggah.";
//         } else {
//             echo "Gagal mengunggah file.";
//         } }
//     else {
//         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
//     }
// }

// Soal 1.3
// if (isset($_POST["submit"])) { // Memeriksa apakah tombol submit telah ditekan
//     $targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan file
//     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]); // Membentuk path lengkap untuk file yang akan diunggah
//     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Mendapatkan ekstensi file yang diunggah

//     $allowedExtensions = array("jpg", "jpeg", "png", "gif"); // Ekstensi file yang diizinkan untuk diunggah
    
//     $maxFileSize = 5 * 1024 * 1024; // Ukuran maksimum file (dalam bytes)
    
//     // Memeriksa apakah ekstensi file dan ukuran file memenuhi syarat
//     if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
//         // Memindahkan file yang diunggah ke direktori tujuan
//         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
//             echo "File berhasil diunggah."; // Menampilkan pesan sukses jika file berhasil diunggah
            
//             // Menampilkan gambar thumbnail dengan lebar 200 piksel
//             echo '<br><img src="' . $targetFile . '" width="200" alt="thumbnail">';
//         } else {
//             echo "Gagal mengunggah file."; // Menampilkan pesan kesalahan jika file gagal diunggah
//         }
//     } else {
//         // Menampilkan pesan kesalahan jika file tidak valid atau melebihi ukuran maksimum yang diizinkan
//         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
//     }
// }

// Soal 1.4
// Memeriksa apakah tombol submit telah ditekan
if (isset($_POST["submit"])) {
    $targetDirectory = "documents/"; // Direktori tujuan untuk menyimpan dokumen
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]); // Membentuk path lengkap untuk dokumen yang akan diunggah
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Mendapatkan ekstensi dokumen

    $allowedExtensions = array("txt", "pdf", "doc", "docx"); // Ekstensi dokumen yang diizinkan untuk diunggah

    $maxFileSize = 10 * 1024 * 1024; // Ukuran maksimum dokumen (10 MB)

    // Memeriksa apakah ekstensi dokumen dan ukuran dokumen memenuhi syarat
    if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
        // Memindahkan dokumen yang diunggah ke direktori tujuan
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah."; // Menampilkan pesan sukses jika dokumen berhasil diunggah
        } else {
            echo "Gagal mengunggah dokumen."; // Menampilkan pesan kesalahan jika dokumen gagal diunggah
        }
    } else {
        // Menampilkan pesan kesalahan jika jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>