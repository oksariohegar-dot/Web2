<?php
$A = 123; //variabel global
function Test (){
    $A = "Test"; //variabel lokal
    echo "Nilai A di dalam fungsi: $A \n";
}
Test();
echo "Nilai A di luar fungsi: $A \n";
?>