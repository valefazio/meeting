<?php
//SESSIONE
include("../../Management/accessControl.php");
if (isLogged()) {
	header("Location: ../home.php");
	exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['pass'])) {	//ha inserito i dati
	$email = htmlspecialchars($_POST['email']);
	$password = $_POST['pass'];

	$res = selectDb("email, password", "email = '$email'");
	if ($res->num_rows == 0) {
		echo "<script>alert('Email or password are not correct')</script>";
		if (session_status() == PHP_SESSION_ACTIVE)
			session_abort();
		echo "	<script> window.location.href = 'login.html';</script>";
		exit;
	}
	$row = $res->fetch_assoc();
	if (!password_verify($password, $row['password'])) {
		echo "<script>alert('Email or password are not correct')</script>";
		if (session_status() == PHP_SESSION_ACTIVE)
			session_abort();
			echo "	<script> window.location.href = 'login.html';</script>";
		exit;
	}
	$_SESSION['logged'] = $email;
	if (isset($_POST['remember-me'])) {
		$bytes = random_bytes(12);
		setcookie("remember-me", $bytes, time() + (86400 * 30), "/");
		$cookie = hash("sha256", $bytes);
		updateDb("remember_token", "'$cookie'", "email = '$email'");
		updateDb("remember_token_created_at", "CURRENT_TIMESTAMP", "email = '$email'");
	}

	header("Location: ../home.php");
	exit;

} else {
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']))
		header("Location: login.html");
	//else wait for data...
}