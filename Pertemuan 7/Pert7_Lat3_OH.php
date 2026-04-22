<html>
<head>
    <title>Penggunaan Join</title>
</head>
<body>
<?php
$var = array('18', '11', '2010');

// Merekatkan array dengan karakter "/" [cite: 32, 35]
$tanggal = join("/", $var); 

echo "$tanggal"; // Output: 18/11/2010 [cite: 35]
?>
</body>
</html>