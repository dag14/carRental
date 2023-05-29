<?php


//session_start();
require 'session.php';
if(!isset($_SESSION['FIRST_NAME'])){
    session_destroy();
    header("location: index.php");
}
require 'connection.php';
$conn = Connect();


			$driver_id = $_POST['driver_id'];
			$driver_name = $_POST['driver_name'];
			$driver_phone = $_POST['driver_phone'];
            $dob = $_POST['dob'];
            $driver_region = $_POST['driver_region'];
            $driver_kebele = $_POST['driver_kebele'];
            $driver_hn = $_POST['driver_hn'];
            $dl_number = $_POST['dl_number'];
            $dl_issue = $_POST['dl_issue'];
            $driver_gender = $_POST['driver_gender'];
            
		
	 			$sql1 = 'UPDATE Driver set driver_name="'.$driver_name.'",
                 driver_phone="'.$driver_phone.'", driver_phone="'.$driver_phone.'", dob ="'.$dob.'", driver_region="'.$driver_region.'"
                 , driver_kebele="'.$driver_kebele.'", driver_hn="'.$driver_hn.'", dl_number="'.$dl_number.'", dl_issue="'.$dl_issue.'", driver_gender="'.$driver_gender.'" WHERE
                 driver_id ="'.$driver_id.'"';
                 $result1 = $conn->query($sql1);  

                    //$sql1 = "DELETE FROM driver WHERE driver_id = $driver_id";
                  //  $result4 = $conn->query($sql1);    
?>	
	<script type="text/javascript">
			alert("You've Update Driver Successfully.");
			window.location = "enterdriverem.php";
		</script>