<?php
include "../../Management/connection.php";
$email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

//check user is logged
if (!isset($_SESSION['logged'])) {
	echo "<script>alert('Servizio riservato agli amministratori')</script>";
	header("Location: login.php");
	exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$psw = password_hash(trim($_POST['pass']), PASSWORD_DEFAULT);
	if (!password_verify($_POST['confirm-password'], $psw)) {
		echo "<script>alert('Le password inserite non combaciano')</script>";
		header("Location: registration.html");
		exit;
	} else if (!preg_match($email_pattern, $_POST['email'])) {
		echo "<script>alert('Il campo email non rispetta il formato richiesto')</script>";
		header("Location: registration.html");
		exit;
	}

	$email = htmlspecialchars(trim($_POST['email']));

	$res = selectDb("users", ["email"], "email = '$email'");
	if ($res->num_rows != 0) {
		echo "<script>alert('Utente già registrato')</script>";
		header("Location: registration.html");
		exit;
	}
	$username = htmlspecialchars(trim($_POST["username"]));
	insertDb("users", ["username", "email", "pass_hash"], [$username, $email, $psw]);

	header("Location: ../users.php");
}