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
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
<link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
<link rel="stylesheet" type="text/css" href="assets/css/srch.css">
<link rel="stylesheet" type="text/css" href="assets/css/styles.css">

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index1.php">
                   TANKWA CAR RENTAL </a>
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
<? if (isset($_POST['someName'])) {

/* If id is empty or not a number, then don't proceed fetching data */
if (empty($_POST['search']) || !is_numeric($_POST['search'])) {
    echo 'Invalid search';

} else {

    /* Fetch data */
    $data = file_get_contents('https://api.truckersmp.com/v2/player/' . $_POST['search']);

    /* Decode json */
    $data = json_decode($data, true);

    /* Dump data */
    print_r($data);
}
}?>
</body>
</html>