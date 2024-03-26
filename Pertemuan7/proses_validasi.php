<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Memeriksa apakah request yang diterima adalah POST
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"]; // Mendapatkan nilai password
    $errors = array(); // Inisialisasi array untuk menyimpan pesan kesalahan

    // validasi nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi."; // Menambahkan pesan kesalahan jika nama kosong
    }

    // validasi email
    if (empty($email)) {
        $errors[] = "Email harus diisi."; // Menambahkan pesan kesalahan jika email kosong
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid."; // Menambahkan pesan kesalahan jika email tidak valid
    }

    // validasi password
    if (empty($password)) {
        $errors[] = "Password harus diisi."; // Menambahkan pesan kesalahan jika password kosong
    } else if (strlen($password) < 8) {
        $errors[] = "Password harus memiliki minimal 8 karakter."; // Menambahkan pesan kesalahan jika password kurang dari 8 karakter
    }

    // jika ada kesalahan validasi
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>"; // Menampilkan pesan kesalahan
        }
    } else {
        // lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // misalnya, menyimpan data ke database atau mengirim email
        echo "Data berhasil dikirim: Nama = $nama, Email = $email,  Password = $password"; // Menampilkan pesan sukses
    }
}
?>