
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




<?php 
$id = $_GET["id"];
$sql4 = "SELECT c.car_name, c.car_plate_code,c.car_nameplate,rc.full_name,rc.phone_no,rc.city,rc.sub_city,rc.kebele ,rc.rent_start_date, rc.rent_end_date, rc.fare,  d.driver_name, d.driver_phone,d.driver_gender,d.dl_number,t.TYPE,t.TYPE_ID
FROM rentedcars rc, cars c, driver d,type t
WHERE id = '$id' AND c.car_id=rc.car_id AND d.driver_id = rc.driver_id";
$result4 = $conn->query($sql4);




$sql0 = "UPDATE cars c, driver d, rentedcars rc SET c.car_availability='no',rc.confirmation='Confirmed', d.driver_availability='no' 
     WHERE rc.car_id=c.car_id AND rc.driver_id=d.driver_id AND rc.id = '$id'";
     $result2 = $conn->query($sql0);


?>

    <script type="text/javascript">
			alert("Confirmed!");
			window.location = "mybookings3.php";
		</script>
    

    


    
    

