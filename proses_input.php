<?

include "koneksi.php";
error_reporting(0);


$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$tanggal_check_in = $_POST['tanggal_check_in'];
$tanggal_check_out = $_POST['tanggal_check_out'];
$dewasa= $_POST['dewasa'];
$anak = $_POST['anak'];
$kamar = $_POST['kamar'];



//cek apakah ID ANGGOTA sudah pernah DIGUNAKAN ATAU BELUM
	$cek = mysql_query("SELECT * FROM anggota WHERE id_anggota='$id_anggota'");
	if(mysql_num_rows($cek) > 0){
	?>
	<script>
	alert("ID ANGGOTA: <?=$id_anggota;?> sudah terdaftar");
	window.close();
	if (window.close){
	window.location = "input.php"
	}
	</script>
	<?php
	}

//cek
if (!empty($id_anggota) || !empty($nama) || !empty($tanggal_check_in) || !empty($tanggal_check_out) ||!empty($dewasa) || !empty($anak) || !empty($kamar)) {
	// true; insert db


$sql = "INSERT INTO anggota VALUES ('$id_anggota','$nama','$tanggal_check_in','$tanggal_check_out','$dewasa','$anak','$kamar')";
	$hasil=mysql_query($sql);
	if ($hasil==1)
	{ 
	  // Konfirmasi
		echo "Data sudah disimpan";
		// Konfirmasi
		echo "Data sudah disimpan";
		echo "<head><meta http-equiv='refresh' content='0; url=input.php'></head>";
header('location:anggota.php');
}
}
?>

