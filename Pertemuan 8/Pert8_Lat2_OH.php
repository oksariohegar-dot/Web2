<html>
<head>
    <title>Contoh Penggunaan UDF</title>
</head>
<body>
    <form method="POST">
        Masukkan Bilangan Pertama: <br>
        <input type="text" name="A" size="10"> <br>
        Masukkan Bilangan Kedua: <br>
        <input type="text" name="B" size="10"> <br>
        <input type="submit" name="hitung" value="hitung">
    </form>

<?php
if (isset($_POST['hitung'])) {
    // Mengambil data dari form (superglobal $_POST harus kapital)
    $A = $_POST["A"];
    $B = $_POST["B"];

    // Definisi fungsi-fungsi aritmatika
    function jumlah($A, $B) {
        return $A + $B; [cite: 111, 112]
    }

    function kurang($A, $B) {
        return $A - $B; [cite: 115, 116]
    }

    function kali($A, $B) {
        return $A * $B; [cite: 121, 122]
    }

    function bagi($A, $B) {
        // Cek agar tidak terjadi pembagian dengan nol
        return ($B != 0) ? ($A / $B) : 0; [cite: 126, 127]
    }

    echo "<br>";
    echo "Bilangan Pertama : " . $A . "<br>"; [cite: 131, 132]
    echo "Bilangan Kedua : " . $B . "<br><br>"; [cite: 134, 135]

    // Penjumlahan
    echo "Hasil Penjumlahan 2 buah bilangan <br>";
    $hasil_jumlah = jumlah($A, $B); [cite: 139]
    printf("Penjumlahan antara : %d + %d = %d", $A, $B, $hasil_jumlah); [cite: 140]
    echo "<br><br>";

    // Pengurangan
    echo "Hasil Pengurangan 2 buah bilangan <br>";
    $hasil_kurang = kurang($A, $B); [cite: 145]
    printf("Pengurangan antara : %d - %d = %d", $A, $B, $hasil_kurang); [cite: 146]
    echo "<br><br>";

    // Perkalian
    echo "Hasil Perkalian 2 buah bilangan <br>";
    $hasil_kali = kali($A, $B); [cite: 151]
    printf("Perkalian antara : %d * %d = %d", $A, $B, $hasil_kali); [cite: 152]
    echo "<br><br>";

    // Pembagian
    echo "Hasil Pembagian 2 buah bilangan <br>";
    $hasil_bagi = bagi($A, $B); [cite: 156]
    printf("Pembagian antara : %d / %d = %d", $A, $B, $hasil_bagi); [cite: 157]
    echo "<br><br>";
}
?>
</body>
</html>