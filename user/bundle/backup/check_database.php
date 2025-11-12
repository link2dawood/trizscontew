<?php

foreach (glob("../db/config.php") as $config){include_once($config);}

// Attempt select query execution
$sql = "SELECT * FROM users";
if($result = mysqli_query($dbconnected, $sql)){
  $rowCount = mysqli_num_rows($result);
  if($sql){
    $data = array();
    while($row = mysqli_fetch_array($result)){
      $data[] = $row;
    }
    $users = json_encode($data);
    
    
      // Attempt select query execution
$sql = "SELECT * FROM admin";
if($result = mysqli_query($dbconnected, $sql)){
  $rowCount = mysqli_num_rows($result);
  if($sql){
    $data = array();
    while($row = mysqli_fetch_array($result)){
      $data[] = $row;
    }
    $admin = json_encode($data);
       // Attempt select query execution
      $sql = "SELECT * FROM encrypt";
      if($result = mysqli_query($dbconnected, $sql)){
        $rowCount = mysqli_num_rows($result);
        if($sql){
          $data = array();
          while($row = mysqli_fetch_array($result)){
            $data[] = $row;
          }
          $encrypt = json_encode($data);

          // Attempt select query execution
      $sql = "SELECT * FROM deposit";
      if($result = mysqli_query($dbconnected, $sql)){
        $rowCount = mysqli_num_rows($result);
        if($sql){
          $data = array();
          while($row = mysqli_fetch_array($result)){
            $data[] = $row;
          }
          $deposit = json_encode($data);


          // Attempt select query execution
      $sql = "SELECT * FROM plan";
      if($result = mysqli_query($dbconnected, $sql)){
        $rowCount = mysqli_num_rows($result);
        if($sql){
          $data = array();
          while($row = mysqli_fetch_array($result)){
            $data[] = $row;
          }
          $plan = json_encode($data);
         
          // Attempt select query execution
      $sql = "SELECT * FROM platform";
      if($result = mysqli_query($dbconnected, $sql)){
        $rowCount = mysqli_num_rows($result);
        if($sql){
          $data = array();
          while($row = mysqli_fetch_array($result)){
            $data[] = $row;
          }
          $platform = json_encode($data);
        
          // Attempt select query execution
      $sql = "SELECT * FROM referral";
      if($result = mysqli_query($dbconnected, $sql)){
        $rowCount = mysqli_num_rows($result);
        if($sql){
          $data = array();
          while($row = mysqli_fetch_array($result)){
            $data[] = $row;
          }
          $referral = json_encode($data);

                    // Attempt select query execution
      $sql = "SELECT * FROM smtp";
      if($result = mysqli_query($dbconnected, $sql)){
        $rowCount = mysqli_num_rows($result);
        if($sql){
          $data = array();
          while($row = mysqli_fetch_array($result)){
            $data[] = $row;
          }
          $smtp = json_encode($data);

          // Attempt select query execution
      $sql = "SELECT * FROM theme";
      if($result = mysqli_query($dbconnected, $sql)){
        $rowCount = mysqli_num_rows($result);
        if($sql){
          $data = array();
          while($row = mysqli_fetch_array($result)){
            $data[] = $row;
          }
          $theme = json_encode($data);
  
          // Attempt select query execution
      $sql = "SELECT * FROM user_account_detail";
      if($result = mysqli_query($dbconnected, $sql)){
        $rowCount = mysqli_num_rows($result);
        if($sql){
          $data = array();
          while($row = mysqli_fetch_array($result)){
            $data[] = $row;
          }
          $user_account_detail = json_encode($data);

           // Attempt select query execution
      $sql = "SELECT * FROM wallet_address";
      if($result = mysqli_query($dbconnected, $sql)){
        $rowCount = mysqli_num_rows($result);
        if($sql){
          $data = array();
          while($row = mysqli_fetch_array($result)){
            $data[] = $row;
          }
          $wallet_address = json_encode($data);
    
          // Attempt select query execution
      $sql = "SELECT * FROM withdrawal_request";
      if($result = mysqli_query($dbconnected, $sql)){
        $rowCount = mysqli_num_rows($result);
        if($sql){
          $data = array();
          while($row = mysqli_fetch_array($result)){
            $data[] = $row;
          }
          $withdrawal_request = json_encode($data);
  


          // All Tables in arrays
          $admin_dec = json_decode($admin, true);
          $users_dec = json_decode($users, true);
          $encrypt_dec = json_decode($encrypt, true);
          $deposit_dec = json_decode($deposit, true);
          $plan_dec = json_decode($plan, true);
          $platform_dec = json_decode($platform, true);
          $referral_dec = json_decode($referral, true);
          $smtp_dec = json_decode($smtp, true);
          $theme_dec = json_decode($theme, true);
          $user_account_detail_dec = json_decode($user_account_detail, true);
          $wallet_address_dec = json_decode($wallet_address, true);
          $withdrawal_request_dec = json_decode($withdrawal_request, true);


          // Define the array with objects
          $arrayOfObjects = array(
              array(
              'date' => gmdate('Y-m-d H:i:s'), 
              'users' => $users_dec, 
              'deposit' => $deposit_dec, 
              'plan' => $plan_dec,
              'platform' => $platform_dec,
              'referral' => $referral_dec,
              'smtp' => $smtp_dec,
              'theme' => $theme_dec,
              'user_account_detail' => $user_account_detail_dec,
              'wallet_address' => $wallet_address_dec,
              'withdrawal_request' => $withdrawal_request_dec),
          );

          $database = json_encode($arrayOfObjects);
          // echo $database;


          if($_POST['data'] == 'check') {
  
            if($database) {
              $backup_data = json_decode($database, true);
          
          
              $users = $backup_data[0]['users'];
              $num_users = count($users);
              echo $num_users;
            } else {
              echo 'none';
            }
          
          }





















        } else{
        echo "not found";
        }
      
      } else{
        echo "ERROR";
      }
      
// Close connection
mysqli_close($dbconnected);



        } else{
        echo "not found";
        }
      
      } else{
        echo "ERROR";
      }


        } else{
        echo "not found";
        }
      
      } else{
        echo "ERROR";
      }


        } else{
        echo "not found";
        }
      
      } else{
        echo "ERROR";
      }


        } else{
        echo "not found";
        }
      
      } else{
        echo "ERROR";
      }



        } else{
        echo "not found";
        }
      
      } else{
        echo "ERROR";
      }


        } else{
        echo "not found";
        }
      
      } else{
        echo "ERROR";
      }


        } else{
        echo "not found";
        }
      
      } else{
        echo "ERROR";
      }


        } else{
        echo "not found";
        }
      
      } else{
        echo "ERROR";
      }


        } else{
        echo "not found";
        }
      
      } else{
        echo "ERROR";
      }


  } else{
  echo "not found";
  }
 
} else{
  echo "ERROR";
}

  } else{
  echo "not found";
  }
 
} else{
  echo "ERROR";
}


// Close connection
// mysqli_close($dbconnected);

