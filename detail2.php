
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
    <link rel="stylesheet" href="assets/css/split2.css">
    <link rel="stylesheet" href="assets/css/print.css">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body>





<?php

    
        $id = $_GET["id"];
        $sql4 = "SELECT c.car_name, c.car_plate_code,c.car_nameplate,rc.full_name,rc.phone_no,rc.city,rc.sub_city,rc.kebele ,rc.rent_start_date, rc.rent_end_date, rc.fare,  d.driver_name, d.driver_phone,d.driver_gender,d.dl_number,t.TYPE
        FROM rentedcars rc, cars c, driver d,type t
        WHERE id = '$id' AND c.car_id=rc.car_id AND d.driver_id = rc.driver_id";
    $result4 = $conn->query($sql4);


    if (mysqli_num_rows($result4) > 0) {
        while($row = mysqli_fetch_assoc($result4)) {
            //$roles = $row["TYPE"];
            $car_name = $row["car_name"];
            $car_plate_code = $row["car_plate_code"];
            $car_nameplate = $row["car_nameplate"];
            $fare = $row["fare"];
            $rent_start_date = $row["rent_start_date"];
            $rent_end_date = $row["rent_end_date"];
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
    <div class="card shadow mb-4"> 
          
   
            <div class="card-body">
            <style>
            @media print {
  .hide-print {
    display: none;
  }
}
            .ro{
              float: right;
  
  padding: 15px;
            }
            .co{
              float: left;
  
  padding: 15px;
            }
            .wl{
              float: left;
  
  padding: 70px;
            }
            .wr{
              float: right;
  
  padding: 70px;
            }
            .footer {
    bottom: -650px  !important;
}
.p {
    font-family: "Ethiopic Zelan";
}
.a {
    font-family: "Ailerons";
}
.ad {
    font-family: "Emblem";
}
.h {
    font-family: "Ethiopic Hiwua";
}
.f {
    font-family: "fantuwua";
}

            </style>
            
           <div class="ro"> <img src="assets/img/b.jpg"  style="width:111px;height:110px;" ></div>
            
           <div class="co"> <img src="assets/img/b.jpg"  style="width:111px;height:110px;" ></div>
            <h3 style="text-align:center;">
          <div class="f">
<b><div class="ad">TANKWA TOUR AND TRAVEL AGENCY<br><h3><div class="a"> CAR RENTAL . TOUR<br><div class="a"><h6><br>Bahir Dar,Protection BLDG. GROUND FLOOR<br>+251 911 24 67 75 . +251 911 41 67 56 . +251 910 66 07 30 . +251 973 40 92 95</h6></div></div></h3></b></h3>
<hr style="height:2px;color:gray;background-color:gray">

             
                
</div>

    
    <h4 class="text-center"> Thank you for visiting Tankwa Car Rental! We wish you have a safe ride. </h4>
    <h5 style="text-align:center;">
    <div class="f">
<b style="text-align:center;"><div class="ad">Sales and Inventory Invoice</b></h5>
<div class="jumbotron">
    

 
 


             
                

    

    <div class="container">
    <div class="col-sm-4 py-1"></div>
                <div class="col-sm-4 py-1" style="float: none; margin: 0 auto; text-align: right;">
                  <h6>
                    <strong>Transaction #</strong><?php echo $id; ?>
                  </h6>
                  <h6>
                    <strong>Date </strong><?php echo date("Y-m-d"); ?>
                  </h6>
                  <h6 class="font-weight-bold">
                    <strong>Encoder:</strong> <?php echo $_SESSION['FIRST_NAME']; ?>
                  </h6>
                  <h6>
                    <?php echo 'Employee'; ?>
                  </h6>
                </div>
              </div>
        <div class="box">
            
                
            
            <div class="form-group row text-left mb-0 py-2">
            <div class="col-md-10" style="float: none; margin: 0 auto; ">
             <div class="row">
  <div class="column">
                
                <h4> <strong>FULL NAME:</strong>  <?php echo $full_name; ?></h4>
               
                <h4> <strong>PHONE NUMBER: </strong> <?php echo $phone_no; ?></h4>
                <h4> <strong>CITY: </strong> <?php echo $city; ?></h4>
                
                <h4> <strong>SUB-CITY: </strong> <?php echo $sub_city; ?></h4>
                
                <h4> <strong>KEBELE: </strong> <?php echo $kebele; ?></h4>
                
                
                <h4> <strong>VEHICLE NAME: </strong> <?php echo $car_name; ?></h4>
                
                <h4> <strong>PLATE-NUMBER:</strong> <?php echo $car_plate_code; ?> | <?php echo $car_nameplate; ?> </h4>
                
               <div  style="float: none; margin:auto; ">
                <h2 > <strong>TOTAL PRICE: </strong> <?php echo $fare; ?> </h2>
</div><br><br>
<b>Approved by_______________</b>
             </div>
<div class="column">   
                 <h4> <strong>Booking Date: </strong> <?php echo date("Y-m-d"); ?> </h4>
                <h4> <strong>Start Date: </strong> <?php echo $rent_start_date; ?></h4>
                
                <h4> <strong>Return Date: </strong> <?php echo $rent_end_date; ?></h4>
                
                <h4> <strong>Driver Name: </strong> <?php echo $driver_name; ?> </h4>
                
                <h4> <strong>Driver Gender: </strong> <?php echo $driver_gender; ?> </h4>

                <h4> <strong>Driver License number: </strong>  <?php echo $dl_number; ?> </h4>
                 <h4> <strong>Driver Contact:</strong>  <?php echo $driver_phone; ?></h4>
                 <br><br><br><br>
                 <b>Checked by_______________</b>
</div>     <div style="text-align:right">
                <h5>© 2022 Tankwa Car Rental</h5>
                <div class="hide-print">
            </div>
</div>
               
                
</div>
                
            </div>
            </div>
            </div>
               <div class="text-right"><br>
               <div class="hide-print">
<input type="submit"  onClick="window.print()" class="btn btn-primary" style="width:100px" name="login" value="print">
</div>
</div>
</div>
</div>
        </div>
        </div>
    </div></div>
    
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