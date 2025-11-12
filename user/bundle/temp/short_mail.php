<?php  
  
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            $myPersonalEmail = "";
            $subject = '';
            $meta = '';
            $msg = '';
            $admin_subject = '';
            $admin_msg = '';
            $type = '';
     

            require '../auth/src/Exception.php';
            require '../auth/src/PHPMailer.php';
            require '../auth/src/SMTP.php';

    
   function send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected) {
       

        $id = 1;
          // Prepare a select statement
          $sql = "SELECT * FROM smtp WHERE id = ?";
          if($stmt = mysqli_prepare($dbconnected, $sql)){
              // Bind variables to the prepared statement as parameters
              mysqli_stmt_bind_param($stmt, "i", $id);
              
              // Set parameters
              $param_id = $id;
              
              // Attempt to execute the prepared statement
              if(mysqli_stmt_execute($stmt)){
                  $result = mysqli_stmt_get_result($stmt);
        
                  if(mysqli_num_rows($result) == 1){
        
                
        
        
                      /* Fetch result row as an associative array. Since the result set
                      contains only one row, we don't need to use while loop */
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                      
                      // Retrieve individual field value
                      $username = $row['username'];
                      $password = $row['password'];
                      $host = $row['host'];
                      $auth = $row['auth'];
                      $security = $row['security'];
                      $port = $row['port'];
                      $adminemail = $row['adminemail'];
                      $name = $row['name'];
                    
                
                  } else{
                    //   echo 'bad url';
                      // URL doesn't contain valid id. Redirect to error page
                     
                      exit();
                  }
                  
              } else{
                //   echo "Oops! Something went wrong. Please try again later, possibly your query .";
              }
          } else {
            //   echo 'bad';
          }



          //PLATFORM INFO
          // Attempt select query execution
$sql = "SELECT * FROM platform";
if($result = mysqli_query($dbconnected, $sql)){
  $rowCount = mysqli_num_rows($result);
  if($rowCount == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
    // Retrieve individual field value  

    // $id = $row["id"];
    $platform_name = $row["name"];
    $logo = $row["logo"];
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


  } else{
    echo "platform doest exit";
  }
 
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
}

               
               
       
       
       
       $myAwardSpaceEmail = $username;
        $myAwardSpaceEmailPassword = $password;
        $mail = new PHPMailer(true);

        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = $host;
        $mail->SMTPAuth = $auth;
        $mail->Username = $myAwardSpaceEmail;
        $mail->Password = $myAwardSpaceEmailPassword;
        $mail->SMTPSecure = $security;
        $mail->Port = $port;

        $mail->setFrom($myAwardSpaceEmail, strip_tags($platform_name));

        if(is_string($myPersonalEmail)) {
            $mail->addAddress($myPersonalEmail);
        } elseif(is_array($myPersonalEmail)) {
            $mail->addAddress($adminemail);
            foreach($myPersonalEmail as $single_mail) {
                $mail->addBCC($single_mail);
            }
        }

        $mail->addReplyTo($myAwardSpaceEmail, strip_tags($platform_name));

        $mail->isHTML(true);    
        $mail->Subject = $subject;
        $mail->Body = 
        '
        <!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en"><head><title>Elevate your trading experience with Space</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]--><!--[if !mso]><!--><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700;900&amp;display=swap" rel="stylesheet" type="text/css"><!--<![endif]--><style>
*{box-sizing:border-box}body{margin:0;padding:0}a[x-apple-data-detectors]{color:inherit!important;text-decoration:inherit!important}#MessageViewBody a{color:inherit;text-decoration:none}p{line-height:inherit}.desktop_hide,.desktop_hide table{mso-hide:all;display:none;max-height:0;overflow:hidden}.image_block img+div{display:none} @media (max-width:620px){.mobile_hide{display:none}.row-content{width:100%!important}.stack .column{width:100%;display:block}.mobile_hide{min-height:0;max-height:0;max-width:0;overflow:hidden;font-size:0}.desktop_hide,.desktop_hide table{display:table!important;max-height:none!important}.row-4 .column-1 .block-1.spacer_block{height:28px!important}.row-4 .column-1 .block-2.heading_block h1{font-size:28px!important}.row-4 .column-1 .block-3.spacer_block,.row-4 .column-1 .block-5.spacer_block{height:16px!important}.row-11 .column-1 .block-2.heading_block h2,.row-5 .column-1 .block-1.heading_block h2,.row-7 .column-1 .block-2.heading_block h2{font-size:24px!important}.row-11 .column-1 .block-1.spacer_block,.row-12 .column-2 .block-1.spacer_block,.row-13 .column-1 .block-1.spacer_block,.row-14 .column-1 .block-4.spacer_block,.row-7 .column-1 .block-1.spacer_block{height:24px!important}.row-10 .column-1,.row-11 .column-1,.row-12 .column-2,.row-14 .column-1,.row-4 .column-1,.row-7 .column-1,.row-8 .column-1,.row-9 .column-1{padding:0 16px!important}.row-5 .column-1{padding:24px 16px 20px!important}.row-6 .column-1{padding:0 0 24px!important}.row-12 .column-1{padding:0 16px 20px!important}.row-15 .column-1{padding:0!important}}
</style></head>
<div style="display: none;">'.$meta.'</div>
<body style="background-color:#fff;margin:0;padding:0;-webkit-text-size-adjust:none;text-size-adjust:none"><img width="1" height="1" alt="" src="https://stats.octaglobal.net/ofx/e/CgxmNlnU3_LK2vzvW-oSIGLB209PpGkpFhMkB_oHpWiJSmDZCOL7N8RDzHzT25HrMRCS65umjtlBagxjPDuRjyNSuK0kDRXSARUKD2NfbGFuZ3VhZ2VfY29kZRICZW4.Yx2o2YE4lCKjAA/open"><table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;background-color:#fff"><tbody><tr><td><table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tbody><tr><td><table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;color:#000;width:600px;margin:0 auto" width="600"><tbody><tr><td class="column column-1" width="100%" style="mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-top:24px;vertical-align:top;border-top:0;border-right:0;border-bottom:0;border-left:0"><table class="html_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad"><div style="font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;text-align:center" align="center"><table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;background-size:auto;background-image:url(https://kivys.stripocdn.email/content/guids/CABINET_c052d61d3f8cac8d77f08c7578ab0c626dc7d5fc8531c8f1a5cf1f8ab7446cfa/images/gray_footer.png);background-repeat:no-repeat;background-size:cover;border-radius:24px;color:#000;width:600px" width="600"><tbody><tr><td class="column" width="100%" style="mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:16px;padding-bottom:16px;border-top:0;border-right:0;border-bottom:0;border-left:0">
                <table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tbody><tr><td class="pad" style="width:100%;padding-right:0;padding-left:0">
                                <div class="alignment" align="center" style="line-height:10px"><a  style="outline:none; text-decoration: none;" tabindex="-1"><p style="display: inline; font-size: 32px; font-weight: bold; text-decoration: none; color: #2F7AEA;">'.$platform_name.'</p></a></div>
                            </td>
                        </tr></tbody></table></td>
        </tr></tbody></table></div></td></tr></table></td></tr></tbody></table></td></tr></tbody></table><table class="row row-2" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tbody><tr><td><table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;border-radius:0;color:#000;width:600px;margin:0 auto" width="600"><tbody><tr><td class="column column-1" width="100%" style="mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;border-top:0;border-right:0;border-bottom:0;border-left:0"><div class="spacer_block block-1" style="height:10px;line-height:10px;font-size:1px">&#8202;</div></td></tr></tbody></table></td></tr></tbody></table><table class="row row-3" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tbody><tr><td><table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;border-radius:0;color:#000;width:600px;margin:0 auto" width="600"><tbody><tr><td class="column column-1" width="100%" style="mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;border-top:0;border-right:0;border-bottom:0;border-left:0"><table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad" style="width:100%"></div></td></tr></table></td></tr></tbody></table></td></tr></tbody></table><table class="row row-4" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tbody><tr><td><table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;border-radius:0;color:#000;width:600px;margin:0 auto" width="600"><tbody><tr><td class="column column-1" width="100%" style="mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;border-top:0;border-right:0;border-bottom:0;border-left:0"><div class="spacer_block block-1" style="height:32px;line-height:32px;font-size:1px">&#8202;</div><table class="heading_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad" style="text-align:center;width:100%"><h1 style="margin:0;color:#0b0b16;direction:ltr;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;font-size:32px;font-weight:700;letter-spacing:normal;line-height:120%;text-align:left;margin-top:0;margin-bottom:0;mso-line-height-alt:38.4px">
<span class="tinyMce-placeholder"><strong data-renderer-mark="true">'.$subject.'</strong></span></h1>
</td></tr></table><div class="spacer_block block-3" style="height:16px;line-height:16px;font-size:1px">&#8202;</div><table class="paragraph_block block-4" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;word-break:break-word"><tr><td class="pad"><div style="color:#0b0b16;direction:ltr;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;font-size:16px;font-weight:400;letter-spacing:0;line-height:150%;text-align:left;mso-line-height-alt:24px"><p style="margin:0">'.$msg.'</p><br><p>Cheers, '.strip_tags($platform_name).' team.</p></div></td></tr></table><div class="spacer_block block-5" style="height:24px;line-height:24px;font-size:1px">&#8202;</div></td></tr></tbody></table></td></tr></tbody></table><table class="row row-5" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tbody><tr><td></td></tr></tbody></table></div><br></body>
<style>
    * {
        box-sizing: border-box
    }

    body {
        margin: 0;
        padding: 0
    }

    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: inherit !important
    }

    #MessageViewBody a {
        color: inherit;
        text-decoration: none
    }

    p {
        line-height: inherit
    }

    .desktop_hide, .desktop_hide table {
        mso-hide: all;
        display: none;
        max-height: 0;
        overflow: hidden
    }

    @media (max-width: 620px) {
        .social_block.desktop_hide .social-table {
            display: inline-block !important
        }

        .row-content {
            width: 100% !important
        }

        .mobile_hide {
            display: none
        }

        .stack .column {
            width: 100%;
            display: block
        }

        .mobile_hide {
            min-height: 0;
            max-height: 0;
            max-width: 0;
            overflow: hidden;
            font-size: 0
        }

        .desktop_hide, .desktop_hide table {
            display: table !important;
            max-height: none !important
        }

        .reverse {
            display: table;
            width: 100%
        }

        .reverse .column.first {
            display: table-footer-group !important
        }

        .reverse .column.last {
            display: table-header-group !important
        }

        .row-1 td.column.first > table, .row-1 td.column.last > table {
            padding-left: 24px;
            padding-right: 24px
        }

        .row-1 td.column.first .border, .row-1 td.column.last .border {
            border-top: 0;
            border-right: 0;
            border-bottom: 0;
            border-left: 0
        }

        .row-1 .column-1 .block-6.paragraph_block td.pad {
            padding: 16px 0 0 !important
        }

        .row-1 .column-1 .block-5.paragraph_block td.pad > div, .row-1 .column-1 .block-8.paragraph_block td.pad > div {
            font-size: 16px !important
        }

        .row-1 .column-1 .block-2.paragraph_block td.pad, .row-1 .column-2 .block-2.heading_block td.pad, .row-1 .column-2 .block-5.paragraph_block td.pad {
            padding: 0 !important
        }

        .row-1 .column-1 .block-8.paragraph_block td.pad {
            padding: 32px 0 0 !important
        }

        .row-1 .column-1 .block-2.paragraph_block td.pad > div {
            font-size: 12px !important
        }

        .row-1 .column-2 .block-5.paragraph_block td.pad > div {
            font-size: 1px !important
        }

        .row-1 .column-1 {
            padding: 24px 16px 0 !important
        }

        .row-1 .column-2 {
            padding: 0 16px !important
        }

    }
</style>
<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;background-image:url(https://kivys.stripocdn.email/content/guids/CABINET_c052d61d3f8cac8d77f08c7578ab0c626dc7d5fc8531c8f1a5cf1f8ab7446cfa/images/gray_footer.png);background-repeat:no-repeat;background-size:cover;border-radius:24px;color:#000;width:600px" width="600"><tbody><tr><td class="column column-1" width="41.666666666666664%" style="mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:24px;padding-right:24px;vertical-align:top;border-top:0;border-right:0;border-bottom:0;border-left:0">
            <table class="heading_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad" style="padding-bottom:5px;text-align:center;width:100%;padding-top:24px">
                        <h1 style="color:#848b9d;margin:0;direction:ltr;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;font-size:16px;font-weight:700;letter-spacing:normal;line-height:120%;text-align:left;margin-top:0;margin-bottom:0">
                            <span class="tinyMce-placeholder">Grow with our platform</span>
                        </h1></td>
                </tr></table><table class="image_block block-3in mobile_hide" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad" style="padding-top:8px;width:100%;padding-right:0;padding-left:0">
                        <div class="alignment" align="right" style="line-height:10px"><a style="outline:none" tabindex="-1"><img src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/ae52a6e2-ca6a-4d8e-8944-532f952aae85/becc2140-3d78-11ed-a765-9677b225863f/Store%20Badge_GooglePlay.png" style="display:block;height:auto;border:0;width:135px;max-width:100%;float:left;" width="135"></a></div>
                    </td>
                </tr></table><table class="image_block block-4 mobile_hide" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad" style="padding-top:8px;width:100%;padding-right:0;padding-left:0">
                        <div class="alignment" align="right" style="line-height:10px;height:48px;"><a style="outline:none" tabindex="-1"><img src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/ae52a6e2-ca6a-4d8e-8944-532f952aae85/becc2140-3d78-11ed-a765-9677b225863f/Store%20Badge_Apple.png" style="display:block;height:auto;border:0;width:135px;max-width:100%;float:left;" width="135"></a></div>
                    </td>
                </tr></table><table class="image_block block-4 desktop_hide" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad" style="padding-top:8px;width:100%;padding-right:0;padding-left:0;width:162px;padding-right: 12px;">
                        <div class="alignment" align="right" style="line-height:10px;width:162px;"><a  style="outline:none" tabindex="-1"><img src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/ae52a6e2-ca6a-4d8e-8944-532f952aae85/becc2140-3d78-11ed-a765-9677b225863f/Store%20Badge_GooglePlay.png" style="display:block;height:auto;border:0;height:48px;max-width:100%;float:left;width:auto;" width="48"></a></div>
                    </td>
                    
                    <td class="pad" style="padding-top:8px;width:100%;padding-right:0;padding-left:0">
                        <div class="alignment" align="right" style="line-height:10px;height:48px;width:144px;"><a  style="outline:none" tabindex="-1"><img src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/ae52a6e2-ca6a-4d8e-8944-532f952aae85/becc2140-3d78-11ed-a765-9677b225863f/Store%20Badge_Apple.png" style="display:block;height:auto;border:0;height:48px;max-width:100%;float:left;width:auto;" height="48"></a></div>
                    </td>
                </tr></table><table class="paragraph_block block-5 mobile_hide" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;word-break:break-word"><tr><td class="pad" style="padding-top:57px">
                        <div style="color:#848b9d;direction:ltr;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;font-size:12px;font-weight:400;letter-spacing:0;line-height:150%;text-align:left;mso-line-height-alt:18px">
                            </div>
                    </td>
                </tr></table><div class="spacer_block mobile_hide" style="height:24px;line-height:24px;font-size:1px">&#8202;
            </div>
        </td>
        <td class="column column-2" width="58.333333333333336%" style="mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;padding-left:24px;padding-right:24px;vertical-align:top;border-top:0;border-right:0;border-bottom:0;border-left:0">
            <table class="paragraph_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;word-break:break-word"><tr><td class="pad" style="padding-top:24px">
                        <div style="color:#848b9d;direction:ltr;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;font-size:12px;font-weight:400;letter-spacing:0;line-height:180%;text-align:left;mso-line-height-alt:21.6px">
                                
                                

                                
                        </div>
                    </td>
                </tr></table><table class="paragraph_block block-3" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;word-break:break-word"><tr><td class="pad" style="padding-top:8px">
                        <div style="color:#848b9d;direction:ltr;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;font-size:12px;font-weight:400;letter-spacing:0;line-height:180%;text-align:left;mso-line-height-alt:21.6px">
                        
                       

                        
                        </div>
                    </td>
                </tr></table><table class="paragraph_block block-4 mobile_hide" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;word-break:break-word"><tr><td class="pad" style="padding-top:14px">
                        <div style="color:#848b9d;direction:ltr;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;font-size:12px;font-weight:400;letter-spacing:0;line-height:120%;text-align:left;mso-line-height-alt:14.399999999999999px">
                        
                        <p style="margin:0">&#169; 2024 '.strip_tags($platform_name).'</p>
                        
                        </div>
                    </td>
                </tr></table><table class="paragraph_block block-5" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;word-break:break-word"><tr><td class="pad" style="padding-top:16px">
                        <div style="color:#848b9d;direction:ltr;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;font-size:12px;font-weight:400;letter-spacing:0;line-height:120%;text-align:left;mso-line-height-alt:14.399999999999999px">
                            </div>
                    </td>
                </tr></table><table class="paragraph_block block-6 desktop_hide" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;mso-hide:all;display:none;max-height:0;overflow:hidden;word-break:break-word"><tr><td class="pad" style="padding-top:24px">
                        <div style="color:#848b9d;direction:ltr;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;font-size:12px;font-weight:400;letter-spacing:0;line-height:120%;text-align:left;mso-line-height-alt:14.399999999999999px">
                            
                  <p style="margin:0">&#169; 2024 '.strip_tags($platform_name).'</p>
                  
                            </div>
                    </td>
                </tr></table><table class="social_block block-7" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0"><tr><td class="pad" style="padding-top:24px;text-align:left;padding-right:0;padding-left:0">
                        <div class="alignment" style="text-align:left">
                           </div>
                    </td>
                </tr></table><table class="paragraph_block block-8 desktop_hide" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0;mso-table-rspace:0;mso-hide:all;display:none;max-height:0;overflow:hidden;word-break:break-word"><tr><td class="pad" style="padding-top:32px">
                        <div style="color:#848b9d;direction:ltr;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;font-size:12px;font-weight:400;letter-spacing:0;line-height:150%;text-align:left;mso-line-height-alt:18px">
                            <p style="margin:0">
                                <a  style="text-decoration: none; color: #848b9d;" rel="noopener">Unsubscribe</a></p></div>
                    </td>
                </tr></table><div class="spacer_block" style="height:24px;line-height:24px;font-size:1px">
                &#8202;
            </div>
        </td>
    </tr></tbody></table></div></td></tr></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table><!-- End --></body></html>
        ';

        try {
            $mail->send();
            // echo 'Your message was sent successfully!';
        } catch (Exception $e) {
            // echo "Your message could not be sent! PHPMailer Error: {$mail->ErrorInfo}";
        }



        if($type === 'admin') {
            $mail = new PHPMailer(true);

            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = $host;
            $mail->SMTPAuth = $auth;
            $mail->Username = $myAwardSpaceEmail;
            $mail->Password = $myAwardSpaceEmailPassword;
            $mail->SMTPSecure = $security;
            $mail->Port = $port;

            $mail->setFrom($myAwardSpaceEmail, strip_tags($platform_name).' Admin');
            $mail->addAddress($adminemail);
            $mail->addReplyTo($myAwardSpaceEmail, strip_tags($platform_name).' Admin');

            $mail->isHTML(true);    
            $mail->Subject = $admin_subject;
            $mail->Body = $admin_msg;

            try {
                $mail->send();
                // echo 'Your message was sent successfully!';
            } catch (Exception $e) {
                // echo "Your message could not be sent! PHPMailer Error: {$mail->ErrorInfo}";
            }
        }
   }
   
//   sendmail($myPersonalEmail, $subject);
   
   

    
    

    
    
?>
