<html>
<?php
session_start();
require 'C:\xampp\htdocs\tankwa\connection.php';
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
            <li><a class="selected" href="#basics">Basics</a></li>
            <li><a href="#membership">Membership</a></li>
            <li><a href="#chauffeur">Driver Services</a></li>
        </ul>
        <!-- cd-faq-categories -->

        <div class="cd-faq-items">
            <ul id="basics" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>Basics</h2>
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">How do I pay for my Rental?</a>
                    <div class="cd-faq-content">
                        <p>Tankwa Car Rental accepts cash payment. CBE mobile banking payments are also accepted.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

               

                <li>
                    <a class="cd-faq-trigger" href="#0">Will I need a driving license to rent a car?</a>
                    <div class="cd-faq-content">
                        <p>A driving license is not needed as a driver is already provided by the company. 
                        But, if you eant to rent the car with out driver you have to provide your driving license or your driver driving license.   </p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">Is there a fee if I return the car after the due date?</a>
                    <div class="cd-faq-content">
                        <p>Yes, we charge Birr 200 per day after the due date.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
            </ul>
            <!-- cd-faq-group -->

            <ul id="membership" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>Membership</h2>
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">Why should I sign up?</a>
                    <div class="cd-faq-content">
                        <p>When you sign-up to be a member on our site, you will be able to save time for requests. Once you have joined and logged-in, each time you send us a request, we will provide service for you.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">How do I become a member?</a>
                    <div class="cd-faq-content">
                        <p>To sign-up you can go log-in and directly goto our sign-up form. After you send in that request, you will have an opportunity to a member as a customer.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">How do I login?</a>
                    <div class="cd-faq-content">
                        <p>Once you sign-up, we will re direct you to the log in screen. When you are logged in, you will see a small bar in the upper right corner of the screen welcoming to you our site. If you already have set up an account but have logged out, you can either click on the 'Log-In' button on our menu bar which takes you to our log-in page or, if you are on our home page, you can use the log-in area on it.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">What about my privacy?</a>
                    <div class="cd-faq-content">
                        <p>Your privacy is very important to us. As long as you do not share your member name and password with others, no one will be able to see or edit your personal information.<br> For more information please read our privacy policy.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">What if I share my computer?</a>
                    <div class="cd-faq-content">
                        <p>If you share your computer with others, you should log-out when you are done with your session on our web site. And, when you log-in, make sure that the check-box next to 'Save my password on this computer' is unchecked. Taking these steps will ensure that the next person using the computer will not have access to your account.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
                
            </ul>
            <!-- cd-faq-group -->

            <ul id="chauffeur" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>Driver service</h2>
                </li>
                

                <li>
                    <a class="cd-faq-trigger" href="#0">How can I pay for my Driver services?</a>
                    <div class="cd-faq-content">
                        <p>If you choose the service option "with driver" the payment is already calculated under "with driver" service package.</p>
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
