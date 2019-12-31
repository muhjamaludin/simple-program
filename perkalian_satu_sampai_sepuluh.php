<?php
echo "<title>Perhitungan 1-10</title>";
echo "<h2>Program Perkalian dari satu sampai 10 </h2>";
for($i=1;$i<=10;$i++) {
    for ($j=1;$j<=10;$j++){
        $hasil = $i*$j;
        if($j!==10){
            echo "Hasil dari $i x $j = ".$hasil."<br>";
        } else {
            echo "Hasil dari $i x $j = ".$hasil."<br><br>";
        }
    }
}
?>