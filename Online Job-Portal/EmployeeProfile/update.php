<?php
include("connection.php");
if (isset($_POST['save'])) {

  $user_job  =  $_POST['prefered_job'];
  $user_salary  =  $_POST['Minimum_Salary'];
  $user_email  =  $_POST['email'];
  $user_phone  =  $_POST['phone'];
  $user_address  =  $_POST['Address'];
  $user_city =  $_POST['City'];
  $user_experience  = $_POST['experience'];
  $user_qualification  = $_POST['Qualification'];
  $check_email_query = "SELECT * FROM `job_seeker` where EMAIL='$user_email'";
  $run_query1 =  mysqli_query($conn, $check_email_query);
  if (mysqli_num_rows($run_query1) == 0) {
    echo "<script>alert('Your entered email is not correct, please enter the correct one and try again!')</script>";
    echo "<script>window.open('./employeeprofile.php','_self')</script>";
    exit();
  }
  
  $update_user = "UPDATE `job_seeker`
  SET PHN_NO = '$user_phone', ADDRESS = '$user_address', JOB_NAME = '$user_job', CITY = '$user_city', MINIMUM_SALARY = '$user_salary', EXPERIENCE = '$user_experience', QUALIFICATION = '$user_qualification'
  WHERE EMAIL = '$user_email'";

   if(mysqli_query($conn, $update_user)){
     //PAGE AFTER DATA INSERTION IS COMPLETE (PROFILE PAGE)
  $check_job_query = "SELECT * FROM `job_seeker` where EMAIL='$user_email' AND JOB_NAME = '--Select Online Jobs From Below--' OR JOB_NAME = '--Select Offline Jobs From Below--' OR MINIMUM_SALARY = '--Select Minimum Salary From Below--'";
  $run_query2 =  mysqli_query($conn, $check_job_query);
  if (mysqli_num_rows($run_query2) > 0) {
    echo "<script>alert('Please select options from below and try again!')</script>";
    echo "<script>window.open('./employeeprofile.php','_self')</script>";
    exit();
  }
  else
     echo "<script>window.open('./employeeprofileview.php','_self')</script>";
   }

}else {
  echo "<script>window.open('./employeeprofile.php','_self')</script>";
}

?>
