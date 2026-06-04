<?php
/****************************************************
Halaman ini merupakan halaman contoh penciptaan session. 
Perintah session_start() harus ditaruh di perintah pertama tanpa spasi di depannya.
Perintah session_start() harus ada pada setiap halaman yang berhubungan dengan session.
*****************************************************/
session_start(); // [cite: 26]

if (isset($_POST['Login'])) { // [cite: 27]
    $user = $_POST['user']; // [cite: 28]
    $pass = $_POST['pass']; // [cite: 29]

    // PERBAIKAN: Mengubah '=' menjadi '==' untuk perbandingan logical yang valid
    if ($user == "rahadian" && $pass == "123") { // [cite: 31, 32]
        // menciptakan session
        $_SESSION['login'] = $user; // [cite: 33, 34]
        
        // menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>"; // [cite: 35, 36]
        echo "<h2>Klik <a href='session2.php'>di sini (session2.php)</a> untuk menuju ke halaman pemeriksaan session</h2>"; // [cite: 37, 38, 39]
    } else {
        echo "<h1>Username atau Password Salah!</h1>";
        echo "<h2>Silahkan <a href='session1.php'>Login Kembali</a></h2>";
    }
} else { // [cite: 41]
?>
<html>
<head>
    <title>Login here...</title> </head>
<body>
    <form action="" method="post"> <h2>Login Here...</h2> Username : <input type="text" name="user"><br> Password : <input type="password" name="pass"><br> <input type="submit" name="Login" value="Log In"> </form> </body>
</html>
<?php 
} 
?>