<?php

require 'config/db.php';

if (isset($_POST['register-farmer-btn'])) {

    
            $farmerId = $_POST['farmerId'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $location = $_POST['location'];
            $phoneNumber = $_POST['phoneNumber'];
            $center = $_POST['center'];
            $cropPlanted = $_POST['cropPlanted'];
            $sqlinsert = "INSERT INTO farmers (farmerId, firstName, lastName, email, location, phoneNumber, center, cropPlanted) VALUES('$farmerId', '$firstName', '$lastName', '$email', '$location', '$phoneNumber', '$center', '$cropPlanted')";

    if (!mysqli_query($conn, $sqlinsert)) {
        die('Error inserting new record');
    }

    $newrecord = "New Farmer Added to Database Successfully"; 
    echo "<div class='output'>
          $newrecord       
    </div>"; 
    
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Register Farmer</title>
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
        <h1>Farmer Registration</h1>
    </div>        
    <form method="post" action="farmer-form.php" >
    
        <div class="input-group">
             <input type="text" class="input-field" name="farmerId" required="required" id="id" placeholder="Enter Farmer ID Number"><br>
        </div>
        <div class="input-group">
           <input type="text" class="input-field" name="firstName" required="required" id="name" placeholder="Enter Your First Name"><br>
        </div>
        <div class="input-group">
            <input type="text" class="input-field" name="lastName" required="required" id="name" placeholder="Enter Your Last Name"><br>
        </div>
        <div class="input-group">
            <input type="text" class="input-field" name="email" required="required" id="email" placeholder="Enter Your Email"><br>
        </div>
        <div class="input-group">
            <input type="text" class="input-field" name="location" required="required" id="location" placeholder="Enter Your Location"><br>
        </div>
        <div class="input-group">
             <input type="text" class="input-field" name="phoneNumber" required="required" id="MobileNumber" placeholder="Enter Your Phone Number (2547....)"><br>
        </div>
        <div class="input-group">
            <select name="center" class="input-field" required="required" id="center" placeholder="Enter Your Nearest Town-Center">
                    <option value="Kwanza">Kwanza</option>
                    <option value="Kitale">Kitale</option>
                    <option value="Saboti">Saboti</option>
                    <option value="Endebess">Endebess</option>
                </select><br>
        </div>
        <div class="input-group">
              <input type="text" class="input-field" name="cropPlanted" required="required" id="crop" placeholder="Enter Crop currently planted"><br>
        </div>
        <div class="input-group">
            <button type="submit" name="register-farmer-btn" class="btn" >Register Farmer</button>
        </div>
    </form>
    </div>
</body>
</html>