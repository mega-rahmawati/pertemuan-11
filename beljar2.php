<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Belajar PHP</title>
</head>
<body>
<?php 
// $suhu = 32;
// if($suhu<32){
// 	echo "Cuaca Dingin";
// } elseif($suhu>=32){
// 	echo "Cuaca Panas";
// }

$tujuan ="Korea";
switch ($tujuan) {
	case 'Korea':
		echo "Rp.4000.000";
		break;
	case 'Jepang':
		echo "Rp.5000.000";
	default:
		echo "Rp.4000.000";
		break;
}



?>
</body>
</html>