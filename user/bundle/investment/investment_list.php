<?php
                    require_once __DIR__ . '/../db/config.php';
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM plan WHERE email='$email'";
                    if($result = mysqli_query($dbconnected, $sql)){
                        $rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){

                                echo "<div class = 'table-responsive py-4'>";
                                echo "<table class='table table-flush table-dark' id='datatable-basic'>";
                                echo "<thead class='thead-dark'>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Ref</th>";
                                        echo "<th>Plan</th>";
                                        echo "<th>Amount</th>";
                                        echo "<th>Monthly Percentage</th>";
                                        echo "<th>Profit</th>";
                                        echo "<th>Started</th>";
                                        echo "<th>Maturity Date</th>";
                                        echo "<th>Status</th>";
                                        echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";

                                $index = 0;

                                while($row = mysqli_fetch_array($result)){
                                    
                                    $index++;
                                    $id = $row['id'];
                                    $token = $row['token'];
                                    $plan_name = $row['plan_name'];
                                    $plan_amount =  $row['amount'];
                                    $daily_percent = $row['daily_percent'];
                                    $Profit = $row['roi'];
                                    $Started = $row['date_created'];
                                    $endDate = $row['end_date'];
                                    $Status = $row['status'];
                                    $days = 30;

                                                                      
                                    echo "<tr>";
                                    echo "<td>" . $index . "</td>";
                                    echo "<td>" . $token . "</td>";
                                    echo "<td><span class='badge badge-info'>" . $plan_name . "</span></td>";
                                    echo "<td>" . $plan_amount . "</td>";
                                    echo "<td>" . $daily_percent . "</td>";
                                    echo "<td><span class='badge badge-danger'>" . $Profit . "</span><br><span style='font-size:8px'>In ".$days." days</span></td>";
                                    echo "<td>" . $Started . "</td>";
                                    echo "<td>" . $endDate . "</td>";

                                    if (date('Y-m-d H:m:s') >= $endDate) {
                                    $status = "Completed";
                                    //$token = $row['token'];
                                    echo "<td><span class = 'glow-border text-danger' role='status'><span class='badge badge-danger'>".$status."</span></span></td>";

                                    $sql = "UPDATE users SET status=? WHERE id=?";
         
                                         $stmt = mysqli_stmt_init($dbconnected);
                                        if($stmt = mysqli_prepare($dbconnected, $sql)){
                                            // Bind variables to the prepared statement as parameters
                                            mysqli_stmt_bind_param($stmt, "si", $status, $id);
                                            
                                            // Attempt to execute the prepared statement
                                            if(mysqli_stmt_execute($stmt)){
                                                // Records updated successfully. Redirect to landing page
                                                $_SESSION['status'] = "success";
                                                $_SESSION['title'] = "Success";
                                                $_SESSION['message'] = "You have successfully updated your account";
                                                 echo "<script>window.open('account', '_self')</script>";
                                            exit();

                                            } else{
                                              $_SESSION['status'] = "error";
                                              $_SESSION['title'] = "Error";
                                              $_SESSION['message'] = "Something went wrong. Please try again later.";

                                            }
                                            // Close statement
                                        mysqli_stmt_close($stmt);
                                        }
                                                    
                                    }
                                    else{
                                    echo "<td><span class = 'spinner-border text-success' role='status'><span class='badge badge-success'>" . $status . "</span></span></td>";
                                            }                                   
                                       
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                                         
                            echo "</table>";
                            echo "</div>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='badge badge-info'><em>You have not purchased any plan yet</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }
 
                    // Close connection
                    mysqli_close($dbconnected);
                    ?>