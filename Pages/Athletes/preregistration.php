<?php

$email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

// Get the values from the form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["safeguarding-policies"])) {
	if (!preg_match($email_pattern, $_POST['athlete-email'])) {
		echo "<script>alert('Athlete's email not valid')</script>";
		echo "	<script>window.location.href = 'preregistration.html';</script>";
		exit;
	}

	if ($_POST['manager_email'] && !preg_match($email_pattern, $_POST['manager_email'])) {
		echo "<script>alert('Manager's email not valid')</script>";
		echo "	<script> window.location.href = 'preregistration.html';</script>";
		exit;
	}


	$name = trim($_POST['first-name']);
	$surname = trim($_POST['last-name']);
	$category = $_POST['category'];	//male or female
	$birthdate = $_POST['birthdate']; //format: yyyy-mm-dd
	$mobile_phone = trim($_POST['mobile-phone']);
	$athlete_email = htmlspecialchars(trim($_POST['athlete-email']));
	$citizenship = $_POST['cittadinanza'];
	$eap_member = $_POST['eap-member'];	//yes or no
	$eap_member_number = $_POST['eap-member-number'];	//optional (if eap_member == yes)
	$manager = trim($_POST['manager']);	//optional
	$manager_phone = trim($_POST['manager-phone']);	//optional
	$manager_email = htmlspecialchars(trim($_POST['manager-email']));	//optional	
	$competition1 = $_POST['competition1'];
	$competition2 = $_POST['competition2'];	//optional; check it is different from competition1
	$profile_link = $_POST['profile-link'];
	$additional_notes = htmlspecialchars(trim($_POST['additional-notes']));


	header("Location: thank_you.html");
	/*sendEmail($athlete_email);*/
}