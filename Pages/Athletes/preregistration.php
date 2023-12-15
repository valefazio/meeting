<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Pre-registration Meeting Arcobaleno</title>
	<link rel='stylesheet' type='text/css' href='../../Management/Style/athelesReg.css'>
</head>
<body>
	<div id='form'>
		<form action='' method='POST'>
			<h1>Pre-Registration</h1>
			<h2 style='color: #156988;'>Meeting Arcobaleno EAP AtleticaEuropa</h3>
			<h3 style='font-style: italic'>Fill in the form below to pre-register.</h3>
			<h4 style='font-style: italic'>DATA</h4>
			<p style='text-align: center; margin: 0 0 10px 0; font-style: italic'>* Required fields</p>
			<table style="width: 100%;">
				<tbody style="width: 100%; display: block;">
					<tr><td colspan="2" style="width: 100%; display: grid;">
						<table id="athlete" style="width: fit-content; display: contents">
							<tr><td colspan='2' id='divisore'><h2>Athlete's information</h2></td></tr>
							<tr>
								<td id="left" style="padding-top: 3.5%;"><label for='first-name'>First name*:</label></td>
								<td><input type='text' id='first-name' name='first-name' required></td>
							</tr>
							<tr>
								<td id="left" style="padding-top: 3%;"><label for='last-name'>Last name/Surname*:</label></td>
								<td><input type='text' id='last-name' name='last-name' required></td>
							</tr>
							<tr>
								<td id="left" style="padding-top: 0.5%;"><label for='category'>Category*:</label></td>
								<td>
									<input type='radio' id='male' name='category' value='male' required>Male
									<input type='radio' id='female' name='category' value='female' required>Female
								</td>
							</tr>
							<tr>
								<td id="left" style="padding-top: 0.8%;"><label for='birthdate'>Birthdate*:</label></td>
								<td><input type='date' id='birthdate' name='birthdate' placeholder='dd/mm/yyyy' required=''></td>
							</tr>
							<tr>
								<td id="left" style="padding-top: 3%;"><label for='mobile-phone'>Mobile phone*:</label></td>
								<td><input type='text' id='mobile-phone' name='mobile-phone' placeholder='Example: +39 338 111 22 33' required=''></td>
							</tr>
							<tr>
								<td id="left" style="padding-top: 3%;"><label for='athlete-email'>Email*:</label></td>
								<td><input type='email' id='athlete-email' name='athlete-email' required></td>
							</tr>
							<tr>
								<td id="left" style="padding-top: 3%;"><label for='repeat-athlete-email'>Repeat email*:</label></td>
								<td><input type='email' id='repeat-athlete-email' name='repeat-athlete-email' required></td>
							</tr>
							<tr>
								<td id="left" style="padding-top: 3%;"><label for='citizenship'>Citizenship*:</label></td>
								<td><select id='citizenship' name='cittadinanza' required>
									<?php include '../../Management/options/countries.php'; ?>
								</select>
								</td>
							</tr>
							<tr>
								<td id="left" style="padding-top: 1%;"><label for='eap-member'>Are you an EAP member?*</label></td>
								<td>
									<input type='radio' id='eap-member-yes' name='eap-member' value='yes' required>Yes
									<input type='radio' id='eap-member-no' name='eap-member' value='no'>No
								</td>
							</tr>
						</table>
					</td></tr>
					
					<tr><td colspan="2" style="width: 100%; display: grid;">
							<table id="manager" style="width: fit-content; display: contents">
								<tr><td colspan='2' id='divisore'><h2>Manager or Team Leader's information</h2></td></tr>
								<tr>
									<td id="left" style="padding-top: 3.5%;"><label for='manager'>Manager:</label></td>
									<td><input type='text' id='manager' name='manager'></td>
								</tr>
								<tr>
									<td id="left" style="padding-top: 3.5%;"><label for='manager-phone'>Phone:</label></td>
									<td><input type='text' id='manager-phone' name='manager-phone' placeholder='Example: +39 338 111 22 33'></td>
								</tr>
								<tr>
									<td id="left" style="padding-top: 3.5%;"><label for='manager-email'>Email:</label></td>
									<td><input type='email' id='manager-email' name='manager-email'></td>
									</tr>
							</table>
						</td>
					</tr>
					
					<tr><td colspan="2" style="width: 100%; display: grid;">
							<table id="events" style="width: fit-content; display: contents">
								<tr><td colspan='2' id='divisore'><h2>Competition events</h2></td></tr>
								<tr>
									<td id="left" style="padding-top: 3.5%;"><label for='competition1'>Competition 1*:</label></td>
									<td><select id='competition1' name='competition1' required>
											<?php include '../../Management/options/events.php'; ?>
										</select>
									</td>
								</tr>
								<tr>
									<td id="left" style="padding-top: 3.5%;"><label for='competition2'>Competition 2:</label></td>
									<td><select id='competition2' name='competition2'>
											<?php include '../../Management/options/events.php'; ?>
										</select>
									</td>
								</tr>
								<tr>
									<td id="left" style="padding-top: 3.5%;"><label for='profile-link'>World Athletics Profile link*:</label></td>
									<td><input type='text' id='profile-link' name='profile-link' required></td>
								</tr>
							</table>
						</td>
					</tr>
					
					<tr><td colspan="2" style="width: 100%; display: grid;">
							<table id="checks" style="width: fit-content; display: contents">
								<tr><td colspan='2' id='divisore'><h2>Clean & Fair section</h2></td></tr>
								<tr>
									<td style="width: 5%; text-align:right; padding-right: 10px;"><input type='checkbox' id='code-of-conduct' name='code-of-conduct' required/></td>
									<td><label style='text-align: left' for='code-of-conduct'>I accept the EAP Code of Conduct*</label></td>
								</tr>
								<tr>
									<td style="width: 5%; text-align:right; padding-right: 10px;"><input type='checkbox' id='safeguarding-policies' name='safeguarding-policies' required/></td>
									<td><label style='text-align: left' for='safeguarding-policies'>I have read and understood the EAP Safeguarding Policies*</label></td>
								</tr>
								<tr>
									<td style="width: 5%; text-align:right; padding-right: 10px;"><input type='checkbox' id='run-clean-certification' name='run-clean-certification' unset/></td>
									<td><label style='text-align: left' for='run-clean-certification'>I Run Clean® certification</label></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td><label for='additional-notes'>Additional notes:</label></td>
						<td><textarea style='width: 60%; margin-right: 10%' id='additional-notes' name='additional-notes' rows='4' cols='50'></textarea></td>
					</tr>
					<tr><td><br></td></tr>
					<tr>
						<td colspan='2' style="width: 100%; display: block;">
							<input cols type='submit' value='Registrati' id='register-button' disabled>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>

   
   <?php
		include "scripts.html";

		$email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

		// Get the values from the form
		if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["safeguarding-policies"])) {	
			if(!preg_match($email_pattern, $_POST['athlete-email'])) {
				echo "<script>alert('Athlete's email not valid')</script>";
				echo "	<script> setTimeout(function() {
							window.location.href = 'preregistration.php';
						}, 2000);
					</script>";
				exit;
			}

			if($_POST['manager_email'] && !preg_match($email_pattern, $_POST['manager_email'])) {
				echo "<script>alert('Manager's email not valid')</script>";
				echo "	<script> setTimeout(function() {
							window.location.href = 'preregistration.php';
						}, 2000);
					</script>";
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
			
			/*sendEmail($athlete_email);*/
		}
	?>
</body>
</html>
