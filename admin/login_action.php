<?php
session_start();
include "conn.php";

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email' AND password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:homepage.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>