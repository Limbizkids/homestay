 <?
	error_reporting(0);
	session_start();
	include "koneksi.php";
	$username = $_SESSION['nama_ses'];
	$date = date('D/m/Y');	
	$mode = $_GET['mode'];
	$id_anggota = $_GET['id_anggota'];
	
	if ($username == ''){
die("<script>alert('Maaf Anda harus Login Terlebih Dahulu'); window.location = 'index.php'</script><br>");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Date Homestay</title>
<link href="css/anggota.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header">
<div class="logo">
<img src="img/logo+GUPPI++kolaborasi+1.jpg" width="200"height="200">
</div>
<div class="tema">SMA GUPPI SALAWATI </div>
</div>

<div id="menu"> 
<div class="m">
<a href="home.php">Home</a>
<a href="anggota.php">Date Homestay</a>
<a href="laporan.php">Report Homestay</a>
<a href="Facilites & Services.php">Facilites & Services</a>
<a href="Rates-travel">Rates-travel</a>
<a href="anggota.php">Gallery</a>
<a href="Contact Us.php">Contact Us</a>
<a href="logout.php">Log Out</a>
</div>
<div class="l">
<a href=""><img src="icon/2000px-Google_plus_icon.svg.png" width="15%" /></a>
<a href=""><img src="icon/facebook_logos_PNG19761.png" width="15%" /></a>
<a href=""><img src="icon/social-twitter-icon.png" width="15%" /></a>
<a href=""><img src="icon/instagram-png-instagram-png-logo-1455.png"width="15%" /></a>
</div>
</div>


<div id="content">
<div class="con">
<h1 align="center">DATA GURU</h1>
  <a href="input.php"><button>+ Tambah Data</button></a><br />
<table width="100%" align="center" border="1">
	<tr align="center">
		<th width="auto">No</th>
		<th width="auto">NIP</th>
		<th width="auto">Nama Lengkap </th>
		<th width="auto">Tempat tanggal lahir</th>
		<th width="auto">Agama</th>
		<th width="auto">jenis kelamin</th>
        <th width="auto">B.study yang diajar</th>
		<th width="auto">Jabatan</th>
        <th width="auto">Pendidikan terakhir</th>
  </tr>
        
        <?
		$sql = "SELECT * FROM anggota ORDER BY id_anggota DESC" ;
		$hasil =mysql_query($sql);
		$x=1;
		while($row=mysql_fetch_array($hasil)) {
	?>
	<tr>
		<td align="center"><?=$x;?></td>
		<td align="center"><?=$row[id_anggota];?></td>
		<td align="center"><?=$row[nama];?></td>
        <td align="center"><?=$row[tanggal_check_in];?></td>
        <td align="center"><?=$row[tanggal_check_out];?></td>
        <td align="center"><?=$row[dewasa];?></td>
        <td align="center"><?=$row[anak];?></td>
        <td align="center"><?=$row[kamar];?></td>
        <td align="center"><?=$row[aksi];?></td>
        <td align="center">
<a href="anggota.php?&mode=edit&id_anggota=<?=$row[id_anggota]?>"><button>Edit</button></a>
<a href="anggota.php?&mode=delete&id_anggota=<?=$row[id_anggota]?>"><button>Delete</button></a>
		</td>
  </tr>
</tr>
        
			
			<?
		$x++;
		}
	?>
</table>
<p>&nbsp;</p>

<p><strong>
  <?
if ($mode == 'edit' && $id_anggota !== 'id_anggota'){ // edit data ---------------------------

	$sql = "SELECT * FROM anggota WHERE id_anggota=$id_anggota" ;
	$result =mysql_query($sql);
	$row = mysql_fetch_array($result);
?>
  </strong>
</p>
	<form action="edit.php" method="POST">
    <table width="44%" height="400px" align="center">
    <tr>
    <td align="center" colspan="3"><h1>Edit Data</h1></td>
    </tr>
       <tr>
    <td width="36%" height="33">Id Anggota </td>
    <td width="8%">:</td>
    <td width="56%"><input class="w" type="text" size="50" name="id_anggota" value="<?=$row[id_anggota]?>" placeholder="Masukkan Nip" required="required"
/></td>
  </tr>
    <tr>
    <td width="36%" height="33">Nama Lengkap</td>
    <td width="8%">:</td>
    <td width="56%"><input class="w" type="text" size="50" name="nama" value="<?=$row[nama]?>" placeholder="Masukkan Nama" required="required"
/></td>
  </tr>
    <tr>
    <td width="36%" height="33">Tanggal check_in</td>
    <td width="8%">:</td>
    <td width="56%"><input class="w" type="text" size="50" name="tanggal_check_in" value="<?=$row[tanggal_check_in]?>" placeholder="Masukan tanggal check_in" required="required"
/></td>
  </tr>
  <tr>
    <td height="30">Tanggal check_out</td>
    <td>:</td>
    <td><input class="w" type="text" size="50" name="tanggal_check_out" value="<?=$row[tanggal_check_outl]?>" placeholder="Masukan Tanggal check_out" required="required" /></td>
  </tr>
   <tr>
    <td width="36%" height="33">Dewasa</td>
    <td width="8%">:</td>
    <td width="56%"><input class="w" type="text" size="50" name="dewasa" value="<?=$row[dewasa]?>" placeholder="Berapa Banyak"required="required"
/></td>
  </tr>
   <tr>
    <td width="36%" height="33">Anak</td>
    <td width="8%">:</td>
    <td width="56%"><input class="w" type="text" size="50" name="anak" value="<?=$row[anak]?>" placeholder="Berapa Banyak" required="required"
/></td>
  </tr>
<tr>
    <td width="36%" height="33">kamar</td>
    <td width="8%">:</td>
    <td width="56%"><input class="w" type="text" size="50" name="kamar" value="<?=$row[kamar]?>" placeholder="Berapa banyak" required="required"
/></td>
  </tr>

<tr>
<td><input type="hidden" name="id" value="<?=$row[id_anggota]?>"></td>
<tr height="50">
<td></td>
<td></td>
<td height="50">
<input class="sub" type="submit" value="Ubah" />
<input class="sub" type="reset" value="Reset" onclick="window.location.href='anggota.php'" />
</td>
</tr>
</table>
</form>


<?
}else if ($mode == 'delete' AND $id_anggota != ''){
?>
<table width="24%" align="center" border="0"  style="padding-top:30px"> 
<tr>
<td width="62%">Apakah Anda Yakin ?? </td>
<td width="38%">
<a href="delete.php?&id_anggota=<?=$id_anggota?>"><button>Ya</button></a>
<a href="anggota.php"><button>Tidak</button></a>
</td>
</tr>
</table>
<?
}
?>
</div>
</div>

</body>
</html>