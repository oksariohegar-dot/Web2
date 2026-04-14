<html>
<head>
    <title>PenggunaanSwitch - Case</title>
</head>
<body>
Hari ini :
<?php
$nama_hari = date("l"); [cite: 55]

switch ($nama_hari) {
    case "Sunday":
        print("Minggu ");
        print "Waktu untuk istirahat";
        break; [cite: 56, 58]
    case "Monday":
        print("Senin <br>");
        print "Meeting awal minggu jam 08.00";
        break; [cite: 59, 60, 61, 62]
    case "Tuesday":
        print("Selasa <br>");
        print "Pembukaan Workshop Diklat";
        break; [cite: 63, 64, 65, 66]
    case "Wednesday":
        print("Rabu <br>");
        print("Seminar Launchig Window Vista di JHCC");
        break; [cite: 67]
    case "Thursday":
        print("Kamis <br>");
        print "Pertemuan dengan Mahasiswa";
        break; [cite: 67, 68]
    case "Friday":
        print("Jum’at <br>");
        print "Jogging bersama";
        break; [cite: 68, 70, 71]
    default:
        print("Sabtu <br>");
        print "Survey harga ke Dusit, Mangga Dua";
        break; [cite: 72, 73, 74]
}
?>
</body>
</html>