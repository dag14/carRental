
<html>

<?php 
require 'session.php';  
require 'connection.php';
$conn = Connect();
?>
}
?>
<title>Book Car </title>
<head>
    <script type="text/javascript" src="assets/ajs/angular.min.js"> </script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/custom.js"></script>
 <link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body ng-app="">


      <!-- Navigation -->
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
                        <a href="index3.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo  $_SESSION['CUSTOMER_NAME']; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav">
                    <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Garagge <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="booking.php">Book Now</a></li>
              <li> <a href="prereturncar.php">Return Now</a></li>
              <li> <a href="mybookings.php"> My Bookings</a></li>
            </ul>
            </li>
          </ul>
                    <li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>
                
                
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="bookingconfirm.php" method="POST">
        <br style="clear: both">
          <h2 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Rent your dream car here </h2><br>

        <?php
        $car_id = $_POST["car_id"];
        $sql1 = "SELECT * FROM cars WHERE car_id = '$car_id'";
        $result1 = mysqli_query($conn, $sql1);

        if(mysqli_num_rows($result1)){
            while($row1 = mysqli_fetch_assoc($result1)){
                $car_name = $row1["car_name"];
                //$car_nameplate = $row1["car_nameplate"];
                $car_manu = $row1["car_manu"];
                $car_type = $row1["car_type"];
                $wd_price_per_day = $row1["wd_price_per_day"];
                $wod_price_per_day = $row1["wod_price_per_day"];
            }
        }

        ?>
<div class="form-group">
            <div class="form-group">
            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Phone number" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="sub_city" name="sub_city" placeholder="Sub-City" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="Kebele" name="kebele" placeholder="Kebele" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="id_no" name="id_no" placeholder="ID number" required>
          </div>
          <input type="text" class="form-control" id="car_name" name="car_name" placeholder="Car Name " required autofocus="">
          </div>



          <div class="form-group">
                  <select class='form-control' id="car_type" name='car_type' placeholder="Vehicle Type" required>
                    <option value="" disabled selected hidden>Select Vehicle Type</option>
                    <option value="Automobil">Automobil</option>
                    <option value="Pick Up Single cabin">Pick Up Single cabin</option>
                    <option value="Pick Up Double cabin">Pick Up Double cabin</option>
                    <option value="Bus">Bus</option>
                    <option value="Truck">Truck</option>
                    <option value="Field Cars">Field Cars</option>
                    <option value="Limozin">Limozin</option>
                    <option value="Family Cars">Family Cars</option>
                    <option value="Van">Van</option>
                  </select>
                </div>

          <!--<div class="form-group">
            <input type="text" class="form-control" id="ac_price" name="ac_price" placeholder="AC Fare per km (in rupees)" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="non_ac_price" name="non_ac_price" placeholder="Non-AC Fare per km (in rupees)" required>
          </div> -->

          <!--<div class="form-group">
            <input type="text" class="form-control" id="wd_price_per_day" name="wd_price_per_day" placeholder="Vehicle price with driver per day (in Birr)" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="wod_price_per_day" name="wod_price_per_day" placeholder="Vehicle price without driver per day (in Birr)" required>
          </div> -->
          <div class="form-group">
                  <select class='form-control' id="driver_option" name='driver_option' placeholder="With driver or with out driver?" required>
                    <option value="" disabled selected hidden>Select Driver option</option>
                    <option value="With driver">With driver</option>
                    <option value="With out driver">with out driver</option>

                  </select>
                </div>
        <?php $today = date("Y-m-d") ?>
          <label><h5>Start Date:</h5></label>
            <input type="date" id="vehicle_insurance" name="vehicle_insurance" min="<?php echo($today);?>" required="">
            &nbsp;

        <!-- </div>      -->








            <br><br>
                <!-- <form class="form-group"> -->
                Choose a driver: &nbsp;
                <select name="driver_id_from_dropdown" ng-model="myVar1">
                  <option value="" disabled selected>Select your option</option>
                        <?php
                        $sql2 = "SELECT * FROM driver WHERE driver.driver_availability = 'yes' ";
                        $result2 = mysqli_query($conn, $sql2);

                        if(mysqli_num_rows($result2) > 0){
                            while($row2 = mysqli_fetch_assoc($result2)){
                                $driver_id = $row2["driver_id"];
                                $driver_name = $row2["driver_name"];
                                $driver_gender = $row2["driver_gender"];
                                $driver_phone = $row2["driver_phone"];
                    ?>


                    <option value="<?php echo($driver_id); ?>"><?php echo($driver_name); ?>


                    <?php }}
                    else{
                        ?>
                    Sorry! No Drivers are currently available, try again later...
                        <?php
                    }
                    ?>
                </select>
                <!-- </form> -->
                <div ng-switch="myVar1">


                <?php
                        $sql3 = "SELECT * FROM driver d WHERE d.driver_availability = 'yes' AND d.admin_username IN (SELECT cc.admin_username FROM clientcars cc WHERE cc.car_id = '$car_id')";
                        $result3 = mysqli_query($conn, $sql3);

                        if(mysqli_num_rows($result3) > 0){
                            while($row3 = mysqli_fetch_assoc($result3)){
                                $driver_id = $row3["driver_id"];
                                $driver_name = $row3["driver_name"];
                                $driver_gender = $row3["driver_gender"];
                                $driver_phone = $row3["driver_phone"];

                ?>

                <div ng-switch-when="<?php echo($driver_id); ?>">
                    <h5>Driver Name:&nbsp; <?php echo($driver_name); ?></h5>
                    <p>Gender:&nbsp; <?php echo($driver_gender); ?> </p>
                    <p>Contact:&nbsp; <?php echo($driver_phone); ?> </p>
                </div>
                <?php }} ?>
                </div>
                <input type="hidden" name="hidden_carid" value="<?php echo $car_id; ?>">


           <input type="submit"name="submit" value="Book Now" class="btn btn-success pull-right">
        </form>

      </div>
      <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
            <h6><strong>Kindly Note:</strong> You will be charged <span class="text-danger">Birr 200 </span> for each day after the due date.</h6>
        </div>
    </div>

</body>
<footer class="site-footer">
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
