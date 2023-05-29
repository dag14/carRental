
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
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    
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
                        <a href="index1.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo  $_SESSION['FIRST_NAME']; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                <ul class="dropdown-menu">

              <li> <a href="entercar.php">Cars</a></li>
              <li> <a href="enterdriver.php"> Drivers</a></li>
              <li> <a href="employeesignup.php"> Hire Employee</a></li>
              <li> <a href="adduser.php"> Add User</a></li>
              <li> <a href="mybookings3.php">View Bookings</a></li>
              <li> <a href="prereturncar3.php">Return Bookings</a></li>
              <li> <a href="feedback.php">Feedbacks</a></li>

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
        <form role="form" action="entercar1.php" enctype="multipart/form-data" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Want to rent your car? Give us your car details. </h3>

          <div class="form-group">
            <input type="text" class="form-control" id="car_name" name="car_name" placeholder="Car Model Name " required autofocus="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="car_model" name="car_model" placeholder="Car Model  " required autofocus="">
          </div>
          <div class="form-group">
                  <select class='form-control' id="car_source" name='car_source' placeholder="Car Source" required>
                    <option value="" disabled selected hidden>Select Car Source</option>
                    <option value="Company Own">Company Own</option>
                    <option value="Out Source">Out Source</option>
                  </select>
                </div> 

          <div class="form-group">
                  <select class='form-control' id="car_plate_code" name='car_plate_code' placeholder="Car Plate Code" required>
                    <option value="" disabled selected hidden>Select Car Plate Code</option>
                    <option value="2">Code 2</option>
                    <option value="3">Code 3</option>
                  </select>
                </div>   

          <div class="form-group">
            <input type="text" class="form-control" id="car_nameplate" name="car_nameplate" placeholder="Vehicle Plate Number" required>
          </div>   
          
          <div class="form-group">
            <input type="text" class="form-control" id="car_color" name="car_color" placeholder="Vehicle Color" required>
          </div> 
           
          <div class="form-group">
            <input type="text" class="form-control" id="seat_size" name="seat_size" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57 ))" placeholder="Vehicle Seat Size" required>
          </div> 

          <div class="form-group">
                  <select class='form-control' id="transmission_type" name='transmission_type' placeholder="Transmission Type" required>
                    <option value="" disabled selected hidden>Select Transmission Type</option>
                    <option value="Automatic">Automatic</option>
                    <option value="Manual">Manual</option>
                  </select>
                </div>  

            <div class="form-group">
            <input type="text" class="form-control" id="engine_cc" name="engine_cc" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57))" placeholder="Engine CC" required>
            </div>   

            <div class="form-group">
                  <select class='form-control' id="fuel_type" name='fuel_type' placeholder="Fuel Type" required>
                    <option value="" disabled selected hidden>Select Fuel Type</option>
                    <option value="Benzine">Benzine</option>
                    <option value="Diesel">Diesel</option>
                  </select>
                </div>  

               <div class="form-group">
            <input type="text" class="form-control" id="car_manu" name="car_manu" placeholder="Vehicle Manufacturer" required>
          </div>   
          
          <?php $today = date("Y-m-d") ?>
          <label><h5>Vehicle Insurance Start Date:</h5></label>
            <input type="date" id="vehicle_insurance" name="vehicle_insurance"  required="">
            &nbsp;
                    
           

          <div class="form-group">
                  <select class='form-control' id="car_type" name='car_type' placeholder="Vehicle Type" required>
                    <option value="" disabled selected hidden>Select Vehicle Type</option>
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

          <div class="form-group">
            <input type="text" class="form-control" id="wd_price_per_day" name="wd_price_per_day" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Vehicle price with driver per day (in Birr)" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="wod_price_per_day" name="wod_price_per_day" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Vehicle price without driver per day (in Birr)" required>
          </div>

          <div class="form-group">
            <input name="uploadedimage" type="file">
          </div>
           <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> Add car</button>    
        </form>
      </div>
    </div>


        <div class="col-md-12" style="float: none; margin: 0 auto;">
    <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> My Cars </h3>
          <div align="right">
		<div class="options">
    Search:
    <input id="myInput" type="text" placeholder="Search..">
			</div>
      </div>
<?php
// Storing Session
$sql = "SELECT * FROM cars c
join `users` u on c.USERNAME=u.USERNAME

WHERE c.USERNAME=u.USERNAME";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
  ?>
<div style="overflow-x:auto;">
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th></th>
        <th width="10%"> Model Name</th>
        <th width="10%"> Car Source</th>
        <th width="10%"> plate Number </th>
        
        
        
        <th width="10%"> Car manufacturer </th>
        
        
        <th width="10%"> Car price with driver (/day)</th>
        <th width="10%"> Car price without driver (/day)</th>
        <th width="1%"> Availability </th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody id="myTable">
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      <?$row["car_id"]?>
      <td><?php echo $row["car_name"]; ?></td>
      <td><?php echo $row["car_source"]; ?></td>
      
      <td><?php echo $row["car_nameplate"]; ?></td>
      
      
      
      <td><?php echo $row["car_manu"]; ?></td>
      
      
      <td><?php echo $row["wd_price_per_day"]; ?></td>
      <td><?php echo $row["wod_price_per_day"]; ?></td>
      <td><?php echo $row["car_availability"]; ?></td>
      <?php
            
            echo '<td > <div class="btn-group">
            
                            <div class="btn-group">
                              <a type="button" class="btn btn-success pull-right " data-toggle="dropdown" style="color:white;">
                              ... <span class="caret"></span></a>
                            <ul class="dropdown-menu text-center" role="menu">
                                <li>
                                  <a type="button" class="btn btn-warning bg-gradient-warning btn-block" style="border-radius: 0px;" href="car_edit.php?action=edit & id='.$row['car_id']. '">
                                    <i class="fas fa-fw fa-edit"></i> Edit
                                  </a>
                                </li>
                                <li>
                                  <a type="button" class="btn btn-danger bg-gradient-danger btn-block" style="border-radius: 0px;" href="car_del.php?action=delete & id='.$row['car_id']. '">
                                    <i class="fa fa-trash"></i> Delete
                                  </a>
                                </li>
                            </ul>
                            </div><a type="button" class="btn btn-success pull-right" href="cardt.php?action=edit & id='.$row['car_id'] . '"><i ></i> Detail</a>  
                          </div> </td>';
                          
                
                        
?> 
    </tr>
  </tbody>
  <?php } ?>
  </table>
  </div>
    <br>
  <?php } else { ?>
  <h4><center>0 Cars available</center> </h4>
  <?php } ?>
        </form>
</div>        
        </div>
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