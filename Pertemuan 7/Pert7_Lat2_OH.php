<html>
<head>
    <title>Penggunaan List</title>
</head>
<body>
<?php
$program = array('Bobo', 'Doraemon', 'Spiderman');

// Mengambil komponen array menjadi variabel terpisah [cite: 17, 21]
list($Majalah, $Komik, $Film) = $program;

echo "Jenis Buku & Hiburan :";
echo "<br />";
echo "Cerpen : $Majalah"; // Bobo [cite: 22]
echo "<br />";
echo "Cerita Bergambar : $Komik"; // Doraemon [cite: 22]
echo "<br />";
echo "Bioskop : $Film"; // Spiderman [cite: 22]
?>
</body>
</html>