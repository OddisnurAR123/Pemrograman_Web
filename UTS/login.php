<?php
// Mulai sesi
session_start();

// Cek apakah pengguna pernah login atau cookie pengguna terdeteksi
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Jika pengguna sudah login, redirect ke halaman home.html
    header("Location: home.html");
    exit;
} elseif (isset($_COOKIE['username'])) {
    // Jika cookie username terdeteksi, tandai pengguna sebagai logged in dan redirect ke home.html
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $_COOKIE['username'];
    header("Location: home.html");
    exit;
}

// Cek apakah form login disubmit
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username ada dalam daftar pengguna terdaftar dalam session
    if (isset($_SESSION['registered_users'][$username])) {
        // Verifikasi password
        if (password_verify($password, $_SESSION['registered_users'][$username])) {
            // Jika cocok, set variabel session untuk menandai pengguna telah login
            $_SESSION['logged_in'] = true;
            // Simpan username pengguna dalam session
            $_SESSION['username'] = $username;

            // Jika opsi "Ingat saya" dicentang, atur cookie
            if (isset($_POST['remember'])) {
                $expire = time() + (60 * 60 * 24 * 30); // Cookie berlaku selama 30 hari
                setcookie('username', $username, $expire, '/');
            }
            // Mengarahkan pengguna ke halaman home.html setelah login berhasil
            header("Location: home.html");
            exit;
        } else {
            // Jika password tidak cocok, berikan pesan kesalahan
            $error_message = "Username atau password salah.";
        }
    } else {
        // Jika username tidak ditemukan dalam daftar pengguna terdaftar, berikan pesan kesalahan
        $error_message = "LOGIN GAGAL, BUAT AKUN MEMBER SHOBAT";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Menghubungkan dengan file CSS -->
    <link rel="stylesheet" href="./style.css" />
    <title>Halaman Login</title>
</head>

<body class="font-sans-serif">
    <!-- Container untuk form login -->
    <div class="container-register">
        <h2 align="center" style="margin-bottom: 20px;">LOGIN MEMBER</h2>
        <!-- Overlay dan popup untuk pesan error -->
        <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9998;"></div>
        <div id="popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #fff; border: 1px solid #ccc; border-radius: 5px; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); z-index: 9999;">
            <span class="close" style="position: absolute; top: 5px; right: 10px; cursor: pointer;">&times;</span>
            <p id="errorMessage" style="color: red; margin-bottom: 15px;"></p>
            <div style="display: flex; justify-content: center;">
                <button class="closeBtn" style="padding: 8px 20px; background-color: #333; color: #fff; border: none; cursor: pointer;">Close</button>
            </div>
        </div>

        <!-- Form login -->
        <form method="POST" action="">
            <label for="username">Email:</label><br>
            <input type="text" id="username" name="username" style="width: 99%; padding: 5px 0px;"><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" style="width: 99%; padding: 5px 0px;"><br>

            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Ingat saya</label>

            <input type="submit" name="login" value="Login" style="width: 100%; padding: 10px; background-color: black; color: white;">
        </form>

        <!-- Link untuk menuju registrasi jika belum mempunyai akun -->
        <p>Belum memiliki akun? <a style="color: blue; font-size: medium; " href="register.php">Daftar di sini</a></p>
    </div>

    <!-- Menghubungkan dengan library jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Menampilkan popup error jika terdapat pesan kesalahan
            <?php if (isset($error_message)) { ?>
                $("#errorMessage").text("<?php echo $error_message; ?>");
                $("#overlay, #popup").show();
            <?php } ?>

            // Menutup overlay dan popup saat tombol close atau closeBtn ditekan
            $(".close, .closeBtn").click(function() {
                $("#overlay, #popup").hide();
            });
        });
    </script>



</body>

</html>