<!DOCTYPE html>
<html>

<head>
    <title>Login Admin</title>
    <link rel="shortcut icon" type="icon" href="../proyek1/user/images/logo klinik.png">
    <link rel="stylesheet" href="../proyek1/user/login.css">
    <script src="../proyek1/user/script.js"></script>
</head>

    <body>
    
        <div class="form-container">
            <form method="POST" action="admin.php">
            <div class="form-group">
            <h1>Login Admin</h1>
    
            <label for="username">Username: </label>
            <input type="text" id="username" placeholder="Masukkan username" name="username" required><br><br>
    
            <label for="password">Password : </label>
    
            <input type="password" id="password" placeholder="Masukkan Password" name="password" required><br>
            <div class="checkbox">
                <input type="checkbox" onclick="myFunction()">Tampilkan Password<br><br>
            </div>
            <br><br>
    
            <button type="submit" name="submit">Login</button>
            <a name="kembali" href="Landing page.html">Kembali</a>

            <br><br>
            
            </div>
    
        </form>
        </div>

<?php
session_start();

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "manajemen");

// Cek apakah form login sudah disubmit
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari data pengguna dengan username dan password tertentu
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Cek apakah data ditemukan
    if(mysqli_num_rows($result) == 1) {
        // Data ditemukan, simpan informasi pengguna ke dalam session
        $data = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $data['username'];

        // Redirect ke halaman dashboard atau halaman yang diinginkan
        header("Location: dasboard.php");
        exit();
    } else {
        // Data tidak ditemukan, tampilkan pesan kesalahan
        echo "<script>
                alert('Username atau Password anda Salah!')
            </script> ";
    }
}
?>
    </body>
</html>
