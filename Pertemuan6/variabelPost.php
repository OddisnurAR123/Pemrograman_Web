<html>
    <body>
        <!-- Form HTML untuk mengumpulkan input pengguna -->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname"> <!-- Input field untuk nama -->
            <input type="submit"> <!-- Tombol submit untuk mengirimkan form -->
        </form>
        <?php
        // Cek apakah permintaan adalah POST request
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            // Mengumpulkan nilai dari input field dengan name 'fname' menggunakan $_POST superglobal
            $name = $_POST['fname'];
            // Memeriksa apakah input field 'fname' kosong
            if (empty($name)){
                echo "Name is empty"; // Jika kosong, tampilkan pesan kesalahan
            } else{
                echo $name; // Jika tidak kosong, tampilkan nama yang diinputkan
            }
        }
        ?>
    </body>
</html>