<?php
$ball = 'purple';   // Coba ubah ke "yellow", "blue", "green", "purple", atau warna lain [cite: 9]

if ($ball == 'red') { 
    $redbox = $ball; [cite: 9]
} elseif ($ball == 'yellow') { 
    $yellowbox = $ball; [cite: 9]
} elseif ($ball == 'blue') { 
    $bluebox = $ball; [cite: 9]
} elseif ($ball == 'green') { 
    $greenbox = $ball; [cite: 9]
} elseif ($ball == 'purple') {
    $purplebox = $ball; [cite: 9, 11]
} else {
    $colorlessbox = $ball; [cite: 12, 13]
}

echo "red box : $redbox <br>\n"; [cite: 15]
echo "yellow box : $yellowbox <br>\n"; [cite: 16]
echo "blue box : $bluebox <br>\n"; [cite: 17]
echo "green box : $greenbox <br>\n"; [cite: 18]
echo "purple box : $purplebox <br>\n"; [cite: 19]
echo "colorless box : $colorlessbox <br>\n"; [cite: 20]
?>