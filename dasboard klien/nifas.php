<?php
include("koneksi.php");

if(isset($_POST['daftar'])) {
    $tanggal_daftar = $_POST['tanggal_daftar'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['telp'];

    $sql = "INSERT INTO ibu_nifas VALUES('','$tanggal_daftar','$nama','$tanggal_lahir','','','','','','','','$alamat','$no_hp')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Pendaftaran berhasil!');
                window.location.href = '../../proyek1/nomor antrian/nomor-antrian/index.php';
            </script> ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
<link href="../../proyek1/pemeriksaan.css" rel="stylesheet" />
    <link rel="shortcut icon" type="icon" href="../../proyek1/user/images/logo klinik.png">
    <title>Ibu Nifas</title>
</head>

<body>
    <div class="v259_40">
        <div class="v259_41">
        <div class="v259_42">
            <div class="v259_43"><span class="v259_44">Pendaftaran Pemeriksaan Ibu NIfas</span></div>
            <div class="v259_45">
                <form method="POST" action="nifas.php" id="form-pendaftaran">
                <label for="nama">Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>
                    <br><br>
                    <label for="ttl">Tanggal Daftar : </label>
                    <input type="date" id="tanggal_daftar" name="tanggal_daftar">
                    <br><br>
                    <label for="ttl">Tanggal Lahir &nbsp;&nbsp;&nbsp;: </label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir">
                    <br><br>
                    <label for="alamat">Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
                    <br><br>
                    <label for="telp">Telepon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <input type="text" id="telp" name="telp" placeholder="Masukkan nomor telepon" required>
                    <br><br>
                </form>
            </div>

        </div>
        
        <button type="submit" name="daftar" form="form-pendaftaran">Daftar</button>
        <a name="kembali" href="pm_nifas.php">Kembali</a>
    </div>
    </div>
</body>
</html>