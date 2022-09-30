<?php
include "conn.php";

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$position = $_POST['position'];
$team = $_POST['team'];
$password = $_POST['password'];

mysqli_query($koneksi, "INSERT INTO users(name, address, position, team, email, password) VALUES('$name', '$address', '$team', '$email', '$email', '$password')");
header('Location:index.php');

?>
