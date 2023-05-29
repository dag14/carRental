<!DOCTYPE html>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
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
 
<?php //$login_customer = $_SESSION['FIRST_NAME']; 

    $sql1 = "SELECT c.car_name,rc.full_name,rc.phone_no, rc.rent_start_date, rc.rent_end_date, rc.fare,  rc.id FROM rentedcars rc, cars c
    WHERE c.car_id=rc.car_id AND rc.return_status='NR'";
    $result1 = $conn->query($sql1);

    if (mysqli_num_rows($result1) > 0) {
?>
<div class="container">
      <div class="jumbotron">
        <h3>Return your cars here</h3>
        
      </div>
      <div align="right">
		<div class="options">
    Search:
    <input id="myInput" type="text" placeholder="Search..">
			</div>
      </div>
    </div>

    <div class="jumbotron" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="12%">Car</th>
<th width="12%">Full Name</th>
<th width="12%">Phone Number</th>
<th width="12%">Rent Id</th>
<th width="12%">Rent Start Date</th>
<th width="12%">Rent End Date</th>
<th width="12%">Fare</th>
<th width="12%">Action</th>
</tr>
</thead>
<?php
        while($row = mysqli_fetch_assoc($result1)) {
?>
  <tbody id="myTable">
<tr>
<td><?php echo $row["car_name"]; ?></td>
<td><?php echo $row["full_name"]; ?></td>
<td><?php echo $row["phone_no"]; ?></td>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["rent_start_date"] ?></td>  
<td><?php echo $row["rent_end_date"]; ?></td>
<td><?php echo $row["fare"]; ?></td>



<?php    echo '<td> <div class="btn-group">
                              <a type="button" class="btn btn-success pull-right" href="returncar2.php?action=edit & id='.$row['id'] . '"><i ></i> Return</a>  
                              </td>';    ?>

</tbody>
</tr>
<?php        } ?>
                </table>
                </div> 
        <?php } else {
            ?>
            <div class="container">
      <div class="jumbotron">
        <h1>No cars to return.</h1>
        <p> Hope you enjoyed our service </p>
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