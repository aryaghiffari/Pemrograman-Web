<?php
echo "<h3>Keliing dan Luas Trapesium</h3>";

$alas = 67;
$tinggi = 34;
$atap = 33;
$sisi_1 = 23;
$sisi_2 = 20;

$keliling_trapesium_trapesium = $alas + $atap + $sisi_1 +$sisi_2;
$luas_trapesium = $alas + $atap / 2 *$tinggi;

echo "alas = ". $alas;
echo "<br/>";
echo "tinggi = ". $tinggi;
echo "<br/>";
echo "sisi 1 = ". $sisi_1;
echo "<br/>";
echo "sisi 2 = ". $sisi_2;
echo "<br/>";
echo "atap = ". $atap;
echo "<br/>";
echo "Luas Trapesium = ". $luas_trapesium;
echo "<br/>";
echo "Keliling Trapesium = ". $keliling_trapesium_trapesium;