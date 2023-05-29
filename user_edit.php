

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
   <?php $userid = $_GET["id"];
   $sql4 = "SELECT * FROM users  WHERE ID = '$userid'  ";
   $result4 = $conn->query($sql4);


   if (mysqli_num_rows($result4) > 0) {
       while($row = mysqli_fetch_assoc($result4)) {
        

        $user_id = $row["ID"];
            $username = $row["USERNAME"];
           $password = $row["PASSWORD"];
           
           
           
       }
   } ?>
    <div class="container" style="margin-top: 80px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="user_edit1.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Update uSER Details </h3>
          <div class="col-sm-3" style="padding-top: 5px;">
                 User Id:
                </div>
                <div class="col-sm-9">
            <input  class="form-control"  name="ID" placeholder="user_id ID " value="<?php echo $user_id; ?>" readonly><br>
          </div>
          <div class="col-sm-3" style="padding-top: 5px;">
          Username:
                </div>
                <div class="col-sm-9">
            <input  class="form-control"  name="USERNAME" placeholder="Username " value="<?php echo $username; ?>" readonly><br>
          </div>
          <div class="col-sm-3" style="padding-top: 5px;">
            Password:
                </div>
          <div class="col-sm-9">
                  <input class="form-control" placeholder="Password" name="PASSWORD"  required autofocus=""><br>
                </div>
            
                
           
             

          

           <button type="submit" style="margin:5px;" id="submit" name="submit" class="btn btn-warning pull-right"> UPDATE</button>   
           <a style="margin:5px;" class="btn btn-primary pull-right" href="adduser.php" role="button">Back</a>
              
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