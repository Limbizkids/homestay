<?
session_start();
session_destroy();
echo "<script>alert('logout berhasil !')</script><br>"; 
echo "<meta http-equiv='refresh' content=' 1 url=index.php'>";
?>
