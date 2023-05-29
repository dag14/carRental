
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

<title>Book Car </title>
<head>
    <script type="text/javascript" src="assets/ajs/angular.min.js"> </script>
    <link rel="stylesheet" href="assets/css/split.css">
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
<link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
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

<div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="enterdriverem.php" method="POST">
        <br style="clear: both">
          <h2 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Driver Detail </h2>

        <?php
        $driver_id = $_GET["id"];
        $sql1 = "SELECT * FROM driver WHERE driver_id = '$driver_id'";
        $result1 = mysqli_query($conn, $sql1);

        if(mysqli_num_rows($result1)){
            while($row1 = mysqli_fetch_assoc($result1)){
                $driver_name = $row1["driver_name"];
                $dl_number = $row1["dl_number"];
                $dl_issue = $row1["dl_issue"];
                
                $driver_phone = $row1["driver_phone"];
                $dob = $row1["dob"];
                $driver_region = $row1["driver_region"];
                $driver_kebele = $row1["driver_kebele"];
                $driver_hn = $row1["driver_hn"];
                $driver_gender = $row1["driver_gender"];
                $driver_availability = $row1["driver_availability"];
                
            }
        }

        ?>
        
  
         <h5> Driver:&nbsp;  <?php echo($driver_name);?></h5>
         <!-- </div> -->
         
          <!-- <div class="form-group"> -->
            <h5> Driver Phone Number:&nbsp; <?php echo($driver_phone);?> </h5>
            <h5> Driver Licsence Number:&nbsp; <?php echo($dl_number);?> </h5>
            <h5> Licsence Issue Date:&nbsp; <?php echo($dl_issue);?> </h5>
            <h5> Date Of Birth:&nbsp; <?php echo($dob);?> </h5>
            <h5> Driver Gender:&nbsp; <?php echo($driver_gender);?> </h5>
            <h5> Driver Region:&nbsp; <?php echo($driver_region);?> </h5>
            <h5> Driver Kebele:&nbsp; <?php echo($driver_kebele);?> </h5>
            <h5> Driver House Number :&nbsp; <?php echo($driver_hn);?> cc </h5>
            <h5> Driver Availability:&nbsp; <?php echo($driver_availability);?> </h5>
              
           
    

           
  
            
            
        
                    <!-- <div class="form-group"> -->
               
                     
               
        




<div class="form-group">
            
          



          

         







                
                <!-- </form> -->
                <div ng-switch="myVar1">
                

                

                
       


           <input type="submit"name="submit" value="Back" class="btn btn-success pull-right">
        </form>

      </div></div>
      
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
