<?php
// Melakukan koneksi ke database server
$con = mysqli_connect("localhost", "root", "");

// Memeriksa koneksi
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Memilih database
mysqli_select_db($con, "lat_dbase");

// Menjalankan query DELETE
$query = "DELETE FROM tbl_mhs WHERE LastName='Prabowo'";

if (mysqli_query($con, $query)) {
    echo "Record berhasil dihapus";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}

// Menutup koneksi
mysqli_close($con);
?>