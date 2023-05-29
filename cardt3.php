
<html>

<?php
session_start();
require 'connection.php';
$conn = Connect();
?>

<title>Book Car </title>
<head>
    <script type="text/javascript" src="assets/ajs/angular.min.js"> </script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link rel="stylesheet" href="assets/css/split.css">
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
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    
                    <li>
                        <a href="about/about.php"> About </a>
                    </li>

                     <li>
                        <a href="about/faq.php"> FAQ </a>
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
        <form role="form" action="login.php" method="POST">
        <br style="clear: both">
          <h2 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Rent your dream car here </h2>

        <?php
        $car_id = $_GET["id"];
        $sql1 = "SELECT * FROM cars WHERE car_id = '$car_id'";
        $result1 = mysqli_query($conn, $sql1);

        if(mysqli_num_rows($result1)){
            while($row1 = mysqli_fetch_assoc($result1)){
                $car_name = $row1["car_name"];
                $car_model = $row1["car_model"];
                $car_manu = $row1["car_manu"];
                $seat_size = $row1["seat_size"];
                $car_color = $row1["car_color"];
                $car_img = $row1["car_img"];
                $transmission_type = $row1["transmission_type"];
                $fuel_type = $row1["fuel_type"];
                $engine_cc = $row1["engine_cc"];
                $car_nameplate = $row1["car_nameplate"];
                $car_type = $row1["car_type"];
                $car_plate_code = $row1["car_plate_code"];
                $wd_price_per_day = $row1["wd_price_per_day"];
                $wod_price_per_day = $row1["wod_price_per_day"];
            }
        }

        ?>
        <div class="row">
  <div class="column">
         <h5> Car:&nbsp;  <?php echo($car_name);?></h5>
         <!-- </div> -->
         
          <!-- <div class="form-group"> -->
            <h5> Vehicle Plate Number:&nbsp; <?php echo($car_plate_code);?> | <?php echo($car_nameplate);?></h5>
            <h5> Vehicle Type:&nbsp; <?php echo($car_type);?> </h5>
            <h5> Vehicle Color:&nbsp; <?php echo($car_color);?> </h5>
            <h5> Seat Size:&nbsp; <?php echo($seat_size);?> </h5>
            <h5> Transmission Type:&nbsp; <?php echo($transmission_type);?> </h5>
            <h5> Fuel Type:&nbsp; <?php echo($fuel_type);?> </h5>
            <h5> Vehicle Model:&nbsp; <?php echo($car_model);?> </h5>
            <h5> Engine Power :&nbsp; <?php echo($engine_cc);?> cc </h5>
            <h5> Vehicle Manufacturer:&nbsp; <?php echo($car_manu);?> </h5>
            <h5>Fare with Driver: <?php echo("Birr" .  $wd_price_per_day . "/day");?><h5>   
                
                     
                     <h5>Fare without Driver: <?php echo("Birr" .  $wod_price_per_day . "/day");?><h5>   
            </div>
    

            <div class="column">
  
            
            <img class="card-img-top" src="<?php echo $car_img; ?>"width="300" height="300" alt="Card image cap">
                
                </div>
                </div>
        
                    <!-- <div class="form-group"> -->
               
                     
               
        




<div class="form-group">
            
          



          

         






<hr>

            
                <!-- <form class="form-group"> -->
                
                
       


           <input type="submit"name="submit" value="Book Now" class="btn btn-success pull-right">
        </form>

      </div></div>
      
    </div>
<div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
      
            <h6><strong>Kindly Note:</strong> You will be charged <span class="text-danger">Birr 200 </span> for each day after the due date.</h6>
        </div>
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
