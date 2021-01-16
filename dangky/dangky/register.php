<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="style.css">+
</head>
<body>
  <div class="header">
  	<h2>Đăng ký</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Tên người dùng</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Mật khẩu</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Xác nhận mật khẩu</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Đăng ký</button>
  	</div>
  	<p>
  		Đã là thành viên? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>