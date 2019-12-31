<?php
function kabisat() { //fungsi logika tahun kabisat
    if ($tahun%4==0) { //tahun kabisat adalah tahun yang habis dibagi 4, menggunakan perhitungan modulus
        echo " Tahun $tahun termasuk tahun <b>Kabisat</b>.<br>";
    } else {
        echo " Tahun $tahun <b>tidak</b> termasuk tahun kabisat.<br>";
    }
}
kabisat();
?>