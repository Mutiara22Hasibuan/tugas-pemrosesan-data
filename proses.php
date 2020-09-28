<?php
$bilangan1 = $_GET['BILANGAN1'];
$bilangan2 = $_GET['BILANGAN2'];
$operasi = $_GET['operasi'];
echo "Bilangan 1 yang dikirimkan adalah $bilangan1 <br>";
echo "Bilangan 2 yang dikirimkan adalah $bilangan2 <br>";
 
 $bil1 = $_GET['bilangan1']; $bilangan2 = $_GET['bilangan2'];
$operasi  = $_GET['operasi']; 
echo '<output>'; if ($operasi == "tambah") 
$hasil = $bilangan1 + $bilangan2; else if ($operasi == "kurang") 
$hasil = $bilangan1 - $bilangan2; else if ($operasi == "kali") 
$hasil = $bilangan1 * $bilangan2; else if ($operasi == "bagi")   
$hasil = $bilangan1 / $bilangan2;      
 echo "Hasil perhitungannya adalah : ". $hasil; echo '</output>';
?>
