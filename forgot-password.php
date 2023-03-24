<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
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
    	<h1>Recover your password</h1>
        
    </div>        
    <form method="post" action="forgot-password.php" >
        <p>
            Please enter the email address you used to sign up on this site
            and we will help you recover your password.
        </p>
        <!-- display errors -->
        <?php if (count($errors) > 0): ?>
        <div class="error">
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </div>
        <?php endif ?>
    	<div class="input-group">
    		<input type="email" name="email" placeholder="Enter your email">
    	</div>
    	<div class="input-group">
    		<button type="submit" name="forgot-password" class="btn">Recover your password</button>
    	</div>
    </form>
    </div>
</body>
</html>