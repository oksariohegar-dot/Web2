<?php
// Melakukan koneksi ke database server (localhost, username, password)
$con = mysqli_connect("localhost", "root", "");

// Memeriksa koneksi
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Memilih database
mysqli_select_db($con, "lat_dbase");

// Menjalankan query UPDATE
$query = "UPDATE tbl_mhs SET Age = '36' WHERE FirstName = 'Karina' AND LastName = 'Suwandi'";

if (mysqli_query($con, $query)) {
    echo "Record berhasil di-update";
} else {
    echo "Error updating record: " . mysqli_error($con);
}

// Menutup koneksi
mysqli_close($con);
?>