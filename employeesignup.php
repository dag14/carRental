<html>
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
    <title> Employee Signup | Tankwa Car Rental  </title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
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
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
<body>
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
    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to Tankwa Car Rental</h1>
            <br>
            <p>Employee Hiering Porrtal</p>
        </div>
    </div>

    <div class="container" style="margin-top: -1%; margin-bottom: 2%;">
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading"> Hire an Emploee </div>
                <div class="panel-body">

                    <form role="form" action="employee_registered_success.php" method="POST">

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="FIRST_NAME"><span class="text-danger" style="margin-right: 5px;">*</span>First Name: </label>
                                <div class="input-group">
                                    <input class="form-control" id="FIRST_NAME" type="text" name="FIRST_NAME" placeholder="First Name" required="" autofocus="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="LAST_NAME"><span class="text-danger" style="margin-right: 5px;">*</span>Last Name: </label>
                                <div class="input-group">
                                    <input class="form-control" id="LAST_NAME" type="text" name="LAST_NAME" placeholder="Last Name" required="" autofocus="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="PHONE_NUMBER"><span class="text-danger" style="margin-right: 5px;">*</span> Phone Number: </label>
                                <div class="input-group">
                                    <input class="form-control" id="PHONE_NUMBER" type="text" name="PHONE_NUMBER" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Phone Number" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-phone" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                       
                </div>  
                
                <div class="form-group">
                  <select class='form-control' id="GENDER" name='GENDER' placeholder="Gender" required>
                    <option value=" disabled selected hidden">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>   

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="EMAIL"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
                                <div class="input-group">
                                    <input class="form-control" id="EMAIL" type="email" name="EMAIL" placeholder="Email" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="city"><span class="text-danger" style="margin-right: 5px;">*</span> City: </label>
                                <div class="input-group">
                                    <input class="form-control" id="city" type="text" name="city" placeholder="City" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
                                    </span>

                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="sub_city"><span class="text-danger" style="margin-right: 5px;">*</span> Sub-City: </label>
                                <div class="input-group">
                                    <input class="form-control" id="sub_city" type="text" name="sub_city" placeholder="Sub-City" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
                                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="kebele"><span class="text-danger" style="margin-right: 5px;">*</span> Kebele: </label>
                                <div class="input-group">
                                    <input class="form-control" id="kebele" type="text" name="kebele" placeholder="Kebele" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
                                    </span>

                                </div>
                            </div>
                        </div>

                        

            
                    <div class="row">
                            <div class="form-group col-xs-12">
                            <?php $today = date("Y-m-d") ?>
                                <label for="HIRED_DATE"><span class="text-danger" style="margin-right: 5px;">*</span>Hired Date: </label>
                                <div class="input-group">
            <input type="date" id="HIRED_DATE" name="HIRED_DATE"  required="">
            &nbsp;
                                    </div>
                            </div>
                        </div>

                        



                        <div class="row">
                            <div class="form-group col-xs-4">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>

                        </div>
                        
                    </form>

                </div>

            </div>

        </div>
        <div class="col-md-12" style="float: none; margin: 0 auto;">
    <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> My Employees </h3>
          <div align="right">
		<div class="options">
    Search:
    <input id="myInput" type="text" placeholder="Search..">
			</div>
      </div>
<?php
// Storing Session
$sql = "SELECT * FROM employee";


$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
  ?>
<div style="overflow-x:auto;">
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th></th>
        <th width="10%"> Employee Name</th>
        <th width="10%"> Phone Number</th>
        <th width="10%"> Email </th>
        <th width="10%"> Gender </th>
        <th width="10%"> Account </th>
        
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody id="myTable">
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      
      <td><?php echo $row["FIRST_NAME"]; ?> <?php echo $row["LAST_NAME"]; ?></td>
      <td><?php echo $row["PHONE_NUMBER"]; ?></td>
      
      <td><?php echo $row["EMAIL"]; ?></td>
      <td><?php echo $row["GENDER"]; ?></td>
      
      
      <td><?php echo $row["account"]; ?></td>
      
      
      
      <?php
            
            echo '<td > <div class="btn-group">
            
                            <div class="btn-group">
                              <a type="button" class="btn btn-success pull-right " data-toggle="dropdown" style="color:white;">
                              ... <span class="caret"></span></a>
                            <ul class="dropdown-menu text-center" role="menu">
                                <li>
                                  <a type="button" class="btn btn-warning bg-gradient-warning btn-block" style="border-radius: 0px;" href="emp_edit.php?action=edit & id='.$row['EMPLOYEE_ID']. '">
                                    <i class="fas fa-fw fa-edit"></i> Edit
                                  </a>
                                </li>
                                <li>
                                  <a type="button" class="btn btn-danger bg-gradient-danger btn-block" style="border-radius: 0px;" href="emp_del.php?action=delete & id='.$row['EMPLOYEE_ID']. '">
                                    <i class="fa fa-trash"></i> Delete
                                  </a>
                                </li>
                            </ul>
                            </div><a type="button" class="btn btn-success pull-right" href="empdt.php?action=edit & id='.$row['EMPLOYEE_ID'] . '"><i ></i> Detail</a>  
                          </div> </td>';
                          
                
                        
?> 
    </tr>
  </tbody>
  <?php } ?>
  </table>
  </div>
    <br>
  <?php } else { ?>
  <h4><center>0 Employees available</center> </h4>
  <?php } ?>
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
