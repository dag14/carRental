<?php

require('connection.php');
$conn = Connect();
require('session.php');
if (isset($_POST['btnlogin'])) {

  $id = trim($_POST['id']);
  $users = trim($_POST['user']);
  $upass = trim($_POST['password']);
  $h_upass = sha1($upass);
if ($upass == ''){
     ?>    <script type="text/javascript">
                alert("Password is missing!");
                window.location = "login.php";
                </script>
        <?php
}


else {
//create some sql statement      
     
        $sql = "SELECT e.FIRST_NAME,e.LAST_NAME,c.CUSTOMER_NAME,c.customer_id,e.EMPLOYEE_ID,u.id,u.USERNAME,u.PASSWORD,u.ID,u.TYPE_ID,t.TYPE,t.TYPE_ID
        FROM  users u, customers c,employee e, type t
        
    
        WHERE  u.USERNAME ='" . $users . "'  AND u.PASSWORD =  '" . $h_upass . "' AND u.TYPE_ID=t.TYPE_ID AND (e.EMPLOYEE_ID=u.ID OR c.customer_id=u.ID) ";
        $result = $conn->query($sql);

        

        if ($result ){
        //get the number of results based n the sql statement
        //check the number of result, if equal to one   
        //IF theres a result
        
            if ( $result->num_rows > 0  ) {
                //store the result to a array and passed to variable found_user
                $found_user  = mysqli_fetch_array($result);
                
                //fill the result to session variable
                
                
                $_SESSION['FIRST_NAME'] = $found_user['FIRST_NAME']; 

                
                 
                $_SESSION['CUSTOMER_NAME']  =  $found_user['CUSTOMER_NAME'];
                
                
                
                $_SESSION['TYPE']  =  $found_user['TYPE'];
                
               

        //this part is the verification if admin or user ka
        if ($_SESSION['TYPE']=='Admin'){
           
             ?>    <script type="text/javascript">
                      //then it will be redirected to index.php
                      alert("<?php echo  $_SESSION['FIRST_NAME']; ?> Welcome!");
                      window.location = "index1.php";
                  </script>
             <?php        
           
        }elseif ($_SESSION['TYPE']=='Employee' ){
           
             ?>    <script type="text/javascript">
                      //then it will be redirected to index.php
                      alert("<?php echo  $_SESSION['FIRST_NAME']; ?> Welcome!");
                      window.location = "index2.php";
                  </script>
             <?php        
           
        }
        elseif ($_SESSION['TYPE']=='Customer'  ){
           
            ?>    <script type="text/javascript">
                     //then it will be redirected to index.php
                     alert("<?php echo  $_SESSION['CUSTOMER_NAME']; ?> Welcome!");
                     window.location = "index3.php";
                 </script>
            <?php        
          
       }
        
            } else {
            //IF theres no result
              ?>
                <script type="text/javascript">
                alert("Username or Password Not Registered! Contact Your administrator.");
                window.location = "login.php";
                </script>
              <?php

            }

         } else {
                 # code...
        echo "Error: " . $sql . "<br>" . $db->error;
        }
        
    }       
} 
 $conn->close();
?>