<?php
$file = fopen("test1.txt","r"); // Membuka berkas [cite: 325]

// Mengulang selama belum mencapai akhir berkas [cite: 326]
while(! feof($file))
{
    echo fgets($file). "<br />"; // Menampilkan baris dengan ganti baris HTML [cite: 328]
}

fclose($file); // Menutup berkas [cite: 330]
?>