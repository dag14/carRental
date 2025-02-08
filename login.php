<?php require('session.php');?>
<?php if(logged_in()){ ?>
          <script type="text/javascript">
            window.location = "index.php";
          </script>
    <?php
    }
    
    require 'connection.php';
$conn = Connect();?>
<!DOCTYPE html>
<html lang="en">
<style>
  .Center {
  display: flex;
  align-items: center;
  justify-content: center;
}
   .p{
     padding: 15px;
   }
   .well {

min-height: 20px;
padding: 19px;
margin-bottom: 20px;
background-color: #42454570!important;
border: 1px solid #e3e3e3;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
}
.bg-semi-transparent {
  background-color: #ffffff40!important;
  /* change numbers from 00 to 99 at last of hex code 
  for transpency you want. */
}
   
</style>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tankwa Car Rental</title>
  <link rel="icon" href="assets/img/c.jpg">
  <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body class="bg-gradient-info">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
  <div class="container">
  <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   TANKWA CAR RENTAL </a>
            </div>
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            
            <div class="row shadow">
              <div class="col-lg-3 d-none d-lg-block ">
              <div class="p">
              <br><br><br><img src="assets/img/b.jpg" style="width:249.718px;height:206.388px;"></div>
</div>
<?php $sql4 = "SELECT id FROM users   ";
   $result4 = $conn->query($sql4);
   if (mysqli_num_rows($result4) > 0) {
    while($row = mysqli_fetch_assoc($result4)) {
        
        
        $id = $row["id"];
        
    }
}


   ?>
              <div class="col-lg-6">
              
                <div class="p-5">
                <div class="well">
                  <div class="text-center">
                  
                    <h1 class="h3 text-white-900 mb-4" style="color:white;">Welcome to Tankwa Car Rental</h3>
                  </div>
                  <form class="user" role="form" action="processlogin.php" method="post">
                  <div class="form-group">
                  <input  type="hidden"class="form-control"  name="id" value="<?php $id; ?>" ><br>
                    </div>  
                  
                  <div class="form-group">
                        <input class="form-control form-control-user" style="width:70%";  placeholder="Username" name="user" type="text" autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-user" style="width:70%"; placeholder="Password" name="password" type="password" value="">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" style="color:white;" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <div class="Center">
                    <button class="btn btn-primary btn-user btn-lg"  style="width:20%; height:20%; " type="submit" name="btnlogin">Login</button>
</div>
                        <label style="margin-left: 5px; color:white;"><a href="customersignup.php">Customer Signup</a></label>
                    
                    <div class="text-center">
                      <a class="btn btn-warning btn-user btn-lg" href="index.php">Home</a>

  </div>
                  <!-- <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div> -->
                </form></nav>
      </div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- /.container -->
    

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>









