<?php

    $db_server = "localhost";
    $db_user = "HR";
    $db_pass = "";
    //name of the database will be the db name;
    $db_name = "online_job_portal";

   $conn =  mysqli_connect($db_server, $db_user, $db_pass, $db_name);
   if (!$conn) {
     die("Connection Failed! : ".mysqli_connect_error());
   }

?>
