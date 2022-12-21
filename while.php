<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>while</title>
</head>
<body>
<h1>While</h1>
	<?php 
	$no =1;
	while ($no <=10) {
	 	echo "No saat ini adalah $no <br>";
	 	$no++; //$no+1
	 } ?>
<h1>Do While</h1>
	<?php 
	$a=0;
	do { 
		echo"Cetak angka".$a."|";
		$a++;
	 } while ($a <=10); 
	 ?>
<h1>For</h1>
	<?php
	for ($i=5; $i>=1 ; $i--) { 
		echo "Saat ini adalah no $i <br>";
	  } 
	   ?>
<select>
	<option>-pilih tanggal-</option>
	<?php 
	for ($i=1; $i <=31 ; $i++) { 
	 	echo "<option>$i</option>";
	 } ?>
</select>
<select>
	<option>-pilih bulan-</option>
	<?php 
	for ($i=1; $i <=12 ; $i++) { 
	 	echo "<option>$i</option>";
	 } ?>
</select>
<select>
	<option>-pilih tahun-</option>
	<?php 
	$tahun = date("Y");//2023
	for ($i=$tahun - 5; $i <=$tahun + 5 ; $i++) { 
	 	echo "<option>$i</option>";
	 } ?>
</select>
</body>
</html>