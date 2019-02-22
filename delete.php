<?
 include "koneksi.php";
 $id_anggota = $_GET['id_anggota'];

 $sql = "DELETE FROM anggota WHERE id_anggota=$id_anggota";
 $result =mysql_query($sql);

 header("location:anggota.php");
?>
