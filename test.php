<html>

  <head>
    <title> Employee Signup | Tankwa Car Rental </title>
  </head>
  <?php 
require 'session.php';  
if(!isset($_SESSION['CUSTOMER_NAME'])){
    session_destroy();
    header("location: index.php");
}
require 'connection.php';
$conn = Connect();
?>
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
                else if (isset($_SESSION['CUSTOMER_NAME'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['CUSTOMER_NAME']; ?></a>
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

$fullname = $conn->real_escape_string($_POST['fullname']);
$phone_no = $conn->real_escape_string($_POST['phone_no']);
$city = $conn->real_escape_string($_POST['city']);
$sub_city = $conn->real_escape_string($_POST['sub_city']);
$kebele = $conn->real_escape_string($_POST['kebele']);
$id_no = $conn->real_escape_string($_POST['id_no']);
$rent_start_date = $conn->real_escape_string($_POST['rent_start_date']);
$rent_end_date = $conn->real_escape_string($_POST['rent_end_date']);

$USERNAME = $_SESSION['CUSTOMER_NAME'];
//$driver_availability = "yes";

$query = "INSERT into rentedcars(fullname,phone_no,city,sub_city,rent_start_date,rent_end_date,kebele,id_no,CUSTOMER_NAME) VALUES('" . $fullname . "','" . $phone_no . "','" . $city . "','" . $sub_city . "','" . $rent_start_date . "','" . $rent_end_date . "','" . $kebele . "','" . $id_no . "','" . $USERNAME ."')";
$success = $conn->query($query);

if (!$success){ ?>
    <div class="container">
	<div class="jumbotron" style="text-align: center;">
        Car with the same vehicle number already exists!
        <br><br>
        <a href="entercar.php" class="btn btn-default"> Go Back </a>
</div>
<?php	
}
else {
    header("location: enterdriver.php"); //Redirecting 
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