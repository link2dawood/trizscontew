<?php

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){  

    // Include config file
    foreach (glob('../bundle/db/config.php') as $config){include_once $config;}
                     
  }else{
    header('location: login');
    exit;
  }
  
                

                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM users ";
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
                                            <th style="font-weight: bold !important">Phone</th>
                                            <th style="font-weight: bold !important">Country</th>
                                            <th style="font-weight: bold !important">Referer code</th>
                                            <th style="font-weight: bold !important">Registration Date</th>
                                            <th style="font-weight: bold !important" class="pull-right">Actions</th>
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
                                   
                                    echo '
                                        <tr data-row-id="56">
                                            <td><a href="#" data-toggle="modal" data-target="#responsive-modalUser56'.$index.'" title="click to view details">'.$index.'</a></td>
                                            <td>'.$fname.' '.$lname.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$phone.'</td>
                                            <td>'.$country.'</td>
                                            <td style="color: #8F3739"><span
                                                style="background:#00b33c;color: #FFF;padding: 3px 5px;border-radius:5px;">'.$ref_code.'</span>
                                            </td>
                                            <td>'.$date.'</td>
                                            <td>
                                              <a class="remove-row pull-right" href="edit_user.php?id='.$id.'"><i class="fas fa-edit"></i></a>

                                              <a class="remove-row pull-right ml-3" href="../admin/users/delete_user.php?id='.$id.'"><i class="fas fa-trash"></i></a>

                                              <a class="remove-row pull-right" href="#" data-toggle="modal?" data-target="#responsive-modalUser56" title="click to view details"><i class ="fas fa-eye"></i></a>
                                              
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