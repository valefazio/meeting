<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../Management/Style/accessStyle.css">
</head>
<body id="form-sfondo">
    <div id="form">
        <form action="" method="POST">
			<table>
				<tr>
					<td colspan="2" style="height: fit-content"><h1>Login</h1></td>
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
					<td><p></p></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Entra" id="login-button" disabled></td>
				</tr>
			</table>
        </form>
    </div>
</body>
</html>


    <script>
        // Ottieni i riferimenti agli elementi del modulo
        const emailInput = document.getElementById("email");
        const passwordInput = document.getElementById("pass");
        const loginButton = document.getElementById("login-button");

        // Aggiungi un gestore di eventi per verificare se tutti i campi sono stati riempiti
        passwordInput.addEventListener("input", toggleLoginButton);
        emailInput.addEventListener("input", toggleLoginButton);

        function toggleLoginButton() {
            if (emailInput.value !== "" && passwordInput.value !== "") {
                loginButton.removeAttribute("disabled");
            } else {
                loginButton.setAttribute("disabled", "disabled");
            }
        }
    </script>

	<?php
		//SESSIONE
		include("../Management/accessControl.php");
		if(isLogged()) {
			header("Location: ../Pages/home.php");
			exit;
		}
		
		if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['pass'])) {	//ha inserito i dati
			$email = htmlspecialchars($_POST['email']);
			$password = $_POST['pass'];

			$res = selectDb("email, password", "email = '$email'");
			if ($res->num_rows == 0) {
				echo "<script>alert('Email or password are not correct')</script>";
				if(session_status() == PHP_SESSION_ACTIVE)
					session_abort();
				echo "	<script> setTimeout(function() {
							window.location.href = 'login.php';
							}, 2000);
						</script>";
				exit;
			}
			$row = $res->fetch_assoc();
			if (!password_verify($password, $row['password'])) {
				echo "<script>alert('Email or password are not correct')</script>";
				if(session_status() == PHP_SESSION_ACTIVE)
					session_abort();
				echo "	<script> setTimeout(function() {
							window.location.href = 'login.php';
							}, 2000);
						</script>";
				exit;
			}
			$_SESSION['logged'] = $email;
			if(isset($_POST['remember-me'])) {
				$bytes = random_bytes(12);
				setcookie("remember-me", $bytes, time() + (86400 * 30), "/");
				$cookie = hash("sha256", $bytes);
				updateDb("remember_token", "'$cookie'", "email = '$email'");
				updateDb("remember_token_created_at", "CURRENT_TIMESTAMP", "email = '$email'");
			}
			
			header("Location: ../Pages/home.php");
			exit;

		} else {
			if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']))
				header("Location: login.php");
			//else wait for data...
		}
	?>
</body>
</html>
