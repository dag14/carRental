

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
   <?php $id = $_GET["id"];
   $sql4 = "SELECT * FROM   rentedcars  WHERE id = '$id'  ";
   $result4 = $conn->query($sql4);


   if (mysqli_num_rows($result4) > 0) {
       while($row = mysqli_fetch_assoc($result4)) {
           
           
           $full_name = $row["full_name"];
           $phone_no = $row["phone_no"];
           $city = $row["city"];
           $sub_city = $row["sub_city"];
           $kebele = $row["kebele"];
           $rent_start_date = $row["rent_start_date"];
           $rent_end_date = $row["rent_end_date"];
           
           
       }
   } ?>
    <div class="container" style="margin-top: 80px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="book_editcu1.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Update Rent Details </h3>
          <div class="col-sm-3" style="padding-top: 5px;">
                 Rent Id:
                </div>
                <div class="col-sm-9">
            <input  class="form-control"  name="id" placeholder="Rent Id " value="<?php echo $id; ?>" readonly><br>
          </div>
          <div class="col-sm-3" style="padding-top: 5px;">
                 Full Name:
                </div>
          <div class="col-sm-9">
                  <input class="form-control" placeholder="Full Name" name="full_name" value="<?php echo $full_name; ?>" required autofocus=""><br>
                </div>
                <div class="col-sm-3" style="padding-top: 5px;">
                Phone:
                </div>
          <div class="col-sm-9">
                  <input class="form-control" placeholder="Phone" name="phone_no" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" value="<?php echo $phone_no; ?>" required autofocus=""><br>
                </div>
                <div class="col-sm-3" style="padding-top: 5px;">
                City:
                </div>
          <div class="col-sm-9">
                  <input  class="form-control" placeholder="City" name="city" value="<?php echo $city; ?>" required autofocus=""><br>
                </div>
  
          <div class="col-sm-3" style="padding-top: 5px;">
          Sub-City:
                </div>
          <div class="col-sm-9">
                  <input class="form-control" placeholder="Sub-City" name="sub_city" value="<?php echo $sub_city; ?>" required autofocus=""><br>
                </div>
                <div class="col-sm-3" style="padding-down: 5px;">
                kebele:
                </div>
          <div class="col-sm-9">
                  <input class="form-control" placeholder="kebele" name="kebele" value="<?php echo $kebele; ?>" required autofocus=""><br>
                </div>
                <div class="col-sm-3" style="padding-down: 5px;">
            Rent Start Date:
                </div>
          <div class="col-sm-9">
                  <input type="date" class="form-control" placeholder="Rent Start Date" name="rent_start_date" value="<?php echo $rent_start_date; ?>" required autofocus=""><br>
                </div>
                <div class="col-sm-3" style="padding-down: 5px;">
                Rent End Date:
                </div>
          <div class="col-sm-9">
                  <input type="date" class="form-control" placeholder="Rent End Date" name="rent_end_date" value="<?php echo $rent_end_date; ?>" required autofocus=""><br>
                </div>
 
            

          
          
          <button type="submit" style="margin:5px;" id="submit" name="submit" class="btn btn-warning pull-right"> UPDATE</button> 
          <a style="margin:5px;" class="btn btn-primary pull-right" href="mybookings2.php" role="button">Back</a>  
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
