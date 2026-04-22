<html>
<head>
    <title>Penggunaan In Array dengan Type Data</title>
</head>
<body>
<?php
$tipe = array('1.10', 5.0, 1.13);

// Mengecek string "5.0" dengan tipe data ketat (Strict) [cite: 51]
// Hasilnya akan FALSE karena di array adanya float 5.0, bukan string "5.0"
if (in_array('5.0', $tipe, TRUE)) {
    echo "String \"5.0\" ada di dalam array";
} else {
    echo "String \"5.0\" tidak ada di dalam array"; [cite: 52]
}

echo "<br />";

// Mengecek angka 1.13 (float)
if (in_array(1.13, $tipe, TRUE)) {
    echo "Bilangan 1.13 ada di dalam array"; [cite: 52]
} else {
    echo "Bilangan 1.13 tidak ada di dalam array";
}
?>
</body>
</html>