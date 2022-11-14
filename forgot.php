
<?php include 'forgot_password_generate.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP Forgot Password</title>
<link href="css/password.css" rel="stylesheet">
</head>
<body>
<div class="container main">
<h2>Forgot Password</h2>
<form action="forgot_password.php" method="post">
<label class="heading">Email :</label>
<input name="email" type="text">
<input name="submit" type="submit" value="Resend Password">
<span class="error"><?php echo $Error;?></span>
<span class="success"><?php echo $successMessage;?></span>
</form>
<p><b>Note :</b> Enter your email, password will be send to your email address.</p>
<a class="login" href="password_login.php">SignIn</a>
</div>
</body>
</html>
