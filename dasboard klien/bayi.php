<?php
include("koneksi.php");

if(isset($_POST['daftar'])) {
    $tanggal_daftar = $_POST['tanggal_daftar'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $ortu = $_POST['ortu'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['telp'];

    $sql = "INSERT INTO bayi_balita VALUES('','$tanggal_daftar', '$nama','$tanggal_lahir','$ortu','-','-','-','-','-','$alamat','$no_hp')";
    if ($conn->query($sql) === TRUE) {
        $berhasil = "Pendaftaran Berhasil!";
         // Redirect to antrian.php after successful registration
         echo '<script>
         alert("'.$berhasil.'");
         window.location.href = "../../proyek1/nomor antrian/nomor-antrian/index.php";
       </script>';
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
    <title>Bayi & Balita</title>
</head>

<body>
    <div class="v259_40">
    <?php if (isset($berhasil)) {
                echo "<p style='    color: #ad1e1e;
                background-color: #d6a8a875;
                height: 25px;
                border-radius: 3px;
                text-align: center;
                width: 250px;
                margin-left: 25px;
                font-weight: bolder;
                font-family: monospace;
                font-size: 15px;'>$berhasil</p>";
            } ?>
        <div class="v259_42">
            <div class="v259_43"><span class="v259_44">Pendaftaran Pemeriksaan Bayi & Balita</span></div>
            <div class="v259_45">
            <form method="POST" action="bayi.php" id="form-pendaftaran">
                    <label for="nama">Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>
                    <br><br>
                    <label for="ttl">Tanggal Daftar &nbsp;&nbsp;: </label>
                    <input type="date" id="tanggal_daftar" name="tanggal_daftar">
                    <br><br>
                    <label for="ttl">Tanggal Lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir">
                    <br><br>
                    <label for="nama">Nama Orang Tua : </label>
                    <input type="text" id="ortu" name="ortu" placeholder="Masukkan nama" required>
                    <br><br>
                    <label for="alamat">Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
                    <br><br>
                    <label for="telp">Telepon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <input type="text" id="telp" name="telp" placeholder="Masukkan nomor telepon" required>
                    <br><br>
                
            </div>
        </div>
        
        <button type="submit" name="daftar" form="form-pendaftaran">Daftar</button>
        <a name="kembali" href="pm_bayi.php">Kembali</a>
        </form>
    </div>
    </div>
</body>
</html>