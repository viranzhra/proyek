<?php
include("koneksi.php");

// Delete data
if(isset($_GET['delete'])) {
    $delete_nama = $_GET['delete'];

    $sql = "DELETE FROM bayi_balita WHERE nama = '$delete_nama'";
    if ($conn->query($sql) === TRUE) {
        $berhasil = "Data berhasil dihapus!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>