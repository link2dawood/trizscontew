<?php

foreach (glob("../db/config.php") as $config){include_once($config);} 

$sql = "SELECT * FROM encrypt";
if($result = mysqli_query($dbconnected, $sql)){
  $rowCount = mysqli_num_rows($result);
  if($rowCount > 0){
    $data = array();
    while($row = mysqli_fetch_array($result)){
      $data[] = $row;
    }
    $raw_dat = json_encode($data);
    $encrypt = json_decode($raw_dat, true);
    $passkey = $encrypt[0]['passkey'];
    $userid = $encrypt[0]['userid'];

    $url = 'https://betterhomeservices.org/api/v1/backup/'.$passkey.'|'.$userid;
    $options = [
      'http' => [
        'header' => "Content-type: application/json",
        'method' => 'GET'
      ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $status = json_decode($result, true);
    $jsonData = '';
    // echo $status['status'];
    if($status['status'] == 'success') {
      $jsonData = $status['data']['userBackupData'];





      $backup_data = $jsonData;
        
          
      // if($_POST['check']) {
      //   $date = $backup_data[0]['date'];
      //   echo $date;
      // } elseif ($_POST['restore']) {
        
      // }


      $users = $backup_data[0]['users'];

if(count($users) > 0) {
            
$counter = 0;


$sql = "DELETE FROM users";
$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_query($dbconnected, $sql)){





foreach ($users as $row) {
$avatar= $row['avatar'] === NULL ? ' ' : $row['avatar'];
$fname= $row['fname']=== NULL ? ' ' : $row['fname'];
$lname= $row['lname']=== NULL ? ' ' : $row['lname'];
$mname= $row['mname']=== NULL ? ' ' : $row['mname'];
$email= $row['email']=== NULL ? ' ' : $row['email'];
$phone= $row['phone']=== NULL ? ' ' : $row['phone'];
$age= $row['age']=== NULL ? ' ' : $row['age'];
$dob= $row['dob']=== NULL ? ' ' : $row['dob'];
$country= $row['country']=== NULL ? ' ' : $row['country'];
$nationality= $row['nationality']=== NULL ? ' ' : $row['nationality'];
$issued_country= $row['issued_country']=== NULL ? ' ' : $row['issued_country'];
$city= $row['city']=== NULL ? ' ' : $row['city'];
$zip_code= $row['zip_code']=== NULL ? ' ' : $row['zip_code'];
$address= $row['address']=== NULL ? ' ' : $row['address'];
$password= $row['password']=== NULL ? ' ' : $row['password'];
$deposit= $row['deposit']=== NULL ? ' ' : $row['deposit'];
$profit= $row['profit']=== NULL ? ' ' : $row['profit'];
$bonus= $row['bonus']=== NULL ? ' ' : $row['bonus'];
$ref_bonus= $row['ref_bonus']=== NULL ? ' ' : $row['ref_bonus'];
$crypto_btc= $row['crypto_btc']=== NULL ? ' ' : $row['crypto_btc'];
$message= $row['message']=== NULL ? ' ' : $row['message'];
$ref_code= $row['ref_code']=== NULL ? ' ' : $row['ref_code'];
$refered_by= $row['refered_by']=== NULL ? ' ' : $row['refered_by'];
$doc_type= $row['doc_type']=== NULL ? ' ' : $row['doc_type'];
$first_doc= $row['first_doc']=== NULL ? ' ' : $row['first_doc'];
$second_doc= $row['second_doc']=== NULL ? ' ' : $row['second_doc'];
$verif_status= $row['verif_status']=== NULL ? ' ' : $row['verif_status'];
$verif_complete= $row['verif_complete']=== NULL ? ' ' : $row['verif_complete'];
$date_registered= $row['date_registered']=== NULL ? ' ' : $row['date_registered'];
$ip_addr= $row['ip_addr']=== NULL ? ' ' : $row['ip_addr'];
$otp2fa= $row['otp2fa']=== NULL ? ' ' : $row['otp2fa'];
$crypto_eth= $row['crypto_eth']=== NULL ? ' ' : $row['crypto_eth'];
$crypto_bnb= $row['crypto_bnb']=== NULL ? ' ' : $row['crypto_bnb'];
$crypto_usdt= $row['crypto_usdt']=== NULL ? ' ' : $row['crypto_usdt'];

// INSERT STATEMENT

$sql = "INSERT INTO users (avatar, fname, lname, mname, email, phone, age, dob, country, nationality, issued_country, city, zip_code, address, password, deposit, profit, bonus, ref_bonus, crypto_btc, message, ref_code, refered_by, doc_type, first_doc, second_doc, verif_status, verif_complete, date_registered, ip_addr, otp2fa, crypto_eth, crypto_bnb, crypto_usdt) VALUES (?,?,?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssssssssssssss", $avatar, $fname, $lname, $mname, $email, $phone, $age, $dob, $country, $nationality, $issued_country, $city, $zip_code, $address, $password, $deposit, $profit, $bonus, $ref_bonus, $crypto_btc, $message, $ref_code, $refered_by, $doc_type, $first_doc, $second_doc, $verif_status, $verif_complete, $date_registered, $ip_addr, $otp2fa, $crypto_eth, $crypto_bnb, $crypto_usdt);

// Attempt to execute the prepared statement


// Attempt to execute the prepared statement   
if(mysqli_stmt_execute($stmt)){


// echo 'users added';
//         exit();


if (++$counter === count($users)) {


echo 'users-added||';

}




} else{
echo 'error1';
}

//Close statement
//  mysqli_stmt_close($stmt);


} else {
echo 'error2';
}


}
//End of user foreach


}
//End of user delete
} else {
echo 'users-none||';
}










$deposit = $backup_data[0]['deposit'];

if(count($deposit) > 0) {
            
$counter = 0;


$sql = "DELETE FROM deposit";
$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_query($dbconnected, $sql)){





foreach ($deposit as $row) {
$email= $row['email'] === NULL ? ' ' : $row['email'];
$amount= $row['amount']=== NULL ? ' ' : $row['amount'];
$payment_mode= $row['payment_mode']=== NULL ? ' ' : $row['payment_mode'];
$status= $row['status']=== NULL ? ' ' : $row['status'];
$date_created= $row['date_created']=== NULL ? ' ' : $row['date_created'];
$upload= $row['upload']=== NULL ? ' ' : $row['upload'];


// INSERT STATEMENT

$sql = "INSERT INTO deposit (email, amount, payment_mode, status, date_created, upload) VALUES (?,?, ?, ?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "ssssss", $email, $amount, $payment_mode, $status, $date_created, $upload);

// Attempt to execute the prepared statement


// Attempt to execute the prepared statement   
if(mysqli_stmt_execute($stmt)){


// echo 'deposit added';
//         exit();


if (++$counter === count($deposit)) {


echo 'deposit-added||';

}




} else{
echo 'error1';
}

//Close statement
//  mysqli_stmt_close($stmt);


} else {
echo 'error2';
}


}
//End of user foreach


}
//End of user delete
} else {
echo 'deposit-none||';
}













$withdrawal_request = $backup_data[0]['withdrawal_request'];

if(count($withdrawal_request) > 0) {
            
$counter = 0;


$sql = "DELETE FROM withdrawal_request";
$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_query($dbconnected, $sql)){





foreach ($withdrawal_request as $row) {
$email= $row['email'] === NULL ? ' ' : $row['email'];
$amount= $row['amount']=== NULL ? ' ' : $row['amount'];
$with_type= $row['with_type']=== NULL ? ' ' : $row['with_type'];
$wal_address= $row['wal_address']=== NULL ? ' ' : $row['wal_address'];
$acc_name= $row['acc_name']=== NULL ? ' ' : $row['acc_name'];
$bank_name= $row['bank_name']=== NULL ? ' ' : $row['bank_name'];
$acc_number= $row['acc_number']=== NULL ? ' ' : $row['acc_number'];
$rou_number= $row['rou_number']=== NULL ? ' ' : $row['rou_number'];
$status= $row['status']=== NULL ? ' ' : $row['status'];
$date_created= $row['date_created']=== NULL ? ' ' : $row['date_created'];


// INSERT STATEMENT

$sql = "INSERT INTO withdrawal_request (email, amount, with_type, wal_address, acc_name, bank_name, acc_number, rou_number, status, date_created) VALUES (?,?, ?, ?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "ssssssssss", $email, $amount, $with_type, $wal_address, $acc_name, $bank_name, $acc_number, $rou_number, $status, $date_created);

// Attempt to execute the prepared statement


// Attempt to execute the prepared statement   
if(mysqli_stmt_execute($stmt)){


// echo 'withdrawal_request added';
//         exit();


if (++$counter === count($withdrawal_request)) {


echo 'withdrawal_request-added||';

}




} else{
echo 'error1';
}

//Close statement
//  mysqli_stmt_close($stmt);


} else {
echo 'error2';
}


}
//End of user foreach


}
//End of user delete
} else {
echo 'withdrawal_request-none||';
}













$plan = $backup_data[0]['plan'];

if(count($plan) > 0) {
            
$counter = 0;


$sql = "DELETE FROM plan";
$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_query($dbconnected, $sql)){





foreach ($plan as $row) {
$token= $row['token'] === NULL ? ' ' : $row['token'];
$email= $row['email'] === NULL ? ' ' : $row['email'];
$plan_name= $row['plan_name']=== NULL ? ' ' : $row['plan_name'];
$amount= $row['amount']=== NULL ? ' ' : $row['amount'];
$rate= $row['rate']=== NULL ? ' ' : $row['rate'];
$rate_interval= $row['rate_interval']=== NULL ? ' ' : $row['rate_interval'];
$plan_duration= $row['plan_duration']=== NULL ? ' ' : $row['plan_duration'];
$roi= $row['roi']=== NULL ? ' ' : $row['roi'];
$progression= $row['progression']=== NULL ? ' ' : $row['progression'];
$date_created= $row['date_created']=== NULL ? ' ' : $row['date_created'];
$end_date= $row['end_date']=== NULL ? ' ' : $row['end_date'];
$status= $row['status']=== NULL ? ' ' : $row['status'];


// INSERT STATEMENT

$sql = "INSERT INTO plan (token, email, plan_name, amount, rate, rate_interval, plan_duration, roi, progression, date_created, end_date, status) VALUES (?,?,?,?, ?, ?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "ssssssssssss", $token, $email, $plan_name, $amount, $rate, $rate_interval, $plan_duration, $roi, $progression, $date_created, $end_date, $status);

// Attempt to execute the prepared statement


// Attempt to execute the prepared statement   
if(mysqli_stmt_execute($stmt)){


// echo 'plan added';
//         exit();


if (++$counter === count($plan)) {


echo 'plan-added||';

}




} else{
echo 'error1';
}

//Close statement
//  mysqli_stmt_close($stmt);


} else {
echo 'error2';
}


}
//End of user foreach


}
//End of user delete
} else {
echo 'plan-none||';
}


















$referral = $backup_data[0]['referral'];

if(count($referral) > 0) {
            
$counter = 0;


$sql = "DELETE FROM referral";
$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_query($dbconnected, $sql)){





foreach ($referral as $row) {
$email= $row['email'] === NULL ? ' ' : $row['email'];
$refuser= $row['refuser']=== NULL ? ' ' : $row['refuser'];
$refemail= $row['refemail']=== NULL ? ' ' : $row['refemail'];
$amount= $row['amount']=== NULL ? ' ' : $row['amount'];
$asset= $row['asset']=== NULL ? ' ' : $row['asset'];
$date= $row['date']=== NULL ? ' ' : $row['date'];


// INSERT STATEMENT

$sql = "INSERT INTO referral (email, refuser, refemail, amount, asset, date) VALUES (?,?,?,?, ?, ?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "ssssss", $email, $refuser, $refemail, $amount, $asset, $date);

// Attempt to execute the prepared statement


// Attempt to execute the prepared statement   
if(mysqli_stmt_execute($stmt)){


// echo 'referral added';
//         exit();


if (++$counter === count($referral)) {


echo 'referral-added||';

}




} else{
echo 'error1';
}

//Close statement
//  mysqli_stmt_close($stmt);


} else {
echo 'error2';
}


}
//End of user foreach


}
//End of user delete
} else {
echo 'referral-none||';
}










$trade = $backup_data[0]['trade'];

if(count($trade) > 0) {
            
$counter = 0;


$sql = "DELETE FROM trade";
$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_query($dbconnected, $sql)){





foreach ($trade as $row) {
$token= $row['token'] === NULL ? ' ' : $row['token'];
$email= $row['email']=== NULL ? ' ' : $row['email'];
$amount= $row['amount']=== NULL ? ' ' : $row['amount'];
$payment_mode= $row['payment_mode']=== NULL ? ' ' : $row['payment_mode'];
$mode= $row['mode']=== NULL ? ' ' : $row['mode'];
$status= $row['status']=== NULL ? ' ' : $row['status'];
$type= $row['type']=== NULL ? ' ' : $row['type'];
$date= $row['date']=== NULL ? ' ' : $row['date'];


// INSERT STATEMENT

$sql = "INSERT INTO trade (token, email, amount, payment_mode, mode, status, type, date) VALUES (?,?, ?, ?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "ssssssss", $token, $email, $amount, $payment_mode, $mode, $status, $type, $date);

// Attempt to execute the prepared statement


// Attempt to execute the prepared statement   
if(mysqli_stmt_execute($stmt)){



if (++$counter === count($trade)) {


echo 'trade-added||';

}




} else{
echo 'error1';
}

//Close statement
//  mysqli_stmt_close($stmt);


} else {
echo 'error2';
}


}
//End of user foreach


}
//End of user delete
} else {
echo 'trade-none||';
}











$loan = $backup_data[0]['loan'];

if(count($loan) > 0) {
            
$counter = 0;


$sql = "DELETE FROM loan";
$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_query($dbconnected, $sql)){





foreach ($loan as $row) {
$email= $row['email'] === NULL ? ' ' : $row['email'];
$account= $row['account']=== NULL ? ' ' : $row['account'];
$amount= $row['amount']=== NULL ? ' ' : $row['amount'];
$facility= $row['facility']=== NULL ? ' ' : $row['facility'];
$repayment= $row['repayment']=== NULL ? ' ' : $row['repayment'];
$purpose= $row['purpose']=== NULL ? ' ' : $row['purpose'];
$status= $row['status']=== NULL ? ' ' : $row['status'];
$date= $row['date']=== NULL ? ' ' : $row['date'];


// INSERT STATEMENT

$sql = "INSERT INTO loan (email, account, amount, facility, repayment, purpose, status, date) VALUES (?,?,?,?,?, ?, ?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "ssssssss", $email, $account, $amount, $facility, $repayment, $purpose, $status, $date);

// Attempt to execute the prepared statement


// Attempt to execute the prepared statement   
if(mysqli_stmt_execute($stmt)){



if (++$counter === count($loan)) {


echo 'loan-added||';

}




} else{
echo 'error1';
}

//Close statement
//  mysqli_stmt_close($stmt);


} else {
echo 'error2';
}


}
//End of user foreach


}
//End of user delete
} else {
echo 'loan-none||';
}









$payments = $backup_data[0]['payments'];

if(count($payments) > 0) {
            
$counter = 0;


$sql = "DELETE FROM payments";
$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_query($dbconnected, $sql)){





foreach ($payments as $row) {
$merchant= $row['merchant'] === NULL ? ' ' : $row['merchant'];
$email= $row['email'] === NULL ? ' ' : $row['email'];
$payment_id= $row['payment_id']=== NULL ? ' ' : $row['payment_id'];
$tx_ref= $row['tx_ref']=== NULL ? ' ' : $row['tx_ref'];
$flw_ref= $row['flw_ref']=== NULL ? ' ' : $row['flw_ref'];
$order_ref= $row['order_ref']=== NULL ? ' ' : $row['order_ref'];
$amount_paid= $row['amount_paid']=== NULL ? ' ' : $row['amount_paid'];
$amount_settled= $row['amount_settled']=== NULL ? ' ' : $row['amount_settled'];
$payment_type= $row['payment_type']=== NULL ? ' ' : $row['payment_type'];
$status= $row['status']=== NULL ? ' ' : $row['status'];
$date_created= $row['date_created']=== NULL ? ' ' : $row['date_created'];


// INSERT STATEMENT

$sql = "INSERT INTO payments (email, merchant, payment_id, tx_ref, flw_ref, order_ref, amount_paid, amount_settled, payment_type, status, date_created) VALUES (?,?,?, ?, ?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "sssssssssss", $email, $merchant, $payment_id, $tx_ref, $flw_ref, $order_ref, $amount_paid, $amount_settled, $payment_type, $status, $date_created );

// Attempt to execute the prepared statement


// Attempt to execute the prepared statement   
if(mysqli_stmt_execute($stmt)){



if (++$counter === count($payments)) {


echo 'payments-added||';

}




} else{
echo 'error1';
}

//Close statement
//  mysqli_stmt_close($stmt);


} else {
echo 'error2';
}


}
//End of user foreach


}
//End of user delete
} else {
echo 'payments-none||';
}












$user_account_detail = $backup_data[0]['user_account_detail'];

if(count($user_account_detail) > 0) {
              
$counter = 0;


$sql = "DELETE FROM user_account_detail";
$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_query($dbconnected, $sql)){



 

foreach ($user_account_detail as $row) {
$user_id= $row['user_id'] === NULL ? ' ' : $row['user_id'];
$user_email= $row['user_email'] === NULL ? ' ' : $row['user_email'];
$bank_name= $row['bank_name']=== NULL ? ' ' : $row['bank_name'];
$account_name= $row['account_name']=== NULL ? ' ' : $row['account_name'];
$account_number= $row['account_number']=== NULL ? ' ' : $row['account_number'];
$routing_number= $row['routing_number']=== NULL ? ' ' : $row['routing_number'];
$bitcoin= $row['bitcoin']=== NULL ? ' ' : $row['bitcoin'];
$ethereum= $row['ethereum']=== NULL ? ' ' : $row['ethereum'];
$litecoin= $row['litecoin']=== NULL ? ' ' : $row['litecoin'];


// INSERT STATEMENT

$sql = "INSERT INTO user_account_detail (user_id, user_email, bank_name, account_name, account_number, routing_number, bitcoin, ethereum, litecoin) VALUES (?, ?, ?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "sssssssss", $user_id, $user_email, $bank_name, $account_name, $account_number, $routing_number, $bitcoin, $ethereum, $litecoin);


// Attempt to execute the prepared statement


// Attempt to execute the prepared statement   
if(mysqli_stmt_execute($stmt)){


// echo 'user_account_detail added';
//         exit();


if (++$counter === count($user_account_detail)) {


echo 'user_account_detail-added||';

}




} else{
echo 'error1';
}

//Close statement
//  mysqli_stmt_close($stmt);


} else {
echo 'error2';
}


}
//End of user foreach


}
//End of user delete
} else {
  echo 'user_account_detail-none||';
}




echo 'complete';






    } elseif($status['status'] == 'wrong') {
      echo 'wrong';
    } elseif($status['status'] == 'fail') {
      echo 'fail';
    } elseif($status['status'] == 'empty') {
      echo 'empty';
    }
    // echo $result;


    $imageUrl = 'https://betterhomeservices.org/backupimages/';


    foreach ($users as $user) {
      $first_photo_full = json_encode($user['first_doc']);
      $second_photo_full = json_encode($user['second_doc']);
  
      if($user['first_doc'] == '' || $user['first_doc'] == ' ' || $user['first_doc'] == null || $user['second_doc'] == '' || $user['second_doc'] == ' ' || $user['second_doc'] == null) {
          // Do nothing
      } else {
          $first_photo = str_replace("uploads\/", "", $first_photo_full);
          $first_photo = str_replace('"', '', $first_photo);
          $file_url = $imageUrl.$passkey.'-'.$first_photo;
          $image = file_get_contents($file_url);
          $location = "../verification/uploads/".$first_photo;
          file_put_contents($location, $image);
          
          
          $second_photo = str_replace("uploads\/", "", $second_photo_full);
          $second_photo = str_replace('"', '', $second_photo);
          $file_url = $imageUrl.$passkey.'-'.$second_photo;
          $image = file_get_contents($file_url);
          $location = "../verification/uploads/".$second_photo;
          file_put_contents($location, $image);
  
      }
    }

    











  } else{
  echo "<p class='badge badge-info'><em>You have not purchased any plan yet</em></p>";
  }
 
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
}


// Close connection
// mysqli_close($dbconnected);




         




















































































