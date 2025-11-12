<?php
foreach (glob('bundle/db/config.php') as $config){include_once $config;}
foreach (glob('bundle/token/uniqid.php') as $token){include_once $token;}


$plan_amount_err = "";
$status = "Running";
$days = 30;


$date_created = date('Y-m-d H:m:s');

if (isset($_POST['gold'])) {
	$plan_name = "Gold Package";
	$plan_amount = trim($_POST['plan-amount']);
	$percent = "40%";
	$roi_gold = (40)/(100)*$plan_amount;

	$end_date = date('Y-m-d H:m:s', strtotime($date_created. ' + '.$days.' days'));

	
	if ($main_balance < $plan_amount) {
		$plan_amount_err = "<h4 class = 'alert alert-warning text-center'>Your total balance is not sufficient to purchase this plan</h4>";
		
	}
	if ($plan_amount<(50001)  && $plan_amount>(100000)) {
		$plan_amount_err = "<h4 class = 'alert alert-warning text-center'>Amount less or greater than fixed amount</h4>";
	}
	if (empty($plan_amount_err)) {
	$actual_balance = $main_balance-$plan_amount;
		// Prepare an insert statement
        $sql = "INSERT INTO plan (token, email, plan_name, amount, daily_percent, roi, date_created, end_date, status) VALUES (?,?, ?, ?,?,?,?,?,?)";

         $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssss", $getNumber, $email, $plan_name, $plan_amount, $percent, $roi_gold, $date_created, $end_date, $status);
           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

            	    // Prepare an update statement
			        $sql = "UPDATE users SET main_balance=? WHERE id=?";
			         
			         $stmt = mysqli_stmt_init($dbconnected);
			        if($stmt = mysqli_prepare($dbconnected, $sql)){
			            // Bind variables to the prepared statement as parameters
			            mysqli_stmt_bind_param($stmt, "si", $actual_balance, $id);
			            
			            // Attempt to execute the prepared statement
			            if(mysqli_stmt_execute($stmt)){


                // successfull. Redirect to landing page
			    // echo '<script type="text/javascript">window.onload="success();"></script>';
			     $_SESSION['status'] = "success";
			     $_SESSION['title'] = "Purchased";
                 $_SESSION['message'] = "You have successfully purchased Gold Package";
                 echo "<script>window.open('investment', '_self')</script>";

               //header("location: index.php");
                exit();
            } else{
            	$_SESSION['status'] = "error";
			    $_SESSION['title'] = "Error";
                $_SESSION['message'] = "Something went wrong. Please try again later.";
               
            }
         
        //Close statement
       mysqli_stmt_close($stmt);
        }}}


	}



}
if (isset($_POST['premium'])){

	$plan_name = "Premium Package";
	$plan_amount = trim($_POST['plan-amount']);
	$percent = "35%";
	$roi_premium = (35)/(100)*$plan_amount;

	$end_date = date('Y-m-d H:m:s', strtotime($date_created. ' + '.$days.' days'));


	if ($main_balance < $plan_amount) {
		$plan_amount_err = "<h4 class = 'alert alert-warning text-center'>Your total balance is not sufficient to purchase this plan</h4>";
	}
	if ($plan_amount<(10001)  && $plan_amount>(50000)) {
		$plan_amount_err = "<h4 class = 'alert alert-warning text-center'>Amount less or greater than fixed amount</h4>";
	}
	if (empty($plan_amount_err)) {

		//deduct plan package from main balance 
		$actual_balance = $main_balance-$plan_amount;

		// Prepare an insert statement
        $sql = "INSERT INTO plan (token, email, plan_name, amount, daily_percent, roi, date_created, end_date, status) VALUES (?,?, ?, ?,?,?,?,?,?)";

         $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssss", $getNumber, $email, $plan_name, $plan_amount, $percent, $roi_premium, $date_created, $end_date, $status);
           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

            	    // Prepare an update statement
			        $sql = "UPDATE users SET main_balance=? WHERE id=?";
			         
			         $stmt = mysqli_stmt_init($dbconnected);
			        if($stmt = mysqli_prepare($dbconnected, $sql)){
			            // Bind variables to the prepared statement as parameters
			            mysqli_stmt_bind_param($stmt, "si", $actual_balance, $id);
			            
			            // Attempt to execute the prepared statement
			            if(mysqli_stmt_execute($stmt)){

                // successfull. Redirect to landing page
                 $_SESSION['status'] = "success";
			     $_SESSION['title'] = "Purchased";
                 $_SESSION['message'] = "You have successfully purchased Premium Package";
                 echo "<script>window.open('investment', '_self')</script>";
                
               //header("location: index.php");
                exit();
            } else{
                 $_SESSION['status'] = "error";
			     $_SESSION['title'] = "Error";
                 $_SESSION['message'] = "Something went wrong. Please try again later.";
                 echo "<script>window.open('investment', '_self')</script>";
            }
         
        //Close statement
       mysqli_stmt_close($stmt);
        }
    }
}


	}


}
if (isset($_POST['basic'])){

	$plan_name = "Basic Package";
	$plan_amount = trim($_POST['plan-amount']);
	$percent = "30%";
	$roi_basic = (30)/(100)*$plan_amount;

	$end_date = date('Y-m-d H:m:s', strtotime($date_created. ' + '.$days.' days'));

	if ($main_balance < $plan_amount) {
		$plan_amount_err = "<h4 class = 'alert alert-warning text-center'>Your total balance is not sufficient to purchase this plan</h4>";
	}
	if ($plan_amount<(5001)  && $plan_amount>(10000)) {
		$plan_amount_err = "<h4 class = 'alert alert-warning text-center'>Amount less or greater than fixed amount</h4>";
	}
	if (empty($plan_amount_err)) {

		//deduct plan package from main balance 
		$actual_balance = $main_balance-$plan_amount;

		// Prepare an insert statement
        $sql = "INSERT INTO plan (token, email, plan_name, amount, daily_percent, roi, date_created, end_date, status) VALUES (?,?, ?, ?,?,?,?,?,?)";

         $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssss", $getNumber, $email, $plan_name, $plan_amount, $percent, $roi_basic, $date_created, $end_date, $status);
           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

            	    // Prepare an update statement
			        $sql = "UPDATE users SET main_balance=? WHERE id=?";
			         
			         $stmt = mysqli_stmt_init($dbconnected);
			        if($stmt = mysqli_prepare($dbconnected, $sql)){
			            // Bind variables to the prepared statement as parameters
			            mysqli_stmt_bind_param($stmt, "si", $actual_balance, $id);
			            
			            // Attempt to execute the prepared statement
			            if(mysqli_stmt_execute($stmt)){

                // successfull. Redirect to landing page
                 $_SESSION['status'] = "success";
			     $_SESSION['title'] = "Purchased";
                 $_SESSION['message'] = "You have successfully purchased Basic Package";
                 echo "<script>window.open('investment', '_self')</script>";
               //header("location: index.php");
                exit();
            } else{
                 $_SESSION['status'] = "error";
			     $_SESSION['title'] = "Error";
                 $_SESSION['message'] = "Something went wrong. Please try again later.";
                 echo "<script>window.open('investment', '_self')</script>";
            }
         
        //Close statement
       mysqli_stmt_close($stmt);
        }
    }
}


	}


}

if (isset($_POST['starter'])) {
	$plan_name = "Starter Package";
	$plan_amount = trim($_POST['plan-amount']);
	$percent = "25%";
	$roi_starter = (25)/(100)*$plan_amount;

	$end_date = date('Y-m-d H:m:s', strtotime($date_created. ' + '.$days.' days'));


	if ($main_balance < $plan_amount) {
		$plan_amount_err = "<h4 class = 'alert alert-warning text-center'>Your total balance is not sufficient to purchase this plan</h4>";
	}
	if ($plan_amount<(500)  && $plan_amount>(5000)) {
		$plan_amount_err = "<h4 class = 'alert alert-warning text-center'>Amount less or greater than fixed amount</h4>";
	}
	if (empty($plan_amount_err)) {

		//deduct plan package from main balance 
		$actual_balance = $main_balance-$plan_amount;

		// Prepare an insert statement
        $sql = "INSERT INTO plan (token, email, plan_name, amount, daily_percent, roi, date_created, end_date, status) VALUES (?,?, ?, ?,?,?,?,?,?)";

         $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssss", $getNumber, $email, $plan_name, $plan_amount, $percent, $roi_starter, $date_created, $end_date, $status);
           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

            	    // Prepare an update statement
			        $sql = "UPDATE users SET main_balance=? WHERE id=?";
			         
			         $stmt = mysqli_stmt_init($dbconnected);
			        if($stmt = mysqli_prepare($dbconnected, $sql)){
			            // Bind variables to the prepared statement as parameters
			            mysqli_stmt_bind_param($stmt, "si", $actual_balance, $id);
			            
			            // Attempt to execute the prepared statement
			            if(mysqli_stmt_execute($stmt)){

                // successfull. Redirect to landing page
                 $_SESSION['status'] = "success";
			     $_SESSION['title'] = "Purchased";
                 $_SESSION['message'] = "You have successfully purchased Starter Package";
                 echo "<script>window.open('investment', '_self')</script>";

               //header("location: index.php");
                exit();
            } else{
            	 $_SESSION['status'] = "error";
			     $_SESSION['title'] = "Error";
                 $_SESSION['message'] = "Something went wrong. Please try again later.";
                 echo "<script>window.open('investment', '_self')</script>";
               
            }
         
        //Close statement
       mysqli_stmt_close($stmt);
        }
    }
}


	}


}
// Close connection
    // mysqli_close($dbconnected);

?>