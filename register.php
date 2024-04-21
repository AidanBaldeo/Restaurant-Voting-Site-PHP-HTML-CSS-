<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restirate</title>
    <link rel="stylesheet" href="main.css">
  </head>
	<body>
		<?php include "nav.php"; ?>

		<div id="content">
			<div class="registerform">
				<form method="post" action="registersql.php">
					<h2>Register</h2>
					<div class="inputs">
						<input type="text" name="firstname" required>
						<span>Firstname</span>
						<i></i>
					</div>
					<div class="inputs">
						<input type="text" name="lastname" required>
						<span>Lastname</span>
						<i></i>
					</div>
					<div class="inputs">
						<input type="email" name="email" required>
						<span>Email</span>
						<i></i>
					</div>
					<div class="inputs">
						<input type="text" name="username" required>
						<span>Username</span>
						<i></i>
					</div>
					<div class="inputs">
						<input type="password" name="password" required>
						<span>Password</span>
						<i></i>
					</div>
					<div class="submitbutton">
						<input type="submit" value="Register" name="submit">
					</div>
				</form>
			</div>
		</div>
  </body>
</html>