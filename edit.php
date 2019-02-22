<?

include "koneksi.php";
error_reporting(0);

$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$tanggal_check_in = $_POST['tanggal_check_in'];
$tanggal_check_out = $_POST['tanggal_check_out'];
$dewasa = $_POST['dewasa'];
$anak = $_POST['anak'];
$kamar = $_POST['kamar'];



				$sql = "UPDATE anggota SET 
				id_anggota = '$id_anggota',
				nama = '$nama',
				tanggal_check_in = '$tanggal_check_in',
				tanggal_check_out = '$tanggal_check_out',
				dewasa = '$dewasa',
				anak = '$anak',
				kamar = '$kamar',
				WHERE id_anggota = $id_anggota" ;

$result =mysql_query($sql);
header("location:anggota.php");
?>
