<!DOCTYPE html>
<html>
<?php
//session_start();
require 'session.php';
if(!isset($_SESSION['CUSTOMER_NAME'])){
    session_destroy();
    header("location: index.php");
}
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
  <script type="text/javascript">
function Check() {
    if (document.getElementById('wd').checked) {
        document.getElementById('ifYes').style.display = 'block';
    } 
    else {
        document.getElementById('ifYes').style.display = 'none';

   }
}

</script>

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
                    <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Control Panel <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              
              
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
        $car_id = $_GET["id"];
        $sql1 = "SELECT * FROM cars WHERE car_id = '$car_id'";
        $result1 = mysqli_query($conn, $sql1);

        if(mysqli_num_rows($result1)){
            while($row1 = mysqli_fetch_assoc($result1)){
                $car_name = $row1["car_name"];
                $car_nameplate = $row1["car_nameplate"];
                
            }
        }

        ?>

          <!-- <div class="form-group"> -->
              <h5> Car:&nbsp;  <?php echo($car_name);?></h5>
         <!-- </div> -->
         
          <!-- <div class="form-group"> -->
            <h5> Vehicle Number:&nbsp; <?php echo($car_nameplate);?></h5>
          <!-- </div>      -->
        <!-- <div class="form-group"> -->
        <h5> Choose your Fare type:  &nbsp;
            <input onclick="Check();" type="radio" name="type" value="wd" id="wd" > With Driver 
            <input onclick="Check();" type="radio" name="type" value="wod"> Without Driver &nbsp;</h5>
            
<br>
        <?php $today = date("Y-m-d") ?>
          <label><h5>Start Date:</h5></label>
            <input type="date" name="rent_start_date" min="<?php echo($today);?>" required="">
            &nbsp;
          <label><h5>End Date:</h5></label>
          <input type="date" name="rent_end_date" min="<?php echo($today);?>" required="">
        <!-- </div>      -->
        <div class="form-group">
            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full name" required>
          </div>
          <div class="form-group">
            <input type="text"  class="form-control" id="phone_no" name="phone_no" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Phone number" required>
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
          
                
        
        <div ng-switch="myVar"> 
        

         

            <br><br>
           
<div id="ifYes" style="display:none" >


                <!-- <form class="form-group"> -->
                Choose a driver: &nbsp;
                <select name="driver_id_from_dropdown" ng-model="myVar1">
                
                        <?php
                        $sql2 = "SELECT * FROM driver d WHERE d.driver_availability = 'yes'  ";
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
                        $sql3 = "SELECT * FROM driver d WHERE d.driver_availability = 'yes' ";
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
                <?php }} ?></div>
                </div>
                <input type="hidden" name="hidden_carid" value="<?php echo $car_id; ?>">
                
         
           <input type="submit"name="submit" value="Book Now" class="btn btn-success pull-right">     
        </form>
        
      </div>
      
    </div>
<div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
            <h6><strong>Kindly Note:</strong> You will be charged <span class="text-danger">200 Birr/-</span> for each day after the due date.</h6>
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