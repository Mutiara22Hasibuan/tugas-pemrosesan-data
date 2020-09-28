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







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="http://localhost/Prak2/proses.php" method="get">
		Bilangan 1<input type="text" name="bilangan1"><br>
		<select name="operasi" id="">
			<option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
        </select> <br>
		Bilangan 2<input type="text" name="bilangan2"><br>
        <input type="submit" value="kirim">
    </form>


</body>
</html>
