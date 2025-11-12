<?php

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){  

    // Include config file
    foreach (glob('../bundle/db/config.php') as $config){include_once $config;}


    $reply=$reply_err="";
    if (isset($_POST['send-message'])) {
    $token = trim($_POST['token']);
    $reply = trim($_POST['reply']);
    $status = trim($_POST['status']);

        if (empty($reply)) {
        $reply_err = "Field cannot be empty";

        }
        if (empty($reply_err)) {
                 // Prepare an update statement
        $sql = "UPDATE support SET reply = ?, status =? WHERE token = ?";
        
        $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $reply, $status, $token);
            
            // Set parameters
           $token = $token;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                $_SESSION['status'] = "success";
                $_SESSION['title'] = "Message Sent";
                $_SESSION['message'] = "Your message has been sent successfully";
                 echo "<script>window.open('support-tickets', '_self')</script>";
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
        
    }else{
                   
                     // Attempt select query execution
                    $sql = "SELECT * FROM withdrawal_request";
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
                                            <th style="font-weight: bold !important">Withdrawal Type</th>
                                            <th style="font-weight: bold !important">Wallet Address</th>
                                            <th style="font-weight: bold !important">Account Name</th>
                                            <th style="font-weight: bold !important">Bank Name</th>
                                            <th style="font-weight: bold !important">Account Number</th>
                                            <th style="font-weight: bold !important">Routing Number</th>
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
                                    $with_type = $row['with_type'];
                                    $wal_address = $row['wal_address'];
                                    $acc_name = $row['acc_name'];
                                    $bank_name = $row['bank_name'];
                                    $acc_number = $row['acc_number'];
                                    $rou_number = $row['rou_number'];
                                    $status = $row['status'];
                                    $date = $row['date_created'];

                                   
                                    echo '
                                         <tr data-row-id="56">
                                          <td><a href="#" data-toggle="modal" data-target="#responsive-modalUser56'.$index.'" title="click to view details">'.$email.'</a></td>
                                           <td>$'.$amount.'</td>
                                           <td>'.$with_type.'</td>
                                           <td>'.$wal_address.'</td>
                                           <td>'.$acc_name.'</td>
                                           <td>'.$bank_name.'</td>
                                           <td>'.$acc_number.'</td>
                                           <td>'.$rou_number.'</td>
                                           <td style="color: #8F3739"><span
                                                style="background:#00b33c;color: #FFF;padding: 3px 5px;border-radius:5px;">'.$status.'</span>
                                            </td>
                                            <td>'.$date.'</td>
                                            <td>

                                              <form action="deposit_log/approved_deposit.php" method="POST">    
                                              <div class="list-icons">
                                                <div class="dropdown">
                                                  <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <span class="iconify nav__icon" data-icon="mdi-menu"></span>
                                                  </a>
                                                  <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="withdrawal_log/conf_withdrawal?status=Approved&&id='.$id.'&&amount='.$with_type.'&&email='.$email.'"> <span class="iconify nav__icon"
                                                        data-icon="mdi-cash-check"></span>Approve request</a>
                                                    <a class="dropdown-item" href="withdrawal_log/conf_withdrawal?status=Declined&&id='.$id.'&&amount='.$with_type.'&&email='.$email.'"> <span class="iconify nav__icon"
                                                        data-icon="mdi-cash-remove"></span>Decline request</a>
                                                    <a class="dropdown-item" href="withdrawal_log/delete_withdrawal?id='.$id.'&&amount='.$with_type.'&&email='.$email.'"> <span class="iconify nav__icon" data-icon="mdi-delete"></span>Delete</a>
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
                                                    <form action="#" method="post">
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
                                                        <label class="col-form-label col-lg-2">Status:</label>
                                                        <div class="col-lg-10">
                                                          <select name="status" class="form-control">
                                                            <option value="'.$status.'">'.$status.'</option>
                                                             <option value="Pending">Pending</option>
                                                              <option value="Approved">Approved</option>
                                                               <option value="Rejected">Rejected</option>
                                                          </select>
                                                        </div>
                                                      </div>

                                                      <div class="text-right">
                                                        <button type="submit" class="btn bg-dark text-white">Update<i
                                                            class="icon-paperplane ml-2"></i></button>
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
                            echo "<p class='lead'><em>No withdrawals at the moment.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }
 
                    // Close connection
                    mysqli_close($dbconnected); 
                    } 
  }else{
    header('location: login');
    
  }                                  
                  
?>