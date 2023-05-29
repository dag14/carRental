<html>

<head>
    <title> customer Signup | Tankwa Car Rental  </title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/clientlogin.css">
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
                        <a href="index.php">Home</a>
                    </li>
                   
                     <li>
                        <a href="login.php"> Login </a>
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
    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to Tankwa Car Rental</h1>
            <br>
            <p>Get started by creating your account</p>
        </div>
    </div>

    <div class="container" style="margin-top: -1%; margin-bottom: 2%;">
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading"> Create Account </div>
                <div class="panel-body">

                    <form role="form" action="customer_registered_success.php" method="POST">

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="CUSTOMER_NAME"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
                                <div class="input-group">
                                    <input class="form-control" id="CUSTOMER_NAME" type="text" name="CUSTOMER_NAME" placeholder="Your Full Name" required="" autofocus="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="USERNAME"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
                                <div class="input-group">
                                    <input class="form-control" id="USERNAME" type="text" name="USERNAME" placeholder="Your Username" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="CUSTOMER_EMAIL"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
                                <div class="input-group">
                                    <input class="form-control" id="CUSTOMER_EMAIL" type="email" name="CUSTOMER_EMAIL" placeholder="Email" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="CUSTOMER_PHONE"><span class="text-danger" style="margin-right: 5px;">*</span> Phone: </label>
                                <div class="input-group">
                                    <input class="form-control" id="CUSTOMER_PHONE" type="text" name="CUSTOMER_PHONE" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Phone" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-contact" aria-hidden="true"></span></label>
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
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="sub_city"><span class="text-danger" style="margin-right: 5px;">*</span>Sub-City: </label>
                                <div class="input-group">
                                    <input class="form-control" id="sub_city" type="text" name="sub_city" placeholder="City" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="kebele"><span class="text-danger" style="margin-right: 5px;">*</span>Kebele: </label>
                                <div class="input-group">
                                    <input class="form-control" id="kebele" type="text" name="kebele" placeholder="Kebele" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="PASSWORD"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
                                <div class="input-group">
                                    <input class="form-control" id="PASSWORD" type="password" name="PASSWORD" placeholder="Password" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="CONPASSWORD"><span class="text-danger" style="margin-right: 5px;">*</span>Confirm Password: </label>
                                <div class="input-group">
                                    <input class="form-control" id="CONFIRM_PASSWORD" type="password" name="CONFIRM_PASSWORD" placeholder="Confirm Password" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                                    </span>

                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="form-group col-xs-4">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>

                        </div>
                        <label style="margin-left: 5px;">or</label> <br>
                        <label style="margin-left: 5px;"><a href="login.php">Have an account? Login.</a></label>

                    </form>

                </div>

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
