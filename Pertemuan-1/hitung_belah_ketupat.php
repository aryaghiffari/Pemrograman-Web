<?php
$diagonal_1 = 45;
$diagonal_2 = 60;
$sisi_a = 20;
$sisi_b = 20;
$sisi_c = 20;
$sisi_d = 20;

echo "<h3>Menghitung Luas dan Keliling belah ketupat</h3>";

$luas_belah_ketupat = 1/2 * $diagonal_1 * $diagonal_2;
$keliling_belah_ketupat = $sisi_a + $sisi_b + $sisi_c + $sisi_d;

echo "diagonal 1 = ". $diagonal_1;
echo "<br/>";
echo "diagonal 2 = ". $diagonal_2;
echo "<br/>";
echo "Sisi 1 = ". $sisi_a;
echo "<br/>";
echo "Sisi 2 = ". $sisi_b;
echo "<br/>";
echo "sisi 3 = ". $sisi_c;
echo "<br/>";
echo "sisi 4 = ". $sisi_d;
echo "<br/>";
echo "Luas Belah Ketupat = ". $luas_belah_ketupat;
echo "Keliling Belah Ketupat = ". $keliling_belah_ketupat;