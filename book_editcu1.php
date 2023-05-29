<?php


//session_start();
require 'session.php';
if(!isset($_SESSION['FIRST_NAME'])){
    session_destroy();
    header("location: index.php");
}
require 'connection.php';
$conn = Connect();
            


			$id = $_POST['id'];
			$full_name = $_POST['full_name'];
			$phone_no = $_POST['phone_no'];
            $city = $_POST['city'];
            $sub_city = $_POST['sub_city'];
            $kebele = $_POST['kebele'];
            $rent_start_date = $_POST['rent_start_date'];
            $rent_end_date = $_POST['rent_end_date'];
            
            
		
	 			$sql1 = 'UPDATE rentedcars set full_name="'.$full_name.'",
                 phone_no="'.$phone_no.'", city="'.$city.'", sub_city ="'.$sub_city.'", kebele="'.$kebele.'"
                 , rent_start_date="'.$rent_start_date.'", rent_end_date="'.$rent_end_date.'" WHERE
                 id ="'.$id.'"';
                 $result1 = $conn->query($sql1);  

                    //$sql1 = "DELETE FROM driver WHERE driver_id = $driver_id";
                  //  $result4 = $conn->query($sql1);    
?>	
	<script type="text/javascript">
			alert("You've Update Rent Information Successfully.");
			window.location = "mybookings.php";
		</script>