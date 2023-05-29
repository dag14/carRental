
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link rel="stylesheet" href="assets/css/split.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="assets/js/custom.js"></script> 
  <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
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
        <form role="form" action="employeesignup.php" method="POST">
        <br style="clear: both">
          <h2 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Employee Detail </h2>

        <?php
        $employee_id = $_GET["id"];
        $sql1 = "SELECT * FROM employee WHERE EMPLOYEE_ID = '$employee_id'";
        $result1 = mysqli_query($conn, $sql1);

        if(mysqli_num_rows($result1)){
            while($row1 = mysqli_fetch_assoc($result1)){
                $fname = $row1["FIRST_NAME"];
                $lname = $row1["LAST_NAME"];
                $phone = $row1["PHONE_NUMBER"];
                $email = $row1["EMAIL"];
                $gender = $row1["GENDER"];
                $city = $row1["city"];
                $sub_city = $row1["sub_city"];
                $kebele = $row1["kebele"];
                $hired_date = $row1["HIRED_DATE"];
                $account = $row1["account"];
                
                
            }
        }

        ?>
        
  
         <h5> Employee:&nbsp;  <?php echo($fname);?> <?php echo($lname);?></h5>
         <!-- </div> -->
         
          <!-- <div class="form-group"> -->
            <h5> Employee Phone Number:&nbsp; <?php echo($phone);?> </h5>
            <h5> Employee Email:&nbsp; <?php echo($email);?> </h5>
            <h5> Employee Gender:&nbsp; <?php echo($gender);?> </h5>
            <h5> Employee City:&nbsp; <?php echo($city);?> </h5>
            <h5> Employee Sub-City:&nbsp; <?php echo($sub_city);?> </h5>
            <h5> Employee Kebele:&nbsp; <?php echo($kebele);?> </h5>
            <h5> Employee Hired Date:&nbsp; <?php echo($hired_date);?> </h5>
            <h5> Employee Account:&nbsp; <?php echo($account);?> </h5>
              
           
    

           
  
            
            
        
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
