<?php
//Mulai session
session_start();

// Cek apakah pengguna sudah login
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: home.html");
    exit;
}

// Cek apakah form pendaftaran disubmit
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simpan informasi pendaftaran dalam session atau database
    $_SESSION['registered_users'][$username] = password_hash($password, PASSWORD_DEFAULT);

    // Set pesan sukses pendaftaran
    $success_message = "Berhasil mendaftar silahkan login, selamat datang member OddisBeauty";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Pendaftaran</title>
    <!-- Menghubungkan dengan file CSS -->
    <link rel="stylesheet" href="style.css" />
    <style>
        /* Menambahkan gaya CSS tambahan */
        form {
            width: auto;
        }

        .bungkus {
            border: 1px solid black;
            padding: 30px;
        }

        input {
            padding: 5px 0px;
        }

        .batas {
            display: flex;
            justify-content: space-between;
            gap: 30px;
        }

        .inputan {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }
    </style>
</head>

<body class="font-sans-serif" style="padding: 50px;">
    <!-- Container untuk form pendaftaran -->
    <div class="bungkus">
        <h2 align="center" style="margin-bottom: 20px;">PENDAFTARAN MEMBER</h2>
        <!-- Overlay dan popup untuk pesan sukses atau error -->
        <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9998;"></div>
        <div id="popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #fff; border: 1px solid #ccc; border-radius: 5px; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); z-index: 9999;">
            <p id="errorMessage" style="color: black; margin-bottom: 15px;"></p>
            <div style="display: flex; justify-content: center;">
                <button class="closeBtn" style="padding: 8px 20px; background-color: #333; color: #fff; border: none; cursor: pointer;">Close</button>
            </div>
        </div>

        <!-- Form pendaftaran -->
        <form method="POST" action="">
            <!-- Bagian input untuk data pengguna -->
            <div class="batas">
                <!-- Input nama -->
                <div class="inputan">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" style="width: 100%;" required>
                </div>
                <!-- Input tanggal bergabung -->
                <div class="inputan">
                    <label for="join">Tanggal bergabung</label>
                    <input type="date" style="width: 100%;" required>
                </div>
            </div>
            <!-- Bagian input untuk username dan password -->
            <div class="batas">
                <!-- Input username -->
                <div class="inputan">
                    <label for="reg_username">Email:</label>
                    <input type="text" id="reg_username" name="username" required style="width: 100%;">
                </div>
                <!-- Input password -->
                <div class="inputan">
                    <label for="reg_password">Password</label>
                    <input type="password" id="reg_password" name="password" required style="width: 100%; ">
                </div>
            </div>
            <!-- Bagian input untuk data lainnya -->
            <div class="batas">
                <!-- Input tanggal lahir -->
                <div class="inputan">
                    <label for="tanggal">Tanggal Lahir</label>
                    <input type="date" name="tanggal" id="tanggal" required style="width: 100%;">
                </div>
                <!-- Input umur -->
                <div class="inputan">
                    <label for="umur">Umur</label>
                    <input type="number" required>
                </div>
                <!-- Input tinggi -->
                <div class="inputan">
                    <label for="tinggi">Tinggi</label>
                    <input type="number" required>
                </div>
                <!-- Input berat badan -->
                <div class="inputan">
                    <label for="bb">Berat Badan</label>
                    <input type="number" required>
                </div>
                <!-- Input jenis kelamin -->
                <div class="inputan">
                    <label style="margin: 0px 0px 10px;">Jenis Kelamin:</label>
                    <div style="display: flex; gap: 10px;">
                        <!-- Radio button untuk laki-laki -->
                        <div style="display: flex; justify-items: center;">
                            <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki" style="margin: 0px 10px 0px 0px;">
                            <label for="laki-laki" style="margin: 0px;">L</label>
                        </div>
                        <!-- Radio button untuk perempuan -->
                        <div style="display: flex;">
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" style="margin: 0px 10px 0px 0px;">
                            <label for="perempuan" style="margin: 0px;">P</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Input alamat -->
            <div class="batas" style="flex-direction: column; gap: 0;">
                <label for="alamat">Alamat Lengkap</label>
                <textarea name="" id="" cols="30" rows="5" required></textarea><br>
            </div>
            <!-- Input jenis kulit -->
            <div class="batas">
                <!-- Radio button untuk jenis kulit -->
                <div class="inputan">
                    <label for="jeniskulit">Jenis Kulit</label>
                    <div style="display: flex; gap: 10px;">
                        <!-- Radio button untuk jenis kulit normal -->
                        <div style="display: flex; justify-items: center;">
                            <input type="radio" id="normal" name="jenis_kulit" value="laki-laki" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Normal</label>
                        </div>
                        <!-- Radio button untuk jenis kulit kering -->
                        <div style="display: flex;">
                            <input type="radio" id="kering" name="jenis_kulit" value="perempuan" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Kering</label>
                        </div>
                        <!-- Radio button untuk jenis kulit berminyak -->
                        <div style="display: flex;">
                            <input type="radio" id="berminyak" name="jenis_kulit" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Berminyak</label>
                        </div>
                        <!-- Radio button untuk jenis kulit kombinasi -->
                        <div style="display: flex;">
                            <input type="radio" id="kombinasi" name="jenis_kulit" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Kombinasi</label>
                        </div>
                        <!-- Radio button untuk jenis kulit sensitive -->
                        <div style="display: flex;">
                            <input type="radio" id="sensitive" name="jenis_kulit" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Sensitive</label>
                        </div>
                    </div>
                </div>
                <!-- Input jerawat di wajah -->
                <div class="inputan" style="width: 60%;">
                    <label>Jerawat di Wajah</label>
                    <div style="display: flex; gap: 10px;">
                        <!-- Radio button untuk jerawat ada -->
                        <div style="display: flex; justify-items: center;">
                            <input type="radio" id="ada" name="jerawat" value="ada" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Ada</label>
                        </div>
                        <!-- Radio button untuk tidak ada jerawat -->
                        <div style="display: flex;">
                            <input type="radio" id="tidakada" name="jerawat" value="tidak_ada" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Tidak Ada</label>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Input jerawat ada di -->
            <div class="batas">
                <div class="inputan">
                    <label for="jerawatada">Jerawat Ada Di</label>
                    <input type="text">
                </div>
                <!-- Input derajat keparahan -->
                <div class="inputan" style="width: 60%;">
                    <label for="jeniskulit" style="margin: 0px 0px 10px;">Derajat Keparahan</label>
                    <div style="display: flex; gap: 10px;">
                        <!-- Radio button untuk derajat keparahan normal -->
                        <div style="display: flex; justify-items: center;">
                            <input type="radio" id="normal" name="derajat_keparahan1" value="laki-laki" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Normal</label>
                        </div>
                        <!-- Radio button untuk derajat keparahan kering -->
                        <div style="display: flex;">
                            <input type="radio" id="kering" name="derajat_keparahan1" value="perempuan" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Kering</label>
                        </div>
                        <!-- Radio button untuk derajat keparahan berminyak -->
                        <div style="display: flex;">
                            <input type="radio" id="berminyak" name="derajat_keparahan1" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Berminyak</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Input cacat bekas jerawat -->
            <div class="batas">
                <div class="inputan">
                    <label>Cacat Bekas Jerawat</label>
                    <div style="display: flex; gap: 10px;">
                        <!-- Radio button untuk cacat bekas jerawat ada -->
                        <div style="display: flex; justify-items: center;">
                            <input type="radio" id="ada" name="bekas" value="ada" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Ada</label>
                        </div>
                        <!-- Radio button untuk tidak ada cacat bekas jerawat -->
                        <div style="display: flex;">
                            <input type="radio" id="tidakada" name="bekas" value="tidak_ada" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Tidak Ada</label>
                        </div>
                    </div>
                </div>
                <!-- Input derajat keparahan -->
                <div class="inputan" style="width: 60%;">
                    <label for="jeniskulit" style="margin: 0px 0px 10px;">Derajat Keparahan</label>
                    <div style="display: flex; gap: 10px;">
                        <!-- Radio button untuk derajat keparahan normal -->
                        <div style="display: flex; justify-items: center;">
                            <input type="radio" id="normal" name="derajat_keparahan2" value="laki-laki" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Normal</label>
                        </div>
                        <!-- Radio button untuk derajat keparahan kering -->
                        <div style="display: flex;">
                            <input type="radio" id="kering" name="derajat_keparahan2" value="perempuan" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Kering</label>
                        </div>
                        <!-- Radio button untuk derajat keparahan berminyak -->
                        <div style="display: flex;">
                            <input type="radio" id="berminyak" name="derajat_keparahan2" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Berminyak</label>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Input flex hitam/coklat -->
            <div class="batas">
                <div class="inputan">
                    <label>Flex Hitam / Coklat</label>
                    <div style="display: flex; gap: 10px;">
                        <!-- Radio button untuk flex ada -->
                        <div style="display: flex; justify-items: center;">
                            <input type="radio" id="ada" name="flex" value="ada" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Ada</label>
                        </div>
                        <!-- Radio button untuk flex tidak ada -->
                        <div style="display: flex;">
                            <input type="radio" id="tidakada" name="flex" value="tidak_ada" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Tidak Ada</label>
                        </div>
                    </div>
                </div>
                <!-- Input derajat keparahan -->
                <div class="inputan" style="width: 60%;">
                    <label for="jeniskulit" style="margin: 0px 0px 10px;">Derajat Keparahan</label>
                    <div style="display: flex; gap: 10px;">
                        <!-- Radio button untuk derajat keparahan normal -->
                        <div style="display: flex; justify-items: center;">
                            <input type="radio" id="normal" name="derajat_keparahan3" value="laki-laki" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Normal</label>
                        </div>
                        <!-- Radio button untuk derajat keparahan kering -->
                        <div style="display: flex;">
                            <input type="radio" id="kering" name="derajat_keparahan3" value="perempuan" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Kering</label>
                        </div>
                        <!-- Radio button untuk derajat keparahan berminyak -->
                        <div style="display: flex;">
                            <input type="radio" id="berminyak" name="derajat_keparahan3" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Berminyak</label>
                        </div>
                    </div>
                </div>
            </div><br>
            <!-- Input flex ada di -->
            <div class="batas">
                <div class="inputan">
                    <label for="flexada">Flex Ada Di</label>
                    <input type="text">
                </div>
                <!-- Input keriput -->
                <div class="inputan" style="width: 59%;">
                    <label style="margin: 0px 0px 10px;">Keriput</label>
                    <div style="display: flex; gap: 10px;">
                        <!-- Radio button untuk keriput ada -->
                        <div style="display: flex; justify-items: center;">
                            <input type="radio" id="ada" name="keriput" value="ada" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Ada</label>
                        </div>
                        <!-- Radio button untuk tidak ada keriput -->
                        <div style="display: flex;">
                            <input type="radio" id="tidakada" name="keriput" value="tidak_ada" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Tidak Ada</label>
                        </div>
                    </div>
                </div>
                <!-- Input keriput ada di -->
                <div class="inputan">
                    <label for="flexada">Keriput Ada Di</label>
                    <input type="text">
                </div>
            </div><br>
            <!-- Input untuk menentukan apakah pengguna menggunakan kontrasepsi atau tidak -->
            <div class="batas">
                <div class="inputan">
                    <label style="margin: 0px 0px 10px;">Menggunakan Kontrasepsi</label>
                    <div style="display: flex; gap: 10px;">
                        <!-- Pilihan "Ya" -->
                        <div style="display: flex; justify-items: center;">
                            <input type="radio" id="ada" name="Kontrasepsi" value="ada" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Ya</label>
                        </div>
                        <!-- Pilihan "Tidak" -->
                        <div style="display: flex;">
                            <input type="radio" id="tidakada" name="Kontrasepsi" value="tidak_ada" style="margin: 0px 10px 0px 0px;">
                            <label for="" style="margin: 0px;">Tidak</label>
                        </div>
                    </div>
                </div>
                <!-- Input untuk jenis kontrasepsi yang digunakan jika pengguna menjawab "Ya" -->
                <div class="inputan" style="width: 59%;">
                    <label for="flexada">Jenis Kontrasepsi</label>
                    <input type="text">
                </div>
                <div class="inputan">
                    <label for="flexada">Produk Perawatan Terakhir yang Dipakai</label>
                    <input type="text" required>
                </div>
            </div><br>
            <!-- Input untuk memasukkan keluhan yang dialami oleh pengguna -->
            <div class="batas">
                <div class="inputan">
                    <label for="flexada" required>Keluhan Pasien</label>
                    <input type="text">
                </div>
                <!-- Input untuk memasukkan riwayat penyakit yang pernah diderita oleh pengguna -->
                <div class="inputan">
                    <label for="flexada" required>Riwayat Penyakit Yang Pernah Diderita Pasien</label>
                    <input type="text">
                </div>
            </div><br>


            <!-- Tombol untuk mengirimkan formulir pendaftaran -->
            <input type="submit" name="register" value="Daftar" style="width: 100%; padding: 10px; background-color: black; color: white;">
        </form>
        <!-- Tautan untuk menuju halaman login jika pengguna sudah memiliki akun -->
        <p align="center">Sudah memiliki akun? <a style="color: blue; font-size: medium; " href="login.php">Login di sini</a></p>
    </div>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Script JavaScript untuk menampilkan pesan sukses dan mengarahkan pengguna setelah pendaftaran -->
    <script>
        $(document).ready(function() {
            // Jika ada pesan sukses pendaftaran, tampilkan pesan dan overlay
            <?php if (isset($success_message)) { ?>
                $("#errorMessage").text("<?php echo $success_message; ?>");
                $("#overlay, #popup").show();
            <?php } ?>
            
            // Ketika tombol close atau closeBtn di klik, sembunyikan overlay dan popup, lalu arahkan ke halaman login
            $(".close, .closeBtn").click(function() {
                $("#overlay, #popup").hide();
                window.location.href = "login.php";
            });
        });
    </script>
</body>

</html>