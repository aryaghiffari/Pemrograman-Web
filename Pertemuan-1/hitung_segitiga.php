<?php
echo "<h3> Menghitung Luas dan Keliling Segitiga </h3>";

$alas = 67;
$tinggi = 34;
$sisi_1 = 33;
$sisi_2 = 23;

$luas_segitiga = $alas * $tinggi;
$keliling_segitiga = $alas + $sisi_1 + $sisi_2;

echo "Alas = ". $alas;
echo "<br/>";
echo "sisi 1 = ". $sisi_1;
echo "<br/>";
echo "sisi 2 = ". $sisi_2;
echo "<br/>";
echo "Tinggi = ". $tinggi;
echo "<br/>";

echo "Luas Segitiga = ". $luas_segitiga;
echo "<br/>";
echo "Keliling Segitiga = ". $keliling_segitiga;
echo "<br/>";
