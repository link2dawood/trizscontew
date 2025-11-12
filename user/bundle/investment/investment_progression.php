<?php
                    // Include config file
                    foreach (glob("bundle/db/config.php") as $config ){include_once $config;}
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM plan WHERE email = '$email'";
                    if($result = mysqli_query($dbconnected, $sql)){
                        $rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){

                                $index = 0;

                                while($row = mysqli_fetch_array($result)){
                                    
                                    $index++;
                                    $token = $row['token'];
                                    $plan_name = $row['plan_name'];
                                    $plan_progress = $row['progression'];
                                    $daily_percent = $row['daily_percent'];

                                    if($plan_progress < 100){
                                    echo '
                                         <!-- Card body -->
                                          <div class="card-body">
                                            <!-- List group -->
                                            <ul class="list-group list-group-flush list my--3">
                                              <li class="list-group-item px-0 bg-dark">
                                                <div class="row align-items-center">
                                                  <div class="col">
                                                  <span style="max-height:18px; max-width:18px" class = "spinner-border text-yellow"></span><span class="badge badge-info" style="font-size:12px; color:#fff">running..</span> <span style="color:#fff; font-size:14px">'.$plan_progress.'%</span>
                                                    <h5 class="text-white">'.$plan_name.' | '.$token.' <span class="text-yellow">@
                                                        '.$daily_percent.'/week</span></h5>
                                                    <div class="progress progress-xs mb-0">
                                                      <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="60"
                                                        aria-valuemin="0" aria-valuemax="100" style="width:'.$plan_progress.'%"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </li>
                                              
                                            </ul>
                                            
                                          </div>
                                    ';
                                  }

                                  if($plan_progress == 100){
                                    echo '
                                         <!-- Card body -->
                                          <div class="card-body">
                                            <!-- List group -->
                                            <ul class="list-group list-group-flush list my--3">
                                              <li class="list-group-item px-0 bg-dark">
                                                <div class="row align-items-center">
                                                  <div class="col">
                                                   <span class="badge badge-info" style="font-size:12px; color:#fff">Completed</span><span class="fa fa-check"></span> <span style="color:#fff; font-size:14px">'.$plan_progress.'%</span>
                                                    <h5 class="text-white">'.$plan_name.' | '.$token.' <span class="text-yellow">@
                                                        '.$daily_percent.'/week</span></h5>
                                                    <div class="progress progress-xs mb-0">
                                                      <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="60"
                                                        aria-valuemin="0" aria-valuemax="100" style="width:'.$plan_progress.'%"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </li>
                                              
                                            </ul>
                                            
                                          </div>
                                    ';
                                  }
                                   
                                }

                                                              
                              // Free result set
                            mysqli_free_result($result);
                        } else{
                           
                           echo '
                           <div align = "center" class = "col">
                           <span class = "spinner-grow text-yellow"></span><h5 class="text-yellow text-center">You have not purchased any plan yet</h5>
                           </div>
                                <!-- Card body -->
                  <div class="card-body">
                    <!-- List group -->
                    <ul class="list-group list-group-flush list my--3">
                      <li class="list-group-item px-0 bg-dark">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="text-white">Gold Pack | 9tYVHB0eOqiePWT1 <span class="text-yellow">@
                                40%/week</span></h5>
                            <div class="progress progress-xs mb-0">
                              <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0 bg-dark">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="text-white">Premium Pack | OcMtt3YzdKr6Q9li <span class="text-yellow">@
                                35%/week</span></h5>
                            <div class="progress progress-xs mb-0">
                              <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0 bg-dark">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="text-white">Basic Pack | VyOGDDkdHgKwNhUq <span class="text-yellow">@
                                30%/week</span></h5>
                            <div class="progress progress-xs mb-0">
                              <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0 bg-dark">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="text-white"> Starter Pack | BzJmysXpZLh2j9Ts <span class="text-yellow">@
                                25%/week</span></h5>
                            <div class="progress progress-xs mb-0">
                              <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                            </div>
                          </div>
                        </div>
                      </li>
                      
                    </ul>
                    
                  </div>
                           ';
                    }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }
 
                    // Close connection
                    mysqli_close($dbconnected);
                    ?>