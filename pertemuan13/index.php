<?php
// ==========================================
// KONEKSI DATABASE & PROSES LOGIKA (PHP 8)
// ==========================================
$host = "localhost";
$user = "root";
$pass = "";
$db   = "rpm_tutor";

// Menggunakan mysqli yang kompatibel dengan PHP 8.2 Anda
$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi ke Database Gagal: " . mysqli_connect_error());
}

$pesan_error = "";
$pesan_sukses = "";

// Cek apakah tombol submit telah diklik
if (isset($_POST['Submit']) && $_POST['Submit'] == "Submit") {
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama         = $_POST['nama'];
    $jurusan      = $_POST['jurusan'];
    $alamat       = $_POST['alamat'];
    $telepon      = $_POST['telepon'];

    // Validasi data jika ada yang kosong
    if (empty($id_mahasiswa) || empty($nama) || empty($alamat) || empty($telepon) || $jurusan == "-") {
        $pesan_error = "Data Harap Dilengkapi!";
    } else {
        // Cek NIM di database menggunakan mysqli
        $query_cek = "SELECT id_mahasiswa FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'";
        $hasil_cek = mysqli_query($koneksi, $query_cek);
        $cek       = mysqli_num_rows($hasil_cek);

        if ($cek > 0) {
            $pesan_error = "NIM sudah dipakai!, silahkan ganti NIM yang lain";
        } else {
            // Masukkan data ke Tabel
            $input = "INSERT INTO mahasiswa (id_mahasiswa, nama, jurusan, alamat, telepon) 
                      VALUES ('$id_mahasiswa', '$nama', '$jurusan', '$alamat', '$telepon')";
            $query_input = mysqli_query($koneksi, $input);

            if ($query_input) {
                $pesan_sukses = "Input Data Mahasiswa Berhasil";
            } else {
                $pesan_error = "Input Data Mahasiswa Gagal!, Silahkan diulangi!";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Mahasiswa | PHP 8</title>
    <style type="text/css" media="screen">
        table { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; }
        input, select { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; height: 20px; }
        .alert { padding: 10px; margin: 10px auto; border: 1px solid transparent; border-radius: 4px; font-family: Verdana; font-size: 12px; width: 740px; }
        .danger { color: #a94442; background-color: #f2dede; border-color: #ebccd1; }
        .success { color: #3c763d; background-color: #dff0d8; border-color: #d6e9c6; }
    </style>
    
    <?php if (!empty($pesan_error)): ?>
        <script>alert('<?php echo $pesan_error; ?>');</script>
    <?php endif; ?>
    <?php if (!empty($pesan_sukses)): ?>
        <script>alert('<?php echo $pesan_sukses; ?>'); window.location.href=window.location.href;</script>
    <?php endif; ?>
</head>
<body>

    <?php if (!empty($pesan_error)): ?>
        <div class="alert danger"><strong>Gagal!</strong> <?php echo $pesan_error; ?></div>
    <?php endif; ?>
    <?php if (!empty($pesan_sukses)): ?>
        <div class="alert success"><strong>Sukses!</strong> <?php echo $pesan_sukses; ?></div>
    <?php endif; ?>

    <div style="border:0; padding:10px; width:760px; height:auto; margin: 0 auto;">
        <form action="" method="POST" name="form-input-data">
            <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr height="46">
                    <td width="10%">&nbsp;</td>
                    <td width="25%">&nbsp;</td>
                    <td width="65%"><font color="orange" size="2"><b>Form Input Data Mahasiswa</b></font></td>
                </tr>
                <tr height="46">
                    <td>&nbsp;</td>
                    <td>ID Mahasiswa / NIM</td>
                    <td><input type="text" name="id_mahasiswa" size="35" maxlength="6" value="<?php echo isset($_POST['id_mahasiswa']) && empty($pesan_sukses) ? $_POST['id_mahasiswa'] : ''; ?>" required /></td>
                </tr>
                <tr height="46">
                    <td>&nbsp;</td>
                    <td>Nama</td>
                    <td><input type="text" name="nama" size="50" maxlength="30" value="<?php echo isset($_POST['nama']) && empty($pesan_sukses) ? $_POST['nama'] : ''; ?>" required /></td>
                </tr>
                <tr height="46">
                    <td>&nbsp;</td>
                    <td>Jurusan</td>
                    <td>
                        <select name="jurusan" required>
                            <option value="-">- Pilih Jurusan -</option>
                            <option value="Teknik Komputer" <?php echo (isset($_POST['jurusan']) && $_POST['jurusan'] == 'Teknik Komputer') ? 'selected' : ''; ?>>Teknik Komputer</option>
                            <option value="Teknik Informatika" <?php echo (isset($_POST['jurusan']) && $_POST['jurusan'] == 'Teknik Informatika') ? 'selected' : ''; ?>>Teknik Informatika</option>
                            <option value="Teknik Mesin" <?php echo (isset($_POST['jurusan']) && $_POST['jurusan'] == 'Teknik Mesin') ? 'selected' : ''; ?>>Teknik Mesin</option>
                            <option value="Teknik Elektro" <?php echo (isset($_POST['jurusan']) && $_POST['jurusan'] == 'Teknik Elektro') ? 'selected' : ''; ?>>Teknik Elektro</option>
                            <option value="Komputer Akuntansi" <?php echo (isset($_POST['jurusan']) && $_POST['jurusan'] == 'Komputer Akuntansi') ? 'selected' : ''; ?>>Komputer Akuntansi</option>
                        </select>
                    </td>
                </tr>
                <tr height="46">
                    <td>&nbsp;</td>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" size="50" maxlength="30" value="<?php echo isset($_POST['alamat']) && empty($pesan_sukses) ? $_POST['alamat'] : ''; ?>" required /></td>
                </tr>
                <tr height="46">
                    <td>&nbsp;</td>
                    <td>No. Telp</td>
                    <td><input type="text" name="telepon" size="20" maxlength="12" value="<?php echo isset($_POST['telepon']) && empty($pesan_sukses) ? $_POST['telepon'] : ''; ?>" required /></td>
                </tr>
                <tr height="46">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>
                        <input type="submit" name="Submit" value="Submit">
                        <input type="reset" name="reset" value="Cancel" onclick="window.location.href=window.location.href;">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>