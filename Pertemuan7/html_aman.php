<!-- Soal 4.1 -->
<!-- Menambahkan script lain supaya bisa dijalankan (run) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <form method="post" action="">
        <label for="input">Input:</label>
        <input type="text" name="input" id="input" required><br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
// Memeriksa apakah input tersedia dan tidak kosong
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai input dari formulir
    $input = $_POST['input'];

    // Melakukan sanitasi input untuk mencegah serangan XSS (Cross-Site Scripting)
    $input = htmlspecialchars($input, ENT_QUOTES, 'utf-8');

    // Menampilkan pesan sukses
    echo "Input: " . $input;

    // Soal 4.2
    // Memeriksa apakah input adalah email yang valid
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Lanjutkan dengan pengolahan email yang aman
        // Disini saya melakukan sanitasi email untuk mencegah serangan XSS (Cross-Site Scripting)
            $email = htmlspecialchars($email, ENT_QUOTES, 'utf-8');
            // Menampilkan pesan sukses
            echo "Email berhasil diproses: " . $email;
    } else {
        // Tindakan untuk menangani input email yang tidak valid
        echo "Email tidak valid";
    }
}
?>