<html>
<head>
    <title>contoh Penggunaan IF</title>
</head>
<body>
<form>
    Besar Pembelian : 
    <input type=text name=total_beli><br><br>
    <input type=submit value="Tentukan Diskon">
</form>

<?php
if (isset($total_beli)) { 
    $total_beli = intval($total_beli); [cite: 22]
    $diskon = 0; [cite: 23]

    if ($total_beli >= 200000) {
        $diskon = 0.1; [cite: 25, 26]
    } else if ($total_beli >= 100000) {
        $diskon = 0.05; [cite: 27, 28]
    } else {
        $diskon = 0.01; [cite: 29, 30]
    }

    $diskon = $diskon * intval($total_beli); [cite: 31]
    printf("Diskon = %s <br>\n", $diskon); [cite: 32]
    printf("Pembayaran = %s <br>\n", $total_beli - $diskon); [cite: 33]
}
?>
</body>
</html>