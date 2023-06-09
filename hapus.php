<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "manajemen");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    .floating-message {
        position: fixed;
        z-index: 9999;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #f8f8f8;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
</style>

    <div class="floating-message">
        <p>Apakah Anda yakin ingin menghapus data admin dengan ID <?php echo $no['id']; ?> dan nama <?php echo $hasil['nama_lengkap']; ?>?</p>
        <a href="hapus.php?id=<?php echo $hasil['id']; ?>">Ya, Hapus</a> -
        <a href="hapus.php">Tidak, Batal</a>
    </div>

</body>
</html>