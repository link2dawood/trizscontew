<?php
 $reset = true;
foreach (glob("../db/config.php") as $config){include_once($config);} 

      $jsonData = file_get_contents('data/raw/reset.json');

      $backup_data = json_decode($jsonData, true);
        
      $users = $backup_data[0]['users'];

if($reset == true) {
            
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


if (count($users) == 0) {


echo 'users-reset||';

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

if($reset == true) {
            
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


if (count($deposit) == 0) {


echo 'deposit-reset||';

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

if($reset == true) {
            
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


if (count($withdrawal_request) == 0) {


echo 'withdrawal_request-reset||';

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

if($reset == true) {
            
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


if (count($plan)  == 0) {


echo 'plan-reset||';

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











$trade = $backup_data[0]['trade'];

if($reset == true) {
            
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

if($reset == true) {
            
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

if($reset == true) {
            
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













$referral = $backup_data[0]['referral'];

if($reset == true) {
            
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


if (count($referral) == 0) {


echo 'referral-reset||';

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












$user_account_detail = $backup_data[0]['user_account_detail'];

if($reset == true) {
              
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


if (count($user_account_detail) == 0) {


echo 'user_account_detail-reset||';

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

$platform = $backup_data[0]['platform'];
$name = $platform[0]['name'];
$url = $platform[0]['domain_url'];
$email = $platform[0]['email'];
$lang = $platform[0]['lang'];
$logo = $platform[0]['logo'] === 'undefined' || NULL ? ' ' : $platform[0]['logo'];
$icon = $platform[0]['icon'] === 'undefined' || NULL ? ' ' : $platform[0]['icon'];
$logo_width = $platform[0]['logo_width'] === 'undefined' || NULL ? ' ' : $platform[0]['logo_width'];
$name_header = $platform[0]['name_header'] === 'undefined' || NULL ? ' ' : $platform[0]['name_header'];
$logo_header = $platform[0]['logo_header'] === 'undefined' || NULL ? ' ' : $platform[0]['logo_header'];
$parent = $platform[0]['parent'] === 'undefined' || NULL ? ' ' : $platform[0]['parent'];
$license_body = $platform[0]['license_body'] === 'undefined' || NULL ? ' ' : $platform[0]['license_body'];
$license_num = $platform[0]['license_num'] === 'undefined' || NULL ? ' ' : $platform[0]['license_num'];
$country = $platform[0]['country'] === 'undefined' || NULL ? ' ' : $platform[0]['country'];
$currency = $platform[0]['currency'] === 'undefined' || NULL ? ' ' : $platform[0]['currency'];
$number = $platform[0]['number'] === 'undefined' || NULL ? ' ' : $platform[0]['number'];
$address = $platform[0]['address'] === 'undefined' || NULL ? ' ' : $platform[0]['address'];
$interest = $platform[0]['interest'] === 'undefined' || $platform[0]['interest'] === NULL ? '2' : $platform[0]['interest'];
$management = $platform[0]['management'] === 'undefined' || $platform[0]['management'] === NULL ? '0.01' : $platform[0]['management'];
$insurance = $platform[0]['insurance'] === 'undefined' || $platform[0]['insurance'] === NULL ? '0.1' : $platform[0]['insurance'];
$penal = $platform[0]['penal'] === 'undefined' || $platform[0]['penal'] === NULL ? '1' : $platform[0]['penal'];
$investment = $platform[0]['investment'] === 'undefined' || $platform[0]['investment'] === NULL ? 'yes' : $platform[0]['investment'];
$loan = $platform[0]['loan'] === 'undefined' || $platform[0]['loan'] === NULL ? 'no' : $platform[0]['loan'];
$buysell = $platform[0]['buysell'] === 'undefined' || $platform[0]['buysell'] === NULL ? 'no' : $platform[0]['buysell'];
$p2psend = $platform[0]['p2psend'] === 'undefined' || $platform[0]['p2psend'] === NULL ? 'no' : $platform[0]['p2psend'];
$bank = $platform[0]['bank'] === 'undefined' || $platform[0]['bank'] === NULL ? 'yes' : $platform[0]['bank'];
$coinpayments = $platform[0]['coinpayments'] === 'undefined' || $platform[0]['coinpayments'] === NULL ? 'no' : $platform[0]['coinpayments'];
$flutterwave = $platform[0]['flutterwave'] === 'undefined' || $platform[0]['flutterwave'] === NULL ? 'no' : $platform[0]['flutterwave'];
$coingate = $platform[0]['coingate'] === 'undefined' || $platform[0]['coingate'] === NULL ? 'no' : $platform[0]['coingate'];
$plans = $platform[0]['plans'];
$planint = $platform[0]['plan_interval'];
$planinv = $platform[0]['plan_span'];
$fee = $platform[0]['fee'];
$btc = $platform[0]['btc'];
$eth = $platform[0]['eth'];
$bnb = $platform[0]['bnb'];
$usdt = $platform[0]['usdt'];
$ref = $platform[0]['referral'];
$refinstance = $platform[0]['refinstance'];
$dep = $platform[0]['dep'];
$withd = $platform[0]['withd'];
$inv = $platform[0]['inv'];
$lchat = $platform[0]['l_chat'];
$start_pos = $platform[0]['start_pos'];
$id = 1;

      
       // UPDATE STATEMENT
  $sql = "UPDATE platform SET name=?, domain_url=?, logo=?, icon=?, logo_width=?, name_header=?, logo_header=?, parent=?, license_body=?, license_num=?, country=?, email=?, lang=?, currency=?, number=?, address=?, plans=?, plan_interval=?, plan_span=?, fee=?, btc=?, eth=?, usdt=?, bnb=?, referral=?, refinstance=?, dep=?, withd=?, inv=?, l_chat=?, start_pos=?, interest=?, management=?, insurance=?, penal=?, investment=?, loan=?, buysell=?, p2psend=?, bank=?, coinpayments=?, flutterwave=?, coingate=?  WHERE id=?";
  $stmt = mysqli_stmt_init($dbconnected);

  if($stmt = mysqli_prepare($dbconnected, $sql)){

    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssssssssssssssssssssssi", $name, $url, $logo, $icon, $logo_width, $name_header, $logo_header, $parent, $license_body, $license_num, $country, $email, $lang, $currency, $number, $address, $plans, $planint, $planinv, $fee, $btc, $eth, $usdt, $bnb, $ref, $refinstance, $dep, $withd, $inv, $lchat, $start_pos, $interest, $management, $insurance, $penal, $investment, $loan, $buysell, $p2psend, $bank, $coinpayments, $flutterwave, $coingate, $id);

    // Attempt to execute the prepared statement    
      if(mysqli_stmt_execute($stmt)){


      echo 'platform updated';
          //exit();

        $smtp = $backup_data[0]['smtp'];
        $username = $smtp[0]['username'];
        $password = $smtp[0]['password'];
        $host = $smtp[0]['host'];
        $security = $smtp[0]['security'];
        $port = $smtp[0]['port'];
        $adminemail = $smtp[0]['adminemail'];
        $name = $smtp[0]['name'];
        $id = 1;


          // UPDATE STATEMENT
  $sql = "UPDATE smtp SET username=?, password=?, host=?, security=?, port=?, adminemail=?, name=?  WHERE id=?";
  $stmt = mysqli_stmt_init($dbconnected);

  if($stmt = mysqli_prepare($dbconnected, $sql)){

    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sssssssi", $username, $password, $host, $security, $port, $adminemail, $name, $id);

    // Attempt to execute the prepared statement   
      if(mysqli_stmt_execute($stmt)){


      echo 'smtp updated';
          //         exit();
              


          $wallet_address = $backup_data[0]['wallet_address'];
          $bitcoin = $wallet_address[0]['bitcoin'];
          $ethereum = $wallet_address[0]['ethereum'];
          $bitcoin_cash = $wallet_address[0]['bitcoin_cash'];
          $litecoin = $wallet_address[0]['litecoin'];
          $id = 1;

          // UPDATE STATEMENT
          $sql = "UPDATE wallet_address SET bitcoin=?, ethereum=?, bitcoin_cash=?, litecoin=?  WHERE id=?";
        $stmt = mysqli_stmt_init($dbconnected);

        if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ssssi", $bitcoin, $ethereum, $bitcoin_cash, $litecoin, $id);

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


        echo 'wallet_address updated';
        //         exit();


        $encrypt = $backup_data[0]['encrypt'];
        $userid = $encrypt[0]['userid'];
        $new = $encrypt[0]['new'];
        $ann = $encrypt[0]['ann'];
        $bck = $encrypt[0]['bck'];
        $bcktime = $encrypt[0]['bcktime'];
        $protect = $encrypt[0]['protect'];
        $thms = $encrypt[0]['thms'];
        $prctcount = $encrypt[0]['prctcount'];
        $auto = $encrypt[0]['auto'];
        $id = 1;

        // UPDATE STATEMENT
        $sql = "UPDATE encrypt SET userid=?, new=?, ann=?, bck=?, bcktime=?, protect=?, thms=?, prctcount=?, auto=?  WHERE id=?";
      $stmt = mysqli_stmt_init($dbconnected);

      if($stmt = mysqli_prepare($dbconnected, $sql)){

    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sssssssssi", $userid, $new, $ann, $bck, $bcktime, $protect, $thms, $prctcount, $auto, $id);

    // Attempt to execute the prepared statement   
      if(mysqli_stmt_execute($stmt)){


      echo 'encrypt updated';
      //         exit();


      $theme = $backup_data[0]['theme'];
      $name = $theme[0]['name'];
      $img = $theme[0]['img'];
      $data = $theme[0]['data'];
      $script = $theme[0]['script'];
      $id = 1;

      // UPDATE STATEMENT
      $sql = "UPDATE theme SET name=?, img=?, data=?, script=?  WHERE id=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

  // Bind variables to the prepared statement as parameters
  mysqli_stmt_bind_param($stmt, "ssssi", $name, $img, $data, $script, $id);

  // Attempt to execute the prepared statement   
    if(mysqli_stmt_execute($stmt)){


    echo 'theme updated';
    //         exit();


    $admin = $backup_data[0]['admin'];
    $name = $admin[0]['name'];
    $email = $admin[0]['email'];
    $password = $admin[0]['password'];
    $id = 1;

    // UPDATE STATEMENT
    $sql = "UPDATE admin SET name=?, email=?, password=?  WHERE id=?";
  $stmt = mysqli_stmt_init($dbconnected);

  if($stmt = mysqli_prepare($dbconnected, $sql)){

// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "sssi", $name, $email, $password, $id);

// Attempt to execute the prepared statement   
  if(mysqli_stmt_execute($stmt)){


  echo 'admin updated';
  //         exit();


  } else{
  echo 'error1';
  }

//Close statement
    mysqli_stmt_close($stmt);
  } else {
    echo 'error2';
  }




    } else{
    echo 'error1';
    }


    } else {
      echo 'error2';
    }




      } else{
      echo 'error1';
      }


      } else {
        echo 'error2';
      }




        } else{
        echo 'error1';
        }


        } else {
          echo 'error2';
        }



      } else{
      echo 'error1';
      }

//Close statement
    //  mysqli_stmt_close($stmt);
  } else {
    echo 'error2';
  }





      } else{
      echo 'error1';
      }

//Close statement
    //  mysqli_stmt_close($stmt);
  } else {
    echo 'error2';
  }

  echo '||';


      $image = file_get_contents("data/raw/reset.svg");
      $location = "../logo/upload/logo.svg";
      file_put_contents($location, $image);

include '../theme/default.php';
echo 'complete';





         




















































































