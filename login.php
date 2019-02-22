<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Admin</title>
<link href="css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="login">
  <p>
      <img src="img/logo+GUPPI++kolaborasi+1.jpg" width="200" height="200"/>
      <h1>WELCOME</h1>
    <h1>SMA GUPPI SALAWATI</h1>
  </p>
<form  action="cek_login.php" method="POST">
  <input class="a" type="text" name="username" placeholder="Username" required="required"/><br/>
<input class="a"  type="password" name="password" placeholder="Password" required="required"/><br/>
<input class="button" type="submit" value="Login" name="login">
</form>
</div>
</body>
</html>