<?php
 // Include config file
    foreach (glob('../bundle/db/config.php') as $config){include_once $config;}
                   
                     // Attempt select query execution
                    $sql = "SELECT * FROM users where ref_bonus !=0";
                    if($result = mysqli_query($dbconnected, $sql)){
                        $rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){

                                echo '
                                      <div class="table-responsive">
                                      <div id="message"></div>
                                      <table id="lang_opt" class="table table-striped table-bordered display" style="width:100%">
                                        <thead>
                                          <tr>
                                            <th style="font-weight: bold !important">s/n</th>
                                            <th style="font-weight: bold !important">Full Name</th>
                                            <th style="font-weight: bold !important">Email</th>
                                            <th style="font-weight: bold !important">Amount</th>
                                            <th style="font-weight: bold !important">No of referred users:</th>
                                            <th style="font-weight: bold !important">Registration Date</th>
                                            <th style="font-weight: bold !important" class="pull-right">Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                ';

                                $index = 0;

                                while($row = mysqli_fetch_array($result)){

                                    $index++;
                                    $id = $row['id'];
                                    $fname = $row['fname'];
                                    $lname = $row['lname'];
                                    $email = $row['email'];
                                    $ref_bonus = $row['ref_bonus'];
                                    $ref_code = $row['ref_code'];
                                    $date = $row['date_registered'];


                                     $sql = "SELECT count(refered_by) as ref_by FROM users where refered_by ='$ref_code'";
                                        if($result = mysqli_query($dbconnected, $sql)){
                                            $rowCount = mysqli_num_rows($result);
                                            if($rowCount > 0){
                                                while($row = mysqli_fetch_array($result)){
                                                    $num_of_refered_user = $row['ref_by'];

                                                }
                                            }
                                        }

                                   
                                    echo '
                                        <tr data-row-id="56">
                                            <td><a href="#" data-toggle="modal" data-target="#responsive-modalUser56" title="click to view details">'.$index.'</a></td>
                                            <td>'.$fname.' '.$lname.'</td>
                                            <td>'.$email.'</td>
                                            <td>$'.$ref_bonus.'</td>
                                            <td style="color: #8F3739"><span
                                                style="background:#00b33c;color: #FFF;padding: 3px 5px;border-radius:5px;">'.$num_of_refered_user.'</span>
                                            </td>
                                            <td>'.$date.'</td>
                                            <td>
                                              <a class="remove-row pull-right" href="edit_user.php?id='.$id.'"><i class="fas fa-edit"></i></a>

                                                                                            
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
                            echo "<p class='lead'><em>No registered user were found in database.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }
 
                    // Close connection
                    mysqli_close($dbconnected);  
                                
                  
?>