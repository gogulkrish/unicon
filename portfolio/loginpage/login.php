



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css"/>
    <title>Document</title>
</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="./reg.php" method="post">
			<h1>Create Account</h1>
			
			<input type="name" name="name" placeholder="Name" />
			<input type="email"  name="email"placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit" name="signup_post">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="./code.php" method="post">
			<h1>Sign in</h1>

			
			<input type="email"  name="email"placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button type="submit" name="login">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>Analyse Better than You Know Yourself</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>LET's BEGIN!</h1>
				<p>Challenge Yourself</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<script src="./index.js"> </script>
</body>
</html>