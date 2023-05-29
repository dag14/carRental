<html>
<?php
session_start();
require 'C:\xamppp\htdocs\tankwa\connection.php';
$conn = Connect();
?>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css">
    <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Resource style -->
    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->
    <title>FAQ | Tankwa Car Rental</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-custom" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                    <a nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="text-decoration: none; font-size: 22px;" href="index.php">

<div class="sidebar-brand-text mx-3"><div class="sidebar-brand-icon rotate-n-15">
<img src="assets/img/c.jpg">
Tankwa Tours & Travel Agency </div></div>
   </a>



</div>
            <!-- Collect the nav links, forms, and other content for toggling -->

             <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href='../index.php'>Home</a>
                    </li>
                    <li>
                        <a href="../login.php">Login</a>
                    </li>
                    
                    <li>
                        <a href="about.php"> About </a>
                    </li>

                     <li>
                        <a href="faq.php"> FAQ </a>
                    </li>
                </ul>
            </div>
                
                
                        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <section class="cd-faq">
        <ul class="cd-faq-categories">
            <li><a class="selected" href="#basics">Our Story</a></li>
            <li><a href="#membership">Our mission</a></li>
            <li><a href="#chauffeur">Privacy Policy</a></li>
        </ul>
        <!-- cd-faq-categories -->

        <div class="cd-faq-items">
            <ul id="basics" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>Our Story</h2>
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">Our Story</a>
                    <div class="cd-faq-content">
                        <p>We have been in this business for over five years we provide rental cars across Ethiopia we are 
                        a company focused to revolutionize the rental industry. we have a great deal of experience in the industry
                         we cater to different needs of the clients and their families and we make sure that each one of them gets 
                         what they want. whether it’s a budget car hire, cheap car and van hire or a luxury car rental you’ll be 
                         able to take advantage of our services.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

               
            </ul>
            <!-- cd-faq-group -->

            <ul id="membership" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>Our mission</h2>
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">Our mission</a>
                    <div class="cd-faq-content">
                        <p>Our Mission is to develop into the largest vehicle rental company in Ethiopia with high professionalism and 
                        return on investment.Our aim is to provide an atmosphere that encourages employee and partners’ teamwork, 
                        integrity and excellence. We are striving to make our business as professional as possible to the customer.
                        The service, which we deliver to every customer, is based on their interest and needs. This means that our 
                        customers are our biggest asset.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                
                
                
                
                
            </ul>
            <!-- cd-faq-group -->

            <ul id="chauffeur" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>Privacy Policy</h2>
                </li>
                

                <li>
                    <a class="cd-faq-trigger" href="#0">Privacy Policy</a>
                    <div class="cd-faq-content">
                        <p>Last updated: Augest 14, 2022<br><br>

This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the 
Service and tells You about Your privacy rights and how the law protects You.<br><br>

We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information 
in accordance with this Privacy Policy.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

            </ul>
            <!-- cd-faq-group -->
        </div>
        <!-- cd-faq-items -->
        <a href="#0" class="cd-close-panel">Close</a>
    </section>
    
    <!-- cd-faq -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Resource jQuery -->
</body>

</html>
