<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form method="post" action="proses_validasi.php"> // Formulir dengan metode POST dan aksi ke proses_validasi.php
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama"> // Input untuk nama
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"> // Input untuk email 
        <br>

        <input type="submit" value="Submit"> // Tombol submit untuk mengirimkan formulir 
    </form>
</body>
</html> -->

<!-- Soal 7.2
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> // Memuat jQuery
</head>

<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" action="proses_validasi.php" method="post"> // Formulir dengan id "myForm" dan aksi ke "proses_validasi.php" dengan metode POST 
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"> // Input untuk nama 
        <span id="nama-error" style="color: red;"></span><br> // Penanda kesalahan untuk nama
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"> // Input untuk email
        <span id="email-error" style="color: red;"></span><br> // Penanda kesalahan untuk email
        <br>

        <input type="submit" value="Submit"> // Tombol submit untuk mengirimkan formulir 
    </form>

    // Script jQuery
    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) { // Menangani event submit formulir
                var nama = $("#nama").val(); // Mengambil nilai input nama
                var email = $("#email").val(); // Mengambil nilai input email
                var valid = true; // Variabel untuk menandai apakah formulir valid

                if (nama == "") { // Jika input nama kosong
                    $("#nama-error").text("Nama harus diisi!"); // Menampilkan pesan kesalahan untuk nama
                    valid = false; // Menandai formulir tidak valid
                } else {
                    $("#nama-error").text(""); // Menghapus pesan kesalahan untuk nama jika sudah diisi
                }
                if (email === "") { // Jika input email kosong
                    $("#email-error").text("Email harus diisi!"); // Menampilkan pesan kesalahan untuk email
                    valid = false; // Menandai formulir tidak valid
                } else {
                    $("#email-error").text(""); // Menghapus pesan kesalahan untuk email jika sudah diisi
                }

                if (!valid) { // Jika formulir tidak valid
                    event.preventDefault(); // Mencegah pengiriman formulir
                }
            })
        })
    </script>
</body>
</html> -->

<!-- Soal 7.3 -->
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" action="proses_validasi.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        <br>

        <input type="submit" value="Submit">
    </form>
    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) {
                event.preventDefault();

                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                if (nama == "") {
                    $("#nama-error").text("Nama harus diisi!");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }
                if (email === "") {
                    $("#email-error").text("Email harus diisi!");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (!valid) {
                    event.preventDefault();
                } else {
                    $.ajax({
                        url: 'proses_validasi.php',
                        type: 'POST',
                        data: $("#myForm").serialize(),
                        success: function (response) {
                            alert("Response from server: " + response);
                        }
                    })
                }
            })
        })
    </script>
</body>
</html> -->

<!-- Soal 7.4 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" action="proses_validasi.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>
        <br>

        <input type="submit" value="Submit">
    </form>
    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) {
                event.preventDefault();

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val(); // Mendapatkan nilai password
                var valid = true;

                if (nama == "") {
                    $("#nama-error").text("Nama harus diisi!");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }
                if (email === "") {
                    $("#email-error").text("Email harus diisi!");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }
                if (password.length < 8) { // Validasi panjang password
                    $("#password-error").text("Password harus memiliki minimal 8 karakter!");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                if (!valid) {
                    event.preventDefault();
                } else {
                    $.ajax({
                        url: 'proses_validasi.php',
                        type: 'POST',
                        data: $("#myForm").serialize(),
                        success: function (response) {
                            alert("Response from server: " + response);
                        }
                    })
                }
            })
        })
    </script>
</body>
</html>