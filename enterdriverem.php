

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
<link rel="stylesheet" type="text/css" href="assets/css/srch.css">
<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
<link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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

    <div  style="margin-top: 65px;" >
      <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="enterdriver1.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Enter Driver Details </h3>

          <div class="form-group">
            <input type="text" class="form-control" id="driver_name" name="driver_name" placeholder="Driver Name " required autofocus="">
          </div>

             

          <div class="form-group">
            <input type="text" class="form-control" id="driver_phone" name="driver_phone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Phone" required>
          </div>
          <div class="form-group">
          Date Of Birth
            <input type="date" class="form-control" id="dob" name="dob" placeholder="Date Of Birth" required>
          </div>
            Address
          <div class="form-group" style="width:100%; display: flex;">
          <select class='form-control' id="driver_region" name='driver_region' placeholder="Region" required>
                    <option value=" disabled selected hidden">Select Region</option>
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
            <input type="text" class="form-control" id="driver_kebele" name="driver_kebele" placeholder="Kebele or Woreda" required>
            <input type="text" class="form-control" id="driver_hn" name="driver_hn" placeholder="House Number" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="dl_number" name="dl_number" placeholder="Driving License Number" required>
          </div>  
          <div class="form-group">
          License issue Date
            <input type="date" class="form-control" id="dl_issue" name="dl_issue" placeholder="License issue Date" required>
          </div>
          <div class="form-group">
                  <select class='form-control' id="driver_gender" name='driver_gender' placeholder="Gender" required>
                    <option value=" disabled selected hidden">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>   

          

           <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> Add Driver</button>    
        </form>
      </div>
      </div>
      <div class="header" id="home">
		  <div class="top-header">
			
      <div class="col-md-9" style="float: none; margin: 0 auto;">
      <div class="form-area" >
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> My Drivers </h3>
          
		
		  <!-- Search, etc -->
      <div align="right">
		  <div class="options">
      Search:
      <input id="myInput" type="text" placeholder="Search..">
			</div>
      </div><br>
		

      <?php
      // Storing Session

      $sql = "SELECT  * FROM driver d 
      join `users` u on d.USERNAME=u.USERNAME

      WHERE d.USERNAME=u.USERNAME ORDER BY driver_name";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        ?>

      <table class="table table-striped">
  
      <thead class="thead-dark">
      <tr>
        <th>     </th>
        <th> Name</th>
        <th> Gender </th>
        <th> DL Number </th>
        
        <th>License issue Date</th>
        <th> Phone </th>
        
        <th> Availability </th>
      </tr>
      </thead>

      <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
      ?>

      <tbody id="myTable">
      <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      <?$row["driver_id"]?>
      <td><?php echo $row["driver_name"]; ?></td>
      <td><?php echo $row["driver_gender"]; ?></td>
      <td><?php echo $row["dl_number"]; ?></td>
      
      <td><?php echo $row["dl_issue"]; ?></td>
      <td><?php echo $row["driver_phone"]; ?></td>
      
      <td><?php echo $row["driver_availability"]; ?></td>
      <?php
            
            echo '<td > <div class="btn-group">
            
                            <div class="btn-group">
                              <a type="button" class="btn btn-success pull-right " data-toggle="dropdown" style="color:white;">
                              ... <span class="caret"></span></a>
                            <ul class="dropdown-menu text-center" role="menu">
                                <li>
                                  <a type="button" class="btn btn-warning bg-gradient-warning btn-sm" style="border-radius: 0px;" href="drv_editem.php?action=edit & id='.$row['driver_id']. '">
                                    <i class="fas fa-fw fa-edit"></i> Edit
                                  </a>
                                </li>
                                <li>
                                  <a type="button" class="btn btn-danger bg-gradient-danger btn-sm" style="border-radius: 0px;" href="drv_delem.php?action=delete & id='.$row['driver_id']. '">
                                    <i class="fa fa-trash"></i> Delete
                                  </a>
                                </li>
                            </ul>
                            </div><a type="button" class="btn btn-success pull-right" href="driverdt2.php?action=edit & id='.$row['driver_id'] . '"><i ></i> Detail</a>  
                          </div> </td>';
                          
                
                        
        ?> 
          </tr>
      </tbody>
  
      <?php } ?>
      </table>
      <br>


      <?php } else { ?>

        <h4><center>0 Drivers available</center> </h4>

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