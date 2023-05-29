
<html>
<?php 
include('session.php'); 
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
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
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

            <?php
                if($_SESSION['TYPE']=='Admin'){
                    ?> 
                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index1.php">Home</a>
                            </li>
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['FIRST_NAME']; ?></a>
                            </li>
                            <li>
                            <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                      <li> <a href="entercar.php">Add Car</a></li>
                      <li> <a href="enterdriver.php"> Add Driver</a></li>
                      <li> <a href="adminview.php">View</a></li>
                      <li> <a href="printbill.php">Report</a></li>
        
                    </ul>
                    </li>
                  </ul>
                            </li>
                            <li>
                                <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                            </li>
                        </ul>
                    </div>
        
                    <?php
                        }
                        elseif($_SESSION['TYPE']=='User' && $_SESSION['JOB_ID']=='2'){
                            ?> 
                            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="index2.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['FIRST_NAME']; ?></a>
                                    </li>
                                    <li>
                                    <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
                              <li> <a href="entercar.php">Add Car</a></li>
                              <li> <a href="enterdriver.php"> Add Driver</a></li>
                              <li> <a href="adminview.php">View</a></li>
                              
                
                            </ul>
                            </li>
                          </ul>
                                    </li>
                                    <li>
                                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                                    </li>
                                </ul>
                            </div>
                
                            <?php
                                }
               
                
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 
<?php $login_admin = $_SESSION['FIRST_NAME']; 

    $sql1 = "SELECT * FROM rentedcars rc, clientcars cc, users u, cars WHERE cc.USERNAME = '$login_admin' AND cc.car_id = rc.car_id AND rc.return_status = 'R' AND u.USERNAME = rc.USERNAME AND cc.car_id = cars.car_id";

    $result1 = $conn->query($sql1);

    if (mysqli_num_rows($result1) > 0) {
?>
<div class="container">
      <div class="jumbotron">
        <h1>Your Bookings</h1>
        <p> Hope you enjoyed our service </p>
      </div>
    </div>

    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="20%">Car</th>
<th width="15%">Customer Name</th>
<th width="20%">Rent Start Date</th>
<th width="20%">Rent End Date</th>
<th width="10%">Distance</th>
<th width="15%">Total Amount</th>
</tr>
</thead>
<?php
        while($row = mysqli_fetch_assoc($result1)) {
?>
<tr>
<td><?php echo $row["car_name"]; ?></td>
<td><?php echo $row["customer_name"]; ?></td>
<td><?php echo $row["rent_start_date"] ?></td>
<td><?php echo $row["rent_end_date"]; ?></td>
<td><?php echo $row["distance"]; ?></td>
<td>&#8377; <?php echo $row["total_amount"]; ?></td>
</tr>
<?php        } ?>
                </table>
                </div> 
        <?php } else {
            ?>
        <div class="container">
      <div class="jumbotron">
        <h1>No booked cars</h1>
        <p> Rent some cars now <?php echo $conn->error; ?> </p>
      </div>
    </div>

            <?php
        } ?>   

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