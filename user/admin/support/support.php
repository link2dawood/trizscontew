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
                $_SESSION['message'] = "Message sent successfully";
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
                    $sql = "SELECT * FROM support";
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
                                            <th style="font-weight: bold !important">Date</th>
                                            <th style="font-weight: bold !important">Sender</th>
                                            <th style="font-weight: bold !important">Subject</th>
                                            <th style="font-weight: bold !important">Priority</th>
                                            <th style="font-weight: bold !important">Status</th>
                                            <th style="font-weight: bold !important">Panel</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                ';

                                $index = 0;

                                while($row = mysqli_fetch_array($result)){

                                    $index++;
                                    $token = $row['token'];
                                    $email = $row['email'];
                                    $subject = $row['subject'];
                                    $priority = $row['priority'];
                                    $status = $row['status'];
                                    $message = $row['details'];
                                    $reply = $row['reply'];
                                    $date = $row['date_created'];

                                   
                                    echo '
                                        <tr data-row-id="56">
                                            <td class="pt-4">'.$token.'</td>
                                            <td class="pt-4">'.$date.'</td>
                                            <td class="pt-4">'.$email.'</td>
                                            <td class="pt-4">'.$subject.'</td>
                                             <td class="pt-4">'.$priority.'</td>
                                            <td 
                                            style="color: #8F3739"><span style="background:#00b33c;color: #FFF;padding: 3px 5px;border-radius:5px;">'.$status.'</span>
                                            </td>
                                           <td> <button type="button" class="btn btn-default waves-effect bg-gray-dark" data-toggle="modal"
                                            data-target="#responsive-modal1'.$token.'">Reply Message</button>
                                            <a href="support/delete_ticket.php?token='.$token.'"><span class ="fas fa-trash"></span> </a>
                                            </td>
                                          </tr>
                                    ';

                                    echo'

                                          <!-- sample modal content -->
                                          <div id="responsive-modal1'.$token.'" class="modal fade" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-body">
                                                  <h3>Message</h3>
                                                  <p>'.$message.'</p>
                                                  <h3>Admin Reply</h3>
                                                  <form action="" method="POST">
                                                  <input name ="token" type="hidden" value="'.$token.'">
                                                  <div class="form-group">
                                                  <textarea name ="reply" type="text" class="form-control">'.$reply.'</textarea>
                                                  </div>
                                                  <div class="form-group">
                                                  <label>Status</label>
                                                  <select name ="status" type="text" class="form-control">
                                                        <option value = "'.$status.'">'.$status.'</option>
                                                         <option value = "Closed">Closed</option>
                                                          <option value = "Open">Open</option>
                                                   </select>
                                                  </div>

                                                </div>
                                                <div class="modal-footer">
                                                  <button name = "send-message" type="submit" class="btn btn-primary waves-effect">Send</button>
                                               
                                                <span class="modal-footer">
                                                  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button></span>
                                                </div>

                                              </div>
                                            </div>
                                            <script>
                                              jQuery("#reply1").on("click", function () {
                                                event.preventDefault()
                                                $("#formID1").fadeOut(1000, function () {
                                                  $("#replyForm1").submit()
                                                });
                                                var message = $("#message-text1").val()
                                                var post = "<h4> Admin Reply </h4> " + message
                                                // alert(message)
                                                $("#replyMessage1")(post)
                                              })
                                            </script>
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
                            echo "<p class='lead'><em>No support ticket found.</em></p>";
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