<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
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
    	<h1>Reset your password</h1>
    </div>        
    <form method="post" action="reset-password.php" >
        <!-- display errors -->
        <?php if (count($errors) > 0): ?>
        <div class="error">
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </div>
        <?php endif ?>
    	<div class="input-group">
    		<label>New Password</label>
    		<input type="password" name="password" placeholder="Enter your password">
    	</div>
        <div class="input-group">
            <label>Confirm New Password</label>
            <input type="password" name="passwordConf" placeholder="Confirm your password">
        </div>
    	<div class="input-group">
    		<button type="submit" name="reset-password-btn" class="btn">Reset Password</button>
    	</div>
    </form>
    </div>
</body>
</html>