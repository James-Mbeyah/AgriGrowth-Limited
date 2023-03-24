<<?php

require 'config/db.php';

if (isset($_POST['send-message'])) {

        $email = $_POST['email'];
        $message = $_POST['message'];
        $sqlinsert = "INSERT INTO talktous (email, message) VALUES('$email', '$message')";

    if (!mysqli_query($conn, $sqlinsert)) {
        die('Error sending Message');
    }

    echo "Your message has been received thank you for getting in touch, we'll get back to you as soon as we can...";

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Talk To Us</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/talk-to-us.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="nav">
            <div class="left">
                <ul>
                    <div class="logo">
                        <a href="http://localhost/agrigrowth/homepage.php"><img src="http://localhost/agrigrowth/images/trlogo1.jpg" alt=""></a>
                    </div>
                </ul>
            </div>
            <div class="right">
                <ul>
                    <li><a href="http://localhost/agrigrowth/login.php">Log in</a></li>
                    <li><a href="http://localhost/agrigrowth/signup.php">Sign Up</a></li>
                </ul>
            </div>
        </div>

        <div class="header">
            <h1>Thank You for contacting us...</h1>
            <p>
                Are you interested in learning more about AgriGrowth?
                Do you have a new project that you want to talk to us about? Contact us by submitting your email and your message below and we'll get in touch with you, thank you.
            </p>
        </div>
        <div class="form">
            <form action="talk-to-us.php" method="POST">
                <input type="hidden" name="submitted" value="true">
                <input type="email" name="email" id="input-type" required class="input-type" placeholder="Your Email"><br>
                <textarea name="message" id="input-type" required class="input-type" placeholder="Enter Your Message....."></textarea><br>
                <button type="submit" id="btn-send" name="send-message" class="btn btn-big btn-extend">
                    <i class="fa fa-envelope"></i>
                    Send</button>
            </form>
        </div>
    </div>
</body>

</html>