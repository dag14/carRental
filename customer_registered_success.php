<html>

  <head>
    <title> customer Signup | Tankwa Car Rental </title>
  </head>
  <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
  <link rel="stylesheet" type = "text/css" href ="assets/css/manager_registered_success.css">
  <link rel="stylesheet" type = "text/css" href ="assets/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

  <body>

  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

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
                                    <a href="login.php">Home</a>
                                </li>
                                
                                <li>
                                    <a href="faq/about.php"> About </a>
                                </li>
                                <li>
                        <a href="about/about.php"> About </a>
                    </li>

                     <li>
                        <a href="about/faq.php"> FAQ </a>
                    </li>
                            </ul>
            </div>
                <?php   
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php

require 'connection.php';
$conn = Connect();

$CUSTOMER_NAME = $conn->real_escape_string($_POST['CUSTOMER_NAME']);
$USERNAME = $conn->real_escape_string($_POST['USERNAME']);
$CUSTOMER_EMAIL = $conn->real_escape_string($_POST['CUSTOMER_EMAIL']);
$CUSTOMER_PHONE = $conn->real_escape_string($_POST['CUSTOMER_PHONE']);
$city = $conn->real_escape_string($_POST['city']);
$sub_city = $conn->real_escape_string($_POST['sub_city']);
$kebele = $conn->real_escape_string($_POST['kebele']);
$PASSWORD = $conn->real_escape_string($_POST['PASSWORD']);
$CONFIRM_PASSWORD = $conn->real_escape_string($_POST['CONFIRM_PASSWORD']);

if ($PASSWORD==$CONFIRM_PASSWORD){
$query = "INSERT into employee(customer_name,username, email,phone,city,sub_city,kebele) VALUES('" . $CUSTOMER_NAME . "','" . $CUSTOMER_EMAIL . "','" . $CUSTOMER_PHONE . "','" . $city ."','" . $sub_city ."','" . $kebele ."')";
$success = $conn->query($query);

$query = "SELECT customer_id FROM  customer where `customer_name`='" . $CUSTOMER_NAME . "' ";
$success2 = $conn->query($query);
if ( $success2->num_rows > 0  ) {
    $found_user  = mysqli_fetch_array($success2);
    $_SESSION['customer_id'] = $found_user['customer_id'];
}

$query = "INSERT into users(ID,USERNAME,PASSWORD,TYPE_ID) VALUES('" .$_SESSION['customer_id'] . "','" . $USERNAME . "',sha1('{$PASSWORD}'),'3')";
$success1 = $conn->query($query);

if (!$success | !$success1 ){
	die("Couldnt enter data: ".$conn->error);
}

$conn->close();

?>


<div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h2> <?php echo "Welcome $CUSTOMER_NAME!" ?> </h2>
		<h1>Your account has been created.</h1>
		<p>Login Now from <a href="login.php">HERE</a></p>
	</div>
</div>

    </body>
    <footer class="site-footer">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <h5>© 2022 Tankwa Car Rental</h5>
            </div>
        </div>
    </div>
</footer> <?php
}  else{?>
<script type="text/javascript">
    //then it will be redirected to index.php
    alert(" Password not matched!");
    window.location = "customersignup.php";
</script> <?php } ?>
</html>
