
<html>
<?php
//session_start();
require 'session.php';
if(!isset($_SESSION['FIRST_NAME'])){
    session_destroy();
    header("location: index.php");
}
require 'connection.php';
$conn = Connect();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
    <script src="assets/js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="assets/js/jquery.slide.js" type="text/javascript"></script>
	<script src="assets/js/jquery-func.js" type="text/javascript"></script>
    <title>Tankwa Car Rental</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>

                <a nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="text-decoration: none; font-size: 22px;" href="index1.php">

                <div class="sidebar-brand-text mx-3"><div class="sidebar-brand-icon rotate-n-15">
                <img src="assets/img/c.jpg">
                Tankwa Tours & Travel Agency </div></div>
                   </a>



            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index1.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo  $_SESSION['FIRST_NAME']; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="entercar.php">Cars</a></li>
              <li> <a href="enterdriver.php"> Drivers</a></li>
              <li> <a href="employeesignup.php"> Hire Employee</a></li>
              <li> <a href="adduser.php"> Add User</a></li>
              <li> <a href="mybookings3.php">View Bookings</a></li>
              <li> <a href="prereturncar3.php">Return Bookings</a></li>
              <li> <a href="feedback.php">Feedbacks</a></li>
            </ul>
            </li>
          </ul>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            

            

            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
    <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2"><br><br><br>
                            <h1 class="brand-heading" style="color: Gray;text-align:center;">TANKWA CAR RENTAL</h1>
                            <p class="intro-text" style="color: Black;text-align:center;">
                                Online car rental service
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        <h3 style="text-align:center;">Currently Available Cars</h3>
<br>
<section class="menu-content">
            <?php
            $sql1 = "SELECT * FROM cars WHERE car_availability='yes'";
            $result1 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)){
                    $car_id = $row1["car_id"];
                    $car_name = $row1["car_name"];
                    $car_source = $row1["car_source"];
                    $wd_price_per_day = $row1["wd_price_per_day"];
                   // $car_type = $row1["car_type"];
                    $wod_price_per_day = $row1["wod_price_per_day"];
                    $car_img = $row1["car_img"];

                    ?>
            <a href="booking3.php?id=<?php echo($car_id) ?>">
            <div class="sub-menu">


            <img class="card-img-top" src="<?php echo $car_img; ?>" alt="Card image cap">
            <h5> <?php echo $car_name; ?> | <?php echo $car_source; ?></h5>
            <h6> With driver price: <?php echo ( "Birr " . $wd_price_per_day . "/day"); ?></h6>
            <h6> Withoutdriver price: <?php echo ( "Birr " . $wod_price_per_day . "/day"); ?></h6>


            </div>
            </a>
            <?php }}
            else {
                ?>
<h1> No cars available :( </h1>
                <?php
            }
            ?>
        </section>
        <hr><hr>
        <h3 style="text-align:center;">Rented Cars</h3>
<br>
<section class="menu-content">
            <?php
            $sql1 = "SELECT * FROM cars WHERE car_availability='no'";
            $result1 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)){
                    $car_id = $row1["car_id"];
                    $car_name = $row1["car_name"];
                    $car_source = $row1["car_source"];
                    $wd_price_per_day = $row1["wd_price_per_day"];
                   // $car_type = $row1["car_type"];
                    $wod_price_per_day = $row1["wod_price_per_day"];
                    $car_img = $row1["car_img"];

                    ?>
            <a >
            
            <div class="sub-menu">


            <img class="card-img-top" src="<?php echo $car_img; ?>" alt="Card image cap">
            <h5> <?php echo $car_name; ?> | <?php echo $car_source; ?></h5>
            <h6> With driver price: <?php echo ( "Birr " . $wd_price_per_day . "/day"); ?></h6>
            <h6> Without driver price: <?php echo ( "Birr " . $wod_price_per_day . "/day"); ?></h6>


            </div>
            </a>
            <?php }}
            else {
                ?>
<h1> No cars available :( </h1>
                <?php
            }
            ?>
        </section>
    </div>

    <div class="bgimg-2">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
        </div>
    </div>

    <div style="position:relative;">
        <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
            <!--<p>Click here for the latest deals on your bookings</p>-->
        </div>
    </div>
    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="contact">
        <h3 class="w3-center">COME AND JOIN US</h3>
        <p class="w3-center"><em>We love your feedback!</em></p>

        <div class="w3-row w3-padding-32 w3-section">
            <div class="w3-col m4 w3-container">
                <!-- Add Google Maps -->
                <div id="map" class="w3-round-large w3-greyscale" style="width:90%;height:400px;">
                
    <script>
      function initMap() {
        var demomap = {lat: 11.59456, lng: 37.38864};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: demomap
          
         });
        var marker = new google.maps.Marker({
          position: demomap,
          map: map
          
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfwo7C7-WLO8GU-bc6WmvqmsF8FKipzuE&callback=initMap">
    </script>
                </div>
            </div>
            <div class="w3-col m8 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Bahir Dar, Ethiopia<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +251 912 207 071 | +251 911 764933<br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: info@mekinakiray.com<br>
                </div>
                
            </div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© 2022 Tankwa Car Rental</h5>
                </div>
                <div class="col-sm-6 social-icons">
                    <a href="https://www.facebook.com/vehiclerentinethiopia" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        function myMap() {
            myCenter = new google.maps.LatLng(25.614744, 85.128489);
            var mapOptions = {
                center: myCenter,
                zoom: 12,
                scrollwheel: true,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }
    </script>
    <script>
        function sendGaEvent(category, action, label) {
            ga('send', {
                hitType: 'event',
                eventCategory: category,
                eventAction: action,
                eventLabel: label
            });
        };
    </script>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/theme.js"></script>
</body>
</html>
