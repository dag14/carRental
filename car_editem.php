

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
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body>
 <!-- Navigation -->
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
   <?php $car_id = $_GET["id"];
   $sql4 = "SELECT * FROM   cars  WHERE car_id = '$car_id'  ";
   $result4 = $conn->query($sql4);


   if (mysqli_num_rows($result4) > 0) {
       while($row = mysqli_fetch_assoc($result4)) {
           
           
           $car_name = $row["car_name"];
           $car_model = $row["car_model"];
           $car_plate_code = $row["car_plate_code"];
           $car_nameplate = $row["car_nameplate"];
           $transmission_type = $row["transmission_type"];
           $engine_cc = $row["engine_cc"];
           $fuel_type = $row["fuel_type"];
           $car_manu = $row["car_manu"];
           $vehicle_insurance = $row["vehicle_insurance"];
          
           $car_type = $row["car_type"];
           $wd_price_per_day = $row["wd_price_per_day"];
           $wod_price_per_day = $row["wod_price_per_day"];
           
       }
   } ?>
    <div class="container" style="margin-top: 80px;" >
        <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="car_editem1.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Update Car Details </h3>
          <div class="col-sm-3" style="padding-top: 5px;">
                 Car Id:
                </div>
                <div class="col-sm-9">
            <input  class="form-control"  name="car_id" placeholder="Car ID " value="<?php echo $car_id; ?>" readonly><br>
          </div>
          <div class="col-sm-3" style="padding-top: 5px;">
                 Car Model Name:
                </div>
          <div class="col-sm-9">
                  <input class="form-control" placeholder="Car Name" name="car_name" value="<?php echo $car_name; ?>" required autofocus=""><br>
                </div>
            <div class="col-sm-3" style="padding-top: 5px;">
                Car Model:
                </div>
          <div class="col-sm-9">
                  <input class="form-control" placeholder=" Car Model" name="car_model" value="<?php echo $car_model; ?>" required autofocus=""><br>
                </div>
            <div class="col-sm-3" style="padding-top: 5px;">
                Car Plate Code:
                </div>
          <div class="col-sm-9">
                  <input  class="form-control" placeholder="Car Plate Code" name="car_plate_code" value="<?php echo $car_plate_code; ?>" required autofocus=""><br>
                </div>
            
          <div class="col-sm-3" style="padding-top: 5px;">
          Plate Number:
                </div>
          <div class="col-sm-9">
                  <input class="form-control" placeholder=" Plate Code" name="car_nameplate" value="<?php echo $car_nameplate; ?>" required autofocus=""><br>
                </div>
             <div class="col-sm-3" style="padding-down: 5px;">
                Transmission:
                </div>
            <div class="col-sm-9">
                  <select class='form-control'  name='transmission_type' placeholder="Transmission Type" value="<?php echo $transmission_type; ?>" required autofocus=""><br>
                    
                    <option value="Automatic">Automatic</option>
                    <option value="Manual">Manual</option>
                  </select>
                </div>  
            <div class="col-sm-3" style="padding-top: 5px;">
                Engine CC:
                </div>
                <div class="col-sm-9">
            <input class="form-control"  name="engine_cc" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57))" placeholder="Engine CC" value="<?php echo $engine_cc; ?>" required autofocus=""><br>
            </div>   
            <div class="col-sm-3" style="padding-top: 5px;">
            Fuel Type:
                </div>
                <div class="col-sm-9">
                  <select class='form-control'  name='fuel_type' placeholder="Fuel Type" value="<?php echo $fuel_type; ?>" required autofocus="">
                    
                    <option value="Benzine">Benzine</option>
                    <option value="Diesel">Diesel</option>
                  </select><br>
                </div>  

            <div class="col-sm-3" style="padding-top: 5px;">
               Manufacturer:
                </div>
                <div class="col-sm-9">
            <input  class="form-control" name="car_manu" placeholder="Vehicle Manufacturer" value="<?php echo $car_manu; ?>" required autofocus=""><br>
          </div>   
          <div class="col-sm-3" style="padding-top: 5px;">
                Insurance:
                </div>
                <div class="col-sm-9">
          <?php $today = date("Y-m-d") ?>
          
            <input type="date"  name="vehicle_insurance" placeholder="Vehicle Insurance" value="<?php echo $vehicle_insurance; ?>" required autofocus="">
            &nbsp;<br>
                  </div>  
           
            <div class="col-sm-3" style="padding-top: 5px;">
            Vehicle Type:
                </div>
                <div class="col-sm-9">
          
                  <select class='form-control'  name='car_type' placeholder="Vehicle Type" value="<?php echo $car_type; ?>" required autofocus=""><br>
                    
                    <option value="Automobil">Automobil</option>
                    <option value="Pick Up Single cabin">Pick Up Single cabin</option>
                    <option value="Pick Up Double cabin">Pick Up Double cabin</option>
                    <option value="Bus">Bus</option>
                    <option value="Truck">Truck</option>
                    <option value="Field Cars">Field Cars</option>
                    <option value="Limousine">Limousine</option>
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

          <div class="col-sm-3" style="padding-top: 5px;">
          price with Fuel :
                </div>
                <div class="col-sm-9">
            <input  class="form-control"  name="wd_price_per_day" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Vehicle price with driver per day (in Birr)" value="<?php echo $wd_price_per_day; ?>" required autofocus=""><br>
          </div>

          <div class="col-sm-3" style="padding-top: 5px;">
          price without Fuel :
                </div>
                <div class="col-sm-9">
            <input class="form-control"  name="wod_price_per_day" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Vehicle price without driver per day (in Birr)" value="<?php echo $wod_price_per_day; ?>" required autofocus=""><br>
          </div>
          

          

           <button type="submit" style="margin:5px;" id="submit" name="submit" class="btn btn-warning pull-right"> UPDATE</button>   
           <a style="margin:5px;" class="btn btn-primary pull-right" href="entercarem.php" role="button">Back</a> 
        </form>
        
    
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
