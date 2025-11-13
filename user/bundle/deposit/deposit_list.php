<?php
                    require_once __DIR__ . '/../db/config.php';
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM deposit WHERE email='$sessionemail'";
                    if($result = mysqli_query($dbconnected, $sql)){
                        $rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){

                                echo "<h5><center class ='d-block text-yellow font-16 pt-2'>Please contact admin on <strong><a href ='mailto:support@elitecapitaltrades.com'>support@elitecapitaltrades.com</a></strong> for quick approval of payment</center></h3>";
                                echo "<div class = 'table-responsive py-4'>";
                                echo "<table class='table table-flush table-dark'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Your email</th>";
                                        echo "<th>Amount deposited</th>";
                                        echo "<th>payment mode</th>";
                                        echo "<th>Status</th>";
                                        echo "<th>Date created</th>";
                                        echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";

                                $index = 0;

                                while($row = mysqli_fetch_array($result)){
                                    
                                    //i added this extra hack for the index
                                    //so that when a record is deleted
                                    //it does't give a skipped index.
                                    // Hpwever, 
                                    //Note that i passed the actual id of
                                    //each record in the action dropdown.$row['id']

                                    $index++;
                                   
                                    echo "<tr>";
                                        echo "<td>" . $index . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" ."<span style ='color:red'>$</span>". $row['amount'] . "</td>";
                                        echo "<td>" . $row['payment_mode'] . "</td>";
                                        if ($row['status'] == "Approved") {
                                           echo "<td><span class = 'badge badge-success'>" . $row['status'] ."</span>"."</td>";
                                       }
                                        elseif ($row['status'] == "Declined") {
                                            echo "<td><span class = 'badge badge-info'>" . $row['status'] ."</span>"."</td>";
                                        } 
                                        else{
                                             echo "<td><span class = 'badge badge-danger'>" . $row['status'] ."</span>"."</td>";
                                           }
                                        echo "<td>" . $row['date_created'] . "</td>";
                                       
                                       
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                                         
                            echo "</table>";
                            echo "</div>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>You have not made any deposit at the moment...</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }
 
                    // Close connection
                    mysqli_close($dbconnected);
                    ?>