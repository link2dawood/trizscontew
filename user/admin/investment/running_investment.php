<?php
 
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){  
  // Include config file
    foreach (glob('../bundle/db/config.php') as $config){include_once $config;}

                      // Attempt select query execution
                    $sql = "SELECT * FROM plan WHERE status = 'running'";
                    if($result = mysqli_query($dbconnected, $sql)){
                        $rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){

                                echo '
                                      <div class="table-responsive">
                                      <div id="message"></div>
                                      <table id="lang_opt" class="table table-striped table-bordered display" style="width:100%">
                                        <thead>
                                          <tr>
                                            <th style="font-weight: bold !important">Token</th>
                                            <th style="font-weight: bold !important">Email</th>
                                            <th style="font-weight: bold !important">Plan</th>
                                            <th style="font-weight: bold !important">Amount</th>
                                            <th style="font-weight: bold !important">Interest Percent</th>
                                            <th style="font-weight: bold !important">Profit</th>
                                            <th style="font-weight: bold !important">Progression</th>
                                            <th style="font-weight: bold !important">Status</th>
                                            <th style="font-weight: bold !important">Date</th>
                                            <th style="font-weight: bold !important" class="pull-right">Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                ';

                                $index = 0;

                                while($row = mysqli_fetch_array($result)){

                                    $index++;
                                    $id = $row['id'];
                                    $token = $row['token'];
                                    $email = $row['email'];
                                    $plan_name = $row['plan_name'];
                                    $amount = $row['amount'];
                                    $daily_percent = $row['rate'];
                                    $progression = $row['progression'];
                                    $status = $row['status'];
                                    $roi = $row['roi'];
                                    $date = $row['date_created'];

                                   
                                    echo '
                                         <tr data-row-id="56">
                                          <td><a href="#" class="token" data-toggle="modal" data-target="#responsive-modalUser56'.$index.'" title="click to view details">'.$token.'</a></td>
                                           <td>'.$email.'</td>
                                           <td>'.$plan_name.'<br><p class="plan-duration"></p></td>
                                           <td class="amount">$'.$amount.'</td>
                                           <td class="daily-percent">'.$daily_percent.'<br><p class="plan-interval"></p></td>
                                           <td><span class="roi" style="margin-right: .6rem;"></span><span style="color: red;">'.$roi.'</span></td>
                                           <td class="prog">'.$progression.'</td>
                                           <td style="color: #8F3739"><span
                                                style="background:#00b33c;color: #FFF;padding: 3px 5px;border-radius:5px;" class="stat">'.$status.'</span>
                                            </td>
                                            <td class="end-date"></td>
                                            <td>
                                              <form action="investment/delete_investment" method="POST"> 
                                              <a href="investment/delete_investment?id='.$id.'">
                                                
                                                <i type ="submit" name ="delete" class="fas fa-trash"></i>
                                               </a> 
                                               </form>
                                              
                                            </td>
                                          </tr>
                                    ';

                                    echo'

                                         <!-- modal content for user info -->

                                            <div id="responsive-modalUser56'.$index.'" class="modal fade" tabindex="-1" role="dialog"
                                              aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-body">
                                                    <form action="investment/update_investment" method="POST">
                                                      <div class="form-group row">
                                                        <span class = "alert btn-primary text-center">Adjust users investment package</span>
                                                        <span class = "alert alert-danger"> Token:'.$token.'
                                                      </div>

                                                      <input type="hidden" name="id" value="'.$id.'">
                                                      <div class="form-group row">
                                                        <label class="col-form-label col-lg-2">Email:</label>
                                                        <div class="col-lg-10">
                                                          <input type="email" name="email" class="form-control" readonly
                                                            value="'.$email.'">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-form-label col-lg-2">Amount:</label>
                                                        <div class="col-lg-10">
                                                          <input type="text" name="amount" class="form-control" readonly value="'.$amount.'">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-form-label col-lg-2">Daily Percent:</label>
                                                        <div class="col-lg-10">
                                                          <input type="text" name="daily_percent" class="form-control" readonly value="'.$daily_percent.'">
                                                        </div>
                                                      </div>

                                                       <div class="form-group row">
                                                        <label class="col-form-label col-lg-2">Accrued Profit:</label>
                                                        <div class="col-lg-10">
                                                          <input type="text" name="roi" class="form-control"  value="'.$roi.'">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row" style="display: none;">
                                                        <label class="col-form-label col-lg-2">Progression:</label>
                                                        <div class="col-lg-10">
                                                          <input type="text" name="progression" class="form-control" value="'.$progression.'">
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="form-group row" style="display: none;">
                                                        <label class="col-form-label col-lg-2">Status:</label>
                                                        <div class="col-lg-10">
                                                          <select name="status" class="form-control">
                                                            <option value="'.$status.'">'.$status.'</option>
                                                             <option value="running">Running</option>
                                                              <option value="completed">Completed</option>
                                                          </select>
                                                        </div>
                                                      </div>

                                                      <div class="text-right">
                                                        <button name="update" type="submit" class="btn bg-dark text-white">Update<i class="icon-paperplane ml-2"></i></button>
                                                        <button type="button" class="btn btn-default waves-effect"
                                                      data-dismiss="modal">Close</button>
                                                      </div>
                                                    </form>
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>

                                            <!-- /.modal -->
                                         
                                    ';

                                }

                                

                                echo "</tbody>";
                                                         
                            echo "</table>";
                            echo "</div>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No running investment at the moment.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }
                  
                    // Close connection
                    mysqli_close($dbconnected); 
                    
}
  
else{
  header('location: ../login.php');
}
  

  ?>