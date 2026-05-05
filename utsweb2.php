<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Pemrograman Web II - UNPAM</title>
    <style>
        /* CSS RESET & BASE */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; color: #333; line-height: 1.6; }
        
        .container { max-width: 1000px; margin: 0 auto; padding: 20px; }
        
        /* HEADER */
        .header { text-align: center; background-color: #1a237e; color: white; padding: 40px 20px; border-radius: 8px; margin-bottom: 30px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        .header h1 { margin-bottom: 5px; font-size: 1.8rem; letter-spacing: 1px; }
        .header p { opacity: 0.9; font-weight: 300; }

        /* CARD STYLE */
        .card { background: white; border-radius: 8px; padding: 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 25px; border-top: 5px solid #3949ab; }
        .card-title { margin-bottom: 20px; color: #1a237e; font-size: 1.2rem; border-bottom: 1px solid #eee; padding-bottom: 10px; }

        /* FORM STYLING */
        .form-inline { display: flex; gap: 10px; align-items: flex-end; justify-content: center; }
        .input-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: #555; }
        input[type="text"], input[type="number"], input[type="date"], select {
            width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem; transition: border 0.3s;
        }
        input:focus { border-color: #3949ab; outline: none; box-shadow: 0 0 5px rgba(57, 73, 171, 0.2); }
        
        .grid-inputs { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; }
        
        /* BUTTONS */
        .btn { padding: 12px 25px; border: none; border-radius: 4px; cursor: pointer; font-weight: 600; transition: background 0.3s; font-size: 1rem; }
        .btn-primary { background-color: #3949ab; color: white; }
        .btn-primary:hover { background-color: #283593; }
        .btn-success { background-color: #2e7d32; color: white; width: 100%; margin-top: 10px; }
        .btn-success:hover { background-color: #1b5e20; }
        .btn-reset { background-color: #f5f5f5; color: #666; border: 1px solid #ddd; }

        /* TABLE STYLING */
        .table-responsive { overflow-x: auto; margin-top: 20px; }
        table { width: 100%; border-collapse: collapse; background: white; font-size: 0.85rem; }
        th { background-color: #3949ab; color: white; padding: 12px; text-align: center; text-transform: uppercase; }
        td { padding: 12px; border-bottom: 1px solid #eee; text-align: center; }
        tr:hover { background-color: #f8f9fa; }

        /* BADGES */
        .badge { padding: 5px 12px; border-radius: 20px; font-size: 0.75rem; font-weight: bold; color: white; }
        .bg-lulus { background-color: #2e7d32; }
        .bg-cadangan { background-color: #f9a825; }
        .bg-gagal { background-color: #c62828; }

        /* SUMMARY BOXES */
        .summary-container { display: flex; gap: 15px; margin-top: 25px; flex-wrap: wrap; }
        .summary-box { flex: 1; min-width: 150px; padding: 20px; border-radius: 8px; text-align: center; color: white; }
        .sum-total { background-color: #1565c0; }
        .sum-lulus { background-color: #2e7d32; }
        .sum-gagal { background-color: #c62828; }
        .summary-box h3 { font-size: 2rem; margin: 5px 0; }
    </style>
</head>
<body>

<div class="container">
    <header class="header">
        <h1>PENDAFTARAN MAHASISWA BARU</h1>
        <p>Teknik Informatika S-1 | Universitas Pamulang</p>
    </header>

    <!-- FORM JUMLAH DATA -->
    <div class="card">
        <form method="POST" class="form-inline">
            <div style="flex-grow: 1; max-width: 400px;">
                <label>Masukkan Jumlah Calon Mahasiswa:</label>
                <input type="number" name="jumlah_data" min="1" required placeholder="Contoh: 3">
            </div>
            <button type="submit" name="set_jumlah" class="btn btn-primary">Tampilkan Form</button>
        </form>
    </div>

    <?php if (isset($_POST['set_jumlah']) || isset($_POST['proses'])): 
        $n = $_POST['jumlah_data'] ?? 0; ?>
        
        <form method="POST">
            <input type="hidden" name="jumlah_data" value="<?= $n ?>">
            
            <?php for ($i = 1; $i <= $n; $i++): ?>
                <div class="card">
                    <div class="card-title">Data Mahasiswa Ke-<?= $i ?></div>
                    <div class="grid-inputs">
                        <div class="input-group">
                            <label>Kode Pendaftaran</label>
                            <input type="text" name="kode[]" placeholder="Misal: A2-101" required>
                        </div>
                        <div class="input-group">
                            <label>Nama Pendaftar</label>
                            <input type="text" name="nama[]" required>
                        </div>
                        <div class="input-group">
                            <label>Jenis Kelamin</label>
                            <div style="padding-top: 10px;">
                                <input type="radio" name="jk[<?= $i-1 ?>]" value="Laki-laki" checked> Laki-laki &nbsp;
                                <input type="radio" name="jk[<?= $i-1 ?>]" value="Perempuan"> Perempuan
                            </div>
                        </div>
                        <div class="input-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir[]" required>
                        </div>
                        <div class="input-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir[]" required>
                        </div>
                        <div class="input-group">
                            <label>Pekerjaan Orang Tua</label>
                            <input type="text" name="ortu[]" required>
                        </div>
                    </div>
                    <div class="grid-inputs" style="margin-top: 15px; background: #f9f9f9; padding: 15px; border-radius: 5px;">
                        <div class="input-group">
                            <label>Nilai MAT</label>
                            <input type="number" name="mat[]" min="0" max="100" required>
                        </div>
                        <div class="input-group">
                            <label>Nilai B. INGG</label>
                            <input type="number" name="ingg[]" min="0" max="100" required>
                        </div>
                        <div class="input-group">
                            <label>Nilai UMUM</label>
                            <input type="number" name="umum[]" min="0" max="100" required>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            
            <div style="display: flex; gap: 10px; margin-bottom: 50px;">
                <button type="reset" class="btn btn-reset">Kosongkan Form</button>
                <button type="submit" name="proses" class="btn btn-success" style="width: auto; flex-grow: 1;">SIMPAN & ANALISIS DATA</button>
            </div>
        </form>
    <?php endif; ?>

    <!-- HASIL ANALISIS -->
    <?php if (isset($_POST['proses'])):
        $kodes = $_POST['kode']; $namas = $_POST['nama']; $jks = $_POST['jk'];
        $tmpts = $_POST['tempat_lahir']; $tgls = $_POST['tgl_lahir'];
        $ortus = $_POST['ortu']; $mats = $_POST['mat']; 
        $inggs = $_POST['ingg']; $umums = $_POST['umum'];
        
        $total_lulus = 0; $total_gagal = 0;
    ?>
    <div class="card" style="border-top-color: #2e7d32;">
        <div class="card-title">HASIL SELEKSI PENDAFTARAN</div>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Pendaftar</th>
                        <th>JK</th>
                        <th>Lokasi Tes</th>
                        <th>Rata-rata</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kodes as $k => $kd): 
                        // Logika Lokasi Tes
                        $huruf = strtoupper(substr($kd, 0, 1));
                        $lokasi = ($huruf == 'A') ? "Gedung A" : (($huruf == 'B') ? "Gedung B" : (($huruf == 'V') ? "Viktor" : "-"));
                        
                        // Logika Nilai
                        $rata = ($mats[$k] + $inggs[$k] + $umums[$k]) / 3;
                        if ($rata >= 70) { $st = "Lulus"; $bg = "bg-lulus"; $total_lulus++; }
                        elseif ($rata >= 60) { $st = "Cadangan"; $bg = "bg-cadangan"; }
                        else { $st = "Tidak Lulus"; $bg = "bg-gagal"; $total_gagal++; }
                    ?>
                    <tr>
                        <td><strong><?= htmlspecialchars($kd) ?></strong></td>
                        <td style="text-align: left;"><?= htmlspecialchars($namas[$k]) ?></td>
                        <td><?= $jks[$k] ?></td>
                        <td><?= $lokasi ?></td>
                        <td><?= number_format($rata, 2) ?></td>
                        <td><span class="badge <?= $bg ?>"><?= $st ?></span></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="summary-container">
            <div class="summary-box sum-total">
                <p>Pendaftar</p>
                <h3><?= count($kodes) ?></h3>
            </div>
            <div class="summary-box sum-lulus">
                <p>Lulus</p>
                <h3><?= $total_lulus ?></h3>
            </div>
            <div class="summary-box sum-gagal">
                <p>Tidak Lulus</p>
                <h3><?= $total_gagal ?></h3>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>

</body>
</html>
