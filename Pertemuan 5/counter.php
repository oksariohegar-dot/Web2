<html>
<head>
    <title>Contoh Counter</title>
</head>
<body>
<?php
$nama_file = "counter.dat"; // Menentukan nama berkas penyimpanan data [cite: 340]

if (file_exists($nama_file)) // Cek jika berkas sudah ada [cite: 341]
{
    $berkas = fopen($nama_file,"r"); // Buka mode baca [cite: 343]
    $pencacah = (integer)trim(fgets($berkas, 255)); // Ambil angka, konversi ke integer [cite: 344]
    $pencacah++; // Tambah hitungan pengunjung [cite: 345]
    fclose($berkas); // Tutup berkas [cite: 346]
}
else
{
    $pencacah = 1; // Jika berkas belum ada, mulai dari 1 [cite: 349]
}

// Simpan nilai pencacah terbaru ke berkas [cite: 350]
$berkas = fopen($nama_file,"w"); // Buka mode tulis (isi lama dihapus) [cite: 351]
fputs($berkas, $pencacah);       // Tulis angka terbaru [cite: 352]
fclose($berkas);                // Tutup berkas [cite: 353]

// Tampilkan ke halaman web [cite: 354]
print("Anda pengunjung ke-$pencacah <br>\n"); 
?>
</body>
</html>