<?php
$value = 'rahadian';
$value2 = 'rahadi ramelan';

// Membuat cookie 'username' tanpa waktu kedaluwarsa spesifik
setcookie("username", $value);

// Membuat cookie 'namalengkap' yang akan kedaluwarsa dalam 1 jam (3600 detik)
setcookie("namalengkap", $value2, time()+3600);

echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='cookie2.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>