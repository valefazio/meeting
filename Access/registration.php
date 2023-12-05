<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
	<link rel="stylesheet" type="text/css" href="../Management/Style/accessStyle.css">
	<?php
		include("../Management/navbar.php");
	?>
</head>
<body id="form-sfondo">
    <div id="form">
        <form action="" method="POST">
			<table>
				<tr>
					<td colspan="2" style="height: fit-content"><h1>Registration</h1></td>
				</tr>
				<tr>
					<td><label for="username">Username:</label></td>
					<td><input type="text" id="username" name="username" required></td>
				</tr>
				<tr>
					<td><label for="email">Email:</label></td>
					<td><input type="email" id="email" name="email" required></td>
				</tr>
				<tr>
					<td><label for="pass">Password:</label></td>
					<td><input type="password" id="pass" name="pass" required></td>
				</tr>
				<tr>
					<td><label for="confirm-password">Confirm Password:</label></td>
					<td><input type="password" id="confirm-password" name="confirm-password" required></td>
				</tr>
				<tr>
					<td><p></p></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Registrati" id="register-button" disabled></td>
				</tr>
			</table>
        </form>
    </div>

    <script>
        // Ottieni i riferimenti agli elementi del modulo
        const usernameInput = document.getElementById("username");
        const passwordInput = document.getElementById("pass");
        const confirmPasswordInput = document.getElementById("confirm-password");
        const emailInput = document.getElementById("email");
        const registerButton = document.getElementById("register-button");

        // Aggiungi un gestore di eventi per verificare se tutti i campi sono stati riempiti
        usernameInput.addEventListener("input", toggleRegisterButton);
        passwordInput.addEventListener("input", toggleRegisterButton);
        confirmPasswordInput.addEventListener("input", toggleRegisterButton);
        emailInput.addEventListener("input", toggleRegisterButton);

        function toggleRegisterButton() {
            if (usernameInput.value !== "" && passwordInput.value !== "" && confirmPasswordInput.value !== "" && emailInput.value !== "") {
                registerButton.removeAttribute("disabled");
            } else {
                registerButton.setAttribute("disabled", "disabled");
            }
        }
    </script>
	
	<?php
		$email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$psw = password_hash(trim($_POST['pass']), PASSWORD_DEFAULT);
			if (!password_verify($_POST['confirm-password'], $psw)) {
				echo "<script>alert('Le password inserite non combaciano')</script>";
				echo "	<script> setTimeout(function() {
							window.location.href = 'registration.php';
							}, 2000);
						</script>";
				exit;
			} else if(!preg_match($email_pattern, $_POST['email'])) {
				echo "<script>alert('Il campo email non rispetta il formato richiesto')</script>";
				echo "	<script> setTimeout(function() {
							window.location.href = 'registration.php';
						}, 2000);
					</script>";
				exit;
			}

			$email = htmlspecialchars(trim($_POST['email']));

			$res = selectDb("email", "email = '$email'");
			if($res->num_rows != 0) {
				echo "<script>alert('Utente già registrato')</script>";
				echo "<script>window.location.href = 'registration.php'</script>";
				exit;
			}
			$username = htmlspecialchars(trim($_POST["username"]));
			insertDb("username, email, password", "'$username', '$email', '$psw'");
			
			header("Location: ../Pages/users.php");
		}
	?>
</body>
</html>
