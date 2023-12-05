<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Pre-registration Meeting Arcobaleno</title>
	<link rel='stylesheet' type='text/css' href='../Management/Style/athelesReg.css'>
</head>
<body id='form-sfondo'>
	<div id='form'>
		<form action='' method='POST'>
			<table>
				<caption>
					<h1 style='text-align: center; margin: 14px;'>Pre-Registration</h1>
					<h2 style='text-align: center; margin: 0; color: #156988;'>Meeting Arcobaleno EAP AtleticaEuropa</h3>
					<h3 style='text-align: center; margin: 0; font-style: italic'>Fill in the form below to pre-register for the 2024 Edition.</h3>
					<h4 style='text-align: center; margin: 0; font-style: italic'>DATA</h4>
					<p style='text-align: center; margin: 0 0 10px 0; font-style: italic'>* Required fields</p>
				</caption>
				<tbody>
					<tr>
						<td colspan='2'>
							<table id="athlete">
								<tr><td colspan='2' id='divisore'><h2>Athlete's information</h2></td></tr>
								<tr>
									<td><label for='first-name'>First name*:</label></td>
									<td><input type='text' id='first-name' name='first-name' required></td>
								</tr>
								<tr>
									<td><label for='last-name'>Last name/Surname*:</label></td>
									<td><input type='text' id='last-name' name='last-name' required></td>
								</tr>
								<tr>
									<td><label for='category'>Category*:</label></td>
									<td>
										<input type='radio' id='male' name='category' value='male' required>Male
										<input type='radio' id='female' name='category' value='female' required>Female
									</td>
								</tr>
								<tr>
									<td><label for='birthdate'>Birthdate*:</label></td>
									<td><input type='date' id='birthdate' name='birthdate' placeholder='dd/mm/yyyy' required=''></td>
								</tr>
								<tr>
									<td><label for='mobile-phone'>Mobile phone*:</label></td>
									<td><input type='text' id='mobile-phone' name='mobile-phone' placeholder='Example: +39 338 111 22 33' required=''></td>
								</tr>
								<tr>
									<td><label for='athlete-email'>Email*:</label></td>
									<td><input type='email' id='athlete-email' name='athlete-email' required></td>
								</tr>
								<tr>
									<td><label for='repeat-athlete-email'>Repeat email*:</label></td>
									<td><input type='email' id='repeat-athlete-email' name='repeat-athlete-email' required></td>
								</tr>
								<tr>
									<td><label for='citizenship'>Citizenship*:</label></td>
									<td><select id='citizenship' name='cittadinanza' required>
										<?php include '../Management/countries.php'; ?>
									</select>
									</td>
								</tr>
								<tr>
									<td><label for='eap-member'>Are you an EAP member?*</label></td>
									<td>
										<input type='radio' id='eap-member-yes' name='eap-member' value='yes' required>Yes
										<input type='radio' id='eap-member-no' name='eap-member' value='no'>No
									</td>
								</tr>
							</table>
						</td>
					</tr>
					
					<tr>
						<td colspan='2'>
							<table id="manager">
								<tr><td colspan='2' id='divisore'><h2>Manager or Team Leader's information</h2></td></tr>
								<tr>
									<td><label for='manager'>Manager:</label></td>
									<td><input type='text' id='manager' name='manager'></td>
								</tr>
								<tr>
									<td><label for='manager-phone'>Phone:</label></td>
									<td><input type='text' id='manager-phone' name='manager-phone' placeholder='Example: +39 338 111 22 33'></td>
								</tr>
								<tr>
									<td><label for='manager-email'>Email:</label></td>
									<td><input type='email' id='manager-email' name='manager-email'></td>
									</tr>
							</table>
						</td>
					</tr>
					
					<tr>
						<td colspan='2'>
							<table id="events">
								<tr><td colspan='2' id='divisore'><h2>Competition events</h2></td></tr>
								<tr>
									<td><label for='competition1'>Competition 1*:</label></td>
									<td><select id='competition1' name='competition1' required>
											<?php include '../Management/events.php'; ?>
										</select>
									</td>
								</tr>
								<tr>
									<td><label for='competition2'>Competition 2:</label></td>
									<td><select id='competition2' name='competition2'>
											<?php include '../Management/events.php'; ?>
										</select>
									</td>
								</tr>
								<tr>
									<td><label for='profile-link'>World Athletics Profile link*:</label></td>
									<td><input type='text' id='profile-link' name='profile-link' required></td>
								</tr>
							</table>
						</td>
					</tr>
					
					<tr>
						<td colspan='2'>
							<table id="checks">
								<tr><td colspan='2' id='divisore'><h2>Clean & Fair section</h2></td></tr>
								<tr>
									<td style="width: 25px; text-align:right; padding-right: 10px;"><input type='checkbox' id='code-of-conduct' name='code-of-conduct' required/></td>
									<td><label style='text-align: left' for='code-of-conduct'>I accept the EAP Code of Conduct*</label></td>
								</tr>
								<tr>
									<td style="width: 25px; text-align:right; padding-right: 10px;"><input type='checkbox' id='safeguarding-policies' name='safeguarding-policies' required/></td>
									<td><label style='text-align: left' for='safeguarding-policies'>I have read and understood the EAP Safeguarding Policies*</label></td>
								</tr>
								<tr>
									<td style="width: 25px; text-align:right; padding-right: 10px;"><input type='checkbox' id='run-clean-certification' name='run-clean-certification' required unset/></td>
									<td><label style='text-align: left' for='run-clean-certification'>I Run Clean® certification</label></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td style='width: 180px'><label for='additional-notes' style='width: 180px'>Additional notes:</label></td>
						<td><textarea style='width: 350px; margin-right: 30px' id='additional-notes' name='additional-notes' rows='4' cols='50'></textarea></td>
					</tr>
					<tr><td><br></td></tr>
					<tr>
						<td colspan='2'>
							<input cols type='submit' value='Registrati' id='register-button' disabled>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>

    <script>
		var inputs = document.getElementsByTagName('input');
		for (var i=0; i<inputs.length; i++)  {
			if (inputs[i].type == 'checkbox')   {
				inputs[i].checked = false;
			}
		}
		// Get references to form elements
		const firstNameInput = document.getElementById('first-name');
		const lastNameInput = document.getElementById('last-name');
		const categoryInputs = document.getElementsByName('category');
		const birthdateInput = document.getElementById('birthdate');
		const mobilePhoneInput = document.getElementById('mobile-phone');
		const athleteEmailInput = document.getElementById('athlete-email');
		const repeatAthleteEmailInput = document.getElementById('repeat-athlete-email');
		const citizenshipInput = document.getElementById('citizenship');
		const eapMemberInputs = document.getElementsByName('eap-member');
		const competition1Input = document.getElementById('competition1');
		const worldAthleticsProfileLinkInput = document.getElementById('profile-link');
		const codeOfConductInput = document.getElementById('code-of-conduct');
		const safeguardingPoliciesInput = document.getElementById('safeguarding-policies');
		const runCleanCertificationInput = document.getElementById('run-clean-certification');
		const registerButton = document.getElementById('register-button');

		// Add textarea for certification info if runCleanCertificationInput is checked
		runCleanCertificationInput.addEventListener('click', IRCcertificate);
		function IRCcertificate() {
   			var checksElement = document.getElementById("checks");

			if(runCleanCertificationInput.checked && document.getElementById("checks").childElementCount == 1) {
				tr = document.createElement("tr");
				tr.setAttribute("id", "irc-certification");
				td = document.createElement("td");
				td.setAttribute("style", "width: 31px; text-align:right; padding-right: 10px;");
				tr.append(td);
				document.getElementById("checks").appendChild(tr);
				//td.setAttribute("style", "width: 185px; text-align:right;");
				td = document.createElement("td");
				label = document.createElement("label");
				label.setAttribute("for", "certification-info");
				label.textContent = "If YES, add more info:";
				label.setAttribute("text-style", "italic");
				//td.append(label);
				textarea = document.createElement("textarea");
				textarea.setAttribute("style", "width: 320px");
				textarea.setAttribute("id", "certification-info");
				textarea.setAttribute("name", "certification-info");
				textarea.setAttribute("placeholder", "date of completion and certification number")
				td.append(label);
				td.append(textarea);
				tr.append(td);
				document.getElementById("checks").appendChild(tr);
			} else {
				var ircCertificationRow = document.getElementById('irc-certification');
				if (ircCertificationRow) {
					checksElement.removeChild(ircCertificationRow);
				}
			}
		}


		// Add an event handler to check if all fields are filled
		firstNameInput.addEventListener('input', toggleRegisterButton);
		lastNameInput.addEventListener('input', toggleRegisterButton);
		for (const categoryInput of categoryInputs) {
			categoryInput.addEventListener('input', toggleRegisterButton);
		}
		birthdateInput.addEventListener('input', toggleRegisterButton);
		mobilePhoneInput.addEventListener('input', toggleRegisterButton);
		athleteEmailInput.addEventListener('input', toggleRegisterButton);
		repeatAthleteEmailInput.addEventListener('input', toggleRegisterButton);
		citizenshipInput.addEventListener('input', toggleRegisterButton);

		function toggleRegisterButton() {
			if (
				firstNameInput.value.trim() !== '' &&
				lastNameInput.value.trim() !== '' &&
				isCategorySelected() &&
				birthdateInput.value.trim() !== '' &&
				mobilePhoneInput.value.trim() !== '' &&
				athleteEmailInput.value.trim() !== '' &&
				repeatAthleteEmailInput.value.trim() !== '' &&
				citizenshipInput.value.trim() !== ''
			) {
				registerButton.removeAttribute('disabled');
			} else {
				registerButton.setAttribute('disabled', 'disabled');
			}
		}

		function isCategorySelected() {
			for (const categoryInput of categoryInputs) {
				if (categoryInput.checked) {
					return true;
				}
			}
			return false;
		}
	</script>
</body>
</html>
