<?php
$A = 123; //variabel global
function Test (){
   global $A; //variabel lokal
   echo "Nilai A di dalam fungsi: $A \n";
}
Test();
echo "Nilai A di luar fungsi: $A \n";
?>