<?php
// Menghapus cookie dengan mengatur tanggal kedaluwarsa ke satu jam yang lalu
setcookie("username", "", time() - 3600);
setcookie("namalengkap", "", time() - 3600);

echo "<h1>Cookie Berhasil dihapus.</h1>";
// Tautan disesuaikan ke file cookie1.php dan cookie2.php agar tidak error
echo "<h2>Klik <a href='cookie1.php'>di sini</a> untuk penciptaan cookies</h2>";
echo "<h2>Klik <a href='cookie2.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>