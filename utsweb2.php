<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Mahasiswa Baru - UNPAM</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
        .header { text-align: center; margin-bottom: 30px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; font-size: 12px; }
        table, th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        .form-container { border: 1px solid #ccc; padding: 20px; border-radius: 5px; max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 10px; }
        label { display: inline-block; width: 150px; }
        .summary { margin-top: 20px; font-weight: bold; }
    </style>
</head>
<body>

<div class="header">
    <h2>PENDAFTARAN MAHASISWA BARU</h2>
    <h3>UNIVERSITAS PAMULANG</h3>
</div>

<div class="form-container">
    <form method="POST" action="">
        <div class="form-group">
            <label>Jumlah Input Data:</label>
            <input type="number" name="jumlah_data" min="1" required>
            <button type="submit" name="set_jumlah">Set</button>
        </div>
    </form>

    <?php
    if (isset($_POST['set_jumlah']) || isset($_POST['proses'])):
        $n = $_POST['jumlah_data'] ?? 0;
    ?>
    <hr>
    <form method="POST" action="">
        <input type="hidden" name="jumlah_data" value="<?= $n ?>">
        <?php for ($i = 1; $i <= $n; $i++): ?>
            <h4>Data Ke-<?= $i ?></h4>
            <div class="form-group">
                <label>Kode Pendaftaran:</label>
                <input type="text" name="kode[]" placeholder="Contoh: A2-101-9" required>
            </div>
            <div class="form-group">
                <label>Nama Pendaftar:</label>
                <input type="text" name="nama[]" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <input type="radio" name="jk[<?= $i-1 ?>]" value="Laki-laki" required> Laki-laki
                <input type="radio" name="jk[<?= $i-1 ?>]" value="Perempuan"> Perempuan
            </div>
            <div class="form-group">
                <label>TTL:</label>
                <input type="text" name="tempat_lahir[]" placeholder="Tempat" required>
                <input type="date" name="tgl_lahir[]" required>
            </div>
            <div class="form-group">
                <label>Pekerjaan Ortu:</label>
                <input type="text" name="ortu[]" required>
            </div>
            <div class="form-group">
                <label>Nilai (MAT, INGG, UMUM):</label>
                <input type="number" name="mat[]" placeholder="MAT" style="width:50px" required>
                <input type="number" name="ingg[]" placeholder="INGG" style="width:50px" required>
                <input type="number" name="umum[]" placeholder="UMUM" style="width:50px" required>
            </div>
            <hr>
        <?php endfor; ?>
        <button type="submit" name="proses">SIMPAN DATA</button>
        <button type="reset">RESET</button>
    </form>
    <?php endif; ?>
</div>

<?php
if (isset($_POST['proses'])):
    $kodes = $_POST['kode'];
    $namas = $_POST['nama'];
    $jks = $_POST['jk'];
    $tmpts = $_POST['tempat_lahir'];
    $tgls = $_POST['tgl_lahir'];
    $ortus = $_POST['ortu'];
    $mats = $_POST['mat'];
    $inggs = $_POST['ingg'];
    $umums = $_POST['umum'];

    $total_lulus = 0;
    $total_tidak_lulus = 0;
?>

<table>
    <thead>
        <tr>
            <th>Kode Pendaftaran</th>
            <th>Nama Pendaftar</th>
            <th>Tmp, Tgl Lahir</th>
            <th>JK</th>
            <th>Pek. Ortu</th>
            <th>Tempat Tes</th>
            <th>MAT</th>
            <th>INGG</th>
            <th>UMUM</th>
            <th>RATA-RATA</th>
            <th>KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kodes as $key => $kd): 
            // Logika Tempat Tes (Karakter ke-1)
            $huruf_awal = strtoupper(substr($kd, 0, 1));
            $tempat_tes = "Tidak Diketahui";
            if ($huruf_awal == 'A') $tempat_tes = "Gedung A";
            elseif ($huruf_awal == 'B') $tempat_tes = "Gedung B";
            elseif ($huruf_awal == 'V') $tempat_tes = "Viktor";

            // Logika Rata-rata dan Kelulusan
            $rerata = ($mats[$key] + $inggs[$key] + $umums[$key]) / 3;
            
            if ($rerata >= 70) {
                $ket = "Lulus";
                $total_lulus++;
            } elseif ($rerata >= 60) {
                $ket = "Cadangan";
            } else {
                $ket = "Tidak Lulus";
                $total_tidak_lulus++;
            }
        ?>
        <tr>
            <td><?= htmlspecialchars($kd) ?></td>
            <td><?= htmlspecialchars($namas[$key]) ?></td>
            <td><?= htmlspecialchars($tmpts[$key]) . ", " . $tgls[$key] ?></td>
            <td><?= $jks[$key] ?></td>
            <td><?= htmlspecialchars($ortus[$key]) ?></td>
            <td><?= $tempat_tes ?></td>
            <td><?= $mats[$key] ?></td>
            <td><?= $inggs[$key] ?></td>
            <td><?= $umums[$key] ?></td>
            <td><?= number_format($rerata, 2) ?></td>
            <td><?= $ket ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div class="summary">
    JUMLAH PENDAFTAR: <?= count($kodes) ?><br>
    JUMLAH PESERTA LULUS: <?= $total_lulus ?><br>
    JUMLAH TIDAK PESERTA LULUS: <?= $total_tidak_lulus ?>
</div>

<?php endif; ?>

</body>
</html>