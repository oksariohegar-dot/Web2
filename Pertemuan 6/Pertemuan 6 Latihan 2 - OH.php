<html>
    <body>

        <?php
            $x = array("one", "two", "three");

            foreach ($x as $value) {
                echo $value . "<br />";
            }
        ?>

    </body>
</html>

<?php
    $b["sayur"] = "wortel";
    $b["daging"] = "ayam";
    $b["utama"]  = "nasi";

    $jumlah = sizeof($b);

    print "Jumlah array b = $jumlah <br />";

    // Catatan: variabel $jumlah akan bernilai 3 (sesuai jumlah elemen di atas)
?>