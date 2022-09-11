<?php
include("connection.php");
if (isset($_POST['Signin'])) {

  $user_email =  $_POST['email'];
  $user_pass  = $_POST['password'];

  $check_user = "SELECT * FROM `job_seeker` where EMAIL='$user_email'AND PASSWORD ='$user_pass'";
  $query = mysqli_query($conn, $check_user);
  if(mysqli_num_rows($query)>0){
    session_start();
    $_SESSION['email'] = $user_email;

    echo "<script>window.open('http://localhost/online%20Job-portal/EmployerProfile/employerprofile.php','_self')</script>";

  }
  else{
    echo "<script>alert('Email or password is incorrect!')</script>";
    echo "<script>window.open('../Login/login.php','_self')</script>";
    exit();
  }

}else {
  echo "<script>window.open('http://localhost/online%20Job-portal/EmployeeProfile/employeeprofile.php','_self')</script>";
}


?>
