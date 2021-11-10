<?php

	$name=$_POST["name"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$img=$_POST["img"];
	$pass=$_POST["password"];
	$confirmpass=$_POST["confirmpassword"];

	echo "<a href='index.html'>Signin Succesfully</a>";

	if ($pass==$confirmpass) 
	{
		$conn=mysqli_connect("localhost","root","","sudipon");
		$insert="INSERT INTO gold SET username='$name', email='$email',mobile='$mobile',image='$img',password='$pass'";
		$conn->query($insert);
	}
	else
	{
	echo "<a href='register.html'>Try again</a>";
	}


?>
