<?php

require 'config/db.php';

if (isset($_POST['register-distributor-btn'])) {

            $distributorId = $_POST['distributorId'];
            $companyName = $_POST['companyName'];
            $ownerFirstName = $_POST['ownerFirstName'];
            $ownerLastName = $_POST['ownerLastName'];
            $email = $_POST['email'];
            $location = $_POST['location'];
            $phoneNumber = $_POST['phoneNumber'];
            $sqlinsert = "INSERT INTO fooddistributor (distributorId, companyName, ownerFirstName, ownerLastName, email, location, phoneNumber) VALUES('$distributorId', '$companyName', '$ownerFirstName', '$ownerLastName', '$email', '$location', '$phoneNumber')";

    if (!mysqli_query($conn, $sqlinsert)) {
        die('Error inserting new record');
    }

     $newrecord = "New Food Distributor added to database";
    
    echo "<div class='output'>
          $newrecord
    </div>";

 }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Food Distributor</title>
    <link rel="stylesheet" type="text/css" href="css/farmer-form.css">
</head>
<body>
    <style type="text/css">
        .output{
            box-sizing: border-box;
            width: 35%;
            margin:20px auto;
            padding: 30px;
            position: relative;
            border-radius: 5px;
            box-shadow: 0 0 15px 5px #ccc;
            background-color: #00fa9a;
            text-align: center;
            
        }
    </style>
    <div class="hero">
       <div class="logo">
                <a href="http://localhost/agrigrowth/user-homepage.php"><img src="http://localhost/agrigrowth/images/trlogo1.jpg" alt=""></a>
            </div>
    <div class="hero">
    <div class="header">
        <h1>Distributor Registration</h1>
    </div>        
    <form method="post" action="distributor-form.php" >
        <div class="input-group">
             <input type="text" class="input-field" name="distributorId" required="required" id="ownerId" placeholder="Enter Your ID"><br>
        </div>
        <div class="input-group">
           <input type="text" class="input-field" name="companyName" required="required" id="name" placeholder="Enter Company Name"><br>
        </div>
        <div class="input-group">
            <input type="text" class="input-field" name="ownerFirstName" required="required" id="name" placeholder="Enter Your First Name"><br>
        </div>
        <div class="input-group">
            <input type="text" class="input-field" name="ownerLastName" required="required" id="name" placeholder="Enter Your Last Name"><br>
        </div>
        <div class="input-group">
            <input type="email" class="input-field" name="email" required="required" id="email" placeholder="Enter Your Email"><br>
        </div>
        <div class="input-group">
             <input type="text" class="input-field" name="location" required="required" id="location" placeholder="Enter Your Location"><br>
        </div>
        <div class="input-group">
            <input type="number" class="input-field" name="phoneNumber" required="required" id="MobileNumber" placeholder="Enter Your Phone Number 2547......."><br>
        </div>
        <div class="input-group">
            <button type="submit" name="register-distributor-btn" class="btn" >Register Food Distributor</button>
        </div>
    </form>
    </div>
</body>
</html>