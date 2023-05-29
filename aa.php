Choose a driver: &nbsp;
                <select name="driver_id_from_dropdown" ng-model="myVar1">
                  <option value="" disabled selected>Select your option</option>
                        <?php
                        $sql2 = "SELECT * FROM driver WHERE driver.driver_availability = 'yes' ";
                        $result2 = mysqli_query($conn, $sql2);

                        if(mysqli_num_rows($result2) > 0){
                            while($row2 = mysqli_fetch_assoc($result2)){
                                $driver_id = $row2["driver_id"];
                                $driver_name = $row2["driver_name"];
                                $driver_gender = $row2["driver_gender"];
                                $driver_phone = $row2["driver_phone"];
                    ?>


                    <option value="<?php echo($driver_id); ?>"><?php echo($driver_name); ?>


                    <?php }}
                    else{
                        ?>
                    Sorry! No Drivers are currently available, try again later...
                        <?php
                    }
                    ?>
                </select>
                <!-- </form> -->
                <div ng-switch="myVar1">
                

                <?php
                        $sql3 = "SELECT * FROM driver d WHERE d.driver_availability = 'yes' AND d.client_username IN (SELECT cc.client_username FROM clientcars cc WHERE cc.car_id = '$car_id')";
                        $result3 = mysqli_query($conn, $sql3);

                        if(mysqli_num_rows($result3) > 0){
                            while($row2 = mysqli_fetch_assoc($result3)){
                                $driver_id = $row2["driver_id"];
                                $driver_name = $row2["driver_name"];
                                $driver_gender = $row2["driver_gender"];
                                $driver_phone = $row["driver_phone"];

                ?>

                <div ng-switch-when="<?php echo($driver_id); ?>">
                    <h5>Driver Name:&nbsp; <?php echo($driver_name); ?></h5>
                    <p>Gender:&nbsp; <?php echo($driver_gender); ?> </p>
                    <p>Contact:&nbsp; <?php echo($driver_phone); ?> </p>
                </div>
                <?php }} ?>
                </div>
                <input type="hidden" name="hidden_carid" value="<?php echo $car_id; ?>">