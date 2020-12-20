<?php
$un=$_POST['username'];
$ps=$_POST['password'];
$con =mysqli_connect("localhost", "root", "", "user");
$s=mysqli_query($con,"select * from register where username='$un' and password='$ps' ");
if ($r = mysqli_fetch_array($s)) 
{
	header("Location:service admin.html");
}

else
{
	echo "plz enter valid username or password";
	include "user.html";
}
?>