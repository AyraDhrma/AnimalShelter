<?php 

$user="admin";
$pw="admin";

session_start();

if ($_POST['user']==$user && $_POST['pw']==$pw) {
	# code...
	$_SESSION['user']=$user;
	echo "<script>window.location='admin.php'</script>";
}else{
	echo "<script>alert('Username/Password Salah');window.location='logmin.html'</script>";
}

 ?>