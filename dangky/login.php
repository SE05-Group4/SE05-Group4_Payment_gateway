<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Đăng nhập</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Đăng nhập</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Tên người dùng</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Mật khẩu</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Đăng nhập</button>
  	</div>
  	<p>
  		Chưa là thành viên? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>