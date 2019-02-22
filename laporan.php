 <?
	error_reporting(0);
	session_start();
	include "koneksi.php";
	$name = $_SESSION['nama_ses'];
	$date = date('D/m/Y');	
	$mode = $_GET['mode'];
	$id_anggota = $_GET['id_anggota'];
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report homestay</title>
<link href="data.css" rel="stylesheet" type="text/css" />
</head>

<body style=" margin:0; ">
<div id="header" align="center" style="font-size:40px;  padding:39px 20px 30px 20px;">LAPORAN DATA ANGGOTA</div>
<div id="nav" align="center" style="text-align:center; padding-left:30%; margin-bottom:30px; height:36px; width:100% position:relative; width:auto;"> </div>
<div style=" position:relative; border-radius:10px; padding-bottom:20px; padding-left:20px; padding-right:20px; padding-top:20px;   height:100%; margin-top:50px; margin-bottom:30px; " id="content2" align="center">
	 <table width="100%" align="center">
	   <tr>
	     <td width="33%"><a href="home.php"><button> Kembali </button></a></td>
	     <td width="60%">&nbsp;</td>
	     <td width="7%" align="center"><a href="javascript:window.print()"><img src="img/print.png" alt="" width="20" height="20" /></a></td>
       </tr>
  </table>
	 <table width="100%" bgcolor="#FFFFFF" align="center" border="2">
		<tr align="center">
           <tr>
    <td colspan="10" style=" padding:10px; text-align:center; font-size:25px;">Data Anggota Homestay</td>
  </tr>
		<th width="auto">No</th>
		<th width="auto">ID Anggota</th>
		<th width="auto">Nama Lengkap (booking)</th>
		<th width="auto">Tanggal check-in</th>
		<th width="auto">Tanggal check-out</th>
		<th width="auto">Dewesa</th>
        <th width="auto">Anak</th>
		<th width="auto">Kamar</th>
        
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
		<td align="center"><?=$row[tanggal_check_in],',',$row[tanggal_check_out];?></td>
        <td align="center"><?=$row[dewasa];?></td>
        <td align="center"><?=$row[anak];?></td>
        <td align="center"><?=$row[kamar];?></td>
        <td align="center"><?=$row[aksi];?></td>             
</tr>
     <?
		$x++;
		}

	?>
</table>	 <p>&nbsp;</p>
	 <table width="100%" align="center">
	   <tr>
	     <td width="9%">&nbsp;</td>
	     <td width="70%">&nbsp;</td>
	     <td width="15%" align="center">Sorong,
	       <?=date('d-m-Y')?></td>
	     <td width="6%" align="center">&nbsp;</td>
       </tr>
	   <tr>
	     <td height="76">&nbsp;</td>
	     <td>&nbsp;</td>
	     <td align="center" valign="bottom"><hr /></td>
	     <td align="center" valign="bottom">&nbsp;</td>
       </tr>
	   <tr>
	     <td height="21">&nbsp;</td>
	     <td>&nbsp;</td>
	     <td align="center" valign="bottom">Eki Mambrasar</td>
	     <td align="center" valign="bottom">&nbsp;</td>
       </tr>
  </table>
</div>
</body>
</html>