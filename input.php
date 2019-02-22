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
<title>Data Sanggar</title>
<link href="css/input.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="header">
<div class="logo">
<img src="img/IMG-20190113-WA0002%20-%20Copy.jpg" width="150" height="150" />
</div>
<div class="tema">K A Y A F Y O F</div>
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
<a style="margin:20px;" href="anggota.php"><button> Kembali </button></a><br />
<form action="proses_input.php" method="post">
  <table width="554" height="400px" align="center">
<tr>
    <td align="center" colspan="3"><h1>Input Data</h1></td>
    </tr>
    <tr>
    <td width="24%" height="28">ID Anggota</td>
    <td width="8%">:</td>
    <td width="67%"><input class="w" type="text" size="50" name="id_anggota" placeholder="Masukkan ID Anggota" required="required"/></td><td width="1%"></td>
  </tr>
   <tr>
    <td width="36%" height="33">Nama Lengkap</td>
    <td width="8%">:</td>
    <td width="56%"><input class="w" type="text" size="50" name="nama" value="<?=$row[nama]?>" placeholder="Masukkan Nama" required="required"
/></td>
  </tr>
      <tr>
    <td width="36%" height="33">Tanggal check-in</td>
    <td width="8%">:</td>
    <td width="56%"><input class="w" type="text" size="50" name="tanggal_check_in" value="<?=$row[tanggal_check_in]?>" placeholder="Masukan Tanggal check_in" required="required"
/></td>
  </tr>
      <tr>
    <td width="36%" height="33">Tanggal check-out</td>
    <td width="8%">:</td>
    <td width="56%"><input class="w" type="text" size="50" name="tanggal_check_out" value="<?=$row[tanggal_check_out]?>" placeholder="Masukan Tanggal check_out" required="required"
/></td>
  </tr>
  
   <tr>
    <td width="36%" height="33">Dewasa</td>
    <td width="8%">:</td>
    <td width="56%"><input class="w" type="text" size="50" name="dewasa" value="<?=$row[nama]?>" placeholder="Berapa Banyak" required="required"
/></td>
  </tr>
   <tr>
    <td width="36%" height="33">Anak</td>
    <td width="8%">:</td>
    <td width="56%"><input class="w" type="text" size="50" name="anak" value="<?=$row[nama]?>" placeholder="Berapa Banyak" required="required"
/></td>
  </tr>
<tr>
    <td width="36%" height="33">kamar</td>
    <td width="8%">:</td>
    <td width="56%"><input class="w" type="text" size="50" name="kamar" value="<?=$row[nama]?>" placeholder="Berapa banyak" required="required"
/></td>
  </tr>
    <tr>
    <td></td>
    <td></td>
     <td valign="middle">
     <input type="submit" value="Simpan">
     <input type="reset" value="Reset"/></td>
  </tr>

  </table>
</form>
</div>
</div>

</body>
</html>