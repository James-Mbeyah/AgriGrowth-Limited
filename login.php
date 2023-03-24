<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div class="hero">
       <div class="logo">
                <a href="http://localhost/agrigrowth/homepage.php"><img src="http://localhost/agrigrowth/images/trlogo1.jpg" alt=""></a>
            </div>
    <div class="hero">
    <div class="header">
    	<h1>User Login</h1>
    </div>        
    <form method="post" action="login.php" >
        <!-- display errors -->
        <?php if (count($errors) > 0): ?>
        <div class="error">
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </div>
        <?php endif ?>
    	<div class="input-group">
    		<label>Username or Email</label>
    		<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter your username/email">
    	</div>
    	<div class="input-group">
    		<label>Password</label>
    		<input type="password" name="password" placeholder="Enter your password">
    	</div>
    	<div class="input-group">
    		<button type="submit" name="login" class="btn">Login</button>
    	</div>
    	<p>
    		Not yet a member? <a href="signup.php">Sign up</a>
    	</p>
        <div class="forgot-password"><a href="forgot-password.php">Forgot Your Password?</a></div>
    </form>
    </div>
</body>
</html>