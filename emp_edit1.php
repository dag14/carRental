<?php


//session_start();
require 'session.php';
if(!isset($_SESSION['FIRST_NAME'])){
    session_destroy();
    header("location: index.php");
}
require 'connection.php';
$conn = Connect();
            $employee_id = $_POST['EMPLOYEE_ID'];
            $fname = $_POST["FIRST_NAME"];
            $lname = $_POST["LAST_NAME"];
            $phone = $_POST["PHONE_NUMBER"];
            $email = $_POST["EMAIL"];
            $gender = $_POST["GENDER"];
            $city = $_POST["city"];
            $sub_city = $_POST["sub_city"];
            $kebele = $_POST["kebele"];
            $hired_date = $_POST["HIRED_DATE"];
           
            
		
	 			$sql1 = 'UPDATE employee set FIRST_NAME="'.$fname.'",LAST_NAME="'.$lname.'",
                 PHONE_NUMBER="'.$phone.'", EMAIL="'.$email.'", GENDER ="'.$gender.'", city="'.$city.'"
                 , sub_city="'.$sub_city.'", kebele="'.$kebele.'", hired_date="'.$hired_date.'" WHERE
                 EMPLOYEE_ID ="'.$employee_id.'"';
                 $result1 = $conn->query($sql1);  

                    //$sql1 = "DELETE FROM driver WHERE driver_id = $driver_id";
                  //  $result4 = $conn->query($sql1);    
?>	
	<script type="text/javascript">
			alert("You've Update Employee Detail Successfully.");
			window.location = "employeesignup.php";
		</script>