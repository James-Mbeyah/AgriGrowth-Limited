<?php 

require_once 'controllers/authController.php'; 

#verifying a user using token
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    verifyUser($token);
}

#verifying a user using token
if (isset($_GET['password-token'])) {
    $passwordToken = $_GET['password-token'];
    resetPassword($passwordToken);
}

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    
    <div class="content">
        <?php  if (isset($_SESSION['message'])): ?>
        <div class="alert <?php echo $_SESSION['alert-class']; ?>">
            <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            unset($_SESSION['alert-class']);

            ?>
        </div><br>
        <?php endif; ?>

        <h3>Welcome, <?php echo $_SESSION['username']; ?></h3><br>

        <a href="index.php?logout=1" class="logout">Logout</a><br>

        <?php if (!$_SESSION['verified']): ?>
        <div class="alert-warning">
            Thank you for signing up with us, you need to verify your account,
            sign in to your email account and click on the verification link we
            just emailed you at <strong><?php echo $_SESSION['email']; ?></strong>
        </div><br>
    <?php endif; ?>
    <?php if ($_SESSION['verified']): ?>
        <a href="user-homepage.php"><button class="btn">Go to User Page</button></a>
    <?php endif; ?>
   </div>
</body>
</html>