<?php 
session_start();

foreach (glob("../../bundle/db/config.php") as $config){include_once($config);}
require '../../bundle/temp/short_mail2.php';
            

  $status = trim($_GET['status']);
  $id = trim($_GET['id']);
  $email = trim($_GET['email']);
  $amount = trim($_GET['amount']);
  $delimeter = ' ';
  $words = explode($delimeter, $amount);
  $coin = $words[0];
  $value_raw = $words[1];   
        

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){  

  if (!empty(isset($_GET['status'])) && !empty(isset($_GET['id']))) {


  $sql = "SELECT * FROM users WHERE email = ?";
  if($stmt = mysqli_prepare($dbconnected, $sql)){
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $email);
     
      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
          $result = mysqli_stmt_get_result($stmt);
 
          if(mysqli_num_rows($result) == 1){

        


              /* Fetch result row as an associative array. Since the result set
              contains only one row, we don't need to use while loop */
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
              
              // Retrieve individual field value
              $btc = $row['crypto_btc'];
              $eth = $row['crypto_eth'];
              $usdt = $row['crypto_usdt'];
              $bnb = $row['crypto_bnb'];

    $asset = '';
    $value = '';
    if($coin == 'BTC') {
      $asset = 'crypto_btc';
      $value = $value_raw + $btc;
    } elseif($coin == 'ETH') {
      $asset = 'crypto_eth';
      $value = $value_raw + $eth;
    } elseif($coin == 'USDT') {
      $asset = 'crypto_usdt';
      $value = $value_raw + $usdt;
    } elseif($coin == 'BNB') {
      $asset = 'crypto_bnb';
      $value = $value_raw + $bnb;
    }



    if ($status == 'Approved') {
      $sql = "UPDATE deposit SET status = ? WHERE id = ?";
        $stmt = mysqli_stmt_init($dbconnected);
         if($stmt = mysqli_prepare($dbconnected, $sql)){
             // Bind variables to the prepared statement as parameters
             mysqli_stmt_bind_param($stmt, "si", $status, $id);
             
             // Set parameters
            $id = $id;
             
             // Attempt to execute the prepared statement
             if(mysqli_stmt_execute($stmt)){
               $sql = "UPDATE users SET $asset=? WHERE email=?";
               $stmt = mysqli_stmt_init($dbconnected);
 
               if($stmt = mysqli_prepare($dbconnected, $sql)){
 
                 // Bind variables to the prepared statement as parameters
                 mysqli_stmt_bind_param($stmt, "ss", $value, $email);
 
               // Attempt to execute the prepared statement   
                 if(mysqli_stmt_execute($stmt)){

                  
                  $type = 'admin';
                  $admin_subject = 'Deposit successfully approved';
                  $admin_msg = 'You approved a deposited of '.$amount.' on account: '.$email;
          
                  $myPersonalEmail = $email;
                  $subject = 'Deposit successful';
                  $meta = 'Your deposit of '.$amount.' has been approved';
                  $msg = 'Your deposit of '.$amount.' has been approved';
                  send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);



                   // Password updated successfully. Destroy the session, and redirect to login page
                   $_SESSION['status'] = "success";
                   $_SESSION['title'] = "Approved";
                   $_SESSION['message'] = "User deposit approved successfully";
                  //  echo "<script>window.open('../deposits-logs', '_self')</script>";
                  //  echo'<script type="module" defer src="../../AppScripts/adminDeposit.js"></script>';
                  echo '<script src="../css/vendor/assets/libs/jquery/dist/jquery.min.js"></script>';
                  echo 
                  "<script type='module'>
                   import { getPlatformData, getRefData } from './ajax.js';
                  const userEmail = '$email';
                  const amount = '$value_raw';
                  const coin = '$coin';
                  const updateRef = async () => {
                    let res1;
                    res1 = await fetch('../../bundle/connect/userinfoget.php');
                    const usersData = await res1.json();
                    const user = usersData.find(user => user.email === userEmail);
                    const refUserName = user.fname + ' ' + user.lname;
                    let refUserEmail = 'none';
                    let newRefBalance = '';
                    let goref = 'no';
                    if(user.refered_by !== '') {
                      const platform = await getPlatformData('superadmin');
                      const refPercent = Number(platform.ref);
                      const refInstance = platform.refInstance;
                      const refEmail = user.refered_by;
                      let res = await fetch('../../bundle/connect/userinfoget.php');
                      const refUsersData = await res.json();
                      const refUser = refUsersData.find(user => user.ref_code === refEmail);
                      refUserEmail = refUser.email;
                      if(refInstance === 'all') {
                        goref = 'yes';
                      } else if (refInstance === 'one') {
                        const refs = await getRefData(refUserEmail, 'superadmin');
                        if(typeof refs === 'undefined') {
                          goref = 'yes';
                        } else {
                          const check = refs.some(ref => ref.refereeEmail === userEmail);
                          if(check === true) {
                            goref = 'no';
                          } else {
                            goref = 'yes';
                          };
                        };
                      };
                      const refAmount = (refPercent / 100) * Number(amount);
                      let refUserAsset;
                      let asset;
                      if(coin === 'BTC') {
                        refUserAsset = refUser.crypto_btc === '' ? 0 : refUser.crypto_btc;
                        asset = 'crypto_btc';
                      } else if(coin === 'ETH') {
                        refUserAsset = refUser.crypto_eth === '' ? 0 : refUser.crypto_eth;
                        asset = 'crypto_eth';
                      } else if(coin === 'USDT') {
                        refUserAsset = refUser.crypto_usdt === '' ? 0 : refUser.crypto_usdt;
                        asset = 'crypto_usdt';
                      } else if(coin === 'BNB') {
                        refUserAsset = refUser.crypto_bnb === '' ? 0 : refUser.crypto_bnb;
                        asset = 'crypto_bnb';
                      };
                      newRefBalance = Number(refUserAsset) + Number(refAmount);
                      const ajaxPost = (obj, url) => {
                        $.post(url,
                          obj,
                          function (data, status) {
                            if (status === 'success') {
                              // console.log('Post successfully created!');
                              // console.log(data);
                              // console.log(status);
                            } else {
                              console.log('sth went wrong');
                              console.log(status);
                            }
                          },
                          'json');
                          
                          location.href = '../deposits-logs';
                      };

                      
                      const obj = {
                        goref: goref,
                        email: userEmail,
                        refemail: refUserEmail,
                        refusername: refUserName,
                        asset: asset,
                        coin: coin,
                        amount: Number(refAmount).toFixed(5),
                        balance: Number(newRefBalance).toFixed(5),
                        date: new Date(Date.now()).toISOString('en-US').replace('T', ' ').split('.')[0]
                      };
                      ajaxPost(obj, '../../bundle/connect/refuserupdate.php');
                      
                    } else {
                     
                      location.href = '../deposits-logs';
                    };
                  };
                  updateRef();
                  </script>";
                   exit();
 
         } else{
           $_SESSION['status'] = "error";
           $_SESSION['title'] = "Error";
           $_SESSION['message'] = "Something went wrong. Please try again later.";
         }
 
          //Close statement
           mysqli_stmt_close($stmt);
       }
     }
   }
 
   }
 if ($status=='Declined') {
        $sql = "UPDATE deposit SET status = ? WHERE id = ?";
        $stmt = mysqli_stmt_init($dbconnected);
         if($stmt = mysqli_prepare($dbconnected, $sql)){
             // Bind variables to the prepared statement as parameters
             mysqli_stmt_bind_param($stmt, "si", $status, $id);
             
             // Set parameters
            $id = $id;
             
             // Attempt to execute the prepared statement
             if(mysqli_stmt_execute($stmt)){
                 // Password updated successfully. Destroy the session, and redirect to login page
                 $_SESSION['status'] = "success";
                 $_SESSION['title'] = "Declined";
                 $_SESSION['message'] = "User deposit declined successfully";
                  echo "<script>window.open('../deposits-logs', '_self')</script>";
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
 if ($del=='yes') {
         // Prepare a delete statement
     $sql = "DELETE FROM deposit WHERE id = ?";
 
     // Set parameters
     //$id = trim($_GET["id"]);
     
     $stmt = mysqli_stmt_init($dbconnected);
     if($stmt = mysqli_prepare($dbconnected, $sql)){
         // Bind variables to the prepared statement as parameters
         mysqli_stmt_bind_param($stmt, "i", $id);
             
         // Attempt to execute the prepared statement
         if(mysqli_stmt_execute($stmt)){
             // Records deleted successfully. Redirect to landing page
 
           // echo "<script> alert('Deleted successfully')</script>";
           // echo "<script>window.open('../deposits-logs', '_self')</script>";
             header("location: ../deposits-logs");
             exit();
         } else{
             echo "Oops! Something went wrong. Please try again later.";
         }
 
          // Close statement
           mysqli_stmt_close($stmt);
     }
         }
       }
 
   }
 
   
 else{
   header('location: ../login.php');
 }





  
} else{
  // URL doesn't contain valid id. Redirect to error page
  header("location: error.php");
  exit();
}

} else{
echo "Oops! Something went wrong. Please try again later, possibly your query .";
}
}


// Close connection
mysqli_close($dbconnected);





                  
?>