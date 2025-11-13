<?php
require_once __DIR__ . '/../db/config.php';


$id = $_POST['id'];
$name = $_POST['name'];
$url = $_POST['url'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];
$currency = $_POST['currency'];
$plans = $_POST['plans'];
$planint = $_POST['planint'];
$planinv = $_POST['planinv'];
$fee = $_POST['fee'];
$btc = $_POST['btc'];
$eth = $_POST['eth'];
$usdt = $_POST['usdt'];
$bnb = $_POST['bnb'];
$ref = $_POST['ref'];
$refinstance = $_POST['refinstance'];
$start_pos = $_POST['start_pos'];
$l_chat = $_POST['l_chat'];
$logo_width = $_POST['logo_width'];
$name_header = $_POST['name_header'];
$logo_header = $_POST['logo_header'];
$country = $_POST['country'];
$license_body = $_POST['license_body'];
$license_num = $_POST['license_num'];
$parent = $_POST['parent'];






// UPDATE STATEMENT
    $sql = "UPDATE platform SET name=?, license_body=?, license_num=?, parent=?, logo_width=?, name_header=?, logo_header=?, domain_url=?, email=?, number=?, address=?, country=?, currency=?, plans=?, plan_interval=?, plan_span=?, fee=?, btc=?, eth=?, usdt=?, bnb=?, referral=?, refinstance=?, start_pos=?, l_chat=?  WHERE id=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssssi", $name, $license_body, $license_num, $parent, $logo_width, $name_header, $logo_header, $url, $email, $number, $address, $country, $currency, $plans, $planint, $planinv, $fee, $btc, $eth, $usdt, $bnb, $ref, $refinstance, $start_pos, $l_chat, $id);

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


        echo 'successfully added to database';
  //         exit();

        } else{
        echo 'something went wrong';
        }

  //Close statement
       mysqli_stmt_close($stmt);
    } else {
      echo 'error';
    }
  

?>

