<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
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
		}
		h1 {
			color: #333;
		}
		#form-sfondo {
			display: flex;
			height: 100vh;
			align-items: center;
			justify-content: center;
			color: #555;
		}
		#form {
			width: 350px;
			background: #b6dff0;
			border-radius: 10px;
			padding-bottom: 30px;
		}
		#form-dati {
			margin: 0% -7% 0% 7%;
		}

		.label {
			display: block;
			color: #555;
			text-align: left;
		}

		input[type="text"],
		input[type="password"],
		input[type="email"] {
			width: 80%;
			padding: 10px;
			margin: 5px 0 0 0;
			border: 1px solid #ccc;
			border-radius: 3px;
			font-size: 16px;
		}

		input[type="submit"] {
			background-color: #3498db;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			font-size: 16px;
			cursor: pointer;
			width: 50%;
			margin: auto;
			display: flex;
		}

		input[type="submit"]:hover {
			background-color: #258cd1;
		}

		input[type="submit"]:disabled {
			background-color: grey;
		}
	</style>
</head>
<body id="form-sfondo" style=>
    <div id="form">
        <form action="" method="POST">
			<div id="form-dati">
        		<h1>Registration</h1>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass" required><br><br>

                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required><br><br>
			</div>
            <input type="submit" value="Registrati" id="register-button" disabled>
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
		if(!session_start()) exit("Troubles starting session.");

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

			include "../Management/connection.php";
			$res = selectDb("email", "email = '$email'");
			if($res->num_rows != 0) {
				echo "<script>alert('Utente già registrato')</script>";
				echo "<script>window.location.href = 'login.php'</script>";
				exit;
			}
			$username = htmlspecialchars(trim($_POST["username"]));
			insertDb("username, email, password", "'$username', '$email', '$psw'");
			
			$_SESSION['logged'] = $email;
			header("Location: ../Pages/index.php");
		}
	?>
</body>
</html>
