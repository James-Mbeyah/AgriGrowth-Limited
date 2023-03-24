<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
    <div class="hero">
       <div class="logo">
                <a href="http://localhost/agrigrowth/homepage.php"><img src="http://localhost/agrigrowth/images/trlogo1.jpg" alt=""></a>
            </div>
    <div class="hero">
	<div class="header">
    	<h1>Register User</h1>
    </div>        
    <form method="post" action="signup.php" >
    	<!-- display errors -->
    	<?php if (count($errors) > 0): ?>
    	<div class="error">
			<?php foreach ($errors as $error): ?>
				<li><?php echo $error; ?></li>
			<?php endforeach; ?>
		</div>
    	<?php endif ?>
    	<div class="input-group">
    		<label>Username</label>
    		<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter your username" >
    	</div>
    	<div class="input-group">
    		<label>Email</label>
    		<input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email">
    	</div>
    	<div class="input-group">
    		<label>Password</label>
    		<input type="password" name="password" placeholder="Enter your password">
    	</div>
    	<div class="input-group">
    		<label>Confirm Password</label>
    		<input type="password" name="passwordConf" placeholder="Please confirm your password">
    	</div>
    	<div class="input-group">
    		<button type="submit" name="signup-btn" class="btn" >Sign Up</button>
    	</div>
    	<p>
    		Already a member? <a href="login.php">Sign In</a>
    	</p>
    </form>
    </div>
</body>
</html>