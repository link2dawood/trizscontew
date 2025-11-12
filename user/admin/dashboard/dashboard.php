<?php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

 //include 'config.php';
foreach (glob('../bundle/db/config.php') as $config){include_once $config;}

$sql ="SELECT COUNT(amount) as num_deposit, sum(amount) as total_deposit FROM deposit";

      if($result = mysqli_query($dbconnected, $sql)){
          $rowCount = mysqli_num_rows($result);
          if($rowCount > 0){
            //echo "Totat";
             while($row = mysqli_fetch_array($result)){
              $num_deposit = $row['num_deposit'];
              $total_deposit = $row['total_deposit']; 
              
                // return $total_deposit;
                }
              }else{
              $total_deposit = 0;
              $num_deposit = 0;
            }
            mysqli_free_result($result);
          }else{
            echo "error".mysql_error();
      }  

// function total_deposit(){
//     global $total_deposit;
//     return $total_deposit;
//  }

//  function num_deposit(){
//   global $num_deposit;
//   return $num_deposit;
//  }




    // ----START-----TOTAL INVESTMENT AND NUMBER OF INVESTMENT
 $sql ="SELECT COUNT(amount) as total_investment, sum(amount) as amount_invested FROM plan";

      if($result = mysqli_query($dbconnected, $sql)){
          $rowCount = mysqli_num_rows($result);
          if($rowCount > 0){
            //echo "Totat";
             while($row = mysqli_fetch_array($result)){
              $total_investment = $row['total_investment'];
              $amount_invested = $row['amount_invested']; 
              
                // return $total_deposit;
                }
              }else{
              $total_investment =$amount_invested= 0;
            }
            mysqli_free_result($result);
          }else{
            echo "error".mysql_error();
      }

// function total_investment(){
//     global $total_investment;
//     return $total_investment;
//  }

//  function amount_invested(){
//   global $amount_invested;
//   return $amount_invested;
//  }


    // ---- REFERER EARNINGS FUNCTIONS AND QUERY------
  $sql ="SELECT COUNT(ref_bonus) as total_earn, sum(ref_bonus) as amount_earn FROM users";

      if($result = mysqli_query($dbconnected, $sql)){
          $rowCount = mysqli_num_rows($result);
          if($rowCount > 0){
            //echo "Totat";
             while($row = mysqli_fetch_array($result)){
              $total_earn = $row['total_earn'];
              $amount_earn = $row['amount_earn']; 
              
                // return $total_deposit;
                }
              }else{
              $total_earn =$amount_earn= 0;
            }
            mysqli_free_result($result);
          }else{
            echo "error".mysql_error();
      }

// function total_earn(){
//     global $total_earn;
//     return $total_earn;
//  }

//  function amount_earn(){
//   global $amount_earn;
//   return $amount_earn;
//  }


    // SUPPORT TICKET FROM USERS
   $sql ="SELECT COUNT(status) as open_ticket, sum(id) as total_ticket FROM support";

      if($result = mysqli_query($dbconnected, $sql)){
          $rowCount = mysqli_num_rows($result);
          if($rowCount > 0){
            //echo "Totat";
             while($row = mysqli_fetch_array($result)){
              $open_ticket = $row['open_ticket'];
              //$closed_ticket = $row['closed_ticket'];
              $total_ticket = $row['total_ticket']; 
              
                // return $total_deposit;
                }
              }else{
               $open_ticket=$closed_ticket=$total_ticket=0;
            }
            mysqli_free_result($result);
          }else{
            echo "error".mysql_error();
      }
// function total_ticket(){
//   global $total_ticket;
//   return $total_ticket;
//  }

// function open_ticket(){
//     global $open_ticket;
//     return $open_ticket;
//  }

   // PENDING WITHDRAWALS
   $sql ="SELECT COUNT(id) as pending_withdrawal FROM withdrawal_request where status = 'Pending'";

   if($result = mysqli_query($dbconnected, $sql)){
       $rowCount = mysqli_num_rows($result);
       if($rowCount > 0){
         //echo "Totat";
          while($row = mysqli_fetch_array($result)){
           $pending_withdrawal = $row['pending_withdrawal'];
                        
              // return $pending_withdrawal;
             }
           }else{
            $pending_withdrawal = 0;
         }
         mysqli_free_result($result);
       }else{
         echo "error".mysql_error();
   }


 // PENDING DEPOSITS
   $sql ="SELECT COUNT(id) as pending_deposit FROM deposit where status = 'Pending'";

      if($result = mysqli_query($dbconnected, $sql)){
          $rowCount = mysqli_num_rows($result);
          if($rowCount > 0){
            //echo "Totat";
             while($row = mysqli_fetch_array($result)){
              $pending_deposit = $row['pending_deposit'];
                           
                 return $pending_deposit;
                }
              }else{
               $pending_deposit = 0;
            }
            mysqli_free_result($result);
          }else{
            echo "error".mysql_error();
      }



   


 

 // Close connection
mysqli_close($dbconnected);
?>