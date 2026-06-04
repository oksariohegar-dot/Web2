<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "artikel_db";

// Lakukan koneksi dengan mysql
$connection = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$connection) {
    echo "Tidak dapat terhubung dengan database";
    exit;
}

// Pilih database
$pilih_db = mysqli_select_db($connection, $dbname);
if (!$pilih_db) {
    echo "Tidak dapat memilih database";
    exit;
}

echo "Koneksi dan pemilihan database artikel_db berhasil!";
?>