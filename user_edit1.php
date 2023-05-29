<?php


//session_start();
require 'session.php';
if(!isset($_SESSION['FIRST_NAME'])){
    session_destroy();
    header("location: index.php");
}
require 'connection.php';
$conn = Connect();
            $user_id = $_POST['ID'];
            $username = $_POST["USERNAME"];
            $password = $_POST["PASSWORD"];
            
           
            
		
	 			$sql1 = 'UPDATE users set USERNAME="'.$username.'",PASSWORD=sha1("'.$password.'") WHERE
                 ID ="'.$user_id.'"';
                 $result1 = $conn->query($sql1);  

                    //$sql1 = "DELETE FROM driver WHERE driver_id = $driver_id";
                  //  $result4 = $conn->query($sql1);    
?>	
	<script type="text/javascript">
			alert("You've Update user Detail Successfully.");
			window.location = "adduser.php";
		</script>