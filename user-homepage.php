<!DOCTYPE html>
<html>
<head>
    <title>User Homepage</title>
    <link rel="stylesheet" type="text/css" href="css/user-homepage.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="hero">
         <div class="btn-box">
            <button id="btn1" onclick="karibu()" >KARIBU AgriGrowth</button>
            <button id="btn2" onclick="farmer()" >FARMER SECTION</button>
            <button id="btn3" onclick="foodDist()" >FOOD DISTRIBUTOR SECTION</button>
            <button id="logout" ><a href="http://localhost/agrigrowth/homepage.php">LOGOUT</a></button>
    
            <h2>Follow Us:&nbsp;</h2>
            <div class="social-icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
        </div>
        <div id="content1" class="content">
            <div class="content-left">
                <h1>Karibu AgriGrowth</h1>
                <p>
                    Karibu AgriGrowth, Our aim is to transform farmers and food distributors' lives through Technology by helping maximise on profits....
                </p>
                <a href="http://localhost/agrigrowth/homepage.php">Learn More</a>
            </div>
            <div class="content-right">
                <img src="http://localhost/agrigrowth/images/laptop-display.png" alt="">
            </div>
        </div>
        <div id="content2" class="content">
            <div class="content-left">
                <h1>Advantages of Registering as a Farmer</h1>
                <p>
                       Guaranteed Market for their Farm Produce, Transparent Pricing, Climate Information and how to maximise output and
                       Farming advice.
                </p> 
                <a href="http://localhost/agrigrowth/farmer-form.php">Register Farmer</a>&nbsp;&nbsp;&nbsp;<a href="http://localhost/agrigrowth/produce.php">Update Produce</a>
            </div>
            <div class="content-right">
                <img src="http://localhost/agrigrowth/images/farm-product.png" alt="">
            </div>
        </div>
        <div id="content3" class="content">
            <div class="content-left">
                <h1>Benefits of Registering as a Fooddistributor</h1>
                <p>
                    Wide variety of farm produce, Quality Produce, Fair Prices, Transportation services across the country and Assured produce safety and quality.
                </p>
                <a href="http://localhost/agrigrowth/distributor-form.php">Register Distributor</a>&nbsp;&nbsp;&nbsp;<a href="http://localhost/agrigrowth/produce-report.php">Print Produce Report</a>
            </div>
            <div class="content-right">
                <img src="http://localhost/agrigrowth/images/farmer123.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-bottom">
             Copyright &copy; www.agrigrowth.co.ke &nbsp; &nbsp; | &nbsp;&nbsp;Terms of Use &nbsp; &nbsp; | &nbsp;&nbsp;Privacy Policy
        </div>
    </div>
    <script type="text/javascript" src="user-homepage.js"></script>
</body>
</html>