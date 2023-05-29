
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
    


        <div class="col-md-12" style="float: none; margin: 0 auto;">
    <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Feedbacks </h3>
          <div align="right">
		<div class="options">
    Search:
    <input id="myInput" type="text" placeholder="Search..">
			</div>
      </div>
<?php
// Storing Session
$sql = "SELECT * FROM feedback f";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
  ?>
<div style="overflow-x:auto;">
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th></th>
        <th width="20%"> Name</th>
        <th width="25%"> Email</th>
        <th width="55%"> Message </th>
        
        
        
        
        
        
        
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody id="myTable">
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      <?$row["fb_id"]?>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["e_mail"]; ?></td>
      
      <td><?php echo $row["message"]; ?></td>
      
      
      
      
      <?php
            
            echo '<td > <div class="btn-group">
            
                           <a type="button" class="btn btn-danger pull-right" href="fb_del.php?action=delete & id='.$row['fb_id'] . '"><i ></i> Delete</a>  
                          </div> </td>';
                          
                
                        
?> 
    </tr>
  </tbody>
  <?php } ?>
  </table>
  </div>
    <br>
  <?php } else { ?>
  <h4><center>No Messages Yet</center> </h4>
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