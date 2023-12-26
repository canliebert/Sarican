<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$sql 	= "SELECT * FROM users WHERE username='$username' and password='$password'";
$result = $conn->query($sql);

$cek = mysqli_num_rows($result);

$data = mysqli_fetch_assoc($result);
 
if(isset($data['password'])) {
	session_start();
	$_SESSION['data']=$data;
	return header("location:index.php");
} else {
	return header("location:login.php?pesan=gagal login data tidak ditemukan.");
}
?>