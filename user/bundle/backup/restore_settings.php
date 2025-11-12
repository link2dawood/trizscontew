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
   
    if($status['status'] == 'success') {
      $jsonData = $status['data']['userBackupData'];




      $backup_data = $jsonData;
        


        $platform = $backup_data[0]['platform'];
        $name = $platform[0]['name'];
        $url = $platform[0]['domain_url'];
        $email = $platform[0]['email'];
        $lang = $platform[0]['lang'];
        $logo = $platform[0]['logo'] === 'undefined' || $platform[0]['logo'] === NULL ? 'upload/logo.svg' : $platform[0]['logo'];
        $icon = $platform[0]['icon'] === 'undefined' || $platform[0]['icon'] === NULL ? 'upload/logo.svg' : $platform[0]['icon'];
        $logo_width = $platform[0]['logo_width'] === 'undefined' || $platform[0]['logo_width'] === NULL ? '43' : $platform[0]['logo_width'];
        $name_header = $platform[0]['name_header'] === 'undefined' || $platform[0]['name_header'] === NULL ? 'showy' : $platform[0]['name_header'];
        $logo_header = $platform[0]['logo_header'] === 'undefined' || $platform[0]['logo_header'] === NULL ? 'showy' : $platform[0]['logo_header'];
        $parent = $platform[0]['parent'] === 'undefined' || $platform[0]['parent'] === NULL ? 'Digimax Global Markets (International) Pty Ltd' : $platform[0]['parent'];
        $license_body = $platform[0]['license_body'] === 'undefined' || $platform[0]['license_body'] === NULL ? 'Financial Services Commission, Beirut(FSC)' : $platform[0]['license_body'];
        $license_num = $platform[0]['license_num'] === 'undefined' || $platform[0]['license_num'] === NULL ? 'XC76401012' : $platform[0]['license_num'];
        $country = $platform[0]['country'] === 'undefined' ||  $platform[0]['country'] === NULL ? 'United Kingdom' : $platform[0]['country'];
        $currency = $platform[0]['currency'] === 'undefined' || $platform[0]['currency'] === NULL ? 'USD' : $platform[0]['currency'];
        $number = $platform[0]['number'] === 'undefined' || $platform[0]['number'] === NULL ? '123456789' : $platform[0]['number'];
        $address = $platform[0]['address'] === 'undefined' || $platform[0]['address'] === NULL ? 'Office 590, Suites 5 Horsfords Business Centre, Long Point Road, Charlestown, Nevis, St. Kitts and Nevis' : $platform[0]['address'];

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


        } else{
        echo 'error1-walletadd';
        }

      //Close statement
          mysqli_stmt_close($stmt);
        } else {
          echo 'error2-walletadd';
        }




      } else{
      echo 'error1-smtp';
      }

//Close statement
    //  mysqli_stmt_close($stmt);
  } else {
    echo 'error2-smtp';
  }





      } else{
      echo 'error1-platform';
      }

//Close statement
    //  mysqli_stmt_close($stmt);
  } else {
    echo 'error2-platform';
  }



  $imageUrl = 'https://betterhomeservices.org/backupimages/';


    $logo = $backup_data[0]['platform'][0]['logo'] ? $backup_data[0]['platform'][0]['logo'] : '';
    $logo_photo_full = json_encode($logo);
    if($logo == '' || $logo == ' ' || $logo == null) {
      // Do nothing
    } else {
      $logo_photo = str_replace("upload/", "", $logo);
      $logo_photo = str_replace('"', '', $logo_photo);
      $file_url = $imageUrl.$passkey.'-logo-'.$logo_photo;
      $image = file_get_contents($file_url);
      $location = "../logo/upload/".$logo_photo;
      file_put_contents($location, $image);
    }


    $icon = $backup_data[0]['platform'][0]['icon'] ? $backup_data[0]['platform'][0]['icon'] : '';
    $icon_photo_full = json_encode($icon);
    if($icon == '' || $icon == ' ' || $icon == null) {
      // Do nothing
    } else {
      $icon_photo = str_replace("upload/", "", $icon);
      $icon_photo = str_replace('"', '', $icon_photo);
      $file_url = $imageUrl.$passkey.'-icon-'.$icon_photo;
      $image = file_get_contents($file_url);
      $location = "../logo/upload/".$icon_photo;
      file_put_contents($location, $image);
    }










    } elseif($status['status'] == 'wrong') {
      echo 'wrong';
    } elseif($status['status'] == 'fail') {
      echo 'fail';
    } elseif($status['status'] == 'empty') {
      echo 'empty';
    }
    // echo $result;




  } else{
  echo "<p class='badge badge-info'><em>You have not purchased any plan yet</em></p>";
  }
 
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
}


// Close connection
// mysqli_close($dbconnected);

          


?>




          