<? php
include "koneksi.php";
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tempat = $_POST['tempat'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$jenis_pasien = $_POST['jenis_pasien'];
$jenis_id = $_POST['jenis_id'];
$no_id = $_POST['no_id'];
$agama = $_POST['agama'];
$gol_darah = $_POST['gol_darah'];
$no_hp = $_POST['no_hp'];

$uploaddir = "foto/";
$tmpName = $_FILES['foto']['tmp_name'];
$fileName = $_FILES['foto']['name'];
$uploadedFile = $uploaddir.$fileName;
move_uploaded_file($files['foto']['tmp_name'], $uploadedFile);

$kirim=mysqli_query($conn,"INSERT INTO tbl_pasien values('no_rm','$nama','$jenis_kelamin','$tempat_lahir','$tgl_masuk','$alamat','$jenis_pasien','$jenis_id','$no_id','$gol_darah','$agama',$no_hp','$uploadFile')");

// if($kirim){
// 	echo"<script>
// 	alert('Pendaftaran berhasil!');
// 	window.location='input.php';
// 	</script>";
// }else{
// 	echo"<script>
// 	alert('Proses gagal!');
// 	history.go(-1);
// 	</script>";
// }