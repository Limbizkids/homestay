<?
include "koneksi.php";

 $username = $_POST['username'];
 $password = $_POST['password'];

 $login = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
 $data=mysql_fetch_array($login);

 //apabila username dan password benar
	if ($data['username'] == $username AND $data['password'] == $password){
	 session_start();
	 $_SESSION['nama_ses'] = $username;
	 $_SESSION['pass_ses'] = $password;

header ("location:home.php");

} else {
echo "<script>alert('username atau password anda salah !'); window.location = 'index.php'</script><br>"; 
}

?>

