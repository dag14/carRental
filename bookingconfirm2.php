
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
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body>

<?php




$driver_id = $_POST['driver_id_from_dropdown'];
$customer_username = $_SESSION["CUSTOMER_NAME"];
$car_id = $conn->real_escape_string($_POST['hidden_carid']);
//$car_name = $_POST['car_name'];
//$car_palte_code  = $_POST['car_palte_code'];
//$driver_name = $_POST['driver_name'];
//$driver_gender  = $_POST['driver_gender'];
//$dl_number   = $_POST['dl_number'];
//$driver_phone   = $_POST['driver_phone'];
//$car_nameplate  = $_POST['car_nameplate'];
$rent_start_date = date('Y-m-d', strtotime($_POST['rent_start_date']));
$rent_end_date = date('Y-m-d', strtotime($_POST['rent_end_date']));
$type=$_POST['type'];
$full_name = $_POST['full_name'];
$phone_no = $_POST['phone_no'];
$city = $_POST['city'];
$sub_city = $_POST['sub_city'];
$kebele = $_POST['kebele'];
$return_status = "NR"; // not returned
$fare = "NA";


    function dateDiff($start, $end) {
        $start_ts = strtotime($start);
        $end_ts = strtotime($end);
        $diff = $end_ts - $start_ts;
        return round($diff / 86400);
    }
    
    $err_date = dateDiff("$rent_start_date", "$rent_end_date");

    $sql0 = "SELECT * FROM cars WHERE car_id = '$car_id'";
    $result0 = $conn->query($sql0);

    if (mysqli_num_rows($result0) > 0) {
        while($row0 = mysqli_fetch_assoc($result0)) {

            if($type == "wd" ){
                $fare = $row0["wd_price_per_day"]*$err_date;
            } else if ($type == "wod" ){
                $fare = $row0["wod_price_per_day"]*$err_date;
            } 
             else {
                $fare = "NA";
            }
        }
    }
    
    if($err_date >= 0) { 
    if($driver_id==0){
        $sql1 = "INSERT into rentedcars(full_name,phone_no,city,sub_city,kebele,car_id,driver_id,booking_date,rent_start_date,rent_end_date,fare,return_status,confirmation,username) 
        VALUES('" . $full_name . "','" . $phone_no . "','" . $city . "','" . $sub_city . "','" . $kebele . "','" . $car_id . "','" . $driver_id . "','" . date("Y-m-d") ."','" . $rent_start_date ."','" . $rent_end_date . "','" . $fare . "','" . $return_status . "','Waiting','" . $customer_username . "')";
        $result1 = $conn->query($sql1);

        //$sql2 = "UPDATE cars SET car_availability = 'no' WHERE car_id = '$car_id'";
       // $result2 = $conn->query($sql2);
        
        //$sql3 = "UPDATE driver SET driver_availability = 'yes' WHERE driver_id = '$driver_id'";
    //$result3 = $conn->query($sql3);

        $sql4 = "SELECT * FROM  cars c, driver d, rentedcars rc WHERE c.car_id = '$car_id' AND d.driver_id = '$driver_id'  ";
    $result4 = $conn->query($sql4);
    }
else{
    $sql1 = "INSERT into rentedcars(full_name,phone_no,city,sub_city,kebele,car_id,driver_id,booking_date,rent_start_date,rent_end_date,fare,return_status,confirmation,username) 
    VALUES('" . $full_name . "','" . $phone_no . "','" . $city . "','" . $sub_city . "','" . $kebele . "','" . $car_id . "','" . $driver_id . "','" . date("Y-m-d") ."','" . $rent_start_date ."','" . $rent_end_date . "','" . $fare . "','" . $return_status . "','Waiting','" . $customer_username . "')";
    $result1 = $conn->query($sql1);

    //$sql2 = "UPDATE cars SET car_availability = 'no' WHERE car_id = '$car_id'";
    //$result2 = $conn->query($sql2);

    //$sql3 = "UPDATE driver SET driver_availability = 'no' WHERE driver_id = '$driver_id'";
    //$result3 = $conn->query($sql3);

    $sql4 = "SELECT * FROM  cars c, driver d, rentedcars rc WHERE c.car_id = '$car_id' AND d.driver_id = '$driver_id'  ";
    $result4 = $conn->query($sql4);
    }

    if (mysqli_num_rows($result4) > 0) {
        while($row = mysqli_fetch_assoc($result4)) {
            $id = $row["id"];
            $car_name = $row["car_name"];
            $car_nameplate = $row["car_nameplate"];
            $driver_name = $row["driver_name"];
            $driver_gender = $row["driver_gender"];
            $dl_number = $row["dl_number"];
            $driver_phone = $row["driver_phone"];
            $full_name = $row["full_name"];
            $phone_no = $row["phone_no"];
            $city = $row["city"];
            $sub_city = $row["sub_city"];
            $kebele = $row["kebele"];
        }
    }

    if (!$result1){
        die("Couldnt enter data: ".$conn->error);
    }

?>
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index3.php">
                   TANKWA CAR RENTAL </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index2.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo  $_SESSION['FIRST_NAME']; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav">
                    <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="entercarem.php">Cars</a></li>
              <li> <a href="enterdriverem.php">Drivers</a></li>
              <li> <a href="mybookings2.php">View Bookings</a></li>
              <li> <a href="prereturncar2.php">Return Bookings</a></li>
              
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
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span>Booking Reserved</h1>
        </div>
    </div>
    <br>

    <h2 class="text-center"> Thank you for visiting Tankwa Car Rental! We wish you have a safe ride. </h2>

 

    <h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;"><?php echo "$id"; ?></span> </h3>


    <div class="container">
        <h5 class="text-center">Please read the following information about your order.</h5>
        <div class="box">
            <div class="col-md-10" style="float: none; margin: 0 auto; text-align: center;">
            <h3 style="color: Blue;">Your booking has been received and placed into out order processing system, Please goto Tankwa Tour and Travel Agency and make your payment with 24hrs.</h3>
                <br>
                <h4>Please make a note of your <strong>order number</strong> now and keep in the event you need to communicate with us about your order.</h4>
                <br>
                <h3 style="color: orange;">Invoice</h3>
                <br>
            </div>
            <div class="col-md-10" style="float: none; margin: 0 auto; ">
                <h4> <strong>Vehicle Name: </strong> <?php echo $car_name; ?></h4>
                <br>
                <h4> <strong>Vehicle Number:</strong> <?php echo $car_nameplate; ?></h4>
                <br>
                <h4> <strong>PRICE: </strong> <?php echo $fare; ?> </h4>
                <br>
                <h4> <strong>Booking Date: </strong> <?php echo date("Y-m-d"); ?> </h4>
                <br>
                <h4> <strong>Start Date: </strong> <?php echo $rent_start_date; ?></h4>
                <br>
                <h4> <strong>Return Date: </strong> <?php echo $rent_end_date; ?></h4>
                <br>
                <h4> <strong>Driver Name: </strong> <?php echo $driver_name; ?> </h4>
                <br>
                <h4> <strong>Driver Gender: </strong> <?php echo $driver_gender; ?> </h4>
                <br>
                <h4> <strong>Driver License number: </strong>  <?php echo $dl_number; ?> </h4>
                <br>
                <h4> <strong>Driver Contact:</strong>  <?php echo $driver_phone; ?></h4>
                <br>
                <h4> <strong>FULL NAME:</strong>  <?php echo $full_name; ?></h4>
                <br>
                <h4> <strong>PHONE NUMBER: </strong> <?php echo $phone_no; ?></h4>
                <br>
                <h4> <strong>CITY: </strong> <?php echo $city; ?></h4>
                <br>
                <h4> <strong>SUB-CITY: </strong> <?php echo $sub_city; ?></h4>
                <br>
                <h4> <strong>KEBELE: </strong> <?php echo $kebele; ?></h4>
                <br>
            </div><div class="text-right"><br>
               <a class="btn btn-primary btn-lg" href="mybookings2.php" role="button">Back</a>
</div> 
        </div>
        
        
    </div>
</body>
<?php } else { ?>
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

            
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index2.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo  $_SESSION['FIRST_NAME']; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav">
                    <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="entercarem.php">Cars</a></li>
              <li> <a href="enterdriverem.php">Drivers</a></li>
              <li> <a href="mybookings2.php">View Bookings</a></li>
              <li> <a href="prereturncar2.php">Return Bookings</a></li>
              
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
    <div class="container">
	<div class="jumbotron" style="text-align: center;">
        You have selected an incorrect date.
        <br><br>
</div>
                <?php } ?>
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