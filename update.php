<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<form action="" method="POST">
		<input type="email" name="email" placeholder="email">
		<br><br>
		<input type="number" name="mob" placeholder="mobile">
		<br><br>
		<input type="file" name="image" placeholder="image">
		<br><br>
		<input type="password" name="pass" placeholder="password">
		<br><br>

		
		<input type="submit" name="upd">
	</form>

</body>
</html>
<?php
	session_start();
	$path=mysqli_connect('localhost','root','','sudipon');
	if (isset($_POST['upd'])) {
		$email=$_POST['email'];
		$mobi=$_POST['mob'];
		$image=$_POST['image'];
		$password=$_POST['pass'];

		
		$upda="UPDATE gold SET email='$email', mobile='$mobi',  image='$image', password='$password' WHERE username='$_SESSION[name]'";

		$test=($path->query($upda));
		if($test==true)
		{
			echo "<a href='profile.php'>Update Registration Successful</a>";	
		}
		

	}

?>