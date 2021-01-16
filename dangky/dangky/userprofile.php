<?php
include('server.php');

$username=$_SESSION['username'];
$sql="SELECT * FROM users WHERE username='$username AND email='$email'";
$result=mysqli_query($db,$sql) or die ("Your query is not correct");
$row=mysqli_fetch_array($result)

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div id="section">
		<h1>Profile Details</h1>
		
		<input type="text" readonly name="username" value="<?php echo $row['username'];?>"/>
		<input type="email" readonly name="email" value="<?php echo $row['email'];?>"/>
		</div>
</body>
</html>