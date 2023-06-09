<?php
include("koneksi.php");

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM registrasi WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Username sudah ada
        $digunakan = "Username sudah digunakan!";
    } else {
        // Username belum digunakan, lakukan registrasi
        $sql = "INSERT INTO registrasi (username,email,password) VALUES ('$username','$email','$password')";
        if ($conn->query($sql) === TRUE) {
            $berhasil = "Registrasi berhasil!";
        } else {
            $error = "Terjadi kesalahan saat registrasi: " . $conn->error;
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <link rel="shortcut icon" type="icon" href="../proyek1/user/images/logo klinik.png">
    <link rel="stylesheet" href="../proyek1/user/registrasi.css">
    <script src="../proyek1/user/script.js"></script>
</head>
    <body>
        <div class="form-container">
        <form method="POST" action="register.php">
            <div class="form-group">
            <h1>REGISTRASI</h1>
            <?php if (isset($berhasil)) {
                echo "<p style='color: white;
                background-color: #4ba64bd6;
                height: 25px;
                border-radius: 3px;
                text-align: center;
                width: 200px;
                margin-left: 50px;
                font-weight: bolder;
                font-family: monospace;
                font-size: 15px;'>$berhasil</p>";
            } ?>

<?php if (isset($digunakan)) {
                echo "<p style='color: white;
                background-color: #f44336;
                /* height: 25px; */
                border-radius: 3px;
                text-align: center;
                width: 250px;
                margin-left: 25px;
                font-weight: bolder;
                font-family: monospace;
                font-size: 15px;
                padding: 3px;'>$digunakan</p>";
            } ?>

<?php if (isset($error)) {
                echo "<p style='color: white;
                background-color: #4ba64bd6;
                height: 25px;
                border-radius: 3px;
                text-align: center;
                width: 200px;
                margin-left: 50px;
                font-weight: bolder;
                font-family: monospace;
                font-size: 15px;'>$error</p>";
            } ?>
    
            <label for="username">Username: </label>
            <input type="text" id="username" placeholder="Masukkan username" name="username" required><br><br>
    
            <label for="email">Email : </label>
            <input type="text" id="email" placeholder="Masukkan email" name="email" required><br><br>
    
            <label for="password">Password : </label>
            <input type="password" id="password" placeholder="Masukkan Password" name="password" required><br>
            <div class="checkbox">
                <input type="checkbox" onclick="myFunction()">Tampilkan Password<br><br>
            </div>
            <br>
    
            <input type="submit" name="register" value="Register">
            <div class="login">
                <a name="kembali" href="../../proyek1/Landingpage.php">Kembali</a>
            </div>
            <br><br>
            <div class="register">
                Sudah punya akun? <a href="../proyek1/dasboard klien/login.php">Login</a>
            </div>
            </div>
        </div>
        </form>
        </div>
    </body>
</html>
