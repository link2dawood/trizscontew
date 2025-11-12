<?php

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){  

    // Include config file
    foreach (glob('../bundle/db/config.php') as $config){include_once $config;}
                     
  }else{
    header('location: login');
    exit;
  }
  
                

                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM users WHERE verif_complete='yes' ";
                    if($result = mysqli_query($dbconnected, $sql)){
                    	$rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){

                                echo '
                                      <div class="table-responsive">
                                      <div id="message"></div>
                                      <table id="lang_opt" class="table table-striped table-bordered display" style="width:100%">
                                        <thead>
                                          <tr>
                                           
                                            <th style="font-weight: bold !important">Full Name</th>
                                            <th style="font-weight: bold !important">Email</th>
                                            <th style="font-weight: bold !important">Resident Country</th>
                                            <th style="font-weight: bold !important">Doc</th>
                                            <th style="font-weight: bold !important">Verification Status</th>
                                            
                                            <th>More</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                ';

                                $index = 0;

                                while($row = mysqli_fetch_array($result)){
                                    
                                    //i added this extra hack for the index
                                    //so that when a record is deleted
                                    //it does't give a skipped index.
                                    // Hpwever, 
                                    //Note that i passed the actual id of
                                    //each record in the action dropdown.$row['id']

                                    $index++;
                                    $avatar = $row['avatar'];
                                    $id = $row['id'];
                                    $fname = $row['fname'];
                                    $lname = $row['lname'];
                                    $email = $row['email'];
                                    $phone = $row['phone'];
                                    $country = $row['country'];
                                    $city = $row['city'];
                                    $zip_code = $row['zip_code'];
                                    $address = $row['address'];
                                    $ref_code = $row['ref_code'];
                                    $date = $row['date_registered'];
                                    $doc_type = $row['doc_type'];
                                    $verif_status = $row['verif_status'];
                                   
                                    echo '
                                        <tr data-row-id="56">
                                           
                                            <td>'.$fname.' '.$lname.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$country.'</td>
                                            <td>'.$doc_type.'</td>
                                            <td>'.$verif_status.'</td>
                                            
                                      
                                            <td>
                                              <a class="btn bg-dark text-white update-btn" href="verification_details.php?id='.$id.'"">More</a>
                                            </td>
                                          </tr>
                                    ';
                                }
                                echo "</tbody>";
                                                         
                            echo "</table>";
                            echo "</div>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No Users have completed verification.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }
 
                    // Close connection
                    mysqli_close($dbconnected);
                    ?>