<?php
	//allow link to every page when user logged in
	session_start();
	require("../Database/connect.php");
	// include("../function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">
    <title>Sign In Page</title>
</head>
<body>
    <div id="container">
		<div id="loginbox">
			<section id="ButtonBox">
				<section id="btn"></section>
				<button type="button" class="sButton" onclick="signin()">Log In</button>
				<button type="button" class="sButton" onclick="Register()">Register</button>
			</section>

		<!--login form -->
			<form id="signin" class="inputGroup" action="loginAction.php" method="post">
				<input type="Email" class="inputMember" placeholder="Email" name="email" required>
				<input type="password" class="inputMember" placeholder="Password" name="password" required>
				<span style="padding: 10px;">Select User Type : <select name="usertype">
					<option value="admin">admin</option>
					<option value="user" selected>user</option>
				</select></span>
				<button type="submit" class="LoginBtn" name="login">Log In</button>
				<a href="ForgetPass_UI.php" target="_blank" id="forget">Forget password</a>
			</form>

		<!-- Register form -->
			<form id="Register" class="inputGroup" action="registerAction.php" method="post">
				<input type="text" class="inputMember" placeholder="Username" name="username" required>
				<input type="text" class="inputMember" placeholder="Contact eg: 0123456789" name="contact" required>
				<input type="text" class="inputMember" placeholder="male/female/others" name="gender" required>
				<input type="Email" class="inputMember" placeholder=" Email" name="email" required>
				<input type="password" class="inputMember" placeholder="Password" name= "password" required id="pass">
				<input type="password" class="inputMember" placeholder="Confirm Password" name="confirm_password" required
					id="confirm_password">
				<input type="date" class="inputMember" name="dob" require placeholder="Date Of Birth">
				<input type="checkbox" class="checkbox" required><span>I agree to the <a href="termNcondition_UI.html"
						target="_blank"><u>Terms & Conditions<u></a></span>
				<button type="submit" class="LoginBtn">Register</button>
			</form>
		</div>
	</div>
	<script src="function.js"></script>
</body>
</html>