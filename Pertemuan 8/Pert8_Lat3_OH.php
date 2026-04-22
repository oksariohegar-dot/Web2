<?php
// Parameter $num memiliki nilai default 10 [cite: 164]
function repeat($text, $num = 10)
{
    echo "<ol>\r\n"; [cite: 166]
    for($i = 0; $i < $num; $i++)
    {
        echo "<li>$text </li>\r\n"; [cite: 169]
    }
    echo "</ol>"; [cite: 171]
}

// Memanggil repeat dengan dua argumen (menggunakan 15) [cite: 174]
echo "<strong>Menggunakan 2 argumen (15 kali):</strong>";
repeat("I'm the best", 15);

// Memanggil repeat dengan satu argumen (otomatis menggunakan default 10) [cite: 176]
echo "<strong>Menggunakan 1 argumen (default 10 kali):</strong>";
repeat("You're the man");
?>