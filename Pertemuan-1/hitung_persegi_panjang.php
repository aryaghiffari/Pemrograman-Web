<?php
//variabel
$panjang = 79;
$lebar = 45;

//title
echo "<h3>Menghitung Luas dan Keliling Persegi Panjang</h3>";

//rumus
$luas_persegi_panjang = $panjang * $lebar;
$keliling_persegi_panjang = (2 * $panjang)+(2 * $lebar);
echo "Panjang = ". $panjang;
echo "<br/>";
echo "Lebar = ". $lebar;
echo "<br/>";
echo "Luas Persegi Panjang = ". $luas_persegi_panjang;
echo "<br/>";
echo "Keliling Persegi Panjang = ". $keliling_persegi_panjang;
?>