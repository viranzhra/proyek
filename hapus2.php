<?php
// 1. buka koneksi ke database
include "koneksi.php";

// 2. ambil data ID yang akan dihapus
$id = $_GET['id'];

// 3. tampilkan konfirmasi hapus data
echo "<script>
    var yakin = confirm('Apakah Anda yakin ingin menghapus data ini?');
    if (yakin) {
        window.location = 'hapus.php?id=$id';
    } else {
        window.location = 'data_admin.php';
    }
</script>";

// 4. jika user yakin menghapus data, hapus data dari database
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // 4a. query hapus data dari database
    $query = "DELETE FROM nama_tabel WHERE id = $id";
    mysqli_query($koneksi, $query);

    // 4b. redirect ke halaman utama
    header("Location: data_admin.php");
}
?>
