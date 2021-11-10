<?php
if(isset($_POST['button']))
{
	session_start();
	$name=$_POST["name"];
	$pass=$_POST["password"];
	
	$path=mysqli_connect("localhost","root","","sudipon");
	$select="SELECT * FROM gold WHERE username='$name' AND password='$pass'";
	$select01=($path->query($select));
	$row=mysqli_num_rows($select01);
	if($row>=1){
		$_SESSION['name']=$name;
		$_SESSION['password']=$pass;
		header('location: indexo.php');
	}
	else{
		header('location: login.html');
		}

}


?>