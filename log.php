<?php 


$user=$_POST['user'];
$pass=$_POST['pass'];

if($user=="demo@demo.com" && $pass="demo")
{
	header("Location: admin/index.php");
}
else
{
$x = '<script>alert("Sifre Hatali")</script>';
	echo $x;
	header("Location: index.php");
}
?>