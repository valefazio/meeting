<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Registration</title>
    <style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

		body {
			font-family: 'Poppins', sans-serif;
			background: #b0d8e9;
			background-image: url(../Images/logo.png);
			background-size: 40%;
			margin: 0;
			font-size: 15px;
			color: #555;
		}
		h1 {
			color: #156988;
			text-align: center;
			font-size: 40px;
		}
		#form-sfondo {
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh; /* Ensure the form takes at least the full height of the viewport */
		}
		#form {
			width: 600px;
			background: #b6dff0;
			border-radius: 10px;
			padding-bottom: 30px;
			padding-left: 20px;
			margin-top: 30px;
		}
		td {
			border-collapse: collapse;
			border: 5px solid #b6dff0;
		}
		label {
			display: block;
			color: #555;
			text-align: right;
		}
		input[type='text'],
		input[type='password'],
		input[type='email'] {
			width: 80%;
			padding: 10px;
			margin: 5px 0 0 0;
			border: 1px solid #ccc;
			border-radius: 3px;
			font-size: 11px;
		}
		input[type='radio'],
		input[type='checkbox'] {
			width: 10%;
			padding: 10px;
			margin: 5px 0 0 0;
			border: 1px solid #ccc;
			color: #000;
			border-radius: 3px;
			font-size: 11px;
		}
		select {
			width: 86.5%;
			padding: 10px;
			margin: 5px 0 0 0;
			border: 1px solid #ccc;
			border-radius: 10px;
			font-size: 11px;
			color: #555; /* Set your desired text color */
		}
		#divisore {
			background-color: #2596be;
			padding: 0 0 0 20px;
			height: 10px;
			border: none;
			border-radius: 3px;
			text-align: center;
			color: #f2f6f7;
		}
		#info-groups {
			width: 100%;
			border: 2px solid #2596be;
			border-radius: 3px;
		}
		input[type='submit'] {
			background-color: #3498db;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 10px;
			font-size: 20px;
			cursor: pointer;
			width: 50%;
			margin: auto;
			display: flex;
		}
		input[type='submit']:hover {
			background-color: #258cd1;
		}

		input[type='submit']:disabled {
			background-color: grey;
		}
	</style>
</head>
<body id='form-sfondo'>
	<div id='form'>
		<form action='' method='POST'>
			<table style="width:580px">
				<caption>
					<h1 style='text-align: center;'>Pre-Registration</h1>
					<h3 style='text-align: center; margin: 0; padding: 0; font-style: italic'>Fill in the form below to pre-register for the 2024 Edition.</h3>
					<h4 style='text-align: center; margin: 0; padding: 0; font-style: italic'>DATA</h4>
					<p style='text-align: center; margin: 0 0 10px 0; padding: 0; font-style: italic'>* Required fields</p>
				</caption>
				<tbody>
					<tr>
						<td colspan='2'>
							<table id="info-groups">
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
									<td><input type='text' id='birthdate' name='birthdate' placeholder='dd/mm/yyyy' required=''></td>
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
									<td><select id='citizenship' name='cittadinanza'>
										<?php include '../Management/countries.php'; ?>
									</select>
									</td>
								</tr>
								<tr>
									<td><label for='club-national-team'>Club/National team:</label></td>
									<td><input type='text' id='club-national-team' name='club-national-team'></td>
								</tr>
								<tr>
									<td><label for='eap-member'>Are you an EAP member?</label></td>
									<td>
										<input type='radio' id='eap-member-yes' name='eap-member' value='yes'>Yes
										<input type='radio' id='eap-member-no' name='eap-member' value='no'>No
									</td>
								</tr>
							</table>
						</td>
					</tr>
					
					<tr>
						<td colspan='2'>
							<table id="info-groups">
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
							<table id="info-groups">
								<tr><td colspan='2' id='divisore'><h2>Competition events</h2></td></tr>
								<tr>
									<td><label for='competition1'>Competition 1:</label></td>
									<td><select id='competition1' name='competition1'>
											<option value='' disabled selected>Select one</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><label for='competition2'>Competition 2:</label></td>
									<td><select id='competition2' name='competition2'>
											<option value='' disabled selected>Select one</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><label for='competition3'>Competition 3:</label></td>
									<td><select id='competition3' name='competition3'>
											<option value='' disabled selected>Select one</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><label for='profile-link'>World Athletics Profile link:</label></td>
									<td><input type='text' id='profile-link' name='profile-link'></td>
								</tr>
							</table>
						</td>
					</tr>
					
					<tr>
						<td colspan='2'>
							<table id="info-groups">
								<tr><td colspan='2' id='divisore'><h2>Clean & Fair section</h2></td></tr>
								<tr>
									<td style='text-align: right'><input type='checkbox' id='code-of-conduct' name='code-of-conduct' required></input></td>
									<td><label style='text-align: left' for='code-of-conduct'>I accept the EAP Code of Conduct*</label></td>
								</tr>
								<tr>
									<td style='text-align: right'><input type='checkbox' id='safeguarding-policies' name='safeguarding-policies' required></input></td>
									<td><label style='text-align: left' for='safeguarding-policies'>I have read and understood the EAP Safeguarding Policies*</label></td>
								</tr>
								<tr>
									<td style='text-align: right'><input type='checkbox' id='run-clean-certification' name='run-clean-certification' required></input></td>
									<td><label style='text-align: left' for='run-clean-certification'>I Run Clean® certification?*</label></td>
								</tr>
						<!-- RENDERLA OBBLIGATORIA SE IRC = YES -->
								<tr>
									<td><label for='certification-info'>If YES, add more info (date of completion and certification number):</label></td>
									<td><textarea style='width: 280px' id='certification-info' name='certification-info' rows='4' cols='50'></textarea></td>
								</tr>
								<tr>
									<td><label for='additional-notes'>Additional notes:</label></td>
									<td><textarea style='width: 280px' id='additional-notes' name='additional-notes' rows='4' cols='50'></textarea></td>
								</tr>
							</table>
						</td>
					</tr>
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
		// Ottieni i riferimenti agli elementi del modulo
		const firstNameInput = document.getElementById('first-name');
		const lastNameInput = document.getElementById('last-name');
		const categoryInputs = document.getElementsByName('category');
		const birthdateInput = document.getElementById('birthdate');
		const mobilePhoneInput = document.getElementById('mobile-phone');
		const athleteEmailInput = document.getElementById('athlete-email');
		const repeatAthleteEmailInput = document.getElementById('repeat-athlete-email');
		const citizenshipInput = document.getElementById('citizenship');
		const registerButton = document.getElementById('register-button');

		// Aggiungi un gestore di eventi per verificare se tutti i campi sono stati riempiti
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
				firstNameInput.value !== '' &&
				lastNameInput.value !== '' &&
				isCategorySelected() &&
				birthdateInput.value !== '' &&
				mobilePhoneInput.value !== '' &&
				athleteEmailInput.value !== '' &&
				repeatAthleteEmailInput.value !== '' &&
				citizenshipInput.value !== ''
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
