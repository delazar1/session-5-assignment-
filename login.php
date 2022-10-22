<?php
include_once('asset.php');
if (!is_loggedIn()) {
	header("location: index.php");
}

if (!isset($_SESSION)) {
	session_start();
}
$user_email = $_POST['email'];
$user_password = $_POST['password'];
$loggedIn_user = [
	'email' => $user_email,
	'password' => $user_password
];
$_SESSION['login'] = $loggedIn_user;
header('location: home.php');
