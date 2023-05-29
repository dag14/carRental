
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
        <form role="form" action="userconfirm.php" method="POST">
        <br style="clear: both">
          <h2 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Add Users here </h2><br>

        
<div class="form-group">
 &nbsp;
                <select class='form-control' name="employee_id_from_dropdown" ng-model="myVar1">
                  <option value="" disabled selected>Select an employee</option>
                        <?php
                        $sql2 = "SELECT * FROM employee WHERE EMPLOYEE_ID > '0' and account='no' ";
                        $result2 = mysqli_query($conn, $sql2);

                        if(mysqli_num_rows($result2) > 0){
                            while($row2 = mysqli_fetch_assoc($result2)){
                                $EMPLOYEE_ID = $row2["EMPLOYEE_ID"];
                                $FIRST_NAME = $row2["FIRST_NAME"];
                                $LAST_NAME = $row2["LAST_NAME"];
                                $GENDER = $row2["GENDER"];
                                $EMAIL = $row2["EMAIL"];
                                $city = $row2["city"];
                                $sub_city = $row2["sub_city"];
                                $kebele = $row2["kebele"];
                                $PHONE_NUMBER = $row2["PHONE_NUMBER"];
                    ?>


                    <option value="<?php echo($EMPLOYEE_ID); ?>"><?php echo($FIRST_NAME); ?> <?php echo($LAST_NAME); ?>


                    <?php }}
                    else{
                        ?>
                    Sorry! No Employees are currently available, try again later...
                        <?php
                    }
                    ?>
                </select>
                <!-- </form> -->
                <div ng-switch="myVar1">


                

                
                <?php  ?>
                </div>
            <div class="form-group">
            <br><input type="text" class="form-control" id="USERNAME" name="USERNAME" placeholder="Username" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="PASSWORD" name="PASSWORD" placeholder="Password" required>
          </div>
          



          

          
          
        

        
            <br><br>
                <!-- <form class="form-group"> -->
            <input type="submit"name="submit" value="Creat Account" class="btn btn-success pull-right">
        </form>   

      </div>
      
    </div>
    <div class="col-md-12" style="float: none; margin: 0 auto;"><div align="right">
		<div class="options">
    Search:
    <input id="myInput" type="text" placeholder="Search..">
			</div>
      </div>
    <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Users </h3>
          
<?php
// Storing Session
$sql = "SELECT * FROM users where TYPE_ID='1' or TYPE_ID='2'";


$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
  ?>
<div style="overflow-x:auto;">
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th></th>
        <th width="10%"> Username</th>
        
        
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody id="myTable">
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      
      <td><?php echo $row["USERNAME"]; ?> </td>
      
      
      
      
      <?php
            
            echo '<td > <div class="btn-group">
            
                            <div class="btn-group">
                              <a type="button" class="btn btn-success pull-right " data-toggle="dropdown" style="color:white;">
                              Options <span class="caret"></span></a>
                            <ul class="dropdown-menu text-center" role="menu">
                                <li>
                                  <a type="button" class="btn btn-warning bg-gradient-warning btn-block" style="border-radius: 0px;" href="user_edit.php?action=edit & id='.$row['ID']. '">
                                    <i class="fas fa-fw fa-edit"></i> Edit
                                  </a>
                                </li>
                                <li>
                                  <a type="button" class="btn btn-danger bg-gradient-danger btn-block" style="border-radius: 0px;" href="user_del.php?action=delete & id='.$row['ID']. '">
                                    <i class="fa fa-trash"></i> Delete
                                  </a>
                                </li>
                            </ul>
                           
                          </div> </td>'
                          
                
                        
?> 
    </tr>
  </tbody>
  <?php } ?>
  </table>
  </div>
    <br>
  <?php } else { ?>
  <h4><center>0 Users available</center> </h4>
  <?php } ?>
        </form>
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
