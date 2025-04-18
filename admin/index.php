<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<style>
		body {
			background-image: url('mimg/267.png'); /* Replace with your actual image path */
			background-size: cover;
			background-position: center;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		.login-box {
			background-color: rgba(255, 255, 255, 0.9);
			box-shadow: 1px 3px 15px 2px rgba(0, 0, 0, 0.5);
			width: 40%;
			margin: 100px auto;
			padding: 20px;
			border-radius: 10px;
		}
		.text {
			width: 90%;
			padding: 10px;
			font-size: 16px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}
		.btn {
			background-color: #7289da;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
		}
		.title {
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			margin-bottom: 20px;
			color: #2c2f33;
		}
		.h {
	color: white;
	background-color: #23272a;
	/* Darker admin panel header */
	font-size: 2.5em;
	text-align: center;
	padding: 25px;
	font-weight: bold;
	letter-spacing: 2px;
	text-transform: uppercase;
	box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);

	/* Orange accent */
}
	</style>
	<div class="h">Swaadghar</div>
</head>
<body>

	<form action="loginck.php" method="post">
		<div class="login-box">
		
			<div class="title"><img src="mimg/admin.png"style="height: 30px; vertical-align: middle; margin-right: 10px;">ADMIN  </div>
			<div align="center">
				<input type="text" name="aid" placeholder="Enter Admin ID" class="text" required><br><br>
				<input type="password" name="pass" placeholder="Enter Password" class="text" required><br><br>
				<input type="submit" name="s" value="Login Now" class="btn">
			</div>
		</div>
	</form>

</body>
</html>
