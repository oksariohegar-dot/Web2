<?php
/****************************************************
Halaman ini merupakan halaman logout, dimana kita menghapus session yang ada.
*****************************************************/
session_start(); // [cite: 84]

if (isset($_SESSION['login'])) { // [cite: 85]
    // Menghapus session
    unset($_SESSION['login']); // Perbaikan praktik: hapus key yang spesifik dibanding unset($_SESSION) global
    session_destroy(); // 
    
    echo "<h1>Anda sudah berhasil LOGOUT</h1>"; // [cite: 89]
    echo "<h2>Klik <a href='session1.php'>di sini</a> untuk LOGIN kembali</h2>"; // [cite: 90, 91]
    echo "<h2>Anda sekarang tidak bisa masuk ke halaman <a href='session2.php'>session2.php</a> lagi</h2>"; // [cite: 92, 93]
} else {
    // Jika user mencoba langsung ke session3.php tanpa login
    header("Location: session1.php");
    exit;
}
?>