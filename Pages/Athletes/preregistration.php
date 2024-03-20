<?php
include '../../Management/connection.php';
$email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

// Get the values from the form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["safeguarding-policies"]) && isset($_POST["code-of-conduct"])) {
	if (!preg_match($email_pattern, $_POST['athlete-email'])) {
		echo "<script>alert('Athlete's email not valid')</script>";
		echo "	<script>window.location.href = 'preregistration.html';</script>";
		exit;
	}

	if ($_POST['manager-email'] && !preg_match($email_pattern, $_POST['manager-email'])) {
		echo "<script>alert('Manager's email not valid')</script>";
		echo "	<script> window.location.href = 'preregistration.html';</script>";
		exit;
	}


	$name = formatName(trim($_POST['name']));
	$surname = formatName(trim($_POST['surname']));
	$category = $_POST['category'];	//M or F
	$birthdate = $_POST['birthdate']; //format: yyyy-mm-dd
	$phone = trim($_POST['phone']);
	$athlete_email = htmlspecialchars(trim($_POST['athlete-email']));
	$citizenship = $_POST['cittadinanza'];
	$eap_member = $_POST['eap-member'];	//yes or no
	if ($eap_member == "yes")
		$eap_member_team = $_POST['eap-member-team'];	//optional (if eap_member == yes)
	$manager = NULL;
	$manager_phone = NULL;
	$manager_email = NULL;
	if(isset($_POST['manager']) && $_POST['manager'] != "")
		$manager = formatName(trim($_POST['manager']));	//optional
	if(isset($_POST['manager-phone']) && $_POST['manager-phone'] != "")
		$manager_phone = trim($_POST['manager-phone']);	//optional
	if(isset($_POST['manager-email']) && $_POST['manager-email'] != "")
		$manager_email = htmlspecialchars(trim($_POST['manager-email']));	//optional	
	$competition1 = $_POST['competition1'];
	if (isset($_POST['competition2']) && $_POST['competition2'] != "")
		$competition2 = $_POST['competition2'];	//optional; check it is different from competition1
	$profile_link = $_POST['profile-link'];
	if (isset($_POST['run-clean-certification']))
		$IRC = $_POST['IRC'];	//check; yes or no
	$additional_notes = htmlspecialchars(trim($_POST['additional-notes']));


	// Check if the ATHLETE is already registered
	$athlete = selectDb("athletes", ["name", "surname", "birthdate"], "name = '$name' AND surname = '$surname' AND birthdate = '$birthdate'");
	if ($athlete->num_rows > 0) {
		echo "<script>console.log('Athlete already registered!')</script>";
		header("Location: preregistration.html");
		exit;
	}
	// Insert ATHLETES into the database
	$athleteColumns = ["name", "surname", "category", "birthdate", "phone", "email", "citizenship", "stato"];
	$athleteValues = [$name, $surname, $category, $birthdate, $phone, $athlete_email, $citizenship, 'D'];	//NOW non funziona
	insertDb("athletes", $athleteColumns, $athleteValues);
	$athleteId = selectDb("athletes", ["id"], "name = '$name' AND surname = '$surname' AND birthdate = '$birthdate'");
	if($athleteId->num_rows > 0) {
		$athleteId = $athleteId->fetch_assoc();
		$athleteId = $athleteId['id'];
	}

	// Check if the MANAGER is already registered
	if ($manager_email != "") {
		$managerS = selectDb("managers", ["manager_name, manager_phone"], "manager_email = '$manager_email'");
		if ($managerS->num_rows > 0) {
			$managerS = $managerS->fetch_assoc();
			if($managerS['manager_name'] != $manager && $managerS['manager_name']!=null)
				updateDb("managers", ["manager_name"], [$manager], "manager_email = '$manager_email'");
			if($managerS['manager_phone'] != $manager_phone && $managerS['manager_phone']!=null)
				updateDb("managers", ["manager_phone"], [$manager_phone], "manager_email = '$manager_email");
		} else {
			// Insert MANAGER into the database
			insertDb("managers", ["manager_name", "manager_phone", "manager_email"], [$manager, $manager_phone, $manager_email]);
		}
	}

	//EAP
	if ($eap_member == "yes")
		updateDb("athletes", ["eap"], [$eap_member_team], "id = $athleteId");
	if (isset($IRC))
		updateDb("athletes", ["IRC"], [$IRC], "id = $athleteId");
	//MANAGER
	if ($manager_email != null)
		updateDb("athletes", ["manager_email"], [$manager_email], "id = $athleteId");
	
	// Insert COMPETITIONS into the database
	insertDb("competitions", ["id", "comp1", "link"], [$athleteId, $competition1, $profile_link]);
	if (isset($competition2))
		updateDb("competitions", ["comp2"], [$competition2], "id = $athleteId");

	// Insert ADDITIONAL NOTES into the database
	if ($additional_notes != "")
		insertDb("org_details", ["id", "note_atle"], [$athleteId, $additional_notes]);

	// Send an email to the athlete
	/*sendEmail($athlete_email);*/

	// Redirect to the thank you page
	header("Location: thank_you.html");
}


function formatName($name) {
	$name = strtolower($name);
	$name = ucfirst($name);
	return $name;
}