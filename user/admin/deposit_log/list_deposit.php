<?php
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){  

    // Include config file
    foreach (glob('../bundle/db/config.php') as $config){include_once $config;}


    $deposit=$ref_bonus=$main_balance="";
    $deposit_err=$ref_bonus_err=$main_balance_err="";

                 // Attempt select query execution
                    // $sql = "SELECT * FROM users";
                    // if($result = mysqli_query($dbconnected, $sql)){
                    //     $rowCount = mysqli_num_rows($result);
                    //     if($rowCount > 0){
                    //       $index = 0;

                    //             while($row = mysqli_fetch_array($result)){

                    //                 $index++;
                    //                 $deposit = $row['deposit'];
                    //                 $ref_bonus = $row['ref_bonus'];
                    //                 $main_balance = $row['main_balance'];
                    //                }

                                 
                    //          // Free result set
                    //         mysqli_free_result($result);
                    //     } else{
                    //         echo "<p class='lead'><em>No deposit at the moment.</em></p>";
                        

                    //     // Close connection
                    //     mysqli_close($dbconnected);
                    //     }

                    // } else{
                    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    // }


                   
                     // Attempt select query execution
                    $sql = "SELECT * FROM deposit";
                    if($result = mysqli_query($dbconnected, $sql)){
                        $rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){

                                echo '
                                      <div class="table-responsive">
                                      <div id="message"></div>
                                      <table id="lang_opt" class="table table-striped table-bordered display" style="width:100%">
                                        <thead>
                                          <tr>
                                            <th style="font-weight: bold !important">User email</th>
                                            <th style="font-weight: bold !important">Amount</th>
                                            <th style="font-weight: bold !important">Wallet Type</th>
                                            <th style="font-weight: bold !important">Status</th>
                                            <th style="font-weight: bold !important">Created</th>
                                            <th style="font-weight: bold !important" class="pull-right">Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                ';

                                $index = 0;

                                while($row = mysqli_fetch_array($result)){

                                    $index++;
                                    $id = $row['id'];
                                    $email = $row['email'];
                                    $amount = $row['amount'];
                                    $payment_mode = $row['payment_mode'];
                                    $status = $row['status'];
                                    $proof = $row['upload'];
                                    $date = $row['date_created'];

                                   
                                    echo '
                                         <tr data-row-id="56">
                                          <td><a href="#" data-toggle="modal" data-target="#responsive-modalUser56'.$index.'" title="click to view details">'.$email.'</a></td>
                                           <td>$'.$amount.'</td>
                                           <td>'.$payment_mode.'</td>
                                           <td style="color: #8F3739"><span
                                                style="background:#00b33c;color: #FFF;padding: 3px 5px;border-radius:5px;">'.$status.'</span>
                                            </td>
                                            <td>'.$date.'</td>
                                            <td>

                                              <form action="deposit_log/approved_deposit.php" method="POST">    
                                              <div class="list-icons">
                                                <div class="dropdown">
                                                  <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <span class="iconify nav__icon" data-icon="mdi-menu">Update</span>
                                                    
                                                  </a>
                                                  <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="deposit_log/conf_deposit?status=Approved&&id='.$id.'&&amount='.$payment_mode.'&&email='.$email.'"> <span class="iconify nav__icon"
                                                        data-icon="mdi-cash-check"></span>Approve request</a>
                                                    <a class="dropdown-item" href="deposit_log/conf_deposit?status=Declined&&id='.$id.'&&amount='.$payment_mode.'&&email='.$email.'""> <span class="iconify nav__icon"
                                                        data-icon="mdi-cash-remove"></span>Decline request</a>
                                                    <a class="dropdown-item" href="deposit_log/delete_deposit?id='.$id.'"> <span class="iconify nav__icon" data-icon="mdi-delete"></span>Delete</a>
                                                  </div>
                                                </div>
                                              </div>
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
                                                    
                                                      <div align ="center" class="form-group row">
                                                        <label class="col-form-label col-lg-2">Proof:</label>
                                                        <a href = "../bundle/uploads/'.$proof.'" download>
                                                       <img src = "../bundle/uploads/'.$proof.'" class= "img-fluid" height = "400px" width="250px"> 
                                                       </a>
                                                      </div>
                                                      
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
                                                        <label class="col-form-label col-lg-2">Status:</label>
                                                        <div class="col-lg-10">
                                                          <select name="status" class="form-control" readonly>
                                                            <option value="'.$status.'">'.$status.'</option>
                                                        </select>
                                                        </div>
                                                      </div>

                                                      <hr>

                                                      <H5 class ="alert alert-secondary text-black text-center"> MANUALLY TOP UP USER</h5>
                                                      <h3 class ="alert alert-danger"><strong>Alert!</strong> Confirmed amount deposited should be added to the current user balance. Go to Registered users and update balance
                                                      </h3>

                                                      <form action="deposit_log/update_user_deposit.php" method="POST">
                                                      <input type="hidden" name="email" value="'.$email.'">

                                                      <div class="form-group row" style="display: none;">
                                                        <label class="col-form-label col-lg-2">Update Main Balance:</label>
                                                        <div class="col-lg-10">
                                                          <input type="text" name="main_balance" class="form-control" required value="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row" style="display: none;">
                                                        <label class="col-form-label col-lg-2">Update Referral Bonus</label>
                                                        <div class="col-lg-10">
                                                          <input type="text" name="ref_bonus" class="form-control" required value="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row" style="display: none;">
                                                        <label class="col-form-label col-lg-2">Update Deposit</label>
                                                        <div class="col-lg-10">
                                                          <input type="text" name="deposit" class="form-control" required value="">
                                                        </div>
                                                      </div>


                                                      <div class="text-right">
                                                        <button name="update" type="submit" class="btn bg-dark text-white">Update<i class="icon-paperplane ml-2"></i></button>
                                                      </div>
                                                    </form>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect"
                                                      data-dismiss="modal">Close</button>

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
                            echo "<p class='lead'><em>No deposit at the moment.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }
 
                    // Close connection
                    mysqli_close($dbconnected); 
                    } 
  else{
    header('location: login');
    
  }                                  
                  
?>