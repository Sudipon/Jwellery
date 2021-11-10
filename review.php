<?php

$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];

echo "<a href='index.html'>Your Review submitted</a>";

$conn=mysqli_connect("localhost","root","","sudipon");
$insert="INSERT INTO review SET name='$name', email='$email',subject='$subject',message='$message'";
$conn->query($insert);

?>