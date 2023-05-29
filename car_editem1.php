<?php

include('session.php'); 
require 'connection.php';
$conn = Connect();
$car_id = $_POST["car_id"];
$car_name = $_POST["car_name"];
$car_model = $_POST["car_model"];
$car_plate_code = $_POST["car_plate_code"];
$car_nameplate = $_POST["car_nameplate"];
$transmission_type = $_POST["transmission_type"];
$engine_cc = $_POST["engine_cc"];
$fuel_type = $_POST["fuel_type"];
$car_manu = $_POST["car_manu"];
$vehicle_insurance = $_POST["vehicle_insurance"];

$car_type =$_POST["car_type"];
$wd_price_per_day = $_POST["wd_price_per_day"];
$wod_price_per_day = $_POST["wod_price_per_day"];
            

        //$query0="INSERT into cars (car_img) VALUES ('".$target_path."')";
      //  $query0 = "UPDATE cars SET car_img = '$target_path' WHERE ";
        //$success0 = $conn->query($query0);

        $sql1 = 'UPDATE cars set car_name="'.$car_name.'",
                 car_model="'.$car_model.'", car_plate_code="'.$car_plate_code.'", car_nameplate ="'.$car_nameplate.'", transmission_type="'.$transmission_type.'"
                 , engine_cc="'.$engine_cc.'", fuel_type="'.$fuel_type.'", car_manu="'.$car_manu.'", vehicle_insurance="'.$vehicle_insurance.'", car_type="'.$car_type.'", wd_price_per_day="'.$wd_price_per_day.'", wod_price_per_day="'.$wod_price_per_day.'" WHERE
                 car_id ="'.$car_id.'"';
                 $result1 = $conn->query($sql1);  

        
    
		
	 			

                    //$sql1 = "DELETE FROM driver WHERE driver_id = $driver_id";
                  //  $result4 = $conn->query($sql1);    
?>	
	<script type="text/javascript">
			alert("You've Update Car Information Successfully.");
			window.location = "entercarem.php";
		</script>