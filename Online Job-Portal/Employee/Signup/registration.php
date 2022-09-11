<?php
include("connection.php");
if (isset($_POST['Register'])) {

  $user_fname  =  $_POST['first_name'];
  $user_lname  =  $_POST['last_name'];
  $user_email =  $_POST['email'];
  $user_pass  = $_POST['password'];
  $check_email_query = "SELECT * FROM `job_seeker` where EMAIL='$user_email'";
  $run_query =  mysqli_query($conn, $check_email_query);
  if (mysqli_num_rows($run_query)>0) {
    echo "<script>alert('Email $user_email is already registered, please try with another one!')</script>";
    echo "<script>window.open('./signup.php','_self')</script>";
    exit();
  }


  $insert_user = "INSERT INTO `job_seeker` (`JOB_SEEKER_ID`, `FIRST_NAME`, `LAST_NAME`, `PASSWORD`, `PHN_NO`, `EMAIL`, `REGISTRATION_DATE`, `QUALIFICATION`, `EXPERIENCE`, `CITY`, `ADDRESS`, `JOB_NAME`, `MINIMUM_SALARY`, `CONFIRMATION_ID`, `FEEDBACK_ID`) VALUES ('', '$user_fname', '$user_lname', '$user_pass', '', '$user_email', current_timestamp(), NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";

   if(mysqli_query($conn, $insert_user)){
     //PAGE AFTER DATA INSERTION IS COMPLETE (PROFILE PAGE)
     echo "<script>window.open('http://localhost/online%20Job-portal/EmployeeProfile/employeeprofile.php','_self')</script>";
   }

}else {
  echo "<script>window.open('./signup.php','_self')</script>";
}

?>
