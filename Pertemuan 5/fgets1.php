<?php
$file = fopen("test1.txt","r"); // Membuka berkas untuk dibaca [cite: 318]
echo fgets($file);              // Membaca dan menampilkan baris pertama [cite: 319]
fclose($file);                 // Menutup berkas [cite: 320]
?>