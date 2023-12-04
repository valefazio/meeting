<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Registration</title>
    
</head>
<body id='form-sfondo'>
	<div id='form'>
		<form action='' method='POST'>
			<table style="width:580px">
				<caption><h1>Pre-Registration</h1></caption>
				<tbody>
					<tr>
						<td colspan="2">
							<table style="border: 1px solid black; width: 100%">
								<tr><td colspan='2' id='divisore'><h2>Athlete's information</h2></td></tr>
								<tr>
									<td><label for='first-name'>First name*:</label></td>
									<td><input type='text' id='first-name' name='first-name' required></td>
								</tr>
								<tr>
									<td><label for='last-name'>Last name/Surname*:</label></td>
									<td><input type='text' id='last-name' name='last-name' required></td>
								</tr>
							</table>
						</td>
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
					<tr>
						<td colspan='2'>
							<input cols type='submit' value='Registrati' id='register-button' disabled>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</body>
</html>
