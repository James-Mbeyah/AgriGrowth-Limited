<?php

require 'config/db.php';

if (isset($_POST['produce-update-btn'])) {

        $produceId = $_POST['produceId'];
        $produceName = $_POST['produceName'];
        $quantity = $_POST['quantity'];
        $location = $_POST['location'];
        $farmerName = $_POST['farmerName'];
        $farmerId = $_POST['farmerId'];
        $phoneNumber = $_POST['phoneNumber'];
        $center = $_POST['center'];
            $sqlinsert = "INSERT INTO produce (produceId, produceName, quantity, location, phoneNumber, farmerName, farmerId, center) VALUES('$produceId','$produceName', '$quantity', '$location', '$phoneNumber', '$farmerName', '$farmerId', '$center')";

    if (!mysqli_query($conn, $sqlinsert)) {
        die('Error inserting new record');
    }

    $output = "Produce Update Successful...";

    echo "<div class='output'>
          $output
    </div>";

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Produce</title>
    <link rel="stylesheet" type="text/css" href="css/produce-form.css">
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
        <h1>Produce Update</h1>
    </div>        
    <form method="post" action="produce.php" >
        <div class="input-group">
             <input type="text" name="produceId" required="required" class="input-field" required="required" id="produceId" placeholder="Enter Produce ID"><br>
        </div>
        <div class="input-group">
           <input type="text" name="produceName" required="required" class="input-field" required="required" id="produceName" placeholder="Enter Produce Name"><br>
        </div>
        <div class="input-group">
            <input type="text" name="quantity" required="required" class="input-field" required="required" id="quantity" placeholder="Enter Quantity in Kg's, or number of sacks"><br>
        </div>
        <div class="input-group">
            <input type="text" name="location" required="required" class="input-field" required="required" id="location" placeholder="Enter Your Location"><br>
        </div>
        <div class="input-group">
            <input type="text" name="farmerName" required="required" class="input-field" required="required" id="name" placeholder="Enter Farmer's Name"><br>
        </div>
        <div class="input-group">
             <input type="text" name="farmerId" required="required" class="input-field" required="required" id="name" placeholder="Enter Farmer ID Number"><br>
        </div>
        <div class="input-group">
            <input type="text" name="phoneNumber" required="required" class="input-field" required="required" id="MobileNumber" placeholder="Enter Moblie No. 2547.........."><br>
        </div>
        <div class="input-group">
            <select name="center" class="input-field" required="required" required="required" id="center" placeholder="Enter Your Nearest Town-Center">
                <option value="Kwanza">Kwanza</option>
                <option value="Kitale">Kitale</option>
                <option value="Saboti">Saboti</option>
                <option value="Endebess">Endebess</option>
            </select><br>
        </div>
        <div class="input-group">
            <button type="submit" name="produce-update-btn" class="btn" >Update Produce</button>
        </div>
    </form>
    </div>
</body>
</html>