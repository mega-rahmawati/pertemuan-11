<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>array</title>
</head>
<body>
	<?php 
	$mhs_putri = array("mega","lisa","yuni","linda");
	$mhs[0]="budi";
	$mhs[1]="buno";
	$mhs[2]="bute";
	$mhs[3]="bula";
	$mhs[4]="beti";
	for ($i=0; $i <=3 ; $i++) { 
		echo "Nama Saya $mhs_putri[$i] <br>";
	}
	 ?>



<h1>array sub</h1>

<?php
$konten = array (
"nama_akun"=>"Mega",
"foto"=>"foto_selfie.jpeg",
"tag_location"=>"Location unknow",
"caption"=>"galau nian cok",
"jum_like"=>"99999",
"komentar"=>"60"
);

foreach ($konten as $key => $value) {
	echo"$key : $value <br>";
}
?>
</body>
</html>