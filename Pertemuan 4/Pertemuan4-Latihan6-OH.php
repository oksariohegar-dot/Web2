<html>
<head>
    <title>Tabel Perkalian</title>
</head>
<body>
Tabel Perkalian<br>
====================<br>
<?php
$n = 12;
for ($bil = 15; $bil <= 45; $bil += 2) {
    $hasil = $n * $bil;
    echo "$n * $bil = $hasil <br>\n";
}
?>
</body>
</html>