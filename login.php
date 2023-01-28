<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>

	<!-- Theme style -->
	<link rel="stylesheet" href="components/css/login.css">
</head>

<body>
	<div class="container">
		<form action="login.php" method="post" class="login active" autocomplete="off">
			<h2 class="title"><b>IOT</b>-Gateway</h2>
			<div class="form-group">
				<label for="email">Email</label>
				<div class="input-group">
					<input type="email" id="email" name="email" placeholder="Email address">
					<i class='bx bx-envelope'></i>
				</div>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<div class="input-group">
					<input type="password" pattern=".{8,}" id="password" name="password" placeholder="Your password">
					<i class='bx bx-lock-alt'></i>
				</div>
				<span class="help-text">At least 8 characters</span>
			</div>
			<div class="form-group">
				<input type="checkbox" id="remember">
				<label for="remember">
					Remember Me
				</label>
			</div>
			<button type="submit" class="btn-submit" name="LoginButton">Login</button>
			<a href="#">Forgot password?</a>
			<p>I don't have an account. <a href="register.php">Register</a></p>
		</form>

	</div>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

<?php
include('db.php');

if (isset($_POST["LoginButton"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];

	$sqlQueryString = "SELECT * FROM tbl_userdetails where user_email = '$email' and password = '$password' ";

	$res = $MySQLiconn->query($sqlQueryString);

	if (mysqli_num_rows($res) > 0) {
		echo '<script type="text/javascript">';
		echo ' swal("Login successfull")
                                    .then((value) => {
                                        window.location.href = "http://subhahere.tech";
                                    });';  //not showing an alert box.
		echo '</script>';
	} else {
		echo '<script type="text/javascript">';
		echo ' swal("User Name or password incorrect ! please try again ")
                                .then((value) => {
                                    
                                });';  //not showing an alert box.
		echo '</script>';
	}
}

?>

</html>