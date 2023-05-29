<html>

  <head>
    <title> Employee Signup | Tankwa Car Rental </title>
  </head>
  <?php session_start(); ?>
  <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">

    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   TANKWA CAR RENTAL </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
                if(isset($_SESSION['FIRST_NAME'])){
            ?> 
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['FIRST_NAME']; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="entercar.php">Add Car</a></li>
              <li> <a href="enterdriver.php"> Add Driver</a></li>
              <li> <a href="adminview.php">View</a></li>

            </ul>
            </li>
          </ul>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>
            
            <?php
                }
                else if (isset($_SESSION['login_customer'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <li>
                        <a href="#">History</a>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else {
            ?>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="adminlogin.php">Admin</a>
                    </li>
                    <li>
                        <a href="adminlogin.php">Employee</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">Customer</a>
                    </li>
                     <li>
                        <a href="faq/index.php"> About </a>
                    </li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php

require 'connection.php';
$conn = Connect();

$driver_name = $conn->real_escape_string($_POST['driver_name']);
$dl_number = $conn->real_escape_string($_POST['dl_number']);
$dl_issue = $conn->real_escape_string($_POST['dl_issue']);
$dob = $conn->real_escape_string($_POST['dob']);
$driver_phone = $conn->real_escape_string($_POST['driver_phone']);
$driver_region = $conn->real_escape_string($_POST['driver_region']);
$driver_hn = $conn->real_escape_string($_POST['driver_hn']);
$driver_kebele = $conn->real_escape_string($_POST['driver_kebele']);
$driver_gender = $conn->real_escape_string($_POST['driver_gender']);
$USERNAME = $_SESSION['FIRST_NAME'];
$driver_availability = "yes";

$query = "INSERT into driver(driver_name,dob,dl_number,dl_issue,driver_phone,driver_region,driver_kebele,driver_hn,driver_gender,USERNAME,driver_availability) VALUES('" . $driver_name . "','" . $dob . "','" . $dl_number . "','" . $dl_issue . "','" . $driver_phone . "','" . $driver_region . "','" . $driver_kebele . "','" . $driver_hn . "','" . $driver_gender ."','" . $USERNAME ."','" . $driver_availability ."')";
$success = $conn->query($query);

if (!$success){ ?>
    <div class="container">
	<div class="jumbotron" style="text-align: center;">
        Car with the same vehicle number already exists!
        <br><br>
        <a href="enterdriverem.php" class="btn btn-default"> Go Back </a>
</div>
<?php	
}
else {
    header("location: enterdriverem.php"); //Redirecting 
}

$conn->close();

?>

    </body>
    <footer class="site-footer" style="text-align: left;" >
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© 2022 Tankwa Car Rental</h5>
                </div>
            </div>
        </div>
    </footer>
</html>