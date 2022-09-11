<?php
include("connection.php");
if (isset($_POST['save'])) {

  
  $user_email  =  $_POST['email'];
  $user_phone  =  $_POST['phone'];
  $user_address  =  $_POST['Address'];
  $user_city =  $_POST['City'];
  
  $check_email_query = "SELECT * FROM `job_provider` where EMAIL='$user_email'";
  $run_query1 =  mysqli_query($conn, $check_email_query);
  if (mysqli_num_rows($run_query1) == 0) {
    echo "<script>alert('Your entered email is not correct, please enter the correct one and try again!')</script>";
    echo "<script>window.open('./employerprofile.php','_self')</script>";
    exit();
  }
  
  $update_user = "UPDATE `job_provider`
  SET PHN_NO = '$user_phone', ADDRESS = '$user_address', CITY = '$user_city' 
  WHERE EMAIL = '$user_email'";

   if(mysqli_query($conn, $update_user)){
     //PAGE AFTER DATA INSERTION IS COMPLETE (PROFILE PAGE)
  
    echo "<script>window.open('./employerprofileview.php','_self')</script>";
    exit();
  }
  else
     echo "<script>window.open('./employerprofile.php','_self')</script>";
   }

else {
  echo "<script>window.open('./employerprofile.php','_self')</script>";
}

?>
