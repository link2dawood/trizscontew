<?php

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){  

    // Include config file
    foreach (glob('../bundle/db/config.php') as $config){include_once $config;}
                     
  }else{
    header('location: login');
    exit;
  }
  
                

                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM referral ";
                    if($result = mysqli_query($dbconnected, $sql)){
                    	$rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){

                                echo '
                                      <div class="table-responsive">
                                      <div id="message"></div>
                                      <table id="lang_opt" class="table table-striped table-bordered display" style="width:100%">
                                        <thead>
                                          <tr>
                                           
                                            <th style="font-weight: bold !important">Earnings</th>
                                            
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
                                    $email = $row['email'];
                                    $refuser = $row['refuser'];
                                    $refemail = $row['refemail'];
                                    $amount = $row['amount'];
                                    $asset = $row['asset'];
                                    $date = $row['date'];
                                    
                                   
                                    echo '
                                        <tr data-row-id="56">
                                           
                                            
                                            <td><p><span style="font-weight: bold;">'.$email.'</span> earned '.$amount.''.$asset.' from <span style="font-weight: bold;">'.$refemail.'</span> on '.$date.'</p></td>
                                            
                                            
                                      
                                        
                                          </tr>
                                    ';
                                }
                                echo "</tbody>";
                                                         
                            echo "</table>";
                            echo "</div>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No referral earnings.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }
 
                    // Close connection
                    mysqli_close($dbconnected);
                    ?>