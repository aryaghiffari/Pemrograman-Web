<?php
$alas = 34;
$sisi_2 = 56;
$sisi_3 = 31;
$sisi_4 = 79;
$tinggi = 90;

echo "<h3>Menghitung Luas dan Keliling Jajargenjang</h3>";

$keliling_jajargenjang = $alas + $sisi_2 + $sisi_3 + $sisi_4;
$luas_jajargenjang = $alas * $tinggi;

echo "alas = ". $alas;
echo "<br/>";
echo "Sisi 1 = ". $sisi_2;
echo "<br/>";
echo "Sisi 2 = ". $sisi_3;
echo "<br/>";
echo "Sisi 3 = ". $sisi_4;
echo "<br/>";

print "Luas Jajargenjang = ". $luas_jajargenjang;
echo "<br/>";
print "Keliling Jajarganjang = ". $keliling_jajargenjang;
echo "<br/>";