

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
   <?php $driver_id = $_GET["id"];
   $sql4 = "SELECT * FROM   driver  WHERE driver_id = '$driver_id'  ";
   $result4 = $conn->query($sql4);


   if (mysqli_num_rows($result4) > 0) {
       while($row = mysqli_fetch_assoc($result4)) {
           
           
           $driver_name = $row["driver_name"];
           $driver_gender = $row["driver_gender"];
           $dl_number = $row["dl_number"];
           $driver_phone = $row["driver_phone"];
           $dob = $row["dob"];
           $driver_region = $row["driver_region"];
           $driver_kebele = $row["driver_kebele"];
           $driver_hn = $row["driver_hn"];
           $dl_number = $row["dl_number"];
           $dl_issue = $row["dl_issue"];
           
       }
   } ?>
    <div class="container" style="margin-top: 80px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="drv_editem1.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Update Driver Details </h3>
          <div class="col-sm-3" style="padding-top: 5px;">
                 Driver Id:
                </div>
                <div class="col-sm-9">
            <input  class="form-control"  name="driver_id" placeholder="Driver ID " value="<?php echo $driver_id; ?>" readonly><br>
          </div>
          <div class="col-sm-3" style="padding-top: 5px;">
                 Driver Name:
                </div>
          <div class="col-sm-9">
                  <input class="form-control" placeholder="Driver Name" name="driver_name"  value="<?php echo $driver_name; ?>" required autofocus=""><br>
                </div>
                <div class="col-sm-3" style="padding-top: 5px;">
                 Driver Phone:
                </div>
          <div class="col-sm-9">
                  <input class="form-control" placeholder="Driver Phone" name="driver_phone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" value="<?php echo $driver_phone; ?>" required autofocus=""><br>
                </div>
                <div class="col-sm-3" style="padding-top: 5px;">
                 Date of Birth:
                </div>
          <div class="col-sm-9">
                  <input type="date" class="form-control" placeholder="Date of Birth" name="dob" value="<?php echo $dob; ?>" required autofocus=""><br>
                </div>
                

             

          
          <div class="col-sm-3" style="padding-top: 5px;">
            Address:
            </div>
          <div class="col-sm-9" style="width:100%; display: flex;">
          <select class='form-control' id="driver_region" name='driver_region' placeholder="Region" value="<?php echo $driver_region; ?>" required>
                    
                    <option value="Addis Ababa">Addis Ababa(City)</option>
                    <option value="Dire Dawa">Dire Dawa(City)</option>
                    <option value="Amhara">Amhara</option>
                    <option value="Oromia">Oromia</option>
                    <option value="Tigray">Tigray</option>
                    <option value="Somali">Somali</option>
                    <option value="Benishangul-Gumuz">Benishangul-Gumuz</option>
                    <option value="Sidama">Sidama</option>
                    <option value="Afar">Afar</option>
                    <option value="South West Ethiopia Peoples' Region">South West Ethiopia Peoples' Region</option>
                    <option value="Southern Nations, Nationalities and Peoples Region (SNNPR)">Southern Nations, Nationalities and Peoples Region (SNNPR)</option>
                    <option value="Gambella">Gambella </option>
                    <option value="Harari ">Harari </option>
                    
                  </select>
                  <div class="col-sm-9">
                  <input class="form-control" placeholder="Driver kebele" name="driver_kebele" value="<?php echo $driver_kebele; ?>" required autofocus="">
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="House Number" name="driver_hn" value="<?php echo $driver_hn; ?>" required autofocus=""><br>
                </div>
            
          </div>
          
          <div class="col-sm-3" style="padding-top: 5px;">
                 License Num:
                </div>
          <div class="col-sm-9">
                  <input class="form-control" placeholder=" License Number" name="dl_number" value="<?php echo $dl_number; ?>" required autofocus=""><br>
                </div>
                <div class="col-sm-3" style="padding-down: 5px;">
           Isuue Date:
                </div>
          <div class="col-sm-9">
                  <input type="date" class="form-control" placeholder="License Issue Date" name="dl_issue" value="<?php echo $dl_issue; ?>" required autofocus=""><br>
                </div>
 
           <div class="col-sm-3" style="padding-top: 10px;">
            Gender:
            </div>
          <div class="form-group">
                  <select class='form-control' id="driver_gender" name='driver_gender' placeholder="Gender" value="<?php echo $driver_gender; ?>" required>
                    
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>   

          

           <button type="submit" style="margin:5px;" id="submit" name="submit" class="btn btn-warning pull-right"> UPDATE</button>   
           <a style="margin:5px;" class="btn btn-primary pull-right" href="enterdriverem.php" role="button">Back</a> 
        </form>
      </div>
    </div>
    
<div class="form-group">
            
      
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
