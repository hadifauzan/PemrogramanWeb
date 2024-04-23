<?php
session_start();

// Simpan data dari formulir ke dalam variabel
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Simpan data ke dalam session
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;

// Simpan data ke dalam cookies
setcookie('phone', $phone, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari

// Redirect ke halaman berhasil
header("Location: reedem.php");
exit;
?>