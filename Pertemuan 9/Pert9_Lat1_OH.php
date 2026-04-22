<html>
<head>
    <title>Tanggal</title>
</head>
<body>
    <font size="10px">
    <?php
    // date('d-F-Y') menghasilkan format: Tanggal(01-31)-NamaBulan-Tahun(4 digit) [cite: 190, 194, 240]
    echo "Sekarang tanggal ";
    echo date('d-F-Y'); 
    
    echo "<br>dan jam ";
    // date('h:i:s A') menghasilkan format: Jam(01-12):Menit:Detik AM/PM [cite: 203, 207, 227, 189]
    echo date('h:i:s A');
    ?>
    </font>
</body>
</html>