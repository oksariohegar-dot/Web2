<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana PHP</title>
    <style>
        body { font-family: 'Arial', sans-serif; text-align: center; margin-top: 50px; }
        .label-red { color: red; font-weight: bold; font-size: 14pt; }
        .input-group { margin-bottom: 10px; }
        
        /* Gaya Tabel Hasil */
        table { 
            margin: 30px auto; 
            border-collapse: collapse; 
            width: 400px; 
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td { border: 1px solid #999; padding: 12px; }
        th { background-color: #f2f2f2; }
        .total-row { background-color: #e7f3ff; font-weight: bold; }
    </style>
</head>
<body>

    <form method="POST" action="">
        <div class="input-group">
            <span class="label-red" style="margin-right: 80px;">Nilai I</span>
            <span class="label-red">Nilai II</span>
        </div>

        <div class="input-group">
            <input type="number" name="nilai1" value="<?php echo isset($_POST['nilai1']) ? $_POST['nilai1'] : ''; ?>" required>
            
            <select name="operator">
                <option value="+" <?php if(isset($_POST['operator']) && $_POST['operator'] == '+') echo 'selected'; ?>>+</option>
                <option value="-" <?php if(isset($_POST['operator']) && $_POST['operator'] == '-') echo 'selected'; ?>>-</option>
                <option value="*" <?php if(isset($_POST['operator']) && $_POST['operator'] == '*') echo 'selected'; ?>>*</option>
                <option value="/" <?php if(isset($_POST['operator']) && $_POST['operator'] == '/') echo 'selected'; ?>>/</option>
            </select>

            <input type="number" name="nilai2" value="<?php echo isset($_POST['nilai2']) ? $_POST['nilai2'] : ''; ?>" required>
            
            <input type="submit" name="hitung" value="submit">
        </div>
    </form>

    <?php
    // Logika Perhitungan
    if (isset($_POST['hitung'])) {
        $n1 = $_POST['nilai1'];
        $n2 = $_POST['nilai2'];
        $op = $_POST['operator'];
        $hasil = 0;
        $nama_op = "";

        switch ($op) {
            case '+': 
                $hasil = $n1 + $n2; 
                $nama_op = "Penjumlahan";
                break;
            case '-': 
                $hasil = $n1 - $n2; 
                $nama_op = "Pengurangan";
                break;
            case '*': 
                $hasil = $n1 * $n2; 
                $nama_op = "Perkalian";
                break;
            case '/': 
                if ($n2 != 0) {
                    $hasil = $n1 / $n2;
                    $nama_op = "Pembagian";
                } else {
                    $hasil = "Tak Terhingga (Pembagi Nol)";
                    $nama_op = "Error";
                }
                break;
        }

        // Menampilkan Kolom Hasil
        echo "<table>";
        echo "<tr><th colspan='2'>Hasil Perhitungan</th></tr>";
        echo "<tr><td>Nilai Pertama</td><td align='center'>$n1</td></tr>";
        echo "<tr><td>Operator</td><td align='center'>$op ($nama_op)</td></tr>";
        echo "<tr><td>Nilai Kedua</td><td align='center'>$n2</td></tr>";
        echo "<tr class='total-row'><td>Total Hasil</td><td align='center' style='color: blue;'>$hasil</td></tr>";
        echo "</table>";
    }
    ?>

</body>
</html>